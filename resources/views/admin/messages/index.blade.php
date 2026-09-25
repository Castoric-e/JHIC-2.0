@extends('admin.layouts.app')

@section('title', 'Kotak Masuk Pesan')
@section('page_title', 'Kotak Masuk Pesan & Konsultasi')

@section('content')
<div class="space-y-6">

    <!-- Header Section with Action Stats -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 bg-white p-6 rounded-2xl border border-[#e2e8f0] shadow-sm">
        <div>
            <h1 class="text-xl font-bold text-[#0f172a] font-['Funnel_Display',sans-serif]">
                Kotak Masuk Kontak & Konsultasi
            </h1>
            <p class="text-xs text-[#64748b] mt-1">
                Kelola dan tanggapi pesan pertanyaan, konsultasi PPDB, atau kemitraan dari pengunjung website.
            </p>
        </div>

        <div class="flex items-center gap-2">
            <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl bg-blue-50 text-[#0c61cf] border border-blue-200 text-xs font-semibold">
                <span class="w-2 h-2 rounded-full bg-[#0c61cf] {{ $unreadCount > 0 ? 'animate-pulse' : '' }}"></span>
                {{ $unreadCount }} Pesan Belum Dibaca
            </span>
        </div>
    </div>

    <!-- Filter & Search Toolbar -->
    <div class="bg-white p-5 rounded-2xl border border-[#e2e8f0] shadow-sm space-y-4">
        <!-- Status Filter Tabs -->
        <div class="flex flex-wrap items-center gap-2 border-b border-[#f1f5f9] pb-4">
            <a href="{{ route('admin.messages.index', array_merge(request()->except(['status', 'page']), ['status' => 'all'])) }}"
               class="px-3.5 py-1.5 rounded-xl text-xs font-semibold transition-all duration-200 {{ !request('status') || request('status') === 'all' ? 'bg-[#0c61cf] text-white shadow-sm' : 'bg-slate-100 text-[#475569] hover:bg-slate-200' }}">
                Semua Pesan ({{ $totalCount }})
            </a>
            <a href="{{ route('admin.messages.index', array_merge(request()->except(['status', 'page']), ['status' => 'unread'])) }}"
               class="px-3.5 py-1.5 rounded-xl text-xs font-semibold transition-all duration-200 flex items-center gap-1.5 {{ request('status') === 'unread' ? 'bg-amber-500 text-white shadow-sm' : 'bg-slate-100 text-[#475569] hover:bg-slate-200' }}">
                <span class="w-1.5 h-1.5 rounded-full {{ request('status') === 'unread' ? 'bg-white' : 'bg-amber-500' }}"></span>
                Belum Dibaca ({{ $unreadCount }})
            </a>
            <a href="{{ route('admin.messages.index', array_merge(request()->except(['status', 'page']), ['status' => 'read'])) }}"
               class="px-3.5 py-1.5 rounded-xl text-xs font-semibold transition-all duration-200 {{ request('status') === 'read' ? 'bg-emerald-600 text-white shadow-sm' : 'bg-slate-100 text-[#475569] hover:bg-slate-200' }}">
                Sudah Dibaca ({{ $readCount }})
            </a>
        </div>

        <!-- Search & Subject Filter Form -->
        <form action="{{ route('admin.messages.index') }}" method="GET" class="grid grid-cols-1 sm:grid-cols-12 gap-3">
            @if(request('status'))
                <input type="hidden" name="status" value="{{ request('status') }}">
            @endif

            <div class="sm:col-span-7 lg:col-span-8 relative">
                <input type="text" name="search" value="{{ request('search') }}" 
                    placeholder="Cari berdasarkan nama pengirim, nomor WhatsApp, email, atau kata kunci..."
                    class="w-full pl-10 pr-4 py-2 bg-slate-50 border border-[#e2e8f0] rounded-xl text-xs focus:outline-none focus:ring-2 focus:ring-[#0c61cf]/20 focus:border-[#0c61cf] transition-all">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-[#94a3b8]">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
            </div>

            <div class="sm:col-span-3 lg:col-span-3">
                <select name="subject" class="w-full px-3 py-2 bg-slate-50 border border-[#e2e8f0] rounded-xl text-xs focus:outline-none focus:ring-2 focus:ring-[#0c61cf]/20 focus:border-[#0c61cf] transition-all">
                    <option value="">Semua Topik</option>
                    @foreach($subjects as $subj)
                        <option value="{{ $subj }}" {{ request('subject') == $subj ? 'selected' : '' }}>
                            {{ $subj }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="sm:col-span-2 lg:col-span-1 flex gap-2">
                <button type="submit" class="w-full py-2 px-3 bg-[#0c61cf] hover:bg-[#094fa5] text-white rounded-xl text-xs font-semibold transition-all duration-200 flex items-center justify-center gap-1.5 shadow-sm">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    <span>Cari</span>
                </button>
                @if(request()->hasAny(['search', 'subject', 'status']))
                    <a href="{{ route('admin.messages.index') }}" class="p-2 bg-slate-100 hover:bg-slate-200 text-[#64748b] rounded-xl text-xs flex items-center justify-center shrink-0" title="Reset Filter">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </a>
                @endif
            </div>
        </form>
    </div>

    <!-- Messages Table List -->
    <div class="bg-white border border-[#e2e8f0] rounded-2xl shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead>
                    <tr class="bg-[#f8fafc] border-b border-[#e2e8f0] text-[#64748b] font-semibold">
                        <th class="py-3 px-4 w-12 text-center">Status</th>
                        <th class="py-3 px-4">Pengirim</th>
                        <th class="py-3 px-4">Kontak WhatsApp</th>
                        <th class="py-3 px-4">Topik</th>
                        <th class="py-3 px-4 max-w-[280px]">Pratinjau Pesan</th>
                        <th class="py-3 px-4">Waktu</th>
                        <th class="py-3 px-4 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-[#f1f5f9]">
                    @forelse($messages as $msg)
                        <tr class="hover:bg-[#f8fafc] transition-colors group {{ !$msg->is_read ? 'bg-blue-50/30 font-medium' : '' }}">
                            
                            <!-- Status Indicator -->
                            <td class="py-3.5 px-4 text-center">
                                @if(!$msg->is_read)
                                    <span class="inline-flex items-center justify-center w-6 h-6 rounded-full bg-amber-100 text-amber-600" title="Pesan Belum Dibaca">
                                        <span class="w-2.5 h-2.5 rounded-full bg-amber-500 animate-ping"></span>
                                    </span>
                                @else
                                    <span class="inline-flex items-center justify-center w-6 h-6 rounded-full bg-slate-100 text-[#94a3b8]" title="Sudah Dibaca">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                    </span>
                                @endif
                            </td>

                            <!-- Pengirim -->
                            <td class="py-3.5 px-4">
                                <a href="{{ route('admin.messages.show', $msg->id) }}" class="font-bold text-[#0f172a] hover:text-[#0c61cf] block transition-colors">
                                    {{ $msg->name }}
                                </a>
                                @if($msg->email)
                                    <span class="text-[11px] text-[#64748b] block">{{ $msg->email }}</span>
                                @endif
                            </td>

                            <!-- WhatsApp Contact -->
                            <td class="py-3.5 px-4">
                                <div class="flex items-center gap-2">
                                    <span class="font-mono text-xs text-[#334155]">{{ $msg->phone }}</span>
                                    <a href="{{ $msg->whatsapp_url }}" target="_blank"
                                       class="inline-flex items-center gap-1 px-2 py-0.5 rounded-md bg-emerald-50 hover:bg-emerald-600 text-emerald-700 hover:text-white border border-emerald-200 text-[11px] font-semibold transition-all duration-200" title="Balas via WhatsApp">
                                        <svg class="w-3 h-3 fill-current" viewBox="0 0 24 24">
                                            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                                        </svg>
                                        <span>WA</span>
                                    </a>
                                </div>
                            </td>

                            <!-- Topik -->
                            <td class="py-3.5 px-4">
                                <span class="inline-flex px-2.5 py-0.5 rounded-full text-[11px] font-medium bg-[#0c61cf]/10 text-[#0c61cf]">
                                    {{ $msg->subject }}
                                </span>
                            </td>

                            <!-- Preview Pesan -->
                            <td class="py-3.5 px-4 max-w-[280px]">
                                <p class="text-[#475569] truncate block" title="{{ $msg->message }}">
                                    {{ Str::limit($msg->message, 80) }}
                                </p>
                            </td>

                            <!-- Waktu -->
                            <td class="py-3.5 px-4 text-[#64748b] whitespace-nowrap">
                                <span class="block">{{ $msg->created_at->format('d M Y') }}</span>
                                <span class="text-[10px] text-[#94a3b8] block">{{ $msg->created_at->format('H:i') }} WIB</span>
                            </td>

                            <!-- Aksi -->
                            <td class="py-3.5 px-4 text-right whitespace-nowrap">
                                <div class="inline-flex items-center gap-1.5">
                                    
                                    <!-- Detail / Buka Pesan -->
                                    <a href="{{ route('admin.messages.show', $msg->id) }}" 
                                       class="p-1.5 rounded-lg bg-slate-100 hover:bg-[#0c61cf] hover:text-white text-[#475569] transition-colors" title="Buka Detail Pesan">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                        </svg>
                                    </a>

                                    <!-- Quick Toggle Read Status -->
                                    <form action="{{ route('admin.messages.toggle', $msg->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" 
                                            class="p-1.5 rounded-lg {{ $msg->is_read ? 'bg-slate-100 hover:bg-amber-100 text-[#475569] hover:text-amber-700' : 'bg-amber-100 hover:bg-emerald-100 text-amber-700 hover:text-emerald-700' }} transition-colors cursor-pointer" 
                                            title="{{ $msg->is_read ? 'Tandai belum dibaca' : 'Tandai sudah dibaca' }}">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                            </svg>
                                        </button>
                                    </form>

                                    <!-- Hapus Pesan -->
                                    <form action="{{ route('admin.messages.destroy', $msg->id) }}" method="POST" class="inline"
                                          onsubmit="return confirm('Apakah Anda yakin ingin menghapus pesan dari {{ addslashes($msg->name) }}?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="p-1.5 rounded-lg bg-slate-100 hover:bg-rose-100 text-[#475569] hover:text-rose-600 transition-colors cursor-pointer" title="Hapus Pesan">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                        </button>
                                    </form>

                                </div>
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="py-12 text-center text-[#94a3b8]">
                                <div class="flex flex-col items-center justify-center gap-2">
                                    <div class="w-12 h-12 rounded-full bg-slate-100 flex items-center justify-center text-slate-400">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                                        </svg>
                                    </div>
                                    <span class="text-sm font-medium text-[#64748b]">Tidak ada pesan yang ditemukan</span>
                                    <span class="text-xs text-[#94a3b8]">Pesan yang dikirimkan oleh pengunjung melalui formulir kontak akan muncul di sini.</span>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        @if($messages->hasPages())
            <div class="p-4 border-t border-[#f1f5f9] bg-[#fafafa]">
                {{ $messages->links() }}
            </div>
        @endif
    </div>

</div>
@endsection
