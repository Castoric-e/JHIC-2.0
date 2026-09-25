@extends('admin.layouts.app')

@section('title', 'Dashboard')
@section('page_title', 'Dashboard Super Admin')

@section('content')
<div class="space-y-6">

    <!-- Welcome Hero Banner -->
    <div class="relative overflow-hidden bg-gradient-to-r from-[#0c61cf] via-[#094bb0] to-[#06337a] rounded-3xl p-6 md:p-8 text-white shadow-md">
        <div class="absolute -right-10 -bottom-10 w-64 h-64 bg-white/10 rounded-full blur-2xl pointer-events-none"></div>
        <div class="relative z-10 max-w-2xl">
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/15 backdrop-blur-md text-xs font-medium text-white mb-3">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                Kendali Penuh Sistem Aktif
            </span>
            <h1 class="text-2xl md:text-3xl font-bold font-['Funnel_Display',sans-serif] tracking-tight leading-tight">
                Selamat Datang, Super Admin IDN!
            </h1>
            <p class="text-white/80 text-xs md:text-sm mt-2 leading-relaxed">
                Kelola seluruh konten, publikasi artikel berita, liputan prestasi, dan informasi seputar IDN Boarding School secara terpusat dengan cepat dan mudah.
            </p>

            <div class="mt-5 flex flex-wrap gap-3">
                <a href="{{ route('admin.articles.create') }}" 
                    class="inline-flex items-center gap-2 px-4 py-2.5 bg-white text-[#0c61cf] hover:bg-slate-100 rounded-xl text-xs md:text-sm font-semibold transition-all duration-200 shadow-sm cursor-pointer">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                    </svg>
                    <span>Tulis Artikel Baru</span>
                </a>
                <a href="{{ route('admin.articles.index') }}" 
                    class="inline-flex items-center gap-2 px-4 py-2.5 bg-white/10 hover:bg-white/20 text-white rounded-xl text-xs md:text-sm font-semibold transition-all duration-200 backdrop-blur-sm cursor-pointer">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
                    </svg>
                    <span>Daftar Semua Artikel</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Quick Stats Cards Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-5">
        
        <!-- Card 1: Total Artikel -->
        <div class="bg-white p-5 rounded-2xl border border-[#e2e8f0] shadow-sm flex items-center justify-between">
            <div>
                <span class="text-xs font-semibold text-[#64748b] block mb-1">Total Artikel Terbit</span>
                <span class="text-2xl font-bold text-[#0f172a] font-['Funnel_Display',sans-serif]">{{ $totalArticles }}</span>
                <span class="text-[11px] text-emerald-600 font-medium block mt-1">Live di Website Publik</span>
            </div>
            <div class="w-12 h-12 rounded-xl bg-[#0c61cf]/10 text-[#0c61cf] flex items-center justify-center shrink-0">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                </svg>
            </div>
        </div>

        <!-- Card 2: Lowongan Karir & Magang -->
        <div class="bg-white p-5 rounded-2xl border border-[#e2e8f0] shadow-sm flex items-center justify-between">
            <div>
                <span class="text-xs font-semibold text-[#64748b] block mb-1">Lowongan Karir & Magang</span>
                <span class="text-2xl font-bold text-[#0f172a] font-['Funnel_Display',sans-serif]">{{ $totalJobs }}</span>
                <span class="text-[11px] text-emerald-600 font-medium block mt-1">{{ $activeJobsCount }} Lowongan Aktif Buka</span>
            </div>
            <div class="w-12 h-12 rounded-xl bg-indigo-500/10 text-indigo-600 flex items-center justify-center shrink-0">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
            </div>
        </div>

        <!-- Card 3: Kategori Konten -->
        <div class="bg-white p-5 rounded-2xl border border-[#e2e8f0] shadow-sm flex items-center justify-between">
            <div>
                <span class="text-xs font-semibold text-[#64748b] block mb-1">Kategori Konten</span>
                <span class="text-2xl font-bold text-[#0f172a] font-['Funnel_Display',sans-serif]">{{ $categoriesCount }}</span>
                <span class="text-[11px] text-[#64748b] font-medium block mt-1">Prestasi, Kegiatan, dll</span>
            </div>
            <div class="w-12 h-12 rounded-xl bg-amber-500/10 text-amber-600 flex items-center justify-center shrink-0">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                </svg>
            </div>
        </div>

        <!-- Card 4: Mode Akses URL -->
        <div class="bg-white p-5 rounded-2xl border border-[#e2e8f0] shadow-sm flex items-center justify-between">
            <div>
                <span class="text-xs font-semibold text-[#64748b] block mb-1">Mode Akses</span>
                <span class="text-xl font-bold text-[#0f172a] font-mono">/admin</span>
                <span class="text-[11px] text-emerald-600 font-medium block mt-1">Stealth Protected URL</span>
            </div>
            <div class="w-12 h-12 rounded-xl bg-emerald-500/10 text-emerald-600 flex items-center justify-center shrink-0">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                </svg>
            </div>
        </div>

    </div>

    <!-- Main Section: Recent Articles & Category Summary -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
        
        <!-- Left 8 Cols: Recent Articles Table -->
        <div class="lg:col-span-8 bg-white border border-[#e2e8f0] rounded-2xl p-6 shadow-sm">
            <div class="flex items-center justify-between mb-5">
                <div>
                    <h2 class="text-base font-bold text-[#0f172a] font-['Funnel_Display',sans-serif]">
                        Artikel Terbaru Terbit
                    </h2>
                    <span class="text-xs text-[#64748b]">Daftar artikel yang baru saja dipublikasikan</span>
                </div>
                <a href="{{ route('admin.articles.index') }}" class="text-xs font-semibold text-[#0c61cf] hover:underline flex items-center gap-1">
                    Lihat Semua
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </a>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs">
                    <thead>
                        <tr class="border-b border-[#f1f5f9] text-[#64748b] font-semibold">
                            <th class="pb-3 pl-2">Artikel</th>
                            <th class="pb-3 px-3">Kategori</th>
                            <th class="pb-3 px-3">Tanggal</th>
                            <th class="pb-3 pr-2 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#f8fafc]">
                        @forelse($recentArticles as $art)
                            <tr class="hover:bg-[#f8fafc] transition-colors group">
                                <td class="py-3.5 pl-2 max-w-[280px]">
                                    <div class="flex items-center gap-3">
                                        <div class="w-12 h-10 rounded-lg overflow-hidden bg-slate-100 shrink-0 border border-[#e2e8f0]">
                                            <img src="{{ asset('assets/' . rawurlencode($art->image)) }}" alt="{{ $art->title }}" class="w-full h-full object-cover">
                                        </div>
                                        <div class="min-w-0">
                                            <a href="{{ route('articles.show', $art->slug) }}" target="_blank" class="font-semibold text-[#0f172a] group-hover:text-[#0c61cf] transition-colors line-clamp-1 block">
                                                {{ $art->title }}
                                            </a>
                                            <span class="text-[11px] text-[#94a3b8] block">{{ $art->read_time }}</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3.5 px-3">
                                    <span class="inline-flex px-2.5 py-0.5 rounded-full text-[11px] font-medium bg-[#0c61cf]/10 text-[#0c61cf]">
                                        {{ $art->category }}
                                    </span>
                                </td>
                                <td class="py-3.5 px-3 text-[#64748b]">
                                    {{ \Carbon\Carbon::parse($art->published_at)->format('d M Y') }}
                                </td>
                                <td class="py-3.5 pr-2 text-right">
                                    <div class="inline-flex items-center gap-1.5">
                                        <a href="{{ route('admin.articles.edit', $art->id) }}" 
                                            class="p-1.5 rounded-lg bg-slate-100 hover:bg-[#0c61cf] hover:text-white text-[#475569] transition-colors" title="Edit Artikel">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                            </svg>
                                        </a>
                                        <a href="{{ route('articles.show', $art->slug) }}" target="_blank"
                                            class="p-1.5 rounded-lg bg-slate-100 hover:bg-slate-200 text-[#475569] transition-colors" title="Buka Halaman Publik">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="py-8 text-center text-[#94a3b8]">
                                    Belum ada artikel yang tersedia.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Right 4 Cols: Category Distribution & Guidelines -->
        <div class="lg:col-span-4 space-y-6">
            
            <!-- Category Distribution Card -->
            <div class="bg-white border border-[#e2e8f0] rounded-2xl p-6 shadow-sm">
                <h2 class="text-base font-bold text-[#0f172a] font-['Funnel_Display',sans-serif] mb-1">
                    Distribusi Kategori
                </h2>
                <span class="text-xs text-[#64748b] block mb-4">Jumlah artikel per kelompok topik</span>

                <div class="space-y-3">
                    @forelse($categoryDistribution as $cat)
                        <div class="flex items-center justify-between p-3 rounded-xl bg-[#f8fafc] border border-[#f1f5f9]">
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-[#0c61cf]"></span>
                                <span class="text-xs font-semibold text-[#334155]">{{ $cat->category }}</span>
                            </div>
                            <span class="text-xs font-bold text-[#0c61cf] bg-white px-2 py-0.5 rounded-md border border-[#e2e8f0]">
                                {{ $cat->count }} Artikel
                            </span>
                        </div>
                    @empty
                        <span class="text-xs text-[#94a3b8]">Belum ada kategori</span>
                    @endforelse
                </div>
            </div>

            <!-- Super Admin Quick Guide -->
            <div class="bg-[#0c61cf]/5 border border-[#0c61cf]/20 rounded-2xl p-5">
                <div class="flex items-center gap-2.5 text-[#0c61cf] font-semibold text-xs mb-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span>Informasi Privilese Super Admin</span>
                </div>
                <p class="text-xs text-[#475569] leading-relaxed">
                    Sebagai Super Admin, seluruh artikel yang Anda tambahkan, edit, atau hapus akan langsung disinkronkan ke halaman utama website publik dan pencarian sitemap secara seketika.
                </p>
            </div>

        </div>

    </div>

</div>
@endsection
