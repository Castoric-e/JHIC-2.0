<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CareerJob;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class CareerJobController extends Controller
{
    /**
     * Tampilkan daftar seluruh lowongan pekerjaan & magang.
     */
    public function index(Request $request)
    {
        $search = $request->query('search');
        $major = $request->query('major');
        $status = $request->query('status');

        $query = CareerJob::query();

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('company_name', 'like', "%{$search}%")
                  ->orWhere('location', 'like', "%{$search}%");
            });
        }

        if ($major && $major !== 'Semua') {
            $query->where('major', $major);
        }

        if ($status !== null && $status !== '') {
            $query->where('is_active', $status === '1');
        }

        $jobs = $query->orderBy('is_active', 'desc')
            ->orderBy('id', 'desc')
            ->paginate(12)
            ->withQueryString();

        $majors = ['RPL', 'TKJ', 'DKV'];

        return view('admin.career.index', compact('jobs', 'search', 'major', 'status', 'majors'));
    }

    /**
     * Tampilkan form penambahan lowongan kerja baru.
     */
    public function create()
    {
        return view('admin.career.create');
    }

    /**
     * Simpan lowongan kerja baru ke database.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'major' => 'required|string|in:RPL,TKJ,DKV',
            'company_name' => 'required|string|max:255',
            'salary' => 'nullable|string|max:100',
            'work_location' => 'required|string|in:Onsite,Hybrid,Remote/WFH',
            'work_type' => 'required|string|in:Full-time,Part-time,Contract,Internship,Freelance',
            'location' => 'required|string|max:255',
            'location_group' => 'required|string|in:Jabodetabek,Jawa,Kalimantan,Sumatra,Sulawesi,Papua,Other',
            'posted_time' => 'nullable|string|max:100',
            'post_time_category' => 'nullable|string|in:Hari ini,Minggu ini,Bulan ini,Tahun ini',
            'apply_url' => 'nullable|url|max:500',
            'company_logo_char' => 'nullable|string|max:2',
            'company_img' => 'nullable|image|mimes:jpeg,png,jpg,webp,avif|max:2048',
            'is_active' => 'nullable|boolean',
        ], [
            'title.required' => 'Posisi pekerjaan wajib diisi.',
            'major.required' => 'Pilih jurusan yang sesuai.',
            'company_name.required' => 'Nama perusahaan / mitra industri wajib diisi.',
            'location.required' => 'Lokasi penempatan wajib diisi.',
            'company_img.image' => 'Logo perusahaan harus berupa file gambar.',
        ]);

        $logoPath = null;
        if ($request->hasFile('company_img')) {
            $file = $request->file('company_img');
            $uploadDir = public_path('assets/uploads/partners');
            if (!File::exists($uploadDir)) {
                File::makeDirectory($uploadDir, 0755, true, true);
            }
            $fileName = time() . '_' . Str::random(6) . '.' . $file->getClientOriginalExtension();
            $file->move($uploadDir, $fileName);
            $logoPath = 'assets/uploads/partners/' . $fileName;
        }

        $logoChar = $validated['company_logo_char'] ?? strtoupper(substr($validated['company_name'], 0, 1));

        CareerJob::create([
            'title' => $validated['title'],
            'major' => $validated['major'],
            'company_name' => $validated['company_name'],
            'salary' => $validated['salary'] ?? 'Kompetitif',
            'work_location' => $validated['work_location'],
            'work_type' => $validated['work_type'],
            'location' => $validated['location'],
            'location_group' => $validated['location_group'],
            'posted_time' => $validated['posted_time'] ?? 'Baru saja',
            'post_time_category' => $validated['post_time_category'] ?? 'Hari ini',
            'apply_url' => $validated['apply_url'] ?? null,
            'company_logo_char' => $logoChar,
            'company_img' => $logoPath,
            'company_bg' => 'bg-[#0c61cf]',
            'is_active' => $request->boolean('is_active', true),
        ]);

        return redirect()->route('admin.career.index')
            ->with('success', 'Lowongan pekerjaan baru berhasil ditambahkan!');
    }

    /**
     * Tampilkan formulir edit lowongan.
     */
    public function edit(CareerJob $career)
    {
        return view('admin.career.edit', compact('career'));
    }

    /**
     * Perbarui data lowongan.
     */
    public function update(Request $request, CareerJob $career)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'major' => 'required|string|in:RPL,TKJ,DKV',
            'company_name' => 'required|string|max:255',
            'salary' => 'nullable|string|max:100',
            'work_location' => 'required|string|in:Onsite,Hybrid,Remote/WFH',
            'work_type' => 'required|string|in:Full-time,Part-time,Contract,Internship,Freelance',
            'location' => 'required|string|max:255',
            'location_group' => 'required|string|in:Jabodetabek,Jawa,Kalimantan,Sumatra,Sulawesi,Papua,Other',
            'posted_time' => 'nullable|string|max:100',
            'post_time_category' => 'nullable|string|in:Hari ini,Minggu ini,Bulan ini,Tahun ini',
            'apply_url' => 'nullable|url|max:500',
            'company_logo_char' => 'nullable|string|max:2',
            'company_img' => 'nullable|image|mimes:jpeg,png,jpg,webp,avif|max:2048',
            'is_active' => 'nullable|boolean',
        ]);

        if ($request->hasFile('company_img')) {
            $file = $request->file('company_img');
            $uploadDir = public_path('assets/uploads/partners');
            if (!File::exists($uploadDir)) {
                File::makeDirectory($uploadDir, 0755, true, true);
            }
            $fileName = time() . '_' . Str::random(6) . '.' . $file->getClientOriginalExtension();
            $file->move($uploadDir, $fileName);
            $career->company_img = 'assets/uploads/partners/' . $fileName;
        }

        $career->title = $validated['title'];
        $career->major = $validated['major'];
        $career->company_name = $validated['company_name'];
        $career->salary = $validated['salary'] ?? 'Kompetitif';
        $career->work_location = $validated['work_location'];
        $career->work_type = $validated['work_type'];
        $career->location = $validated['location'];
        $career->location_group = $validated['location_group'];
        $career->posted_time = $validated['posted_time'] ?? $career->posted_time;
        $career->post_time_category = $validated['post_time_category'] ?? $career->post_time_category;
        $career->apply_url = $validated['apply_url'] ?? null;
        if (!empty($validated['company_logo_char'])) {
            $career->company_logo_char = $validated['company_logo_char'];
        }
        $career->is_active = $request->boolean('is_active');
        $career->save();

        return redirect()->route('admin.career.index')
            ->with('success', 'Data lowongan berhasil diperbarui!');
    }

    /**
     * Hapus lowongan dari database.
     */
    public function destroy(CareerJob $career)
    {
        $career->delete();

        return redirect()->route('admin.career.index')
            ->with('success', 'Lowongan berhasil dihapus!');
    }

    /**
     * Toggle status aktif / tutup lowongan secara cepat.
     */
    public function toggle(CareerJob $career)
    {
        $career->is_active = !$career->is_active;
        $career->save();

        $statusText = $career->is_active ? 'diaktifkan kembali' : 'ditutup';
        return back()->with('success', "Lowongan “{$career->title}” berhasil {$statusText}.");
    }
}
