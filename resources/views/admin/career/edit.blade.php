@extends('admin.layouts.app')

@section('title', 'Edit Lowongan Karir')
@section('page_title', 'Edit Lowongan')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">

    <!-- Back Button -->
    <div class="flex items-center justify-between">
        <a href="{{ route('admin.career.index') }}" 
            class="inline-flex items-center gap-2 text-xs font-semibold text-[#64748b] hover:text-[#0c61cf] transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
            </svg>
            <span>Kembali ke Daftar Lowongan</span>
        </a>
        <div class="flex items-center gap-2 text-xs text-[#94a3b8]">
            <span>ID Lowongan: #{{ $career->id }}</span>
        </div>
    </div>

    <!-- Error Alert -->
    @if($errors->any())
        <div class="p-4 bg-rose-50 border border-rose-200 rounded-2xl flex items-start gap-3 text-xs text-rose-800">
            <svg class="w-5 h-5 text-rose-600 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
            </svg>
            <div>
                <span class="font-semibold block mb-1">Periksa kembali data yang dimasukkan:</span>
                <ul class="list-disc list-inside space-y-0.5 text-rose-700">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    <!-- Form Box -->
    <form action="{{ route('admin.career.update', $career->id) }}" method="POST" enctype="multipart/form-data" 
        x-data="{ logoPreview: null }" class="bg-white border border-[#e2e8f0] rounded-2xl shadow-sm p-6 md:p-8 space-y-6">
        @csrf
        @method('PUT')

        <div class="border-b border-[#f1f5f9] pb-4">
            <h1 class="text-lg font-bold text-[#0f172a] font-['Funnel_Display',sans-serif]">
                Perbarui Lowongan
            </h1>
            <p class="text-xs text-[#64748b] mt-0.5">
                Perubahan pada data lowongan akan langsung diterapkan di portal Career Center.
            </p>
        </div>

        <!-- Row 1: Posisi & Jurusan -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-5">
            <div class="md:col-span-8">
                <label for="title" class="block text-xs font-bold text-[#334155] uppercase tracking-wider mb-2">
                    Posisi / Judul Pekerjaan <span class="text-rose-500">*</span>
                </label>
                <input type="text" id="title" name="title" value="{{ old('title', $career->title) }}" required
                    class="w-full px-4 py-2.5 bg-[#f8fafc] border border-[#e2e8f0] rounded-xl text-sm text-[#0f172a] placeholder-[#94a3b8] focus:outline-none focus:border-[#0c61cf] focus:ring-4 focus:ring-[#0c61cf]/10 transition-all">
            </div>

            <div class="md:col-span-4">
                <label for="major" class="block text-xs font-bold text-[#334155] uppercase tracking-wider mb-2">
                    Jurusan <span class="text-rose-500">*</span>
                </label>
                <select id="major" name="major" required
                    class="w-full px-4 py-2.5 bg-[#f8fafc] border border-[#e2e8f0] rounded-xl text-sm text-[#0f172a] focus:outline-none focus:border-[#0c61cf] focus:ring-4 focus:ring-[#0c61cf]/10 transition-all cursor-pointer font-semibold">
                    <option value="RPL" {{ old('major', $career->major) === 'RPL' ? 'selected' : '' }}>RPL (Software / Coding)</option>
                    <option value="TKJ" {{ old('major', $career->major) === 'TKJ' ? 'selected' : '' }}>TKJ (Network & Cloud)</option>
                    <option value="DKV" {{ old('major', $career->major) === 'DKV' ? 'selected' : '' }}>DKV (Design & Creative)</option>
                </select>
            </div>
        </div>

        <!-- Row 2: Perusahaan & Gaji -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-5">
            <div class="md:col-span-8">
                <label for="company_name" class="block text-xs font-bold text-[#334155] uppercase tracking-wider mb-2">
                    Nama Perusahaan / Mitra Industri <span class="text-rose-500">*</span>
                </label>
                <input type="text" id="company_name" name="company_name" value="{{ old('company_name', $career->company_name) }}" required
                    class="w-full px-4 py-2.5 bg-[#f8fafc] border border-[#e2e8f0] rounded-xl text-sm text-[#0f172a] placeholder-[#94a3b8] focus:outline-none focus:border-[#0c61cf] focus:ring-4 focus:ring-[#0c61cf]/10 transition-all">
            </div>

            <div class="md:col-span-4">
                <label for="salary" class="block text-xs font-bold text-[#334155] uppercase tracking-wider mb-2">
                    Gaji / Tunjangan
                </label>
                <input type="text" id="salary" name="salary" value="{{ old('salary', $career->salary) }}"
                    class="w-full px-4 py-2.5 bg-[#f8fafc] border border-[#e2e8f0] rounded-xl text-sm text-[#0f172a] placeholder-[#94a3b8] focus:outline-none focus:border-[#0c61cf] focus:ring-4 focus:ring-[#0c61cf]/10 transition-all">
            </div>
        </div>

        <!-- Row 3: Tipe Kerja, Mode Lokasi, Wilayah -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
            <div>
                <label for="work_type" class="block text-xs font-bold text-[#334155] uppercase tracking-wider mb-2">
                    Tipe Pekerjaan <span class="text-rose-500">*</span>
                </label>
                <select id="work_type" name="work_type" required
                    class="w-full px-4 py-2.5 bg-[#f8fafc] border border-[#e2e8f0] rounded-xl text-sm text-[#0f172a] focus:outline-none focus:border-[#0c61cf] focus:ring-4 focus:ring-[#0c61cf]/10 transition-all cursor-pointer">
                    <option value="Full-time" {{ old('work_type', $career->work_type) === 'Full-time' ? 'selected' : '' }}>Full-time</option>
                    <option value="Internship" {{ old('work_type', $career->work_type) === 'Internship' ? 'selected' : '' }}>Internship (Magang)</option>
                    <option value="Contract" {{ old('work_type', $career->work_type) === 'Contract' ? 'selected' : '' }}>Contract</option>
                    <option value="Part-time" {{ old('work_type', $career->work_type) === 'Part-time' ? 'selected' : '' }}>Part-time</option>
                    <option value="Freelance" {{ old('work_type', $career->work_type) === 'Freelance' ? 'selected' : '' }}>Freelance</option>
                </select>
            </div>

            <div>
                <label for="work_location" class="block text-xs font-bold text-[#334155] uppercase tracking-wider mb-2">
                    Sistem Kerja <span class="text-rose-500">*</span>
                </label>
                <select id="work_location" name="work_location" required
                    class="w-full px-4 py-2.5 bg-[#f8fafc] border border-[#e2e8f0] rounded-xl text-sm text-[#0f172a] focus:outline-none focus:border-[#0c61cf] focus:ring-4 focus:ring-[#0c61cf]/10 transition-all cursor-pointer">
                    <option value="Onsite" {{ old('work_location', $career->work_location) === 'Onsite' ? 'selected' : '' }}>Onsite (Di Kantor)</option>
                    <option value="Hybrid" {{ old('work_location', $career->work_location) === 'Hybrid' ? 'selected' : '' }}>Hybrid (Fleksibel)</option>
                    <option value="Remote/WFH" {{ old('work_location', $career->work_location) === 'Remote/WFH' ? 'selected' : '' }}>Remote / WFH</option>
                </select>
            </div>

            <div>
                <label for="location_group" class="block text-xs font-bold text-[#334155] uppercase tracking-wider mb-2">
                    Wilayah <span class="text-rose-500">*</span>
                </label>
                <select id="location_group" name="location_group" required
                    class="w-full px-4 py-2.5 bg-[#f8fafc] border border-[#e2e8f0] rounded-xl text-sm text-[#0f172a] focus:outline-none focus:border-[#0c61cf] focus:ring-4 focus:ring-[#0c61cf]/10 transition-all cursor-pointer">
                    <option value="Jabodetabek" {{ old('location_group', $career->location_group) === 'Jabodetabek' ? 'selected' : '' }}>Jabodetabek</option>
                    <option value="Jawa" {{ old('location_group', $career->location_group) === 'Jawa' ? 'selected' : '' }}>Jawa</option>
                    <option value="Kalimantan" {{ old('location_group', $career->location_group) === 'Kalimantan' ? 'selected' : '' }}>Kalimantan</option>
                    <option value="Sumatra" {{ old('location_group', $career->location_group) === 'Sumatra' ? 'selected' : '' }}>Sumatra</option>
                    <option value="Sulawesi" {{ old('location_group', $career->location_group) === 'Sulawesi' ? 'selected' : '' }}>Sulawesi</option>
                    <option value="Papua" {{ old('location_group', $career->location_group) === 'Papua' ? 'selected' : '' }}>Papua</option>
                    <option value="Other" {{ old('location_group', $career->location_group) === 'Other' ? 'selected' : '' }}>Lainnya</option>
                </select>
            </div>
        </div>

        <!-- Row 4: Kota Penempatan & Link Lamar -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <div>
                <label for="location" class="block text-xs font-bold text-[#334155] uppercase tracking-wider mb-2">
                    Kota / Alamat Penempatan <span class="text-rose-500">*</span>
                </label>
                <input type="text" id="location" name="location" value="{{ old('location', $career->location) }}" required
                    class="w-full px-4 py-2.5 bg-[#f8fafc] border border-[#e2e8f0] rounded-xl text-sm text-[#0f172a] placeholder-[#94a3b8] focus:outline-none focus:border-[#0c61cf] focus:ring-4 focus:ring-[#0c61cf]/10 transition-all">
            </div>

            <div>
                <label for="apply_url" class="block text-xs font-bold text-[#334155] uppercase tracking-wider mb-2">
                    Tautan Pendaftaran (URL Website / Form)
                </label>
                <input type="url" id="apply_url" name="apply_url" value="{{ old('apply_url', $career->apply_url) }}"
                    placeholder="https://karir.perusahaan.com/apply"
                    class="w-full px-4 py-2.5 bg-[#f8fafc] border border-[#e2e8f0] rounded-xl text-sm text-[#0f172a] placeholder-[#94a3b8] focus:outline-none focus:border-[#0c61cf] focus:ring-4 focus:ring-[#0c61cf]/10 transition-all">
            </div>
        </div>

        <!-- Row 5: Logo Perusahaan -->
        <div>
            <label class="block text-xs font-bold text-[#334155] uppercase tracking-wider mb-2">
                Logo Mitra Perusahaan
            </label>
            <div class="grid grid-cols-1 sm:grid-cols-12 gap-4 items-center">
                <!-- Current Logo -->
                <div class="sm:col-span-4 bg-[#f8fafc] border border-[#e2e8f0] rounded-2xl p-4 flex flex-col items-center">
                    <span class="text-[11px] font-semibold text-[#64748b] mb-2">Logo Saat Ini</span>
                    <div class="w-14 h-14 rounded-xl overflow-hidden bg-white border border-[#e2e8f0] shadow-sm flex items-center justify-center font-bold text-sm {{ $career->company_img ? '' : $career->company_bg . ' text-white' }}">
                        @if($career->company_img)
                            <img src="{{ asset($career->company_img) }}" alt="{{ $career->company_name }}" class="w-full h-full object-contain p-1">
                        @else
                            <span>{{ $career->company_logo_char ?: substr($career->company_name, 0, 1) }}</span>
                        @endif
                    </div>
                </div>

                <!-- Replace Logo -->
                <div class="sm:col-span-8 border-2 border-dashed border-[#cbd5e1] hover:border-[#0c61cf] rounded-2xl p-5 text-center bg-[#f8fafc] transition-colors relative cursor-pointer group">
                    <input type="file" name="company_img" accept="image/*" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer"
                        @change="const file = $event.target.files[0]; if(file) { const reader = new FileReader(); reader.onload = (e) => logoPreview = e.target.result; reader.readAsDataURL(file); }">
                    
                    <div x-show="!logoPreview" class="flex flex-col items-center">
                        <div class="w-8 h-8 rounded-xl bg-white border border-[#e2e8f0] shadow-sm flex items-center justify-center text-[#64748b] group-hover:text-[#0c61cf] mb-1.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <span class="text-xs font-semibold text-[#0f172a]">Klik untuk mengganti logo</span>
                        <span class="text-[11px] text-[#94a3b8]">Biarkan kosong jika tidak ingin mengubah</span>
                    </div>

                    <div x-show="logoPreview" x-cloak class="flex flex-col items-center">
                        <div class="w-14 h-14 rounded-xl overflow-hidden border border-[#e2e8f0] shadow-sm p-1 bg-white mb-1.5">
                            <img :src="logoPreview" alt="Preview Logo Baru" class="w-full h-full object-contain">
                        </div>
                        <span class="text-[11px] text-[#0c61cf] font-semibold">Logo baru terpilih</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Status Aktif Checkbox -->
        <div class="pt-2">
            <label class="flex items-center gap-2.5 cursor-pointer select-none">
                <input type="checkbox" name="is_active" value="1" {{ old('is_active', $career->is_active) ? 'checked' : '' }}
                    class="w-4 h-4 rounded text-[#0c61cf] focus:ring-[#0c61cf] border-[#cbd5e1]">
                <div>
                    <span class="text-xs font-bold text-[#0f172a] block">Status Lowongan Aktif</span>
                    <span class="text-[11px] text-[#64748b]">Jika tidak dicentang, lowongan ditutup dan disembunyikan dari halaman depan</span>
                </div>
            </label>
        </div>

        <!-- Action Buttons -->
        <div class="flex items-center justify-end gap-3 pt-4 border-t border-[#f1f5f9]">
            <a href="{{ route('admin.career.index') }}" 
                class="px-5 py-2.5 rounded-xl border border-[#e2e8f0] text-[#64748b] hover:bg-slate-100 text-xs md:text-sm font-semibold transition-colors">
                Batal
            </a>
            <button type="submit" 
                class="px-6 py-2.5 bg-[#0c61cf] hover:bg-[#0b54b5] active:scale-[0.99] text-white text-xs md:text-sm font-semibold rounded-xl shadow-sm transition-all duration-200 flex items-center gap-2 cursor-pointer">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
                <span>Simpan Perubahan</span>
            </button>
        </div>

    </form>

</div>
@endsection
