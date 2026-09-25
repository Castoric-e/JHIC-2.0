@extends('admin.layouts.app')

@section('title', 'Kelola Artikel')
@section('page_title', 'Kelola Artikel')

@section('content')
<div class="space-y-6" x-data="{ deleteModalOpen: false, deleteUrl: '', deleteTitle: '' }">

    <!-- Top Action Bar -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 bg-white p-5 rounded-2xl border border-[#e2e8f0] shadow-sm">
        <div>
            <h1 class="text-xl font-bold text-[#0f172a] font-['Funnel_Display',sans-serif]">
                Daftar Artikel & Berita
            </h1>
            <p class="text-xs text-[#64748b] mt-0.5">
                Total {{ $articles->total() }} artikel terdaftar di sistem IDN Boarding School.
            </p>
        </div>

        <a href="{{ route('admin.articles.create') }}" 
            class="inline-flex items-center justify-center gap-2 px-4 py-2.5 bg-[#0c61cf] hover:bg-[#0b54b5] active:scale-[0.99] text-white text-xs md:text-sm font-semibold rounded-xl shadow-sm transition-all duration-200 cursor-pointer shrink-0">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
            </svg>
            <span>Tambah Artikel Baru</span>
        </a>
    </div>

    <!-- Filter & Search Toolbar -->
    <div class="bg-white p-4 rounded-2xl border border-[#e2e8f0] shadow-sm">
        <form method="GET" action="{{ route('admin.articles.index') }}" class="grid grid-cols-1 sm:grid-cols-12 gap-3 items-center">
            
            <!-- Search Query Input -->
            <div class="sm:col-span-6 md:col-span-7 relative">
                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-[#94a3b8]">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
                <input type="text" name="search" value="{{ $search }}" placeholder="Cari judul artikel atau konten..."
                    class="w-full pl-10 pr-4 py-2 bg-[#f8fafc] border border-[#e2e8f0] rounded-xl text-xs md:text-sm text-[#0f172a] placeholder-[#94a3b8] focus:outline-none focus:border-[#0c61cf] focus:ring-2 focus:ring-[#0c61cf]/10 transition-all">
            </div>

            <!-- Category Filter Dropdown -->
            <div class="sm:col-span-4 md:col-span-3">
                <select name="category" onchange="this.form.submit()"
                    class="w-full px-3 py-2 bg-[#f8fafc] border border-[#e2e8f0] rounded-xl text-xs md:text-sm text-[#0f172a] focus:outline-none focus:border-[#0c61cf] focus:ring-2 focus:ring-[#0c61cf]/10 transition-all cursor-pointer">
                    <option value="">Semua Kategori</option>
                    @foreach($categories as $cat)
                        <option value="{{ $cat }}" {{ $category === $cat ? 'selected' : '' }}>{{ $cat }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Submit & Reset Buttons -->
            <div class="sm:col-span-2 flex items-center gap-2">
                <button type="submit" class="w-full py-2 px-3 bg-slate-800 hover:bg-slate-900 text-white rounded-xl text-xs font-semibold transition-colors cursor-pointer">
                    Cari
                </button>
                @if($search || $category)
                    <a href="{{ route('admin.articles.index') }}" class="p-2 bg-slate-100 hover:bg-slate-200 text-[#64748b] rounded-xl text-xs transition-colors shrink-0" title="Reset Filter">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                    </a>
                @endif
            </div>

        </form>
    </div>

    <!-- Articles Table Container -->
    <div class="bg-white border border-[#e2e8f0] rounded-2xl shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead class="bg-[#f8fafc] border-b border-[#e2e8f0] text-[#475569] font-semibold uppercase tracking-wider text-[11px]">
                    <tr>
                        <th class="py-3.5 pl-6 w-16">Preview</th>
                        <th class="py-3.5 px-4 min-w-[240px]">Judul & Deskripsi</th>
                        <th class="py-3.5 px-4">Kategori</th>
                        <th class="py-3.5 px-4">Waktu Baca</th>
                        <th class="py-3.5 px-4">Tanggal Rilis</th>
                        <th class="py-3.5 pr-6 text-right w-36">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-[#f1f5f9]">
                    @forelse($articles as $art)
                        <tr class="hover:bg-[#f8fafc]/70 transition-colors group">
                            
                            <!-- Thumbnail -->
                            <td class="py-3.5 pl-6">
                                <div class="w-14 h-11 rounded-lg overflow-hidden bg-slate-100 border border-[#e2e8f0] shrink-0">
                                    <img src="{{ asset('assets/' . rawurlencode($art->image)) }}" alt="{{ $art->title }}" class="w-full h-full object-cover">
                                </div>
                            </td>

                            <!-- Title & Excerpt -->
                            <td class="py-3.5 px-4">
                                <a href="{{ route('admin.articles.edit', $art->id) }}" class="font-bold text-[#0f172a] hover:text-[#0c61cf] transition-colors line-clamp-1 block text-sm">
                                    {{ $art->title }}
                                </a>
                                <p class="text-[11px] text-[#64748b] line-clamp-1 mt-0.5">
                                    {{ Str::limit(strip_tags($art->content), 80) }}
                                </p>
                            </td>

                            <!-- Category -->
                            <td class="py-3.5 px-4">
                                <span class="inline-flex px-2.5 py-1 rounded-full text-[11px] font-semibold bg-[#0c61cf]/10 text-[#0c61cf] border border-[#0c61cf]/20">
                                    {{ $art->category }}
                                </span>
                            </td>

                            <!-- Read Time -->
                            <td class="py-3.5 px-4 text-[#64748b]">
                                {{ $art->read_time }}
                            </td>

                            <!-- Published At -->
                            <td class="py-3.5 px-4 text-[#64748b] whitespace-nowrap">
                                {{ \Carbon\Carbon::parse($art->published_at)->isoFormat('D MMMM Y') }}
                            </td>

                            <!-- Actions -->
                            <td class="py-3.5 pr-6 text-right whitespace-nowrap">
                                <div class="inline-flex items-center gap-1.5">
                                    
                                    <!-- Public Link -->
                                    <a href="{{ route('articles.show', $art->slug) }}" target="_blank" 
                                        class="p-2 rounded-xl bg-slate-100 hover:bg-slate-200 text-[#475569] transition-colors" title="Lihat di Halaman Web">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                        </svg>
                                    </a>

                                    <!-- Edit Link -->
                                    <a href="{{ route('admin.articles.edit', $art->id) }}" 
                                        class="p-2 rounded-xl bg-[#0c61cf]/10 hover:bg-[#0c61cf] hover:text-white text-[#0c61cf] transition-colors" title="Edit Artikel">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                        </svg>
                                    </a>

                                    <!-- Delete Button Trigger -->
                                    <button type="button" 
                                        @click="deleteModalOpen = true; deleteUrl = '{{ route('admin.articles.destroy', $art->id) }}'; deleteTitle = '{{ addslashes($art->title) }}'"
                                        class="p-2 rounded-xl bg-rose-50 hover:bg-rose-600 hover:text-white text-rose-600 transition-colors cursor-pointer" title="Hapus Artikel">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                        </svg>
                                    </button>

                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="py-12 text-center">
                                <div class="flex flex-col items-center justify-center text-[#94a3b8]">
                                    <svg class="w-12 h-12 mb-3 text-[#cbd5e1]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                    </svg>
                                    <span class="font-semibold text-sm text-[#475569]">Tidak ada artikel ditemukan</span>
                                    <p class="text-xs text-[#94a3b8] mt-1">Coba gunakan kata kunci lain atau tambahkan artikel baru.</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination Bar -->
        @if($articles->hasPages())
            <div class="p-4 border-t border-[#e2e8f0] bg-[#fafafa]">
                {{ $articles->links() }}
            </div>
        @endif
    </div>

    <!-- Delete Confirmation Modal -->
    <div x-show="deleteModalOpen" x-cloak class="fixed inset-0 z-50 flex items-center justify-center p-4">
        <!-- Backdrop -->
        <div class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm transition-opacity" @click="deleteModalOpen = false"></div>

        <!-- Modal Box -->
        <div class="bg-white rounded-2xl border border-[#e2e8f0] shadow-2xl max-w-md w-full p-6 relative z-10 space-y-4">
            <div class="w-12 h-12 rounded-xl bg-rose-100 text-rose-600 flex items-center justify-center">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                </svg>
            </div>

            <div>
                <h3 class="text-base font-bold text-[#0f172a] font-['Funnel_Display',sans-serif]">
                    Konfirmasi Hapus Artikel
                </h3>
                <p class="text-xs text-[#64748b] mt-1 leading-relaxed">
                    Apakah Anda yakin ingin menghapus artikel <span class="font-semibold text-[#0f172a]" x-text="'“' + deleteTitle + '”'"></span>? Tindakan ini permanen dan tidak dapat dibatalkan.
                </p>
            </div>

            <form :action="deleteUrl" method="POST" class="flex items-center justify-end gap-2.5 pt-2">
                @csrf
                @method('DELETE')
                <button type="button" @click="deleteModalOpen = false" 
                    class="px-4 py-2 bg-slate-100 hover:bg-slate-200 text-[#475569] rounded-xl text-xs font-semibold transition-colors cursor-pointer">
                    Batal
                </button>
                <button type="submit" 
                    class="px-4 py-2 bg-rose-600 hover:bg-rose-700 text-white rounded-xl text-xs font-semibold shadow-sm transition-colors cursor-pointer">
                    Ya, Hapus Sekarang
                </button>
            </form>
        </div>
    </div>

</div>
@endsection
