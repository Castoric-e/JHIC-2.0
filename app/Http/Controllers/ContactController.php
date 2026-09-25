<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Tampilkan halaman kontak utama.
     */
    public function index()
    {
        return view('kontak');
    }

    /**
     * Simpan pesan / formulir konsultasi dari pengunjung.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:150',
            'phone' => 'required|string|min:8|max:30',
            'email' => 'nullable|email|max:150',
            'subject' => 'required|string|max:100',
            'message' => 'required|string|min:5|max:3000',
        ], [
            'name.required' => 'Nama lengkap wajib diisi.',
            'phone.required' => 'Nomor WhatsApp / HP wajib diisi.',
            'phone.min' => 'Nomor WhatsApp / HP minimal 8 digit.',
            'email.email' => 'Format alamat email tidak valid.',
            'subject.required' => 'Silakan pilih topik pesan.',
            'message.required' => 'Isi pesan tidak boleh kosong.',
            'message.min' => 'Isi pesan minimal 5 karakter.',
        ]);

        ContactMessage::create($validated);

        return redirect()->to(url('/kontak') . '#form-pesan')
            ->with('success', 'Alhamdulillah! Pesan Anda telah terkirim. Tim IDN Boarding School akan segera menghubungi Anda melalui WhatsApp.');
    }
}
