@extends('admin.layouts.app')

@section('title', 'Detail Pesan - ' . $message->name)
@section('page_title', 'Detail Pesan Masuk')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">

    <!-- Top Action Bar & Navigation -->
    <div class="flex items-center justify-between">
        <a href="{{ route('admin.messages.index') }}" 
           class="inline-flex items-center gap-2 text-xs font-semibold text-[#64748b] hover:text-[#0c61cf] transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
            </svg>
            <span>Kembali ke Daftar Pesan</span>
        </a>

        <div class="flex items-center gap-2">
            <!-- Toggle Read Button -->
            <form action="{{ route('admin.messages.toggle', $message->id) }}" method="POST" class="inline">
                @csrf
                @method('PATCH')
                <button type="submit" 
                    class="px-3 py-1.5 rounded-xl border border-[#e2e8f0] bg-white hover:bg-slate-50 text-xs font-medium text-[#475569] transition-all flex items-center gap-1.5 cursor-pointer">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    <span>{{ $message->is_read ? 'Tandai Belum Dibaca' : 'Tandai Sudah Dibaca' }}</span>
                </button>
            </form>

            <!-- Delete Button -->
            <form action="{{ route('admin.messages.destroy', $message->id) }}" method="POST" class="inline"
                  onsubmit="return confirm('Apakah Anda yakin ingin menghapus pesan ini?');">
                @csrf
                @method('DELETE')
                <button type="submit" 
                    class="px-3 py-1.5 rounded-xl border border-rose-200 bg-rose-50 hover:bg-rose-100 text-xs font-medium text-rose-700 transition-all flex items-center gap-1.5 cursor-pointer">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                    </svg>
                    <span>Hapus</span>
                </button>
            </form>
        </div>
    </div>

    <!-- Main Message Card -->
    <div class="bg-white border border-[#e2e8f0] rounded-2xl shadow-sm overflow-hidden">
        
        <!-- Header Info -->
        <div class="p-6 border-b border-[#f1f5f9] flex flex-col sm:flex-row sm:items-center justify-between gap-4 bg-[#f8fafc]">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-2xl bg-[#0c61cf]/10 text-[#0c61cf] font-bold text-lg flex items-center justify-center shrink-0">
                    {{ strtoupper(substr($message->name, 0, 2)) }}
                </div>
                <div>
                    <h2 class="text-base font-bold text-[#0f172a] font-['Funnel_Display',sans-serif]">
                        {{ $message->name }}
                    </h2>
                    <div class="flex flex-wrap items-center gap-2 mt-1 text-xs text-[#64748b]">
                        <span class="inline-flex items-center gap-1">
                            <svg class="w-3.5 h-3.5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            {{ $message->phone }}
                        </span>
                        @if($message->email)
                            <span>&bull;</span>
                            <span class="inline-flex items-center gap-1">
                                <svg class="w-3.5 h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                {{ $message->email }}
                            </span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="flex flex-col items-start sm:items-end gap-1">
                <span class="inline-flex px-3 py-1 rounded-full text-xs font-semibold bg-[#0c61cf]/10 text-[#0c61cf]">
                    Topik: {{ $message->subject }}
                </span>
                <span class="text-[11px] text-[#94a3b8]">
                    Diterima pada {{ $message->created_at->format('d M Y, H:i') }} WIB ({{ $message->created_at->diffForHumans() }})
                </span>
            </div>
        </div>

        <!-- Quick Responder Bar -->
        <div class="px-6 py-4 bg-emerald-50/50 border-b border-[#e2e8f0] flex flex-wrap items-center justify-between gap-3">
            <div class="flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                <span class="text-xs font-medium text-emerald-900">
                    Tanggapi langsung pengirim melalui kanal resmi:
                </span>
            </div>

            <div class="flex items-center gap-2.5">
                <!-- Direct WhatsApp Reply -->
                <a href="{{ $message->whatsapp_url }}" target="_blank"
                   class="inline-flex items-center gap-2 px-4 py-2 bg-emerald-600 hover:bg-emerald-700 text-white rounded-xl text-xs font-semibold shadow-sm transition-all duration-200">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                        <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                    </svg>
                    <span>Balas via WhatsApp</span>
                </a>

                @if($message->email)
                    <!-- Direct Email Reply -->
                    <a href="mailto:{{ $message->email }}?subject={{ rawurlencode('Balasan: Pertanyaan IDN Boarding School - ' . $message->subject) }}"
                       class="inline-flex items-center gap-2 px-4 py-2 bg-white hover:bg-slate-50 text-[#0c61cf] border border-[#0c61cf]/30 rounded-xl text-xs font-semibold shadow-sm transition-all duration-200">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <span>Kirim Email</span>
                    </a>
                @endif
            </div>
        </div>

        <!-- Body Message Content -->
        <div class="p-6 md:p-8 space-y-4">
            <span class="text-xs font-bold text-[#64748b] uppercase tracking-wider block">
                Isi Pesan / Pertanyaan Lengkap:
            </span>
            <div class="p-5 rounded-2xl bg-[#fafafa] border border-[#f1f5f9] text-[#181d27] text-sm leading-relaxed whitespace-pre-line font-normal">
{{ $message->message }}
            </div>
        </div>

        <!-- Admin Internal Notes Box -->
        <div class="p-6 border-t border-[#f1f5f9] bg-slate-50/50">
            <form action="{{ route('admin.messages.notes', $message->id) }}" method="POST" class="space-y-3">
                @csrf
                @method('PATCH')
                <div class="flex items-center justify-between">
                    <label for="admin_notes" class="text-xs font-bold text-[#334155] flex items-center gap-1.5">
                        <svg class="w-4 h-4 text-[#0c61cf]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                        </svg>
                        <span>Catatan Internal Admin / Tindak Lanjut (Follow-Up):</span>
                    </label>
                    <span class="text-[11px] text-[#94a3b8]">Hanya terlihat oleh tim internal Super Admin</span>
                </div>

                <textarea name="admin_notes" id="admin_notes" rows="3" 
                    placeholder="Contoh: Sudah dihubungi melalui WA tgl 25 Sep oleh Ust. Ahmad. Tertarik program SMK RPL untuk putranya..."
                    class="w-full p-3 bg-white border border-[#e2e8f0] rounded-xl text-xs focus:outline-none focus:ring-2 focus:ring-[#0c61cf]/20 focus:border-[#0c61cf] transition-all">{{ old('admin_notes', $message->admin_notes) }}</textarea>

                <div class="flex justify-end">
                    <button type="submit" 
                        class="px-4 py-2 bg-[#0c61cf] hover:bg-[#094fa5] text-white rounded-xl text-xs font-semibold shadow-sm transition-all duration-200 flex items-center gap-2 cursor-pointer">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>Simpan Catatan</span>
                    </button>
                </div>
            </form>
        </div>

    </div>

</div>
@endsection
