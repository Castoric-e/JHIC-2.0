<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    /**
     * Tampilkan daftar seluruh pesan masuk dari pengunjung.
     */
    public function index(Request $request)
    {
        $query = ContactMessage::query();

        // Filter status dibaca / belum dibaca
        if ($request->filled('status')) {
            if ($request->status === 'unread') {
                $query->unread();
            } elseif ($request->status === 'read') {
                $query->read();
            }
        }

        // Filter topik / subjek
        if ($request->filled('subject')) {
            $query->where('subject', $request->subject);
        }

        // Pencarian nama, nomor hp, email, atau isi pesan
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'ilike', "%{$search}%")
                    ->orWhere('phone', 'like', "%{$search}%")
                    ->orWhere('email', 'ilike', "%{$search}%")
                    ->orWhere('message', 'ilike', "%{$search}%");
            });
        }

        $messages = $query->orderBy('is_read', 'asc')
            ->orderBy('created_at', 'desc')
            ->paginate(15)
            ->withQueryString();

        $totalCount = ContactMessage::count();
        $unreadCount = ContactMessage::unread()->count();
        $readCount = ContactMessage::read()->count();

        // Kategori subjek unik untuk dropdown filter
        $subjects = ContactMessage::select('subject')
            ->distinct()
            ->pluck('subject')
            ->filter();

        return view('admin.messages.index', compact(
            'messages',
            'totalCount',
            'unreadCount',
            'readCount',
            'subjects'
        ));
    }

    /**
     * Tampilkan detail pesan dan otomatis tandai telah dibaca jika baru.
     */
    public function show(ContactMessage $message)
    {
        if (!$message->is_read) {
            $message->update(['is_read' => true]);
        }

        return view('admin.messages.show', compact('message'));
    }

    /**
     * Toggle status dibaca / belum dibaca.
     */
    public function toggle(ContactMessage $message)
    {
        $message->update([
            'is_read' => !$message->is_read,
        ]);

        $statusText = $message->is_read ? 'ditandai sudah dibaca' : 'ditandai belum dibaca';

        return back()->with('success', "Pesan dari {$message->name} berhasil {$statusText}.");
    }

    /**
     * Simpan catatan internal tindak lanjut (follow-up) admin.
     */
    public function updateNotes(Request $request, ContactMessage $message)
    {
        $request->validate([
            'admin_notes' => 'nullable|string|max:2000',
        ]);

        $message->update([
            'admin_notes' => $request->admin_notes,
        ]);

        return back()->with('success', 'Catatan tindak lanjut berhasil diperbarui.');
    }

    /**
     * Hapus pesan masuk.
     */
    public function destroy(ContactMessage $message)
    {
        $senderName = $message->name;
        $message->delete();

        return redirect()->route('admin.messages.index')
            ->with('success', "Pesan dari {$senderName} berhasil dihapus.");
    }
}
