@extends('admin.layouts.app')

@section('title', 'Tambah Artikel Baru')
@section('page_title', 'Tambah Artikel')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">

    <!-- Back & Header Bar -->
    <div class="flex items-center justify-between">
        <a href="{{ route('admin.articles.index') }}" 
            class="inline-flex items-center gap-2 text-xs font-semibold text-[#64748b] hover:text-[#0c61cf] transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
            </svg>
            <span>Kembali ke Daftar Artikel</span>
        </a>

        <span class="text-xs text-[#94a3b8]">Mode: Penerbitan Baru</span>
    </div>

    <!-- Error Validation Alert -->
    @if($errors->any())
        <div class="p-4 bg-rose-50 border border-rose-200 rounded-2xl flex items-start gap-3 text-xs text-rose-800">
            <svg class="w-5 h-5 text-rose-600 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
            </svg>
            <div>
                <span class="font-semibold block mb-1">Mohon periksa formulir Anda:</span>
                <ul class="list-disc list-inside space-y-0.5 text-rose-700">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    <!-- Form Container -->
    <form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data" 
        x-data="{ imagePreview: null }" class="bg-white border border-[#e2e8f0] rounded-2xl shadow-sm p-6 md:p-8 space-y-6">
        @csrf

        <div class="border-b border-[#f1f5f9] pb-4">
            <h1 class="text-lg font-bold text-[#0f172a] font-['Funnel_Display',sans-serif]">
                Publikasikan Artikel Baru
            </h1>
            <p class="text-xs text-[#64748b] mt-0.5">
                Isi data dan konten lengkap artikel yang akan ditampilkan di website publik.
            </p>
        </div>

        <!-- Judul Artikel -->
        <div>
            <label for="title" class="block text-xs font-bold text-[#334155] uppercase tracking-wider mb-2">
                Judul Artikel <span class="text-rose-500">*</span>
            </label>
            <input type="text" id="title" name="title" value="{{ old('title') }}" required
                placeholder="Contoh: Siswa SMK IDN Juara 1 Nasional Lomba Robotik 2026"
                class="w-full px-4 py-2.5 bg-[#f8fafc] border border-[#e2e8f0] rounded-xl text-sm text-[#0f172a] placeholder-[#94a3b8] focus:outline-none focus:border-[#0c61cf] focus:ring-4 focus:ring-[#0c61cf]/10 transition-all">
        </div>

        <!-- 3 Columns Meta Row -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
            
            <!-- Kategori -->
            <div>
                <label for="category" class="block text-xs font-bold text-[#334155] uppercase tracking-wider mb-2">
                    Kategori <span class="text-rose-500">*</span>
                </label>
                <input list="category-options" id="category" name="category" value="{{ old('category') }}" required
                    placeholder="Pilih atau ketik kategori..."
                    class="w-full px-4 py-2.5 bg-[#f8fafc] border border-[#e2e8f0] rounded-xl text-sm text-[#0f172a] placeholder-[#94a3b8] focus:outline-none focus:border-[#0c61cf] focus:ring-4 focus:ring-[#0c61cf]/10 transition-all">
                <datalist id="category-options">
                    @foreach($categories as $cat)
                        <option value="{{ $cat }}">
                    @endforeach
                    <option value="Prestasi">
                    <option value="Kegiatan">
                    <option value="Teknologi">
                    <option value="Berita">
                </datalist>
            </div>

            <!-- Estimasi Waktu Baca -->
            <div>
                <label for="read_time" class="block text-xs font-bold text-[#334155] uppercase tracking-wider mb-2">
                    Waktu Baca <span class="text-rose-500">*</span>
                </label>
                <input type="text" id="read_time" name="read_time" value="{{ old('read_time', '5 Menit Baca') }}" required
                    placeholder="Contoh: 3 Menit Baca"
                    class="w-full px-4 py-2.5 bg-[#f8fafc] border border-[#e2e8f0] rounded-xl text-sm text-[#0f172a] placeholder-[#94a3b8] focus:outline-none focus:border-[#0c61cf] focus:ring-4 focus:ring-[#0c61cf]/10 transition-all">
            </div>

            <!-- Tanggal Publikasi -->
            <div>
                <label for="published_at" class="block text-xs font-bold text-[#334155] uppercase tracking-wider mb-2">
                    Tanggal Rilis <span class="text-rose-500">*</span>
                </label>
                <input type="date" id="published_at" name="published_at" value="{{ old('published_at', date('Y-m-d')) }}" required
                    class="w-full px-4 py-2.5 bg-[#f8fafc] border border-[#e2e8f0] rounded-xl text-sm text-[#0f172a] focus:outline-none focus:border-[#0c61cf] focus:ring-4 focus:ring-[#0c61cf]/10 transition-all cursor-pointer">
            </div>

        </div>

        <!-- Banner Image Upload -->
        <div>
            <label class="block text-xs font-bold text-[#334155] uppercase tracking-wider mb-2">
                Banner / Cover Gambar
            </label>
            
            <div class="border-2 border-dashed border-[#cbd5e1] hover:border-[#0c61cf] rounded-2xl p-6 text-center bg-[#f8fafc] transition-colors relative cursor-pointer group">
                <input type="file" name="image" accept="image/*" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer"
                    @change="const file = $event.target.files[0]; if(file) { const reader = new FileReader(); reader.onload = (e) => imagePreview = e.target.result; reader.readAsDataURL(file); }">
                
                <!-- Placeholder State -->
                <div x-show="!imagePreview" class="flex flex-col items-center">
                    <div class="w-12 h-12 rounded-xl bg-white border border-[#e2e8f0] shadow-sm flex items-center justify-center text-[#64748b] group-hover:text-[#0c61cf] group-hover:scale-105 transition-all mb-3">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <span class="text-xs font-semibold text-[#0f172a]">Klik untuk memilih gambar atau seret file ke sini</span>
                    <span class="text-[11px] text-[#94a3b8] mt-1">Format: JPG, PNG, WEBP, AVIF (Maks. 4MB)</span>
                </div>

                <!-- Preview State -->
                <div x-show="imagePreview" x-cloak class="flex flex-col items-center">
                    <div class="max-h-56 max-w-sm rounded-xl overflow-hidden border border-[#e2e8f0] shadow-md mb-2">
                        <img :src="imagePreview" alt="Preview Gambar" class="w-full h-full object-cover">
                    </div>
                    <span class="text-xs text-[#0c61cf] font-semibold">Klik lagi jika ingin mengganti gambar</span>
                </div>
            </div>
        </div>

        <!-- Konten Artikel (Textarea + Formatting Help) -->
        <div>
            <div class="flex items-center justify-between mb-2">
                <label for="content" class="text-xs font-bold text-[#334155] uppercase tracking-wider">
                    Isi Konten Artikel <span class="text-rose-500">*</span>
                </label>
                <span class="text-[11px] text-[#94a3b8]">Mendukung tag HTML standar</span>
            </div>

            <!-- Formatting Quick Helper Toolbar -->
            <div class="p-2.5 bg-[#f1f5f9] border border-[#e2e8f0] rounded-t-xl flex flex-wrap items-center gap-1.5 text-xs text-[#475569]">
                <span class="text-[11px] font-semibold text-[#64748b] mr-1">Helper tag:</span>
                <code class="px-1.5 py-0.5 bg-white border border-[#cbd5e1] rounded text-[11px]">&lt;p&gt;...&lt;/p&gt;</code>
                <code class="px-1.5 py-0.5 bg-white border border-[#cbd5e1] rounded text-[11px]">&lt;h3&gt;...&lt;/h3&gt;</code>
                <code class="px-1.5 py-0.5 bg-white border border-[#cbd5e1] rounded text-[11px]">&lt;strong&gt;...&lt;/strong&gt;</code>
                <code class="px-1.5 py-0.5 bg-white border border-[#cbd5e1] rounded text-[11px]">&lt;ul&gt;&lt;li&gt;...&lt;/li&gt;&lt;/ul&gt;</code>
                <code class="px-1.5 py-0.5 bg-white border border-[#cbd5e1] rounded text-[11px]">&lt;blockquote&gt;...&lt;/blockquote&gt;</code>
            </div>

            <textarea id="content" name="content" rows="12" required
                placeholder="Tuliskan isi artikel Anda di sini. Anda dapat menggunakan format paragraf <p>...</p> atau teks biasa."
                class="w-full p-4 bg-[#f8fafc] border border-t-0 border-[#e2e8f0] rounded-b-xl text-sm text-[#0f172a] placeholder-[#94a3b8] focus:outline-none focus:border-[#0c61cf] focus:ring-2 focus:ring-[#0c61cf]/10 font-mono text-xs leading-relaxed transition-all">{{ old('content') }}</textarea>
        </div>

        <!-- Action Buttons -->
        <div class="flex items-center justify-end gap-3 pt-4 border-t border-[#f1f5f9]">
            <a href="{{ route('admin.articles.index') }}" 
                class="px-5 py-2.5 rounded-xl border border-[#e2e8f0] text-[#64748b] hover:bg-slate-100 text-xs md:text-sm font-semibold transition-colors">
                Batal
            </a>
            <button type="submit" 
                class="px-6 py-2.5 bg-[#0c61cf] hover:bg-[#0b54b5] active:scale-[0.99] text-white text-xs md:text-sm font-semibold rounded-xl shadow-sm transition-all duration-200 flex items-center gap-2 cursor-pointer">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
                <span>Simpan & Terbitkan</span>
            </button>
        </div>

    </form>

</div>
@endsection
