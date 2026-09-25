<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="w-full max-w-full overflow-x-hidden">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <x-seo-head 
        title="Kontak Kami - IDN Boarding School"
        description="Hubungi layanan informasi, customer service, dan panitia PPDB IDN Boarding School melalui WhatsApp, Telepon, Email, atau kunjungan langsung."
        keywords="Kontak IDN Boarding School, Alamat Sekolah IDN Jonggol, No WA IDN Boarding School"
    />
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@400;500;600;700&family=Outfit:wght@400;500;600;700&family=Inter:ital,wght@0,400;0,500;0,600;1,500&family=Funnel+Display:wght@500;600;700;800&family=Figtree:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Alpine.js for Interactive Component State -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#fafafa] text-[#181d27] min-h-screen w-full max-w-full overflow-x-hidden font-sans antialiased flex flex-col items-center relative">

    <!-- NAVBAR -->
    <x-navbar active="kontak" />

    <!-- MAIN CONTENT -->
    <main class="w-full flex-grow flex flex-col items-center">

        <!-- HERO & CONTACT CARDS SECTION (Figma Node 19889:5497) -->
        <section class="w-full max-w-full overflow-hidden flex flex-col items-center pt-[130px] md:pt-[160px] pb-12 md:pb-[110px] px-6 md:px-[64px] lg:px-[160px] bg-[#fafafa]">
            <div class="w-full max-w-[706px] lg:max-w-[1120px] mx-auto flex flex-col gap-10 md:gap-[64px]">
                
                <!-- HEADER CONTENT (Figma Node 19889:5498 - w-[674px]) -->
                <div class="flex flex-col gap-3 items-start text-left w-full max-w-[674px]">
                    <span class="text-[#717680] text-[15px] md:text-[16px] font-normal">Kontak</span>
                    
                    <div class="flex flex-col gap-4 items-start text-left w-full">
                        <h1 class="font-heading font-semibold text-[36px] sm:text-[48px] md:text-[56px] leading-[44px] sm:leading-[58px] md:leading-[68px] tracking-[-2.24px] text-[#0b0d12]">
                            Kami senang mendengar<br>
                            <span class="text-[#0c61cf]">kabar dari Anda</span><span class="text-[#181d27]">.</span>
                        </h1>
                        <p class="text-[#717680] text-[15px] md:text-[16px] leading-[24px] font-normal">
                            Punya pertanyaan seputar penerimaan santri baru (PPDB), kurikulum IT & Diniyah, kehidupan asrama, beasiswa, atau program kemitraan? Hubungi kami langsung melalui kanal resmi di bawah ini atau kirimkan pesan secara online.
                        </p>
                    </div>
                </div>

                <!-- 6 CONTACT CARDS GRID (Figma Node 19889:5503 - Default state, Hover effect like WhatsApp, template <img> tags) -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 w-full">
                    
                    <!-- CARD 1: WHATSAPP -->
                    <div class="bg-white border border-[#e9eaeb] hover:border-[#0c61cf] hover:shadow-[0px_4px_20px_rgba(0,0,0,0.1)] rounded-[18px] p-5 sm:p-6 flex flex-col justify-between gap-8 h-full transition-all duration-200 ease-out group">
                        <div class="flex flex-col gap-6 items-start text-left w-full">
                            <!-- WHATSAPP ICON (wa.avif) -->
                            <div class="w-10 h-10 flex items-center justify-center shrink-0">
                                <img src="{{ asset('assets/icons/wa.avif') }}" alt="WhatsApp Icon" class="w-10 h-10 object-contain">
                            </div>
                            <h2 class="font-semibold text-[20px] sm:text-[24px] leading-[32px] text-[#181d27]">
                                +62 822-1010-2006
                            </h2>
                        </div>
                        <a href="https://wa.me/6282210102006" target="_blank" class="bg-white border-2 border-[#e9eaeb] text-[#414651] group-hover:border-[#0c61cf] group-hover:bg-[#0c61cf] group-hover:text-white px-5 py-3 rounded-full font-semibold text-[16px] leading-none flex items-center justify-center gap-2 w-fit transition-all duration-200 ease-out">
                            <span>Chat Whatsapp</span>
                            <svg class="w-4 h-4 transition-transform duration-200 ease-out group-hover:translate-x-1 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </a>
                    </div>

                    <!-- CARD 2: INSTAGRAM -->
                    <div class="bg-white border border-[#e9eaeb] hover:border-[#0c61cf] hover:shadow-[0px_4px_20px_rgba(0,0,0,0.1)] rounded-[18px] p-5 sm:p-6 flex flex-col justify-between gap-8 h-full transition-all duration-200 ease-out group">
                        <div class="flex flex-col gap-6 items-start text-left w-full">
                            <!-- INSTAGRAM ICON (ig.avif) -->
                            <div class="w-10 h-10 flex items-center justify-center shrink-0">
                                <img src="{{ asset('assets/icons/ig.avif') }}" alt="Instagram Icon" class="w-10 h-10 object-contain">
                            </div>
                            <h2 class="font-semibold text-[20px] sm:text-[24px] leading-[32px] text-[#181d27]">
                                @idnboardingschool
                            </h2>
                        </div>
                        <a href="https://instagram.com/idnboardingschool" target="_blank" class="bg-white border-2 border-[#e9eaeb] text-[#414651] group-hover:border-[#0c61cf] group-hover:bg-[#0c61cf] group-hover:text-white px-5 py-3 rounded-full font-semibold text-[16px] transition-all duration-200 ease-out w-fit">
                            Buka Instagram
                        </a>
                    </div>

                    <!-- CARD 3: EMAIL -->
                    <div class="bg-white border border-[#e9eaeb] hover:border-[#0c61cf] hover:shadow-[0px_4px_20px_rgba(0,0,0,0.1)] rounded-[18px] p-5 sm:p-6 flex flex-col justify-between gap-8 h-full transition-all duration-200 ease-out group">
                        <div class="flex flex-col gap-6 items-start text-left w-full">
                            <!-- EMAIL ICON (gmail.avif) -->
                            <div class="w-10 h-10 flex items-center justify-center shrink-0">
                                <img src="{{ asset('assets/icons/gmail.avif') }}" alt="Email Icon" class="w-10 h-10 object-contain">
                            </div>
                            <h2 class="font-semibold text-[20px] sm:text-[24px] leading-[32px] text-[#181d27]">
                                info@idn.sch.id
                            </h2>
                        </div>
                        <a href="mailto:info@idn.sch.id" class="bg-white border-2 border-[#e9eaeb] text-[#414651] group-hover:border-[#0c61cf] group-hover:bg-[#0c61cf] group-hover:text-white px-5 py-3 rounded-full font-semibold text-[16px] transition-all duration-200 ease-out w-fit">
                            Kirim Email
                        </a>
                    </div>

                    <!-- CARD 4: FACEBOOK -->
                    <div class="bg-white border border-[#e9eaeb] hover:border-[#0c61cf] hover:shadow-[0px_4px_20px_rgba(0,0,0,0.1)] rounded-[18px] p-5 sm:p-6 flex flex-col justify-between gap-8 h-full transition-all duration-200 ease-out group">
                        <div class="flex flex-col gap-6 items-start text-left w-full">
                            <!-- FACEBOOK ICON (fb.avif) -->
                            <div class="w-10 h-10 flex items-center justify-center shrink-0">
                                <img src="{{ asset('assets/icons/fb.avif') }}" alt="Facebook Icon" class="w-10 h-10 object-contain">
                            </div>
                            <h2 class="font-semibold text-[20px] sm:text-[24px] leading-[32px] text-[#181d27]">
                                IDN Boarding School
                            </h2>
                        </div>
                        <a href="https://www.facebook.com/idnboardingschool" target="_blank" class="bg-white border-2 border-[#e9eaeb] text-[#414651] group-hover:border-[#0c61cf] group-hover:bg-[#0c61cf] group-hover:text-white px-5 py-3 rounded-full font-semibold text-[16px] transition-all duration-200 ease-out w-fit">
                            Buka Facebook
                        </a>
                    </div>

                    <!-- CARD 5: TIKTOK -->
                    <div class="bg-white border border-[#e9eaeb] hover:border-[#0c61cf] hover:shadow-[0px_4px_20px_rgba(0,0,0,0.1)] rounded-[18px] p-5 sm:p-6 flex flex-col justify-between gap-8 h-full transition-all duration-200 ease-out group">
                        <div class="flex flex-col gap-6 items-start text-left w-full">
                            <!-- TIKTOK ICON (tt.avif) -->
                            <div class="w-10 h-10 flex items-center justify-center shrink-0">
                                <img src="{{ asset('assets/icons/tt.avif') }}" alt="TikTok Icon" class="w-10 h-10 object-contain">
                            </div>
                            <h2 class="font-semibold text-[20px] sm:text-[24px] leading-[32px] text-[#181d27]">
                                IDN Boarding School
                            </h2>
                        </div>
                        <a href="https://www.tiktok.com/@idn.boardingschool" target="_blank" class="bg-white border-2 border-[#e9eaeb] text-[#414651] group-hover:border-[#0c61cf] group-hover:bg-[#0c61cf] group-hover:text-white px-5 py-3 rounded-full font-semibold text-[16px] transition-all duration-200 ease-out w-fit">
                            Buka Tiktok
                        </a>
                    </div>

                    <!-- CARD 6: YOUTUBE -->
                    <div class="bg-white border border-[#e9eaeb] hover:border-[#0c61cf] hover:shadow-[0px_4px_20px_rgba(0,0,0,0.1)] rounded-[18px] p-5 sm:p-6 flex flex-col justify-between gap-8 h-full transition-all duration-200 ease-out group">
                        <div class="flex flex-col gap-6 items-start text-left w-full">
                            <!-- YOUTUBE ICON (yt.avif) -->
                            <div class="w-10 h-10 flex items-center justify-center shrink-0">
                                <img src="{{ asset('assets/icons/yt.avif') }}" alt="YouTube Icon" class="w-10 h-10 object-contain">
                            </div>
                            <h2 class="font-semibold text-[20px] sm:text-[24px] leading-[32px] text-[#181d27]">
                                IDN TV
                            </h2>
                        </div>
                        <a href="https://www.youtube.com/@IDNTV2022" target="_blank" class="bg-white border-2 border-[#e9eaeb] text-[#414651] group-hover:border-[#0c61cf] group-hover:bg-[#0c61cf] group-hover:text-white px-5 py-3 rounded-full font-semibold text-[16px] transition-all duration-200 ease-out w-fit">
                            Buka Youtube
                        </a>
                    </div>

                </div>

            </div>
        </section>


        <!-- INTERACTIVE CONTACT & CONSULTATION FORM SECTION -->
        <section id="form-pesan" class="w-full max-w-full overflow-hidden flex flex-col items-center py-12 md:py-[90px] px-6 md:px-[64px] lg:px-[160px] bg-white border-y border-[#e9eaeb]">
            <div class="w-full max-w-[706px] lg:max-w-[1120px] mx-auto grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-start">
                
                <!-- LEFT COLUMN: Consultation Info & Benefits -->
                <div class="lg:col-span-5 flex flex-col gap-6 text-left">
                    <div>
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#0c61cf]/10 text-[#0c61cf] text-xs font-semibold mb-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#0c61cf]"></span>
                            Layanan Konsultasi Online
                        </span>
                        <h2 class="font-heading font-semibold text-[28px] sm:text-[34px] md:text-[40px] leading-[36px] sm:leading-[44px] md:leading-[48px] tracking-[-1.5px] text-[#0b0d12]">
                            Kirim Pertanyaan ke <span class="text-[#0c61cf]">Tim Kami</span>
                        </h2>
                        <p class="text-[#717680] text-[15px] leading-[24px] mt-3">
                            Punya pertanyaan khusus seputar seleksi santri baru, program keahlian (RPL, TKJ, DKV), beasiswa tahfidz, atau kunjungan langsung? Tuliskan pesan Anda dan tim kami akan segera menghubungi Anda.
                        </p>
                    </div>

                    <!-- Highlight Perks -->
                    <div class="space-y-4 pt-2">
                        <div class="flex items-start gap-3.5">
                            <div class="w-10 h-10 rounded-xl bg-[#0c61cf]/10 text-[#0c61cf] flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-[16px] text-[#181d27]">Respon Cepat via WhatsApp</h3>
                                <p class="text-xs text-[#717680] mt-0.5 leading-relaxed">Pesan Anda langsung diteruskan ke tim panitia IDN untuk ditanggapi secara personal.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3.5">
                            <div class="w-10 h-10 rounded-xl bg-emerald-500/10 text-emerald-600 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-[16px] text-[#181d27]">Konsultasi Peminatan Gratis</h3>
                                <p class="text-xs text-[#717680] mt-0.5 leading-relaxed">Dapatkan arahan jurusan yang tepat sesuai bakat dan minat calon santri.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3.5">
                            <div class="w-10 h-10 rounded-xl bg-indigo-500/10 text-indigo-600 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-[16px] text-[#181d27]">Kampus Jonggol & Solo</h3>
                                <p class="text-xs text-[#717680] mt-0.5 leading-relaxed">Menerima pendaftaran santri putra (Jonggol & Solo) dan santri putri (Pamijahan & Solo).</p>
                            </div>
                        </div>
                    </div>

                    <!-- Campus Location Box -->
                    <div class="p-4 rounded-2xl bg-[#fafafa] border border-[#e9eaeb] space-y-2 text-xs text-[#414651] mt-2">
                        <div class="font-semibold text-[#181d27] flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-[#0c61cf]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <span>Alamat Kampus Pusat:</span>
                        </div>
                        <p class="leading-relaxed">
                            Jl. Raya Dayeuh, Sukanegara, Kec. Jonggol, Kabupaten Bogor, Jawa Barat 16830
                        </p>
                        <div class="text-[11px] text-[#717680] pt-1">
                            Jam Layanan: Senin &ndash; Sabtu, 08.00 &ndash; 16.00 WIB
                        </div>
                    </div>
                </div>

                <!-- RIGHT COLUMN: Submission Form Card -->
                <div class="lg:col-span-7 bg-[#fafafa] border border-[#e9eaeb] rounded-[24px] p-6 sm:p-8 md:p-10 shadow-sm relative">
                    
                    <!-- Success Flash Alert -->
                    @if(session('success'))
                        <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-800 rounded-2xl flex items-start gap-3 shadow-sm animate-fade-in">
                            <div class="w-7 h-7 rounded-lg bg-emerald-500 text-white flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div class="text-xs sm:text-sm">
                                <span class="font-bold block text-emerald-900">Pesan Berhasil Terkirim!</span>
                                <p class="mt-0.5 text-emerald-700 leading-relaxed">{{ session('success') }}</p>
                            </div>
                        </div>
                    @endif

                    <!-- Validation Errors Alert -->
                    @if($errors->any())
                        <div class="mb-6 p-4 bg-rose-50 border border-rose-200 text-rose-800 rounded-2xl flex items-start gap-3 shadow-sm">
                            <div class="w-7 h-7 rounded-lg bg-rose-500 text-white flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </div>
                            <div class="text-xs sm:text-sm">
                                <span class="font-bold block text-rose-900">Mohon lengkapi formulir dengan benar:</span>
                                <ul class="list-disc list-inside mt-1 text-rose-700 space-y-0.5">
                                    @foreach($errors->all() as $err)
                                        <li>{{ $err }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-5">
                        @csrf

                        <!-- Row 1: Nama Lengkap -->
                        <div>
                            <label for="name" class="block text-xs sm:text-sm font-semibold text-[#181d27] mb-2">
                                Nama Lengkap <span class="text-rose-500">*</span>
                            </label>
                            <input type="text" name="name" id="name" required value="{{ old('name') }}"
                                placeholder="Contoh: Muhammad Fatih"
                                class="w-full px-4 py-3 bg-white border border-[#d5d7da] focus:border-[#0c61cf] focus:ring-4 focus:ring-[#0c61cf]/10 rounded-xl text-sm text-[#181d27] placeholder:text-[#94a3b8] transition-all outline-none">
                        </div>

                        <!-- Row 2: Nomor WhatsApp & Email -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="phone" class="block text-xs sm:text-sm font-semibold text-[#181d27] mb-2">
                                    Nomor WhatsApp / HP <span class="text-rose-500">*</span>
                                </label>
                                <div class="relative">
                                    <input type="tel" name="phone" id="phone" required value="{{ old('phone') }}"
                                        placeholder="0812xxxxxxxx"
                                        class="w-full px-4 py-3 bg-white border border-[#d5d7da] focus:border-[#0c61cf] focus:ring-4 focus:ring-[#0c61cf]/10 rounded-xl text-sm text-[#181d27] placeholder:text-[#94a3b8] transition-all outline-none">
                                </div>
                                <span class="text-[11px] text-[#717680] mt-1 block">Tim IDN akan menghubungi balik melalui nomor ini.</span>
                            </div>

                            <div>
                                <label for="email" class="block text-xs sm:text-sm font-semibold text-[#181d27] mb-2">
                                    Alamat Email <span class="text-[#717680] font-normal text-xs">(Opsional)</span>
                                </label>
                                <input type="email" name="email" id="email" value="{{ old('email') }}"
                                    placeholder="nama@email.com"
                                    class="w-full px-4 py-3 bg-white border border-[#d5d7da] focus:border-[#0c61cf] focus:ring-4 focus:ring-[#0c61cf]/10 rounded-xl text-sm text-[#181d27] placeholder:text-[#94a3b8] transition-all outline-none">
                            </div>
                        </div>

                        <!-- Row 3: Topik Pertanyaan -->
                        <div>
                            <label for="subject" class="block text-xs sm:text-sm font-semibold text-[#181d27] mb-2">
                                Topik / Kategori Pesan <span class="text-rose-500">*</span>
                            </label>
                            <select name="subject" id="subject" required
                                class="w-full px-4 py-3 bg-white border border-[#d5d7da] focus:border-[#0c61cf] focus:ring-4 focus:ring-[#0c61cf]/10 rounded-xl text-sm text-[#181d27] transition-all outline-none">
                                <option value="" disabled {{ old('subject') ? '' : 'selected' }}>Pilih topik konsultasi...</option>
                                <option value="Informasi PPDB & Biaya Masuk" {{ old('subject') == 'Informasi PPDB & Biaya Masuk' ? 'selected' : '' }}>Informasi PPDB & Biaya Masuk</option>
                                <option value="Kurikulum IT (RPL, TKJ, DKV)" {{ old('subject') == 'Kurikulum IT (RPL, TKJ, DKV)' ? 'selected' : '' }}>Kurikulum IT (RPL, TKJ, DKV)</option>
                                <option value="Fasilitas Asrama & Kehidupan Santri" {{ old('subject') == 'Fasilitas Asrama & Kehidupan Santri' ? 'selected' : '' }}>Fasilitas Asrama & Kehidupan Santri</option>
                                <option value="Kunjungan Sekolah / Edu Tour" {{ old('subject') == 'Kunjungan Sekolah / Edu Tour' ? 'selected' : '' }}>Kunjungan Sekolah / Edu Tour</option>
                                <option value="Kemitraan Industri & Magang (PKL)" {{ old('subject') == 'Kemitraan Industri & Magang (PKL)' ? 'selected' : '' }}>Kemitraan Industri & Magang (PKL)</option>
                                <option value="Program Beasiswa Santri" {{ old('subject') == 'Program Beasiswa Santri' ? 'selected' : '' }}>Program Beasiswa Santri</option>
                                <option value="Pertanyaan Umum Lainnya" {{ old('subject') == 'Pertanyaan Umum Lainnya' ? 'selected' : '' }}>Pertanyaan Umum Lainnya</option>
                            </select>
                        </div>

                        <!-- Row 4: Isi Pesan -->
                        <div>
                            <label for="message" class="block text-xs sm:text-sm font-semibold text-[#181d27] mb-2">
                                Isi Pesan atau Pertanyaan <span class="text-rose-500">*</span>
                            </label>
                            <textarea name="message" id="message" rows="4" required
                                placeholder="Tuliskan pertanyaan, keluhan, atau informasi yang ingin Anda tanyakan secara detail..."
                                class="w-full px-4 py-3 bg-white border border-[#d5d7da] focus:border-[#0c61cf] focus:ring-4 focus:ring-[#0c61cf]/10 rounded-xl text-sm text-[#181d27] placeholder:text-[#94a3b8] transition-all outline-none leading-relaxed">{{ old('message') }}</textarea>
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <button type="submit" 
                                class="w-full py-3.5 px-6 bg-[#0c61cf] hover:bg-[#094fa5] text-white rounded-full font-semibold text-[16px] leading-none flex items-center justify-center gap-2.5 transition-all duration-200 shadow-md hover:shadow-lg cursor-pointer">
                                <span>Kirim Pesan Sekarang</span>
                                <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </button>
                            <span class="text-[11px] text-[#717680] text-center block mt-2.5">
                                Kami menjaga privasi data Anda dengan aman dan tidak akan menyebarkannya.
                            </span>
                        </div>
                    </form>
                </div>

            </div>
        </section>


        <!-- REGISTRATION SECTION (Figma Node 19889:5542) -->
        <section class="w-full max-w-full overflow-hidden flex flex-col items-center py-12 md:py-[90px] px-6 md:px-[64px] lg:px-[160px] bg-[#fafafa]">
            <div class="w-full max-w-[706px] lg:max-w-[1120px] mx-auto bg-[#0c61cf] rounded-[20px] p-6 md:p-[40px] text-white flex flex-col justify-between gap-6 md:gap-8 relative overflow-hidden shadow-lg">
                <!-- BACKGROUND DECORATIVE GLOW -->
                <div class="absolute -top-40 -right-40 w-[390px] h-[423px] bg-white/20 blur-[64px] rounded-full pointer-events-none"></div>

                <!-- REGISTRATION INFO (Figma Node 19889:5544) -->
                <div class="flex flex-col gap-4 items-start text-left z-10 max-w-[672px]">
                    <span class="text-[#d5d7da] text-[14px] font-normal">PPDB 2027/2028</span>
                    <h2 class="font-heading font-bold text-[32px] sm:text-[40px] md:text-[48px] leading-[40px] sm:leading-[50px] md:leading-[60px] tracking-[-1.92px]">
                        <span class="text-[#ff7a29]">Kuota terbatas.</span> Ambil langkahmu hari ini.
                    </h2>
                    <p class="text-[#d5d7da] text-[15px] md:text-[16px] leading-[24px] font-normal">
                        Gelombang 1 dibuka hingga kuota per jurusan terpenuhi. Daftar sekarang untuk mengamankan tempat dan mendapatkan potongan uang masuk.
                    </p>
                </div>

                <!-- REGISTRATION CTA BUTTONS (Figma Node 19889:5549) -->
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4 z-10">
                    <a href="/ppdb" class="group bg-white text-[#0c61cf] px-6 py-3 rounded-full font-semibold text-[16px] leading-none h-[48px] flex items-center justify-center gap-2 hover:bg-slate-100 hover:shadow-md transition-all duration-200 shadow-sm">
                        <span>Mulai Pendaftaran</span>
                        <svg class="w-4 h-4 transition-transform duration-200 ease-out group-hover:translate-x-1 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                    <a href="https://wa.me/6282210102006" target="_blank" class="group bg-[#0c61cf] border border-[#d5d7da] text-white px-6 py-3 rounded-full font-semibold text-[16px] leading-none h-[48px] flex items-center justify-center gap-2 hover:bg-[#094fa5] hover:border-white transition-all duration-200">
                        <span>Tanya Via WhatsApp</span>
                        <svg class="w-4 h-4 transition-transform duration-200 ease-out group-hover:translate-x-1 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </section>

    </main>

    <!-- FOOTER -->
    <x-footer />

    <!-- CHATBOT COMPONENT -->
    <x-chatbot />

</body>
</html>
