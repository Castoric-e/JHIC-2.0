<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <x-seo-head 
            title="IDN Boarding School - Menghafal Al-Qur'an, Membangun Teknologi"
            description="IDN Boarding School adalah Sekolah SMP & SMA IT Terbaik di Bogor yang berfokus pada Menghafal Al-Qur'an dan Penguasaan Teknologi (IT), Coding, Cyber Security, dan UI/UX."
        />
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Geist:wght@400;500;600;700&family=Outfit:wght@400;500;600;700&family=Inter:ital,wght@0,400;0,500;0,600;1,500&family=Funnel+Display:wght@500;600;700;800&family=Figtree:wght@400;500;600;700&display=swap" rel="stylesheet">
        
        <!-- Alpine.js for Interactive Component State -->
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <style>[x-cloak] { display: none !important; }</style>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#fafafa] text-[#181d27] min-h-screen w-full max-w-full overflow-x-hidden font-sans antialiased flex flex-col items-center">

    <!-- 1. REUSABLE NAVBAR COMPONENT (Desktop Specs strictly per Figma) -->
    <x-navbar active="beranda" />

    <!-- 2. HERO HEADER SECTION (Figma Node 19900:12342) -->
    <section class="w-full max-w-full overflow-hidden flex flex-col items-center pt-[130px] md:pt-[160px] pb-12 md:pb-[110px] bg-[#fafafa]">
        
        <!-- MAIN CONTENT CONTAINER (1120px width, centered) -->
        <div class="w-[1120px] max-w-full mx-auto flex flex-col lg:flex-row items-center justify-between gap-8 md:gap-14 py-4 px-4 sm:px-6">
            
            <!-- LEFT TEXT CONTAINER (615px width) -->
            <div class="w-full lg:w-[615px] max-w-full flex flex-col gap-6 md:gap-8 items-start text-left">
                
                <!-- DESCRIPTION CONTAINER -->
                <div class="flex flex-col gap-4 md:gap-6 items-start text-left w-full">
                    <!-- MAIN HEADING (56px Geist/Funnel Display) -->
                    <h1 class="font-heading font-semibold text-[32px] sm:text-[44px] md:text-[56px] leading-[42px] sm:leading-[54px] md:leading-[68px] tracking-[-1.5px] md:tracking-[-2.24px] text-[#0b0d12] flex flex-col items-start text-left">
                        <span>Menghafal Al-Qur'an.</span>
                        <span class="text-[#0c61cf]">Membangun Teknologi.</span>
                        <span>Berkarya di Dunia Nyata.</span>
                    </h1>

                    <!-- PARAGRAPH TEXT -->
                    <p class="text-[#717680] text-[15px] md:text-[16px] leading-[24px] max-w-[615px] font-normal text-left">
                        IDN Boarding School Bogor memadukan kurikulum teknologi, dengan tarbiyah Islami dan kehidupan asrama yang membentuk akhlak mulia.
                    </p>
                </div>

                <!-- BUTTON CONTAINER (Left-aligned) -->
                <div class="flex flex-wrap items-center justify-start gap-4 pt-2 w-full">
                    <a href="/ppdb" class="group bg-[#0c61cf] text-white px-6 py-3 rounded-full font-semibold text-[15px] md:text-[16px] leading-none h-[48px] flex items-center justify-center gap-2 shadow-sm transition-all duration-200 hover:bg-[#094fa5] hover:shadow-md shrink-0">
                        <span>Daftar Sekarang</span>
                        <svg class="w-4 h-4 transition-transform duration-200 ease-out group-hover:translate-x-1 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                    <a href="/program" class="group bg-white border-2 border-[#e9eaeb] text-[#414651] hover:text-[#0c61cf] px-6 py-3 rounded-full font-semibold text-[15px] md:text-[16px] leading-none h-[48px] flex items-center justify-center gap-2 transition-all duration-200 hover:bg-slate-50 hover:border-[#0c61cf] shrink-0">
                        <span>Lihat Jurusan</span>
                    </a>
                </div>
            </div>

            <!-- RIGHT HERO IMAGE (Full width on mobile/tablet) -->
            <div class="w-full lg:w-[449px] h-[320px] sm:h-[400px] lg:h-[456px] shrink-0 relative mt-4 lg:mt-0">
                <div class="w-full h-full rounded-[18px] shadow-[12px_12px_56px_0px_rgba(0,4,45,0.16)] overflow-hidden bg-slate-200">
                    <img src="{{ asset('assets/pages/home/main-image.avif') }}" alt="Gedung IDN Boarding School" class="w-full h-full object-cover">
                </div>
            </div>

        </div>

        <!-- METRIC CONTAINER (1120px width x 120px height, centered) -->
        <div class="w-[1120px] max-w-full mx-auto border-t border-b border-[#e9eaeb] py-3 sm:py-4 mt-6 md:mt-10 grid grid-cols-4 text-center px-1 sm:px-4">
            <div class="border-r border-[#e9eaeb] px-1 sm:px-4 md:px-6 py-2 sm:py-3 flex flex-col gap-1 items-center justify-center">
                <span class="font-bold text-[17px] sm:text-[24px] md:text-[28px] leading-tight md:leading-[38px] text-[#0c61cf]">10+</span>
                <span class="text-[#717680] text-[10.5px] xs:text-[12px] sm:text-[14px] md:text-[16px] leading-tight md:leading-[24px]">Tahun Berdiri</span>
            </div>
            <div class="border-r border-[#e9eaeb] px-1 sm:px-4 md:px-6 py-2 sm:py-3 flex flex-col gap-1 items-center justify-center">
                <span class="font-bold text-[17px] sm:text-[24px] md:text-[28px] leading-tight md:leading-[38px] text-[#0c61cf]">5</span>
                <span class="text-[#717680] text-[10.5px] xs:text-[12px] sm:text-[14px] md:text-[16px] leading-tight md:leading-[24px]">Cabang</span>
            </div>
            <div class="border-r border-[#e9eaeb] px-1 sm:px-4 md:px-6 py-2 sm:py-3 flex flex-col gap-1 items-center justify-center">
                <span class="font-bold text-[17px] sm:text-[24px] md:text-[28px] leading-tight md:leading-[38px] text-[#0c61cf]">1.500+</span>
                <span class="text-[#717680] text-[10.5px] xs:text-[12px] sm:text-[14px] md:text-[16px] leading-tight md:leading-[24px]">Alumni Sukses</span>
            </div>
            <div class="px-1 sm:px-4 md:px-6 py-2 sm:py-3 flex flex-col gap-1 items-center justify-center">
                <span class="font-bold text-[17px] sm:text-[24px] md:text-[28px] leading-tight md:leading-[38px] text-[#0c61cf]">1 Milyar+</span>
                <span class="text-[#717680] text-[10.5px] xs:text-[12px] sm:text-[14px] md:text-[16px] leading-tight md:leading-[24px]">Penghasilan Siswa</span>
            </div>
        </div>

    </section>


    <!-- 3. KENAPA MEMILIH IDN BOARDING SCHOOL? (Figma Node 19900:12369) -->
    <section class="w-full max-w-full overflow-hidden flex flex-col items-center py-16 md:py-[110px] bg-[#f5f5f5]">
        <div class="w-[1120px] max-w-full mx-auto flex flex-col items-center gap-6 md:gap-8 px-4 sm:px-6">
            
            <!-- SECTION HEADER -->
            <div class="flex flex-col items-center text-center gap-2">
                <h2 class="font-heading font-bold text-[28px] md:text-[32px] leading-[38px] md:leading-[42px] text-[#181d27]">
                    Kenapa Memilih <span class="text-[#0c61cf]">IDN Boarding School?</span>
                </h2>
                <p class="text-[#717680] text-[15px] md:text-[16px] leading-[24px] max-w-[640px]">
                    Lebih dari Sekadar Sekolah. Tapi menjadi tempat untuk Membangun Masa Depanmu.
                </p>
            </div>

            <!-- 6 CARDS GRID -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 w-full">
                
                <!-- Card 1: Sekolah IT Terbaik -->
                <div class="feature-card group bg-white rounded-[18px] p-5 md:p-6 flex flex-col gap-4 items-start w-full cursor-pointer">
                    <div class="feature-icon-btn bg-white border-2 border-[#e9eaeb] w-12 h-12 rounded-full flex items-center justify-center text-[#414651] shrink-0 transition-colors duration-200">
                        <svg class="w-5 h-5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="9.5"/>
                            <path d="M12 2.5a14.5 14.5 0 0 1 0 19a14.5 14.5 0 0 1 0-19z"/>
                            <path d="M2.5 12h19"/>
                            <path d="M4.5 7h15"/>
                            <path d="M4.5 17h15"/>
                        </svg>
                    </div>
                    <div class="flex flex-col gap-2">
                        <h3 class="font-semibold text-[20px] md:text-[24px] leading-[28px] md:leading-[32px] text-[#181d27]">Sekolah IT Terbaik</h3>
                        <p class="text-[#717680] text-[14px] md:text-[16px] leading-[22px] md:leading-[24px]">Terbukti dengan lulusan kami yang berada di atas standar atau bisa dikatakan expert, dan siap menjadi talenta IT profesional.</p>
                    </div>
                </div>

                <!-- Card 2: Ekstrakurikuler Menarik -->
                <div class="feature-card group bg-white rounded-[18px] p-5 md:p-6 flex flex-col gap-4 items-start w-full cursor-pointer">
                    <div class="feature-icon-btn bg-white border-2 border-[#e9eaeb] w-12 h-12 rounded-full flex items-center justify-center text-[#414651] shrink-0 transition-colors duration-200">
                        <svg class="w-5 h-5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="9.5"/>
                            <polygon points="12,8.2 15.6,10.8 14.2,15.2 9.8,15.2 8.4,10.8"/>
                            <line x1="12" y1="8.2" x2="12" y2="2.5"/>
                            <line x1="15.6" y1="10.8" x2="21.1" y2="8.9"/>
                            <line x1="14.2" y1="15.2" x2="18.2" y2="19.8"/>
                            <line x1="9.8" y1="15.2" x2="5.8" y2="19.8"/>
                            <line x1="8.4" y1="10.8" x2="2.9" y2="8.9"/>
                        </svg>
                    </div>
                    <div class="flex flex-col gap-2">
                        <h3 class="font-semibold text-[20px] md:text-[24px] leading-[28px] md:leading-[32px] text-[#181d27]">Ekstrakurikuler Menarik</h3>
                        <p class="text-[#717680] text-[14px] md:text-[16px] leading-[22px] md:leading-[24px]">Backpacking ASEAN, Edurace, Entrepreneur, Public Speaking, Berkuda, Beladiri, dan berbagai kegiatan menarik lainnya.</p>
                    </div>
                </div>

                <!-- Card 3: Pengajar Profesional -->
                <div class="feature-card group bg-white rounded-[18px] p-5 md:p-6 flex flex-col gap-4 items-start w-full cursor-pointer">
                    <div class="feature-icon-btn bg-white border-2 border-[#e9eaeb] w-12 h-12 rounded-full flex items-center justify-center text-[#414651] shrink-0 transition-colors duration-200">
                        <svg class="w-5 h-5 shrink-0" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 3.5L1 9l11 5.5l9-4.5v6.5h2V9L12 3.5z"/>
                            <path d="M5 12.8v3.7c0 2.5 3.1 4.5 7 4.5s7-2 7-4.5v-3.7l-7 3.5-7-3.5z"/>
                        </svg>
                    </div>
                    <div class="flex flex-col gap-2">
                        <h3 class="font-semibold text-[20px] md:text-[24px] leading-[28px] md:leading-[32px] text-[#181d27]">Pengajar Profesional</h3>
                        <p class="text-[#717680] text-[14px] md:text-[16px] leading-[22px] md:leading-[24px]">S2 UI, CCIE, Alumni STDI Imam Syafii Jember, Florida USA, dan berbagai pengalaman profesional di bidangnya.</p>
                    </div>
                </div>

                <!-- Card 4: Program Unggulan -->
                <div class="feature-card group bg-white rounded-[18px] p-5 md:p-6 flex flex-col gap-4 items-start w-full cursor-pointer">
                    <div class="feature-icon-btn bg-white border-2 border-[#e9eaeb] w-12 h-12 rounded-full flex items-center justify-center text-[#414651] shrink-0 transition-colors duration-200">
                        <svg class="w-5 h-5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 9H3.5a2 2 0 0 1-2-2V5.5a2 2 0 0 1 2-2H6"/>
                            <path d="M18 9h2.5a2 2 0 0 0 2-2V5.5a2 2 0 0 0-2-2H18"/>
                            <path d="M4 3.5h16v5.5a8 8 0 0 1-8 8 8 8 0 0 1-8-8V3.5z"/>
                            <path d="M12 17v3"/>
                            <path d="M8 20.5h8"/>
                        </svg>
                    </div>
                    <div class="flex flex-col gap-2">
                        <h3 class="font-semibold text-[20px] md:text-[24px] leading-[28px] md:leading-[32px] text-[#181d27]">Program Unggulan</h3>
                        <p class="text-[#717680] text-[14px] md:text-[16px] leading-[22px] md:leading-[24px]">Mengembangkan soft skill dan kompetensi melalui IDN Mengajar, Bootcamp, Leadership Camp, English Camp, IT Camp, dan lainnya.</p>
                    </div>
                </div>

                <!-- Card 5: Pesantren Berbasis IT -->
                <div class="feature-card group bg-white rounded-[18px] p-5 md:p-6 flex flex-col gap-4 items-start w-full cursor-pointer">
                    <div class="feature-icon-btn bg-white border-2 border-[#e9eaeb] w-12 h-12 rounded-full flex items-center justify-center text-[#414651] shrink-0 transition-colors duration-200">
                        <svg class="w-5 h-5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2.5L4 5.5v6c0 5.25 3.4 10.15 8 11.5 4.6-1.35 8-6.25 8-11.5v-6l-8-3z"/>
                            <path d="M9 12l2 2 4-4"/>
                        </svg>
                    </div>
                    <div class="flex flex-col gap-2">
                        <h3 class="font-semibold text-[20px] md:text-[24px] leading-[28px] md:leading-[32px] text-[#181d27]">Pesantren Berbasis IT</h3>
                        <p class="text-[#717680] text-[14px] md:text-[16px] leading-[22px] md:leading-[24px]">Menggabungkan pembelajaran Diniyah, Tahfidz, Bahasa Inggris, dan teknologi sesuai dengan jurusan serta kebutuhan industri.</p>
                    </div>
                </div>

                <!-- Card 6: Full Praktik -->
                <div class="feature-card group bg-white rounded-[18px] p-5 md:p-6 flex flex-col gap-4 items-start w-full cursor-pointer">
                    <div class="feature-icon-btn bg-white border-2 border-[#e9eaeb] w-12 h-12 rounded-full flex items-center justify-center text-[#414651] shrink-0 transition-colors duration-200">
                        <svg class="w-5 h-5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3.5" y="4.5" width="17" height="11" rx="2"/>
                            <path d="M2 18.5h20"/>
                            <path d="M10 18.5a2 2 0 0 0 4 0"/>
                        </svg>
                    </div>
                    <div class="flex flex-col gap-2">
                        <h3 class="font-semibold text-[20px] md:text-[24px] leading-[28px] md:leading-[32px] text-[#181d27]">Full Praktik</h3>
                        <p class="text-[#717680] text-[14px] md:text-[16px] leading-[22px] md:leading-[24px]">Pembelajaran berbasis praktik yang membuat siswa terbiasa mengerjakan project nyata dan siap terjun di lapangan</p>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!-- 4. JURUSAN YANG ADA DI IDN BOARDING SCHOOL (Figma Node 19900:12404) -->
    <section class="w-full max-w-full overflow-hidden flex flex-col items-center py-16 md:py-[110px] bg-[#fafafa]">
        <div class="w-[1120px] max-w-full mx-auto flex flex-col items-center gap-8 md:gap-12 px-4 sm:px-6">
            
            <!-- SECTION HEADER -->
            <div class="flex flex-col items-center text-center gap-2">
                <h2 class="font-heading font-bold text-[28px] md:text-[32px] leading-[38px] md:leading-[42px] text-[#0b0d12]">
                    Jurusan yang ada di <span class="text-[#0c61cf]">IDN Boarding School</span>
                </h2>
                <p class="text-[#717680] text-[15px] md:text-[16px] leading-[24px] max-w-[640px]">
                    Setiap jurusan dirancang bersama praktisi industri, dengan portofolio proyek nyata dan jalur sertifikasi yang diakui.
                </p>
            </div>

            <!-- 3 MAJOR CARDS GRID (1 column on mobile/tablet, 3 on desktop) -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 w-full justify-items-center">
                
                <!-- Major 1: RPL -->
                <div class="bg-white border border-[#e9eaeb] rounded-[18px] p-6 flex flex-col gap-8 items-center w-full max-w-none lg:max-w-[360px] justify-between transition-all duration-300 hover:border-[#0c61cf] hover:shadow-lg hover:-translate-y-1">
                    <div class="flex flex-col gap-6 w-full items-start">
                        <div class="flex items-center justify-between w-full">
                            <div class="w-12 h-12 rounded-full border border-[#c2d8f5] bg-white flex items-center justify-center text-[#0c61cf]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                                </svg>
                            </div>
                            <span class="bg-[#d9e7f9] text-[#0c61cf] px-3 py-1 rounded-full text-[12px] font-semibold">RPL</span>
                        </div>
                        <div class="flex flex-col gap-3 w-full">
                            <h3 class="font-semibold text-[20px] leading-[28px] text-[#181d27]">Rekayasa Perangkat Lunak</h3>
                            <p class="text-[#545e6f] text-[14px] leading-[20px]">
                                Membentuk developer muda yang menguasai web, mobile, dan pemrograman modern yang profesional.
                            </p>
                        </div>
                        <div class="flex flex-col gap-2.5 w-full">
                            <div class="flex gap-2 flex-wrap items-center">
                                <span class="bg-white border border-[#e9eaeb] px-3 py-1.5 rounded-full text-[13px] text-[#181d27] font-medium">Web Development</span>
                                <span class="bg-white border border-[#e9eaeb] px-3 py-1.5 rounded-full text-[13px] text-[#181d27] font-medium">Mobile App</span>
                            </div>
                            <div class="flex gap-2 flex-wrap items-center">
                                <span class="bg-white border border-[#e9eaeb] px-3 py-1.5 rounded-full text-[13px] text-[#181d27] font-medium">Database</span>
                                <span class="bg-white border border-[#e9eaeb] px-3 py-1.5 rounded-full text-[13px] text-[#181d27] font-medium">Front-End</span>
                                <span class="bg-white border border-[#e9eaeb] px-3 py-1.5 rounded-full text-[13px] text-[#181d27] font-medium">Back-End</span>
                            </div>
                        </div>
                    </div>
                    <a href="/program" class="group bg-[#0c61cf] text-white w-full h-[48px] rounded-full font-semibold text-[16px] leading-none flex items-center justify-center gap-2 transition-all duration-200 hover:bg-[#094fa5]">
                        <span>Selengkapnya</span>
                        <svg class="w-4 h-4 transition-transform duration-200 ease-out group-hover:translate-x-1 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>

                <!-- Major 2: TKJ -->
                <div class="bg-white border border-[#e9eaeb] rounded-[18px] p-6 flex flex-col gap-8 items-center w-full max-w-none lg:max-w-[360px] justify-between transition-all duration-300 hover:border-[#0c61cf] hover:shadow-lg hover:-translate-y-1">
                    <div class="flex flex-col gap-6 w-full items-start">
                        <div class="flex items-center justify-between w-full">
                            <div class="w-12 h-12 rounded-full border border-[#c2d8f5] bg-white flex items-center justify-center text-[#0c61cf]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                                </svg>
                            </div>
                            <span class="bg-[#d9e7f9] text-[#0c61cf] px-3 py-1 rounded-full text-[12px] font-semibold">TKJ</span>
                        </div>
                        <div class="flex flex-col gap-3 w-full">
                            <h3 class="font-semibold text-[20px] leading-[28px] text-[#181d27]">Teknologi Jaringan & Komputer</h3>
                            <p class="text-[#545e6f] text-[14px] leading-[20px]">
                                Menyiapkan network engineer, administrator server, dan spesialis cybersecurity yang profesional.
                            </p>
                        </div>
                        <div class="flex flex-col gap-2.5 w-full">
                            <div class="flex gap-2 flex-wrap items-center">
                                <span class="bg-white border border-[#e9eaeb] px-3 py-1.5 rounded-full text-[13px] text-[#181d27] font-medium">Cisco CCNA</span>
                                <span class="bg-white border border-[#e9eaeb] px-3 py-1.5 rounded-full text-[13px] text-[#181d27] font-medium">CCNP</span>
                                <span class="bg-white border border-[#e9eaeb] px-3 py-1.5 rounded-full text-[13px] text-[#181d27] font-medium">AWS Cloud</span>
                            </div>
                            <div class="flex gap-2 flex-wrap items-center">
                                <span class="bg-white border border-[#e9eaeb] px-3 py-1.5 rounded-full text-[13px] text-[#181d27] font-medium">CCIE</span>
                                <span class="bg-white border border-[#e9eaeb] px-3 py-1.5 rounded-full text-[13px] text-[#181d27] font-medium">Mikrotik</span>
                                <span class="bg-white border border-[#e9eaeb] px-3 py-1.5 rounded-full text-[13px] text-[#181d27] font-medium">DevOps</span>
                            </div>
                        </div>
                    </div>
                    <a href="/program" class="group bg-[#0c61cf] text-white w-full h-[48px] rounded-full font-semibold text-[16px] leading-none flex items-center justify-center gap-2 transition-all duration-200 hover:bg-[#094fa5]">
                        <span>Selengkapnya</span>
                        <svg class="w-4 h-4 transition-transform duration-200 ease-out group-hover:translate-x-1 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>

                <!-- Major 3: DKV -->
                <div class="bg-white border border-[#e9eaeb] rounded-[18px] p-6 flex flex-col gap-8 items-center w-full max-w-none lg:max-w-[360px] justify-between transition-all duration-300 hover:border-[#0c61cf] hover:shadow-lg hover:-translate-y-1">
                    <div class="flex flex-col gap-6 w-full items-start">
                        <div class="flex items-center justify-between w-full">
                            <div class="w-12 h-12 rounded-full border border-[#c2d8f5] bg-white flex items-center justify-center text-[#0c61cf]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M15.707 21.293a1 1 0 0 1-1.414 0l-1.586-1.586a1 1 0 0 1 0-1.414l5.586-5.586a1 1 0 0 1 1.414 0l1.586 1.586a1 1 0 0 1 0 1.414z" />
                                    <path d="m18 13-1.375-6.874a1 1 0 0 0-.746-.776L3.235 2.028a1 1 0 0 0-1.207 1.207L5.35 15.879a1 1 0 0 0 .776.746L13 18" />
                                    <path d="m2.3 2.3 7.286 7.286" />
                                    <circle cx="11" cy="11" r="2" />
                                </svg>
                            </div>
                            <span class="bg-[#d9e7f9] text-[#0c61cf] px-3 py-1 rounded-full text-[12px] font-semibold">DKV</span>
                        </div>
                        <div class="flex flex-col gap-3 w-full">
                            <h3 class="font-semibold text-[20px] leading-[28px] text-[#181d27]">Desain Komunikasi Visual</h3>
                            <p class="text-[#545e6f] text-[14px] leading-[20px]">
                                Melahirkan UI/UX Designer, kreator konten, motion designer, dan visual storyteller yang profesional.
                            </p>
                        </div>
                        <div class="flex flex-col gap-2.5 w-full">
                            <div class="flex gap-2 flex-wrap items-center">
                                <span class="bg-white border border-[#e9eaeb] px-3 py-1.5 rounded-full text-[13px] text-[#181d27] font-medium">UI/UX</span>
                                <span class="bg-white border border-[#e9eaeb] px-3 py-1.5 rounded-full text-[13px] text-[#181d27] font-medium">3D Design</span>
                                <span class="bg-white border border-[#e9eaeb] px-3 py-1.5 rounded-full text-[13px] text-[#181d27] font-medium">Graphic Design</span>
                            </div>
                            <div class="flex gap-2 flex-wrap items-center">
                                <span class="bg-white border border-[#e9eaeb] px-3 py-1.5 rounded-full text-[13px] text-[#181d27] font-medium">Video Editing</span>
                                <span class="bg-white border border-[#e9eaeb] px-3 py-1.5 rounded-full text-[13px] text-[#181d27] font-medium">Motion Graphic</span>
                            </div>
                        </div>
                    </div>
                    <a href="/program" class="group bg-[#0c61cf] text-white w-full h-[48px] rounded-full font-semibold text-[16px] leading-none flex items-center justify-center gap-2 transition-all duration-200 hover:bg-[#094fa5]">
                        <span>Selengkapnya</span>
                        <svg class="w-4 h-4 transition-transform duration-200 ease-out group-hover:translate-x-1 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>

            </div>

        </div>
    </section>


    <!-- 5. PENCAPAIAN WISUDAWAN DARI IDN BOARDING SCHOOL (Figma Node 19900:12412) -->
    <section class="w-full max-w-full overflow-hidden flex flex-col items-center py-16 md:py-[110px] bg-white">
        <div class="w-[1120px] max-w-full mx-auto flex flex-col items-center gap-8 md:gap-12 px-4 sm:px-6">
            
            <!-- SECTION HEADER -->
            <div class="flex flex-col items-center text-center gap-2">
                <h2 class="font-heading font-bold text-[28px] md:text-[32px] leading-[38px] md:leading-[42px] text-[#0b0d12]">
                    Pencapaian Wisudawan dari <span class="text-[#0c61cf]">IDN Boarding School</span>
                </h2>
                <p class="text-[#717680] text-[15px] md:text-[16px] leading-[24px] max-w-[700px]">
                    IDN Boarding School melahirkan berbagai santri yang memiliki pencapaian yang membanggakan dan siap membangun masa depan!
                </p>
            </div>

            <!-- AWARDS GRID (1 column on mobile/tablet, 2 on desktop - 550x312px) -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 w-full justify-items-center">
                <div class="group w-full max-w-[550px] aspect-[550/312] rounded-[14px] overflow-hidden bg-slate-200 shadow-sm border border-[#e9eaeb] transition-all duration-300 hover:shadow-md">
                    <img src="{{ asset('assets/prestasi/award-image-1.avif') }}" alt="Pencapaian Wisudawan 1" class="w-full h-full object-cover object-top transition-transform duration-500 ease-out group-hover:scale-105">
                </div>
                <div class="group w-full max-w-[550px] aspect-[550/312] rounded-[14px] overflow-hidden bg-slate-200 shadow-sm border border-[#e9eaeb] transition-all duration-300 hover:shadow-md">
                    <img src="{{ asset('assets/prestasi/award-image-2.avif') }}" alt="Pencapaian Wisudawan 2" class="w-full h-full object-cover object-top transition-transform duration-500 ease-out group-hover:scale-105">
                </div>
                <div class="group w-full max-w-[550px] aspect-[550/312] rounded-[14px] overflow-hidden bg-slate-200 shadow-sm border border-[#e9eaeb] transition-all duration-300 hover:shadow-md">
                    <img src="{{ asset('assets/prestasi/award-image-3.avif') }}" alt="Pencapaian Wisudawan 3" class="w-full h-full object-cover object-top transition-transform duration-500 ease-out group-hover:scale-105">
                </div>
                <div class="group w-full max-w-[550px] aspect-[550/312] rounded-[14px] overflow-hidden bg-slate-200 shadow-sm border border-[#e9eaeb] transition-all duration-300 hover:shadow-md">
                    <img src="{{ asset('assets/prestasi/award-image-4.avif') }}" alt="Pencapaian Wisudawan 4" class="w-full h-full object-cover object-top transition-transform duration-500 ease-out group-hover:scale-105">
                </div>
                <div class="group w-full max-w-[550px] aspect-[550/312] rounded-[14px] overflow-hidden bg-slate-200 shadow-sm border border-[#e9eaeb] transition-all duration-300 hover:shadow-md">
                    <img src="{{ asset('assets/prestasi/award-image-5.avif') }}" alt="Pencapaian Wisudawan 5" class="w-full h-full object-cover object-top transition-transform duration-500 ease-out group-hover:scale-105">
                </div>
                <div class="group w-full max-w-[550px] aspect-[550/312] rounded-[14px] overflow-hidden bg-slate-200 shadow-sm border border-[#e9eaeb] transition-all duration-300 hover:shadow-md">
                    <img src="{{ asset('assets/prestasi/award-image-6.avif') }}" alt="Pencapaian Wisudawan 6" class="w-full h-full object-cover object-top transition-transform duration-500 ease-out group-hover:scale-105">
                </div>
                <div class="group w-full max-w-[550px] aspect-[550/312] rounded-[14px] overflow-hidden bg-slate-200 shadow-sm border border-[#e9eaeb] transition-all duration-300 hover:shadow-md">
                    <img src="{{ asset('assets/prestasi/award-image-7.avif') }}" alt="Pencapaian Wisudawan 7" class="w-full h-full object-cover object-top transition-transform duration-500 ease-out group-hover:scale-105">
                </div>
                <div class="group w-full max-w-[550px] aspect-[550/312] rounded-[14px] overflow-hidden bg-slate-200 shadow-sm border border-[#e9eaeb] transition-all duration-300 hover:shadow-md">
                    <img src="{{ asset('assets/prestasi/award-image-8.avif') }}" alt="Pencapaian Wisudawan 8" class="w-full h-full object-cover object-top transition-transform duration-500 ease-out group-hover:scale-105">
                </div>
            </div>

        </div>
    </section>


    <!-- 6. KERJASAMA INDUSTRI (Figma Node 19900:12425) -->
    <section class="w-full max-w-full overflow-hidden flex flex-col items-center py-16 md:py-[110px] bg-[#fafafa]">
        <div class="w-[1120px] max-w-full mx-auto flex flex-col items-center gap-8 md:gap-10 px-4 sm:px-6">
            
            <!-- SECTION HEADER -->
            <div class="flex flex-col items-center text-center gap-2">
                <h2 class="font-heading font-bold text-[28px] md:text-[32px] leading-[38px] md:leading-[42px] text-[#0b0d12]">
                    Kerjasama Industri
                </h2>
                <div class="text-[#717680] text-[15px] md:text-[16px] leading-[24px] max-w-[1000px]">
                    <p>IDN Boarding School telah menjalin kerjasama dengan berbagai perusahaan, baik nasional maupun internasional</p>
                    <p>untuk mendukung berbagai program, dan pengembangan karir para siswa.</p>
                </div>
            </div>

            <!-- MARQUEE LOGO TICKER CONTAINER -->
            <div class="w-full overflow-hidden relative py-4 group"
                 x-data
                 x-init="
                    const mq = $el.querySelector('.animate-marquee');
                    const setSpeed = (rate) => {
                        const anims = mq ? mq.getAnimations() : [];
                        anims.forEach(a => a.playbackRate = rate);
                    };
                    $el.addEventListener('mouseenter', () => setSpeed(0.25));
                    $el.addEventListener('mouseleave', () => setSpeed(1));
                    $el.addEventListener('touchstart', () => setSpeed(0.25), { passive: true });
                    $el.addEventListener('touchend', () => setSpeed(1), { passive: true });
                 ">
                <div class="absolute left-0 top-0 bottom-0 w-16 sm:w-24 bg-gradient-to-r from-[#fafafa] to-transparent z-10 pointer-events-none"></div>
                <div class="absolute right-0 top-0 bottom-0 w-16 sm:w-24 bg-gradient-to-l from-[#fafafa] to-transparent z-10 pointer-events-none"></div>

                <div class="animate-marquee flex gap-4 sm:gap-6 items-center">
                    @php
                        $partners = [
                            ['name' => 'Fast Response', 'code' => 'FR', 'color' => '#e11d48', 'img' => 'FR.avif'],
                            ['name' => 'PLN', 'code' => 'PLN', 'color' => '#0284c7', 'img' => 'PLN.avif'],
                            ['name' => 'Sisindokom', 'code' => 'SISINDOKOM', 'color' => '#ea580c', 'img' => 'Sisindokom.avif'],
                            ['name' => 'Jatelindo', 'code' => 'JATELINDO', 'color' => '#0284c7', 'img' => 'JATELINDO.avif'],
                            ['name' => 'IGNITE', 'code' => 'IGNITE', 'color' => '#dc2626', 'img' => 'IGNITE.avif'],
                            ['name' => 'JICT', 'code' => 'JICT', 'color' => '#1e3a8a', 'img' => 'JICT.avif'],
                            ['name' => 'FIM Piston', 'code' => 'FIM', 'color' => '#b91c1c', 'img' => 'FIM.avif'],
                            ['name' => 'Atlasat', 'code' => 'ATLASAT', 'color' => '#0369a1', 'img' => 'ATLASAT.avif'],
                            ['name' => 'METRO TV', 'code' => 'METRO TV', 'color' => '#1e40af', 'img' => 'METRO TV.avif'],
                            ['name' => 'DIGMAZA', 'code' => 'DIGMAZA', 'color' => '#d97706', 'img' => 'DIGMAZA.avif'],
                            ['name' => 'bayarind', 'code' => 'BAYARIND', 'color' => '#65a30d', 'img' => 'bayarind.avif'],
                            ['name' => 'addOn finance', 'code' => 'ADDON', 'color' => '#c2410c', 'img' => 'ADDON.avif'],
                            ['name' => 'IASA Multi Integrator', 'code' => 'IASA', 'color' => '#1d4ed8', 'img' => 'IASA.avif'],
                            ['name' => 'ICS', 'code' => 'ICS', 'color' => '#b91c1c', 'img' => 'ICS.avif'],
                            ['name' => 'PT. Lintas Data Prima', 'code' => 'LDP', 'color' => '#0284c7', 'img' => 'LDP.avif'],
                            ['name' => 'FiberStar', 'code' => 'FIBERSTAR', 'color' => '#ea580c', 'img' => 'FIBERSTAR.avif'],
                            ['name' => 'MULTIINTEGRA', 'code' => 'MULTIINTEGRA', 'color' => '#991b1b', 'img' => 'MULTIINTEGRA.avif'],
                            ['name' => 'INDOWIPI', 'code' => 'INDOWIPI', 'color' => '#991b1b', 'img' => 'INDOWIPI.avif'],
                            ['name' => 'mtm', 'code' => 'MTM', 'color' => '#1d4ed8', 'img' => 'MTM.avif']
                        ];
                    @endphp

                    @foreach($partners as $p)
                    <div class="bg-white rounded-[14px] w-[130px] sm:w-[160px] h-[80px] sm:h-[100px] flex flex-col items-center justify-center shrink-0 shadow-2xs transition-all duration-200 hover:border-[#0c61cf] hover:shadow-md overflow-hidden">
                        @if(isset($p['img']))
                            <img src="{{ asset('assets/partners/' . rawurlencode($p['img'])) }}" alt="{{ $p['name'] }}" class="w-full h-full object-contain">
                        @else
                            <div class="w-8 h-8 rounded-full flex items-center justify-center font-bold text-xs mb-1" style="background-color: {{ $p['color'] }}20; color: {{ $p['color'] }};">
                                🏢
                            </div>
                            <span class="font-bold text-[13px] text-[#181d27] text-center line-clamp-1" style="color: {{ $p['color'] }};">{{ $p['name'] }}</span>
                        @endif
                    </div>
                    @endforeach

                    @foreach($partners as $p)
                    <div class="bg-white rounded-[14px] w-[130px] sm:w-[160px] h-[80px] sm:h-[100px] flex flex-col items-center justify-center shrink-0 transition-all duration-200 hover:border-[#0c61cf] hover:shadow-md overflow-hidden">
                        @if(isset($p['img']))
                            <img src="{{ asset('assets/partners/' . rawurlencode($p['img'])) }}" alt="{{ $p['name'] }}" class="w-full h-full object-contain">
                        @else
                            <div class="w-8 h-8 rounded-full flex items-center justify-center font-bold text-xs mb-1" style="background-color: {{ $p['color'] }}20; color: {{ $p['color'] }};">
                                🏢
                            </div>
                            <span class="font-bold text-[13px] text-[#181d27] text-center line-clamp-1" style="color: {{ $p['color'] }};">{{ $p['name'] }}</span>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>


    <!-- 7. PRESTASI SISWA IDN BOARDING SCHOOL (Figma Node 19900:12470) -->
    <section class="w-full max-w-full overflow-hidden flex flex-col items-center py-16 md:py-[110px] bg-white">
        <div class="w-[1120px] max-w-full mx-auto flex flex-col items-center gap-8 md:gap-12 px-4 sm:px-6">
            
            <!-- SECTION HEADER -->
            <div class="flex flex-col items-center text-center gap-2">
                <h2 class="font-heading font-bold text-[28px] md:text-[32px] leading-[38px] md:leading-[42px] text-[#0b0d12]">
                    Prestasi Siswa <span class="text-[#0c61cf]">IDN Boarding School</span>
                </h2>
                <p class="text-[#545e6f] text-[15px] md:text-[16px] leading-[24px] max-w-[700px]">
                    Santri IDN aktif berkompetisi dan berkarya di ajang teknologi, desain, dan keagamaan tingkat nasional maupun internasional.
                </p>
            </div>

            <!-- 3 STUDENT AWARD CARDS GRID (Card: 450x460px, Img: 450x300px) -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 w-full justify-items-center">
                
                <!-- Card 1 -->
                <div class="bg-white rounded-[18px] overflow-hidden border border-[#e9eaeb] flex flex-col justify-between w-full max-w-[450px] h-[460px] shadow-2xs transition-all duration-300 hover:border-[#0c61cf] hover:shadow-lg hover:-translate-y-1">
                    <div class="h-[300px] w-full overflow-hidden bg-slate-100 relative shrink-0">
                        <img src="{{ asset('assets/pages/home/rel_IIBS.avif') }}" alt="Award 1" class="w-full h-full object-cover object-top">
                    </div>
                    <div class="p-5 flex flex-col justify-between bg-white flex-1">
                        <div class="flex flex-col gap-2">
                            <h3 class="font-semibold text-[17px] leading-[24px] text-[#181d27]">
                                Siswa SMP IDN Juara 1 Coding Scratch Nasional di IIBS Almaahira Malang.
                            </h3>
                            <p class="text-[#414651] text-[14px] leading-[20px]">
                                Ahmad Bilal Al Fatih · SMP IDN
                            </p>
                        </div>
                        <p class="text-[#717680] text-[13px] leading-[18px]">
                            21 April 2026
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-[18px] overflow-hidden border border-[#e9eaeb] flex flex-col justify-between w-full max-w-[450px] h-[460px] shadow-2xs transition-all duration-300 hover:border-[#0c61cf] hover:shadow-lg hover:-translate-y-1">
                    <div class="h-[300px] w-full overflow-hidden bg-slate-100 relative shrink-0">
                        <img src="{{ asset('assets/pages/home/rel_jamnyut.avif') }}" alt="Award 2" class="w-full h-full object-cover object-top">
                    </div>
                    <div class="p-5 flex flex-col justify-between bg-white flex-1">
                        <div class="flex flex-col gap-2">
                            <h3 class="font-semibold text-[17px] leading-[24px] text-[#181d27]">
                                Siswa SMK IDN Raih Juara 2 Nasional Lomba Networking di Universitas Udayana
                            </h3>
                            <p class="text-[#414651] text-[14px] leading-[20px]">
                                Sharul Azzam · 10 TKJ SMK IDN
                            </p>
                        </div>
                        <p class="text-[#717680] text-[13px] leading-[18px]">
                            21 April 2026
                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-[18px] overflow-hidden border border-[#e9eaeb] flex flex-col justify-between w-full max-w-[450px] h-[460px] shadow-2xs transition-all duration-300 hover:border-[#0c61cf] hover:shadow-lg hover:-translate-y-1">
                    <div class="h-[300px] w-full overflow-hidden bg-slate-100 relative shrink-0">
                        <img src="{{ asset('assets/pages/home/rel_TFI.avif') }}" alt="Award 3" class="w-full h-full object-cover object-top">
                    </div>
                    <div class="p-5 flex flex-col justify-between bg-white flex-1">
                        <div class="flex flex-col gap-2">
                            <h3 class="font-semibold text-[17px] leading-[24px] text-[#181d27]">
                                Siswi SMK IDN Akhwat Raih Juara 2 Kompetisi UI/UX Design Tech Fest INSTIKI.
                            </h3>
                            <p class="text-[#414651] text-[14px] leading-[20px]">
                                10 DKV SMK IDN Akhwat
                            </p>
                        </div>
                        <p class="text-[#717680] text-[13px] leading-[18px]">
                            20 April 2026
                        </p>
                    </div>
                </div>

            </div>

            <!-- BUTTON: Selengkapnya -->
            <a href="/artikel/idn-relawan-dan-markaz-bersama-as-sunnah-salurkan-bantuan-bencana-banjir-di-bali" class="group bg-[#0c61cf] text-white w-[149px] h-[48px] rounded-full font-semibold text-[16px] flex items-center justify-center gap-2 shadow-md transition-all duration-200 hover:bg-[#094fa5]">
                <span>Selengkapnya</span>
            </a>

        </div>
    </section>


    <!-- 8. UNIVERSITAS ALUMNI IDN BOARDING SCHOOL (Figma Node 19900:12504) -->
    <section class="w-full max-w-full overflow-hidden flex flex-col items-center py-16 md:py-[110px] bg-[#fafafa]">
        <div class="w-[1120px] max-w-full mx-auto flex flex-col items-center gap-8 md:gap-10 px-4 sm:px-6">
            
            <!-- SECTION HEADER -->
            <div class="flex flex-col items-center text-center gap-2">
                <h2 class="font-heading font-bold text-[28px] md:text-[32px] leading-[38px] md:leading-[42px] text-[#0b0d12]">
                    Universitas Alumni <span class="text-[#0c61cf]">IDN Boarding School</span>
                </h2>
                <p class="text-[#545e6f] text-[15px] md:text-[16px] leading-[24px] max-w-[700px]">
                    Alumni IDN Boarding School berhasil menembus berbagai kampus kampus ternama, di dalam negeri maupun luar negeri.
                </p>
            </div>

            <!-- 50 UNIVERSITIES LOGO GRID (7 columns on tablet md:) -->
            @php
                $allUniversities = [
                    ['name' => 'Nanjing University of Information Science & Technology', 'img' => 'univ cina 1.avif'],
                    ['name' => 'National Dong Hwa University (NDHU)', 'img' => 'univ cina 2.avif'],
                    ['name' => 'University of Malaya (UM)', 'img' => 'UTM.avif'],
                    ['name' => 'Universiti Utara Malaysia (UUM)', 'img' => 'uum.avif'],
                    ['name' => 'Universitas Indonesia (UI)', 'img' => 'UI.avif'],
                    ['name' => 'Universitas Tanjungpura (UNTAN)', 'img' => 'UTP.avif'],
                    ['name' => 'Universitas Bina Sarana Informatika (BSI)', 'img' => 'BSI.avif'],
                    ['name' => 'Program Studi Ilmu Hadits (STIU)', 'img' => 'STDIIS.avif'],
                    ['name' => 'STIT Al-Marhalah Al-Aliyyah (STITMA)', 'img' => 'STITMA.avif'],
                    ['name' => 'Universitas Negeri Semarang (UNNES)', 'img' => 'UNNES.avif'],
                    ['name' => 'Universitas Brawijaya (UB)', 'img' => 'univ brawijaya.avif'],
                    ['name' => 'President University', 'img' => 'president university.avif'],
                    ['name' => 'Universitas Gunadarma', 'img' => 'univ gunadarma.avif'],
                    ['name' => 'Politeknik IDN', 'img' => 'poltek idn.avif'],
                    ['name' => 'Telkom University', 'img' => 'telkom.avif'],
                    ['name' => 'Universitas Muhammadiyah Malang (UMM)', 'img' => 'UMM.avif'],
                    ['name' => 'Universitas Sriwijaya (UNSRI)', 'img' => 'US.avif'],
                    ['name' => 'Universitas Negeri Surabaya (UNESA)', 'img' => 'UNESA.avif'],
                    ['name' => 'Politeknik Elektronika Negeri Surabaya (PENS)', 'img' => 'PENS.avif'],
                    ['name' => 'Universitas Tarumanagara (UNTAR)', 'img' => 'UNTAR.avif'],
                    ['name' => 'Universitas Pertamina', 'img' => 'univ pertamina.avif'],
                    ['name' => 'Politeknik Negeri Media Kreatif (Polimedia)', 'img' => 'Poltek negeri media keratif.avif'],
                    ['name' => 'BINUS University', 'img' => 'binus.avif'],
                    ['name' => 'Istanbul Zaim Üniversitesi (IZU)', 'img' => 'univ di istanbul.avif'],
                    ['name' => 'Universitas Bakrie', 'img' => 'univ bakrie.avif'],
                    ['name' => 'Politeknik Negeri Indramayu (POLINDRA)', 'img' => 'PNI.avif'],
                    ['name' => 'Universitas Multimedia Nusantara (UMN)', 'img' => 'UMN.avif'],
                    ['name' => 'CEP-CCIT Fakultas Teknik Universitas Indonesia', 'img' => 'UI Teknik.avif'],
                    ['name' => 'Bursa Uludağ Üniversitesi', 'img' => 'BUU.avif'],
                    ['name' => 'Cheng Shiu University (CSU)', 'img' => 'CHINA.avif'],
                    ['name' => 'IDS Digital College', 'img' => 'IDF.avif'],
                    ['name' => 'Universitas Muhammadiyah Jakarta (UMJ)', 'img' => 'UMJ.avif'],
                    ['name' => 'Universitas Diponegoro (UNDIP)', 'img' => 'Univ diponegoro.avif'],
                    ['name' => 'Kütahya Dumlupınar Üniversitesi', 'img' => 'dumlupinar universitesi kutahya.avif'],
                    ['name' => 'Swiss German University (SGU)', 'img' => 'SGU.avif'],
                    ['name' => 'Universitas Gadjah Mada (UGM)', 'img' => 'UJ.avif'],
                    ['name' => 'Universitas Pembangunan Nasional "Veteran" Jakarta (UPNVJ)', 'img' => 'UNIJA.avif'],
                    ['name' => 'Universitas Indraprasta PGRI (UNINDRA)', 'img' => 'PGRI.avif'],
                    ['name' => 'Universitas Komputer Indonesia (UNIKOM)', 'img' => 'UNIKOM.avif'],
                    ['name' => 'Institut Pertanian Bogor (IPB University)', 'img' => 'IPB.avif'],
                    ['name' => 'Politeknik Negeri Jakarta (PNJ)', 'img' => 'PNJ.avif'],
                    ['name' => 'Universitas Primagraha (UPG)', 'img' => 'Universitas Primagraha (UPG) .avif'],
                    ['name' => 'Harbour.Space University', 'img' => 'harbour space university.avif'],
                    ['name' => 'Universitas Lampung (UNILA)', 'img' => 'univ lampung.avif'],
                    ['name' => 'Universitas Borneo Tarakan (UBT)', 'img' => 'univ borneo tarakan.avif'],
                    ['name' => 'Universitas Pancasila (UP)', 'img' => 'UP.avif'],
                    ['name' => 'Universitas Esa Unggul (UAI / UEU)', 'img' => 'UAI.avif'],
                    ['name' => 'Universitas Teknologi Sumbawa (UTS)', 'img' => 'UTS.avif'],
                    ['name' => 'Universitas Airlangga (UNAIR)', 'img' => 'UNAIR.avif'],
                    ['name' => 'Universiti Putra Malaysia (UPM)', 'img' => 'UPM.avif']
                ];
            @endphp

            <div class="grid grid-cols-4 sm:grid-cols-5 md:grid-cols-7 lg:grid-cols-10 gap-3 sm:gap-4 md:gap-5 w-full max-w-[1120px] mx-auto px-4 justify-items-center max-sm:[&>:nth-child(4n+1):nth-last-child(2)]:col-start-2 md:max-lg:[&>:nth-child(7n+1):last-child]:col-span-7 md:max-lg:[&>:nth-child(7n+1):last-child]:justify-self-center">
                @foreach($allUniversities as $index => $u)
                @php
                    $uName = is_array($u) ? $u['name'] : $u;
                    $uImg = is_array($u) && isset($u['img']) ? $u['img'] : null;
                @endphp
                <div class="univ-card bg-white w-[72px] sm:w-[94px] h-[72px] sm:h-[94px] rounded-[14px] sm:rounded-[18px] flex items-center justify-center cursor-pointer shadow-2xs {{ $loop->iteration === 49 ? 'max-sm:col-start-2' : '' }}"
                     onmousemove="const r=this.getBoundingClientRect(); this.style.setProperty('--mouse-x', (event.clientX-r.left)+'px'); this.style.setProperty('--mouse-y', (event.clientY-r.top)+'px');">
                    
                    @if($uImg)
                        <img src="{{ asset('assets/universities/' . rawurlencode($uImg)) }}" alt="{{ $uName }}" class="w-full h-full rounded-[13px] sm:rounded-[17px] object-cover shrink-0">
                    @else
                        <div class="w-10 sm:w-12 h-10 sm:h-12 rounded-full bg-[#f0f6fe] border border-[#c2d8f5] text-[#0c61cf] flex items-center justify-center font-bold text-base sm:text-lg shrink-0">
                            🎓
                        </div>
                    @endif

                    <div class="univ-tooltip bg-[#0c61cf] text-white px-3 py-1.5 rounded-md text-[12px] font-semibold shadow-lg border border-white/20">
                        {{ $uName }}
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>


    <!-- 9. APA KATA MEREKA TENTANG IDN? (Figma Node 19900:12609) -->
    <section class="w-full max-w-full overflow-hidden flex flex-col items-center py-[90px] bg-[#f5f5f5]" x-data="{ activeTab: 'Perusahaan' }">
        <div class="w-[1120px] max-w-full mx-auto flex flex-col items-center gap-6 md:gap-8 px-4 sm:px-6">
            
            <!-- SECTION HEADER -->
            <div class="flex flex-col items-center text-center gap-2">
                <h2 class="font-heading font-bold text-[28px] md:text-[32px] leading-[38px] md:leading-[42px] text-[#0b0d12]">
                    Apa Kata Mereka Tentang <span class="text-[#0c61cf]">IDN?</span>
                </h2>
            </div>

            <!-- FILTER TABS BUTTONS -->
            <div class="flex flex-wrap items-center justify-center gap-3 md:gap-6">
                <button @click="activeTab = 'Perusahaan'"
                        :class="activeTab === 'Perusahaan' ? 'bg-[#0c61cf] text-white shadow-xs' : 'bg-white text-[#414651] border-2 border-[#e9eaeb]'"
                        class="h-[44px] md:h-[48px] px-4 md:px-[20px] py-2 md:py-[12px] rounded-full font-semibold text-[14px] md:text-[16px] transition-all duration-200 cursor-pointer">
                    Perusahaan
                </button>
                <button @click="activeTab = 'Wali Santri'"
                        :class="activeTab === 'Wali Santri' ? 'bg-[#0c61cf] text-white shadow-xs' : 'bg-white text-[#414651] border-2 border-[#e9eaeb]'"
                        class="h-[44px] md:h-[48px] px-4 md:px-[20px] py-2 md:py-[12px] rounded-full font-semibold text-[14px] md:text-[16px] transition-all duration-200 cursor-pointer">
                    Wali Santri
                </button>
                <button @click="activeTab = 'Alumni'"
                        :class="activeTab === 'Alumni' ? 'bg-[#0c61cf] text-white shadow-xs' : 'bg-white text-[#414651] border-2 border-[#e9eaeb]'"
                        class="h-[44px] md:h-[48px] px-4 md:px-[20px] py-2 md:py-[12px] rounded-full font-semibold text-[14px] md:text-[16px] transition-all duration-200 cursor-pointer">
                    Alumni
                </button>
            </div>

            <!-- TESTIMONIAL CARDS SLIDER CONTAINER -->
            <div class="w-full overflow-hidden py-4 -my-4">
                <div class="flex w-full transition-transform duration-500 ease-in-out"
                     :style="activeTab === 'Perusahaan' ? 'transform: translateX(0%);' : (activeTab === 'Wali Santri' ? 'transform: translateX(-100%);' : 'transform: translateX(-200%);')">
                    
                    <!-- TAB 1: PERUSAHAAN TESTIMONIALS -->
                    <div class="w-full shrink-0 flex flex-col lg:flex-row gap-5 items-stretch justify-center px-1 sm:px-2">
                        
                        <!-- Perusahaan 1 -->
                        <div class="bg-white rounded-[18px] p-6 flex flex-col h-auto lg:h-[340px] justify-between w-full lg:max-w-[530px] lg:flex-1 border border-[#e9eaeb] shadow-sm hover:shadow-md transition-shadow duration-200">
                            <div class="flex flex-col gap-4 md:gap-5">
                                <div class="flex justify-between items-center">
                                    <div class="w-8 h-8 shrink-0">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" class="w-8 h-8 shrink-0" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M26 5.66667H19.3333C17.68 5.66667 16.3333 7.01333 16.3333 8.66667V15.3333C16.3333 16.9867 17.68 18.3333 19.3333 18.3333H21.0533L18.2533 23.92C18 24.44 18.0267 25.04 18.3333 25.5467C18.64 26.0533 19.1733 26.3333 19.7467 26.3333H23.1733C24.0667 26.3333 24.8667 25.84 25.2667 25.04L28.6933 18.2C28.9067 17.7867 29.0133 17.32 29.0133 16.8533V8.65334C29.0133 7.00001 27.6667 5.65334 26.0133 5.65334L26 5.66667ZM27 16.8667C27 17.0267 26.96 17.1733 26.8933 17.32L23.4667 24.16C23.4133 24.28 23.2933 24.3467 23.1733 24.3467H20.28L23.56 17.8C23.72 17.4933 23.6933 17.12 23.52 16.8267C23.3333 16.5333 23.0133 16.3467 22.6667 16.3467H19.3333C18.7867 16.3467 18.3333 15.8933 18.3333 15.3467V8.67999C18.3333 8.13333 18.7867 7.67999 19.3333 7.67999H26C26.5467 7.67999 27 8.13333 27 8.67999V16.88V16.8667ZM12.6667 5.66667H6C4.34667 5.66667 3 7.01333 3 8.66667V15.3333C3 16.9867 4.34667 18.3333 6 18.3333H7.71999L4.92 23.92C4.66667 24.44 4.69333 25.04 5 25.5467C5.30667 26.0533 5.84 26.3333 6.41333 26.3333H9.84001C10.7333 26.3333 11.5333 25.84 11.9333 25.04L15.36 18.2C15.5733 17.7867 15.68 17.32 15.68 16.8533V8.65334C15.68 7.00001 14.3333 5.65334 12.68 5.65334L12.6667 5.66667ZM13.6667 16.8667C13.6667 17.0267 13.6267 17.1733 13.56 17.32L10.1333 24.16C10.08 24.28 9.96001 24.3467 9.84001 24.3467H6.94668L10.2267 17.8C10.3867 17.4933 10.36 17.12 10.1867 16.8267C10 16.5333 9.68 16.3467 9.33333 16.3467H6C5.45333 16.3467 5 15.8933 5 15.3467V8.67999C5 8.13333 5.45333 7.67999 6 7.67999H12.6667C13.2133 7.67999 13.6667 8.13333 13.6667 8.67999V16.88V16.8667Z" fill="#0C61CF"/>
                                        </svg>
                                    </div>
                                    <div class="flex gap-[2px] items-center shrink-0">
                                        @for ($i = 0; $i < 5; $i++)
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" class="w-6 h-6 shrink-0" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.962 4.59601L14.904 8.513C15.05 8.808 15.332 9.01202 15.659 9.05902L20.1419 9.70697C20.9639 9.82597 21.292 10.834 20.697 11.412L17.456 14.557C17.219 14.787 17.111 15.118 17.167 15.443L17.9079 19.747C18.0579 20.62 17.1409 21.286 16.3549 20.875L12.467 18.84C12.175 18.687 11.827 18.687 11.536 18.84L7.65096 20.873C6.86396 21.285 5.94393 20.618 6.09493 19.743L6.83602 15.443C6.89202 15.118 6.78396 14.787 6.54696 14.557L3.30599 11.412C2.70999 10.834 3.03792 9.82597 3.86092 9.70697L8.34395 9.05902C8.66995 9.01202 8.95196 8.808 9.09896 8.513L11.041 4.59601C11.432 3.80101 12.568 3.80101 12.962 4.59601Z" fill="#DC6903"/>
                                        </svg>
                                        @endfor
                                    </div>
                                </div>
                                <p class="text-[#414651] text-[13px] md:text-[14px] leading-[20px]">
                                    “Team alumni SMK IDN siap untuk diberikan Tugas, dapat task dan mampu belajar cepat untuk menyesuaikan Tugas Technical yang cukup dynamis. Adanya team IDN sangat membantu akselerasi Teknis dan kompetensi terhadap kebutuhan Mobile Developer dan Kebutuhan Network Operation Center, IT & Internet Service . Semoga IDN Terus menghasilkan SDM yang terlatih baik soft skill atau pun hardskill.”
                                </p>
                            </div>
                            <div class="pt-[17px] border-t border-[#e9eaeb] flex items-center gap-3 w-full">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" class="w-[42px] h-[42px] shrink-0" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 3.5C11.3348 3.5 3.5 11.3348 3.5 21C3.5 30.6652 11.3348 38.5 21 38.5C30.6652 38.5 38.5 30.6652 38.5 21C38.5 11.3348 30.6652 3.5 21 3.5ZM21.0141 12.25C23.9138 12.25 26.2641 14.6003 26.2641 17.5C26.2641 20.3997 23.9138 22.75 21.0141 22.75C18.1143 22.75 15.7641 20.3997 15.7641 17.5C15.7641 14.6003 18.1143 12.25 21.0141 12.25ZM21 35.875C17.1325 35.875 13.5975 34.3875 10.955 31.955C11.725 29.54 13.7201 27.2474 18.0076 27.2474H23.9924C28.2624 27.2474 30.2575 29.5575 31.045 31.955C28.4025 34.3875 24.8675 35.875 21 35.875Z" fill="#717680"/>
                                </svg>
                                <div class="flex flex-col gap-[2px]">
                                    <h4 class="font-semibold text-[15px] md:text-[16px] text-[#414651] leading-[24px]">Nugroho Wibisono</h4>
                                    <span class="text-[#717680] text-[12px] leading-[16px]">General Manager IT & Cyber Security Telkomsat</span>
                                </div>
                            </div>
                        </div>

                        <!-- Perusahaan 2 -->
                        <div class="bg-white rounded-[18px] p-6 flex flex-col h-auto lg:h-[340px] justify-between w-full lg:max-w-[530px] lg:flex-1 border border-[#e9eaeb] shadow-sm hover:shadow-md transition-shadow duration-200">
                            <div class="flex flex-col gap-4 md:gap-5">
                                <div class="flex justify-between items-center">
                                    <div class="w-8 h-8 shrink-0">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" class="w-8 h-8 shrink-0" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M26 5.66667H19.3333C17.68 5.66667 16.3333 7.01333 16.3333 8.66667V15.3333C16.3333 16.9867 17.68 18.3333 19.3333 18.3333H21.0533L18.2533 23.92C18 24.44 18.0267 25.04 18.3333 25.5467C18.64 26.0533 19.1733 26.3333 19.7467 26.3333H23.1733C24.0667 26.3333 24.8667 25.84 25.2667 25.04L28.6933 18.2C28.9067 17.7867 29.0133 17.32 29.0133 16.8533V8.65334C29.0133 7.00001 27.6667 5.65334 26.0133 5.65334L26 5.66667ZM27 16.8667C27 17.0267 26.96 17.1733 26.8933 17.32L23.4667 24.16C23.4133 24.28 23.2933 24.3467 23.1733 24.3467H20.28L23.56 17.8C23.72 17.4933 23.6933 17.12 23.52 16.8267C23.3333 16.5333 23.0133 16.3467 22.6667 16.3467H19.3333C18.7867 16.3467 18.3333 15.8933 18.3333 15.3467V8.67999C18.3333 8.13333 18.7867 7.67999 19.3333 7.67999H26C26.5467 7.67999 27 8.13333 27 8.67999V16.88V16.8667ZM12.6667 5.66667H6C4.34667 5.66667 3 7.01333 3 8.66667V15.3333C3 16.9867 4.34667 18.3333 6 18.3333H7.71999L4.92 23.92C4.66667 24.44 4.69333 25.04 5 25.5467C5.30667 26.0533 5.84 26.3333 6.41333 26.3333H9.84001C10.7333 26.3333 11.5333 25.84 11.9333 25.04L15.36 18.2C15.5733 17.7867 15.68 17.32 15.68 16.8533V8.65334C15.68 7.00001 14.3333 5.65334 12.68 5.65334L12.6667 5.66667ZM13.6667 16.8667C13.6667 17.0267 13.6267 17.1733 13.56 17.32L10.1333 24.16C10.08 24.28 9.96001 24.3467 9.84001 24.3467H6.94668L10.2267 17.8C10.3867 17.4933 10.36 17.12 10.1867 16.8267C10 16.5333 9.68 16.3467 9.33333 16.3467H6C5.45333 16.3467 5 15.8933 5 15.3467V8.67999C5 8.13333 5.45333 7.67999 6 7.67999H12.6667C13.2133 7.67999 13.6667 8.13333 13.6667 8.67999V16.88V16.8667Z" fill="#0C61CF"/>
                                        </svg>
                                    </div>
                                    <div class="flex gap-[2px] items-center shrink-0">
                                        @for ($i = 0; $i < 5; $i++)
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" class="w-6 h-6 shrink-0" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.962 4.59601L14.904 8.513C15.05 8.808 15.332 9.01202 15.659 9.05902L20.1419 9.70697C20.9639 9.82597 21.292 10.834 20.697 11.412L17.456 14.557C17.219 14.787 17.111 15.118 17.167 15.443L17.9079 19.747C18.0579 20.62 17.1409 21.286 16.3549 20.875L12.467 18.84C12.175 18.687 11.827 18.687 11.536 18.84L7.65096 20.873C6.86396 21.285 5.94393 20.618 6.09493 19.743L6.83602 15.443C6.89202 15.118 6.78396 14.787 6.54696 14.557L3.30599 11.412C2.70999 10.834 3.03792 9.82597 3.86092 9.70697L8.34395 9.05902C8.66995 9.01202 8.95196 8.808 9.09896 8.513L11.041 4.59601C11.432 3.80101 12.568 3.80101 12.962 4.59601Z" fill="#DC6903"/>
                                        </svg>
                                        @endfor
                                    </div>
                                </div>
                                <p class="text-[#414651] text-[13px] md:text-[14px] leading-[20px]">
                                    MobileCom telah beberapa kali merekrut siswa dan alumni IDN, dan yang dapat kami sampaikan adalah bahwa kami benar-benar puas dan bangga dengan pendidikan yang diberikan IDN Boarding School kepada para siswanya; kami sangat yakin bahwa IDN telah berhasil menumbuhkan ketangguhan mental dan kemampuan mereka untuk memasuki dunia kerja dengan lancar. Para lulusan IDN memiliki karakter yang bertanggung jawab terhadap tugas yang diberikan, kepribadian yang baik, serta mampu bekerja sama dalam tim dengan sangat baik.
                                </p>
                            </div>
                            <div class="pt-[17px] border-t border-[#e9eaeb] flex items-center gap-3 w-full">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" class="w-[42px] h-[42px] shrink-0" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 3.5C11.3348 3.5 3.5 11.3348 3.5 21C3.5 30.6652 11.3348 38.5 21 38.5C30.6652 38.5 38.5 30.6652 38.5 21C38.5 11.3348 30.6652 3.5 21 3.5ZM21.0141 12.25C23.9138 12.25 26.2641 14.6003 26.2641 17.5C26.2641 20.3997 23.9138 22.75 21.0141 22.75C18.1143 22.75 15.7641 20.3997 15.7641 17.5C15.7641 14.6003 18.1143 12.25 21.0141 12.25ZM21 35.875C17.1325 35.875 13.5975 34.3875 10.955 31.955C11.725 29.54 13.7201 27.2474 18.0076 27.2474H23.9924C28.2624 27.2474 30.2575 29.5575 31.045 31.955C28.4025 34.3875 24.8675 35.875 21 35.875Z" fill="#717680"/>
                                </svg>
                                <div class="flex flex-col gap-[2px]">
                                    <h4 class="font-semibold text-[15px] md:text-[16px] text-[#414651] leading-[24px]">Suryanto Hinarto</h4>
                                    <span class="text-[#717680] text-[12px] leading-[16px]">CTO MobileCom</span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- TAB 2: WALI SANTRI TESTIMONIALS -->
                    <div class="w-full shrink-0 flex flex-col lg:flex-row gap-5 items-stretch justify-center px-1 sm:px-2">
                        
                        <!-- Wali Santri 1 -->
                        <div class="bg-white rounded-[18px] p-6 flex flex-col h-auto lg:h-[340px] justify-between w-full lg:flex-1 border border-[#e9eaeb] shadow-sm hover:shadow-md transition-shadow duration-200">
                            <div class="flex flex-col gap-4">
                                <div class="flex justify-between items-center">
                                    <div class="w-8 h-8 shrink-0">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" class="w-8 h-8 shrink-0" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M26 5.66667H19.3333C17.68 5.66667 16.3333 7.01333 16.3333 8.66667V15.3333C16.3333 16.9867 17.68 18.3333 19.3333 18.3333H21.0533L18.2533 23.92C18 24.44 18.0267 25.04 18.3333 25.5467C18.64 26.0533 19.1733 26.3333 19.7467 26.3333H23.1733C24.0667 26.3333 24.8667 25.84 25.2667 25.04L28.6933 18.2C28.9067 17.7867 29.0133 17.32 29.0133 16.8533V8.65334C29.0133 7.00001 27.6667 5.65334 26.0133 5.65334L26 5.66667ZM27 16.8667C27 17.0267 26.96 17.1733 26.8933 17.32L23.4667 24.16C23.4133 24.28 23.2933 24.3467 23.1733 24.3467H20.28L23.56 17.8C23.72 17.4933 23.6933 17.12 23.52 16.8267C23.3333 16.5333 23.0133 16.3467 22.6667 16.3467H19.3333C18.7867 16.3467 18.3333 15.8933 18.3333 15.3467V8.67999C18.3333 8.13333 18.7867 7.67999 19.3333 7.67999H26C26.5467 7.67999 27 8.13333 27 8.67999V16.88V16.8667ZM12.6667 5.66667H6C4.34667 5.66667 3 7.01333 3 8.66667V15.3333C3 16.9867 4.34667 18.3333 6 18.3333H7.71999L4.92 23.92C4.66667 24.44 4.69333 25.04 5 25.5467C5.30667 26.0533 5.84 26.3333 6.41333 26.3333H9.84001C10.7333 26.3333 11.5333 25.84 11.9333 25.04L15.36 18.2C15.5733 17.7867 15.68 17.32 15.68 16.8533V8.65334C15.68 7.00001 14.3333 5.65334 12.68 5.65334L12.6667 5.66667ZM13.6667 16.8667C13.6667 17.0267 13.6267 17.1733 13.56 17.32L10.1333 24.16C10.08 24.28 9.96001 24.3467 9.84001 24.3467H6.94668L10.2267 17.8C10.3867 17.4933 10.36 17.12 10.1867 16.8267C10 16.5333 9.68 16.3467 9.33333 16.3467H6C5.45333 16.3467 5 15.8933 5 15.3467V8.67999C5 8.13333 5.45333 7.67999 6 7.67999H12.6667C13.2133 7.67999 13.6667 8.13333 13.6667 8.67999V16.88V16.8667Z" fill="#0C61CF"/>
                                        </svg>
                                    </div>
                                    <div class="flex gap-[2px] items-center shrink-0">
                                        @for ($i = 0; $i < 5; $i++)
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" class="w-6 h-6 shrink-0" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.962 4.59601L14.904 8.513C15.05 8.808 15.332 9.01202 15.659 9.05902L20.1419 9.70697C20.9639 9.82597 21.292 10.834 20.697 11.412L17.456 14.557C17.219 14.787 17.111 15.118 17.167 15.443L17.9079 19.747C18.0579 20.62 17.1409 21.286 16.3549 20.875L12.467 18.84C12.175 18.687 11.827 18.687 11.536 18.84L7.65096 20.873C6.86396 21.285 5.94393 20.618 6.09493 19.743L6.83602 15.443C6.89202 15.118 6.78396 14.787 6.54696 14.557L3.30599 11.412C2.70999 10.834 3.03792 9.82597 3.86092 9.70697L8.34395 9.05902C8.66995 9.01202 8.95196 8.808 9.09896 8.513L11.041 4.59601C11.432 3.80101 12.568 3.80101 12.962 4.59601Z" fill="#DC6903"/>
                                        </svg>
                                        @endfor
                                    </div>
                                </div>
                                <p class="font-medium text-[#414651] text-[13px] md:text-[14px] leading-[20px]">
                                    "Awalnya ragu, tapi sekarang sangat bersyukur! Setelah beberapa bulan di IDN Boarding School, anak saya jadi jauh lebih mandiri, disiplin, dan sopan. Kemampuan IT-nya pun melesat hingga sudah bisa bikin website sendiri."
                                </p>
                            </div>
                            <div class="pt-[17px] border-t border-[#e9eaeb] flex items-center gap-3 w-full">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" class="w-[42px] h-[42px] shrink-0" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 3.5C11.3348 3.5 3.5 11.3348 3.5 21C3.5 30.6652 11.3348 38.5 21 38.5C30.6652 38.5 38.5 30.6652 38.5 21C38.5 11.3348 30.6652 3.5 21 3.5ZM21.0141 12.25C23.9138 12.25 26.2641 14.6003 26.2641 17.5C26.2641 20.3997 23.9138 22.75 21.0141 22.75C18.1143 22.75 15.7641 20.3997 15.7641 17.5C15.7641 14.6003 18.1143 12.25 21.0141 12.25ZM21 35.875C17.1325 35.875 13.5975 34.3875 10.955 31.955C11.725 29.54 13.7201 27.2474 18.0076 27.2474H23.9924C28.2624 27.2474 30.2575 29.5575 31.045 31.955C28.4025 34.3875 24.8675 35.875 21 35.875Z" fill="#717680"/>
                                </svg>
                                <div class="flex flex-col gap-[2px]">
                                    <h4 class="font-semibold text-[15px] md:text-[16px] text-[#414651] leading-[24px]">Abu Athallah</h4>
                                    <span class="text-[#717680] text-[12px] leading-[16px]">Walisantri SMK IDN</span>
                                </div>
                            </div>
                        </div>

                        <!-- Wali Santri 2 -->
                        <div class="bg-white rounded-[18px] p-6 flex flex-col h-auto lg:h-[340px] justify-between w-full lg:flex-1 border border-[#e9eaeb] shadow-sm hover:shadow-md transition-shadow duration-200">
                            <div class="flex flex-col gap-4">
                                <div class="flex justify-between items-center">
                                    <div class="w-8 h-8 shrink-0">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" class="w-8 h-8 shrink-0" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M26 5.66667H19.3333C17.68 5.66667 16.3333 7.01333 16.3333 8.66667V15.3333C16.3333 16.9867 17.68 18.3333 19.3333 18.3333H21.0533L18.2533 23.92C18 24.44 18.0267 25.04 18.3333 25.5467C18.64 26.0533 19.1733 26.3333 19.7467 26.3333H23.1733C24.0667 26.3333 24.8667 25.84 25.2667 25.04L28.6933 18.2C28.9067 17.7867 29.0133 17.32 29.0133 16.8533V8.65334C29.0133 7.00001 27.6667 5.65334 26.0133 5.65334L26 5.66667ZM27 16.8667C27 17.0267 26.96 17.1733 26.8933 17.32L23.4667 24.16C23.4133 24.28 23.2933 24.3467 23.1733 24.3467H20.28L23.56 17.8C23.72 17.4933 23.6933 17.12 23.52 16.8267C23.3333 16.5333 23.0133 16.3467 22.6667 16.3467H19.3333C18.7867 16.3467 18.3333 15.8933 18.3333 15.3467V8.67999C18.3333 8.13333 18.7867 7.67999 19.3333 7.67999H26C26.5467 7.67999 27 8.13333 27 8.67999V16.88V16.8667ZM12.6667 5.66667H6C4.34667 5.66667 3 7.01333 3 8.66667V15.3333C3 16.9867 4.34667 18.3333 6 18.3333H7.71999L4.92 23.92C4.66667 24.44 4.69333 25.04 5 25.5467C5.30667 26.0533 5.84 26.3333 6.41333 26.3333H9.84001C10.7333 26.3333 11.5333 25.84 11.9333 25.04L15.36 18.2C15.5733 17.7867 15.68 17.32 15.68 16.8533V8.65334C15.68 7.00001 14.3333 5.65334 12.68 5.65334L12.6667 5.66667ZM13.6667 16.8667C13.6667 17.0267 13.6267 17.1733 13.56 17.32L10.1333 24.16C10.08 24.28 9.96001 24.3467 9.84001 24.3467H6.94668L10.2267 17.8C10.3867 17.4933 10.36 17.12 10.1867 16.8267C10 16.5333 9.68 16.3467 9.33333 16.3467H6C5.45333 16.3467 5 15.8933 5 15.3467V8.67999C5 8.13333 5.45333 7.67999 6 7.67999H12.6667C13.2133 7.67999 13.6667 8.13333 13.6667 8.67999V16.88V16.8667Z" fill="#0C61CF"/>
                                        </svg>
                                    </div>
                                    <div class="flex gap-[2px] items-center shrink-0">
                                        @for ($i = 0; $i < 5; $i++)
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" class="w-6 h-6 shrink-0" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.962 4.59601L14.904 8.513C15.05 8.808 15.332 9.01202 15.659 9.05902L20.1419 9.70697C20.9639 9.82597 21.292 10.834 20.697 11.412L17.456 14.557C17.219 14.787 17.111 15.118 17.167 15.443L17.9079 19.747C18.0579 20.62 17.1409 21.286 16.3549 20.875L12.467 18.84C12.175 18.687 11.827 18.687 11.536 18.84L7.65096 20.873C6.86396 21.285 5.94393 20.618 6.09493 19.743L6.83602 15.443C6.89202 15.118 6.78396 14.787 6.54696 14.557L3.30599 11.412C2.70999 10.834 3.03792 9.82597 3.86092 9.70697L8.34395 9.05902C8.66995 9.01202 8.95196 8.808 9.09896 8.513L11.041 4.59601C11.432 3.80101 12.568 3.80101 12.962 4.59601Z" fill="#DC6903"/>
                                        </svg>
                                        @endfor
                                    </div>
                                </div>
                                <p class="font-medium text-[#414651] text-[13px] md:text-[14px] leading-[20px]">
                                    'IDN Boarding School pilihan tepat! Kedua anak kami makin mandiri dan percaya diri berkat pendidikan adab, IT, hingga public speaking dan entrepreneurship.'
                                </p>
                            </div>
                            <div class="pt-[17px] border-t border-[#e9eaeb] flex items-center gap-3 w-full">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" class="w-[42px] h-[42px] shrink-0" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 3.5C11.3348 3.5 3.5 11.3348 3.5 21C3.5 30.6652 11.3348 38.5 21 38.5C30.6652 38.5 38.5 30.6652 38.5 21C38.5 11.3348 30.6652 3.5 21 3.5ZM21.0141 12.25C23.9138 12.25 26.2641 14.6003 26.2641 17.5C26.2641 20.3997 23.9138 22.75 21.0141 22.75C18.1143 22.75 15.7641 20.3997 15.7641 17.5C15.7641 14.6003 18.1143 12.25 21.0141 12.25ZM21 35.875C17.1325 35.875 13.5975 34.3875 10.955 31.955C11.725 29.54 13.7201 27.2474 18.0076 27.2474H23.9924C28.2624 27.2474 30.2575 29.5575 31.045 31.955C28.4025 34.3875 24.8675 35.875 21 35.875Z" fill="#717680"/>
                                </svg>
                                <div class="flex flex-col gap-[2px]">
                                    <h4 class="font-semibold text-[15px] md:text-[16px] text-[#414651] leading-[24px]">Abu Kuswandi</h4>
                                    <span class="text-[#717680] text-[12px] leading-[16px]">Walisantri SMP IDN</span>
                                </div>
                            </div>
                        </div>

                        <!-- Wali Santri 3 -->
                        <div class="bg-white rounded-[18px] p-6 flex flex-col h-auto lg:h-[340px] justify-between w-full lg:flex-1 border border-[#e9eaeb] shadow-sm hover:shadow-md transition-shadow duration-200">
                            <div class="flex flex-col gap-4">
                                <div class="flex justify-between items-center">
                                    <div class="w-8 h-8 shrink-0">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" class="w-8 h-8 shrink-0" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M26 5.66667H19.3333C17.68 5.66667 16.3333 7.01333 16.3333 8.66667V15.3333C16.3333 16.9867 17.68 18.3333 19.3333 18.3333H21.0533L18.2533 23.92C18 24.44 18.0267 25.04 18.3333 25.5467C18.64 26.0533 19.1733 26.3333 19.7467 26.3333H23.1733C24.0667 26.3333 24.8667 25.84 25.2667 25.04L28.6933 18.2C28.9067 17.7867 29.0133 17.32 29.0133 16.8533V8.65334C29.0133 7.00001 27.6667 5.65334 26.0133 5.65334L26 5.66667ZM27 16.8667C27 17.0267 26.96 17.1733 26.8933 17.32L23.4667 24.16C23.4133 24.28 23.2933 24.3467 23.1733 24.3467H20.28L23.56 17.8C23.72 17.4933 23.6933 17.12 23.52 16.8267C23.3333 16.5333 23.0133 16.3467 22.6667 16.3467H19.3333C18.7867 16.3467 18.3333 15.8933 18.3333 15.3467V8.67999C18.3333 8.13333 18.7867 7.67999 19.3333 7.67999H26C26.5467 7.67999 27 8.13333 27 8.67999V16.88V16.8667ZM12.6667 5.66667H6C4.34667 5.66667 3 7.01333 3 8.66667V15.3333C3 16.9867 4.34667 18.3333 6 18.3333H7.71999L4.92 23.92C4.66667 24.44 4.69333 25.04 5 25.5467C5.30667 26.0533 5.84 26.3333 6.41333 26.3333H9.84001C10.7333 26.3333 11.5333 25.84 11.9333 25.04L15.36 18.2C15.5733 17.7867 15.68 17.32 15.68 16.8533V8.65334C15.68 7.00001 14.3333 5.65334 12.68 5.65334L12.6667 5.66667ZM13.6667 16.8667C13.6667 17.0267 13.6267 17.1733 13.56 17.32L10.1333 24.16C10.08 24.28 9.96001 24.3467 9.84001 24.3467H6.94668L10.2267 17.8C10.3867 17.4933 10.36 17.12 10.1867 16.8267C10 16.5333 9.68 16.3467 9.33333 16.3467H6C5.45333 16.3467 5 15.8933 5 15.3467V8.67999C5 8.13333 5.45333 7.67999 6 7.67999H12.6667C13.2133 7.67999 13.6667 8.13333 13.6667 8.67999V16.88V16.8667Z" fill="#0C61CF"/>
                                        </svg>
                                    </div>
                                    <div class="flex gap-[2px] items-center shrink-0">
                                        @for ($i = 0; $i < 5; $i++)
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" class="w-6 h-6 shrink-0" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.962 4.59601L14.904 8.513C15.05 8.808 15.332 9.01202 15.659 9.05902L20.1419 9.70697C20.9639 9.82597 21.292 10.834 20.697 11.412L17.456 14.557C17.219 14.787 17.111 15.118 17.167 15.443L17.9079 19.747C18.0579 20.62 17.1409 21.286 16.3549 20.875L12.467 18.84C12.175 18.687 11.827 18.687 11.536 18.84L7.65096 20.873C6.86396 21.285 5.94393 20.618 6.09493 19.743L6.83602 15.443C6.89202 15.118 6.78396 14.787 6.54696 14.557L3.30599 11.412C2.70999 10.834 3.03792 9.82597 3.86092 9.70697L8.34395 9.05902C8.66995 9.01202 8.95196 8.808 9.09896 8.513L11.041 4.59601C11.432 3.80101 12.568 3.80101 12.962 4.59601Z" fill="#DC6903"/>
                                        </svg>
                                        @endfor
                                    </div>
                                </div>
                                <p class="font-medium text-[#414651] text-[13px] md:text-[14px] leading-[20px]">
                                    'Bersekolah di IDN Boarding School membawa dampak luar biasa. Anak kami yang tadinya pendiam kini tumbuh menjadi lebih percaya diri dan berani tampil.'
                                </p>
                            </div>
                            <div class="pt-[17px] border-t border-[#e9eaeb] flex items-center gap-3 w-full">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" class="w-[42px] h-[42px] shrink-0" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 3.5C11.3348 3.5 3.5 11.3348 3.5 21C3.5 30.6652 11.3348 38.5 21 38.5C30.6652 38.5 38.5 30.6652 38.5 21C38.5 11.3348 30.6652 3.5 21 3.5ZM21.0141 12.25C23.9138 12.25 26.2641 14.6003 26.2641 17.5C26.2641 20.3997 23.9138 22.75 21.0141 22.75C18.1143 22.75 15.7641 20.3997 15.7641 17.5C15.7641 14.6003 18.1143 12.25 21.0141 12.25ZM21 35.875C17.1325 35.875 13.5975 34.3875 10.955 31.955C11.725 29.54 13.7201 27.2474 18.0076 27.2474H23.9924C28.2624 27.2474 30.2575 29.5575 31.045 31.955C28.4025 34.3875 24.8675 35.875 21 35.875Z" fill="#717680"/>
                                </svg>
                                <div class="flex flex-col gap-[2px]">
                                    <h4 class="font-semibold text-[15px] md:text-[16px] text-[#414651] leading-[24px]">Abu Fauzan</h4>
                                    <span class="text-[#717680] text-[12px] leading-[16px]">Walisantri SMK IDN</span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- TAB 3: ALUMNI TESTIMONIALS -->
                    <div class="w-full shrink-0 flex flex-col lg:flex-row gap-5 items-stretch justify-center px-1 sm:px-2">
                        
                        <!-- Alumni 1 -->
                        <div class="bg-white rounded-[18px] p-6 flex flex-col h-auto lg:h-[340px] justify-between w-full lg:flex-1 border border-[#e9eaeb] shadow-sm hover:shadow-md transition-shadow duration-200">
                            <div class="flex flex-col gap-4">
                                <div class="flex justify-between items-center">
                                    <div class="w-8 h-8 shrink-0">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" class="w-8 h-8 shrink-0" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M26 5.66667H19.3333C17.68 5.66667 16.3333 7.01333 16.3333 8.66667V15.3333C16.3333 16.9867 17.68 18.3333 19.3333 18.3333H21.0533L18.2533 23.92C18 24.44 18.0267 25.04 18.3333 25.5467C18.64 26.0533 19.1733 26.3333 19.7467 26.3333H23.1733C24.0667 26.3333 24.8667 25.84 25.2667 25.04L28.6933 18.2C28.9067 17.7867 29.0133 17.32 29.0133 16.8533V8.65334C29.0133 7.00001 27.6667 5.65334 26.0133 5.65334L26 5.66667ZM27 16.8667C27 17.0267 26.96 17.1733 26.8933 17.32L23.4667 24.16C23.4133 24.28 23.2933 24.3467 23.1733 24.3467H20.28L23.56 17.8C23.72 17.4933 23.6933 17.12 23.52 16.8267C23.3333 16.5333 23.0133 16.3467 22.6667 16.3467H19.3333C18.7867 16.3467 18.3333 15.8933 18.3333 15.3467V8.67999C18.3333 8.13333 18.7867 7.67999 19.3333 7.67999H26C26.5467 7.67999 27 8.13333 27 8.67999V16.88V16.8667ZM12.6667 5.66667H6C4.34667 5.66667 3 7.01333 3 8.66667V15.3333C3 16.9867 4.34667 18.3333 6 18.3333H7.71999L4.92 23.92C4.66667 24.44 4.69333 25.04 5 25.5467C5.30667 26.0533 5.84 26.3333 6.41333 26.3333H9.84001C10.7333 26.3333 11.5333 25.84 11.9333 25.04L15.36 18.2C15.5733 17.7867 15.68 17.32 15.68 16.8533V8.65334C15.68 7.00001 14.3333 5.65334 12.68 5.65334L12.6667 5.66667ZM13.6667 16.8667C13.6667 17.0267 13.6267 17.1733 13.56 17.32L10.1333 24.16C10.08 24.28 9.96001 24.3467 9.84001 24.3467H6.94668L10.2267 17.8C10.3867 17.4933 10.36 17.12 10.1867 16.8267C10 16.5333 9.68 16.3467 9.33333 16.3467H6C5.45333 16.3467 5 15.8933 5 15.3467V8.67999C5 8.13333 5.45333 7.67999 6 7.67999H12.6667C13.2133 7.67999 13.6667 8.13333 13.6667 8.67999V16.88V16.8667Z" fill="#0C61CF"/>
                                        </svg>
                                    </div>
                                    <div class="flex gap-[2px] items-center shrink-0">
                                        @for ($i = 0; $i < 5; $i++)
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" class="w-6 h-6 shrink-0" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.962 4.59601L14.904 8.513C15.05 8.808 15.332 9.01202 15.659 9.05902L20.1419 9.70697C20.9639 9.82597 21.292 10.834 20.697 11.412L17.456 14.557C17.219 14.787 17.111 15.118 17.167 15.443L17.9079 19.747C18.0579 20.62 17.1409 21.286 16.3549 20.875L12.467 18.84C12.175 18.687 11.827 18.687 11.536 18.84L7.65096 20.873C6.86396 21.285 5.94393 20.618 6.09493 19.743L6.83602 15.443C6.89202 15.118 6.78396 14.787 6.54696 14.557L3.30599 11.412C2.70999 10.834 3.03792 9.82597 3.86092 9.70697L8.34395 9.05902C8.66995 9.01202 8.95196 8.808 9.09896 8.513L11.041 4.59601C11.432 3.80101 12.568 3.80101 12.962 4.59601Z" fill="#DC6903"/>
                                        </svg>
                                        @endfor
                                    </div>
                                </div>
                                <p class="font-medium text-[#414651] text-[13px] md:text-[14px] leading-[20px]">
                                    IDN adalah starting point saya di dunia IT, disana saya pertama kali mengenal pemrograman, pertama kali terjun ke dunia industri (PKL), dan pertama kali public speaking.
                                </p>
                            </div>
                            <div class="pt-[17px] border-t border-[#e9eaeb] flex items-center gap-3 w-full">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" class="w-[42px] h-[42px] shrink-0" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 3.5C11.3348 3.5 3.5 11.3348 3.5 21C3.5 30.6652 11.3348 38.5 21 38.5C30.6652 38.5 38.5 30.6652 38.5 21C38.5 11.3348 30.6652 3.5 21 3.5ZM21.0141 12.25C23.9138 12.25 26.2641 14.6003 26.2641 17.5C26.2641 20.3997 23.9138 22.75 21.0141 22.75C18.1143 22.75 15.7641 20.3997 15.7641 17.5C15.7641 14.6003 18.1143 12.25 21.0141 12.25ZM21 35.875C17.1325 35.875 13.5975 34.3875 10.955 31.955C11.725 29.54 13.7201 27.2474 18.0076 27.2474H23.9924C28.2624 27.2474 30.2575 29.5575 31.045 31.955C28.4025 34.3875 24.8675 35.875 21 35.875Z" fill="#717680"/>
                                </svg>
                                <div class="flex flex-col gap-[2px]">
                                    <h4 class="font-semibold text-[15px] md:text-[16px] text-[#414651] leading-[24px]">Hafidz Naufal</h4>
                                    <span class="text-[#717680] text-[12px] leading-[16px]">Alumni SMK IDN · Angkatan 0</span>
                                </div>
                            </div>
                        </div>

                        <!-- Alumni 2 -->
                        <div class="bg-white rounded-[18px] p-6 flex flex-col h-auto lg:h-[340px] justify-between w-full lg:flex-1 border border-[#e9eaeb] shadow-sm hover:shadow-md transition-shadow duration-200">
                            <div class="flex flex-col gap-4">
                                <div class="flex justify-between items-center">
                                    <div class="w-8 h-8 shrink-0">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" class="w-8 h-8 shrink-0" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M26 5.66667H19.3333C17.68 5.66667 16.3333 7.01333 16.3333 8.66667V15.3333C16.3333 16.9867 17.68 18.3333 19.3333 18.3333H21.0533L18.2533 23.92C18 24.44 18.0267 25.04 18.3333 25.5467C18.64 26.0533 19.1733 26.3333 19.7467 26.3333H23.1733C24.0667 26.3333 24.8667 25.84 25.2667 25.04L28.6933 18.2C28.9067 17.7867 29.0133 17.32 29.0133 16.8533V8.65334C29.0133 7.00001 27.6667 5.65334 26.0133 5.65334L26 5.66667ZM27 16.8667C27 17.0267 26.96 17.1733 26.8933 17.32L23.4667 24.16C23.4133 24.28 23.2933 24.3467 23.1733 24.3467H20.28L23.56 17.8C23.72 17.4933 23.6933 17.12 23.52 16.8267C23.3333 16.5333 23.0133 16.3467 22.6667 16.3467H19.3333C18.7867 16.3467 18.3333 15.8933 18.3333 15.3467V8.67999C18.3333 8.13333 18.7867 7.67999 19.3333 7.67999H26C26.5467 7.67999 27 8.13333 27 8.67999V16.88V16.8667ZM12.6667 5.66667H6C4.34667 5.66667 3 7.01333 3 8.66667V15.3333C3 16.9867 4.34667 18.3333 6 18.3333H7.71999L4.92 23.92C4.66667 24.44 4.69333 25.04 5 25.5467C5.30667 26.0533 5.84 26.3333 6.41333 26.3333H9.84001C10.7333 26.3333 11.5333 25.84 11.9333 25.04L15.36 18.2C15.5733 17.7867 15.68 17.32 15.68 16.8533V8.65334C15.68 7.00001 14.3333 5.65334 12.68 5.65334L12.6667 5.66667ZM13.6667 16.8667C13.6667 17.0267 13.6267 17.1733 13.56 17.32L10.1333 24.16C10.08 24.28 9.96001 24.3467 9.84001 24.3467H6.94668L10.2267 17.8C10.3867 17.4933 10.36 17.12 10.1867 16.8267C10 16.5333 9.68 16.3467 9.33333 16.3467H6C5.45333 16.3467 5 15.8933 5 15.3467V8.67999C5 8.13333 5.45333 7.67999 6 7.67999H12.6667C13.2133 7.67999 13.6667 8.13333 13.6667 8.67999V16.88V16.8667Z" fill="#0C61CF"/>
                                        </svg>
                                    </div>
                                    <div class="flex gap-[2px] items-center shrink-0">
                                        @for ($i = 0; $i < 5; $i++)
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" class="w-6 h-6 shrink-0" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.962 4.59601L14.904 8.513C15.05 8.808 15.332 9.01202 15.659 9.05902L20.1419 9.70697C20.9639 9.82597 21.292 10.834 20.697 11.412L17.456 14.557C17.219 14.787 17.111 15.118 17.167 15.443L17.9079 19.747C18.0579 20.62 17.1409 21.286 16.3549 20.875L12.467 18.84C12.175 18.687 11.827 18.687 11.536 18.84L7.65096 20.873C6.86396 21.285 5.94393 20.618 6.09493 19.743L6.83602 15.443C6.89202 15.118 6.78396 14.787 6.54696 14.557L3.30599 11.412C2.70999 10.834 3.03792 9.82597 3.86092 9.70697L8.34395 9.05902C8.66995 9.01202 8.95196 8.808 9.09896 8.513L11.041 4.59601C11.432 3.80101 12.568 3.80101 12.962 4.59601Z" fill="#DC6903"/>
                                        </svg>
                                        @endfor
                                    </div>
                                </div>
                                <p class="font-medium text-[#414651] text-[13px] md:text-[14px] leading-[20px]">
                                    3 tahun di IDN merupakan 3 tahun yang sangat berwarna, karena tidak hanya belajar IT dan Ngaji, kami juga mendapatkan lingkungan dan pertemanan yang luar biasa.
                                </p>
                            </div>
                            <div class="pt-[17px] border-t border-[#e9eaeb] flex items-center gap-3 w-full">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" class="w-[42px] h-[42px] shrink-0" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 3.5C11.3348 3.5 3.5 11.3348 3.5 21C3.5 30.6652 11.3348 38.5 21 38.5C30.6652 38.5 38.5 30.6652 38.5 21C38.5 11.3348 30.6652 3.5 21 3.5ZM21.0141 12.25C23.9138 12.25 26.2641 14.6003 26.2641 17.5C26.2641 20.3997 23.9138 22.75 21.0141 22.75C18.1143 22.75 15.7641 20.3997 15.7641 17.5C15.7641 14.6003 18.1143 12.25 21.0141 12.25ZM21 35.875C17.1325 35.875 13.5975 34.3875 10.955 31.955C11.725 29.54 13.7201 27.2474 18.0076 27.2474H23.9924C28.2624 27.2474 30.2575 29.5575 31.045 31.955C28.4025 34.3875 24.8675 35.875 21 35.875Z" fill="#717680"/>
                                </svg>
                                <div class="flex flex-col gap-[2px]">
                                    <h4 class="font-semibold text-[15px] md:text-[16px] text-[#414651] leading-[24px]">Joe Renaldi F.</h4>
                                    <span class="text-[#717680] text-[12px] leading-[16px]">Alumni SMK IDN · Angkatan 0</span>
                                </div>
                            </div>
                        </div>

                        <!-- Alumni 3 -->
                        <div class="bg-white rounded-[18px] p-6 flex flex-col h-auto lg:h-[340px] justify-between w-full lg:flex-1 border border-[#e9eaeb] shadow-sm hover:shadow-md transition-shadow duration-200">
                            <div class="flex flex-col gap-4">
                                <div class="flex justify-between items-center">
                                    <div class="w-8 h-8 shrink-0">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" class="w-8 h-8 shrink-0" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M26 5.66667H19.3333C17.68 5.66667 16.3333 7.01333 16.3333 8.66667V15.3333C16.3333 16.9867 17.68 18.3333 19.3333 18.3333H21.0533L18.2533 23.92C18 24.44 18.0267 25.04 18.3333 25.5467C18.64 26.0533 19.1733 26.3333 19.7467 26.3333H23.1733C24.0667 26.3333 24.8667 25.84 25.2667 25.04L28.6933 18.2C28.9067 17.7867 29.0133 17.32 29.0133 16.8533V8.65334C29.0133 7.00001 27.6667 5.65334 26.0133 5.65334L26 5.66667ZM27 16.8667C27 17.0267 26.96 17.1733 26.8933 17.32L23.4667 24.16C23.4133 24.28 23.2933 24.3467 23.1733 24.3467H20.28L23.56 17.8C23.72 17.4933 23.6933 17.12 23.52 16.8267C23.3333 16.5333 23.0133 16.3467 22.6667 16.3467H19.3333C18.7867 16.3467 18.3333 15.8933 18.3333 15.3467V8.67999C18.3333 8.13333 18.7867 7.67999 19.3333 7.67999H26C26.5467 7.67999 27 8.13333 27 8.67999V16.88V16.8667ZM12.6667 5.66667H6C4.34667 5.66667 3 7.01333 3 8.66667V15.3333C3 16.9867 4.34667 18.3333 6 18.3333H7.71999L4.92 23.92C4.66667 24.44 4.69333 25.04 5 25.5467C5.30667 26.0533 5.84 26.3333 6.41333 26.3333H9.84001C10.7333 26.3333 11.5333 25.84 11.9333 25.04L15.36 18.2C15.5733 17.7867 15.68 17.32 15.68 16.8533V8.65334C15.68 7.00001 14.3333 5.65334 12.68 5.65334L12.6667 5.66667ZM13.6667 16.8667C13.6667 17.0267 13.6267 17.1733 13.56 17.32L10.1333 24.16C10.08 24.28 9.96001 24.3467 9.84001 24.3467H6.94668L10.2267 17.8C10.3867 17.4933 10.36 17.12 10.1867 16.8267C10 16.5333 9.68 16.3467 9.33333 16.3467H6C5.45333 16.3467 5 15.8933 5 15.3467V8.67999C5 8.13333 5.45333 7.67999 6 7.67999H12.6667C13.2133 7.67999 13.6667 8.13333 13.6667 8.67999V16.88V16.8667Z" fill="#0C61CF"/>
                                        </svg>
                                    </div>
                                    <div class="flex gap-[2px] items-center shrink-0">
                                        @for ($i = 0; $i < 5; $i++)
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" class="w-6 h-6 shrink-0" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.962 4.59601L14.904 8.513C15.05 8.808 15.332 9.01202 15.659 9.05902L20.1419 9.70697C20.9639 9.82597 21.292 10.834 20.697 11.412L17.456 14.557C17.219 14.787 17.111 15.118 17.167 15.443L17.9079 19.747C18.0579 20.62 17.1409 21.286 16.3549 20.875L12.467 18.84C12.175 18.687 11.827 18.687 11.536 18.84L7.65096 20.873C6.86396 21.285 5.94393 20.618 6.09493 19.743L6.83602 15.443C6.89202 15.118 6.78396 14.787 6.54696 14.557L3.30599 11.412C2.70999 10.834 3.03792 9.82597 3.86092 9.70697L8.34395 9.05902C8.66995 9.01202 8.95196 8.808 9.09896 8.513L11.041 4.59601C11.432 3.80101 12.568 3.80101 12.962 4.59601Z" fill="#DC6903"/>
                                        </svg>
                                        @endfor
                                    </div>
                                </div>
                                <p class="font-medium text-[#414651] text-[13px] md:text-[14px] leading-[20px]">
                                    Bersekolah di IDN Sangat membentuk mental salah satunya adalah mental kemandirian yang mungkin hanya di dapat dari perpaduan antara SMK dan Boarding School.
                                </p>
                            </div>
                            <div class="pt-[17px] border-t border-[#e9eaeb] flex items-center gap-3 w-full">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" class="w-[42px] h-[42px] shrink-0" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 3.5C11.3348 3.5 3.5 11.3348 3.5 21C3.5 30.6652 11.3348 38.5 21 38.5C30.6652 38.5 38.5 30.6652 38.5 21C38.5 11.3348 30.6652 3.5 21 3.5ZM21.0141 12.25C23.9138 12.25 26.2641 14.6003 26.2641 17.5C26.2641 20.3997 23.9138 22.75 21.0141 22.75C18.1143 22.75 15.7641 20.3997 15.7641 17.5C15.7641 14.6003 18.1143 12.25 21.0141 12.25ZM21 35.875C17.1325 35.875 13.5975 34.3875 10.955 31.955C11.725 29.54 13.7201 27.2474 18.0076 27.2474H23.9924C28.2624 27.2474 30.2575 29.5575 31.045 31.955C28.4025 34.3875 24.8675 35.875 21 35.875Z" fill="#717680"/>
                                </svg>
                                <div class="flex flex-col gap-[2px]">
                                    <h4 class="font-semibold text-[15px] md:text-[16px] text-[#414651] leading-[24px]">Abdul Hadi</h4>
                                    <span class="text-[#717680] text-[12px] leading-[16px]">Alumni SMK IDN · Angkatan 3</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- 10. BIAYA PENDIDIKAN (Figma Node 19900:12612) -->
    <section class="w-full max-w-full overflow-hidden flex flex-col items-center py-16 md:py-[110px] bg-[#fafafa]">
        <div class="w-[1120px] max-w-full mx-auto flex flex-col gap-8 items-start px-4 sm:px-6">
            <div class="flex flex-col md:flex-row items-center md:items-start justify-between gap-10 md:gap-14 w-full">
                
                <!-- LEFT TUITION INFO -->
                <div class="flex-1 flex flex-col gap-4 items-start w-full text-left">
                    <div class="flex flex-col gap-2 w-full">
                        <span class="text-[#717680] text-[14px] font-normal">Biaya Pendidikan</span>
                        <h2 class="font-heading font-semibold text-[32px] sm:text-[40px] md:text-[48px] leading-[40px] sm:leading-[50px] md:leading-[60px] tracking-[-1.5px] md:tracking-[-1.92px] text-[#0b0d12]">
                            <span class="text-[#0c61cf]">Transparan,</span><br class="hidden sm:inline">
                            tanpa biaya<br class="hidden sm:inline">
                            tersembunyi.
                        </h2>
                    </div>
                    <p class="text-[#717680] text-[15px] md:text-[16px] leading-[24px]">
                        Estimasi biaya untuk santri baru IDN Boarding School, tahun ajaran 2027/2028.
                    </p>
                </div>

                <!-- RIGHT COST BREAKDOWN -->
                <div class="flex-1 flex flex-col w-full text-[#414651]">
                    <div class="flex justify-between items-center py-4 border-b border-[#e9eaeb]">
                        <span class="text-[15px] md:text-[16px] font-normal">Biaya Pendaftaran</span>
                        <span class="font-semibold text-[20px] md:text-[24px] leading-[28px] md:leading-[32px] text-[#414651]">Rp 900.000</span>
                    </div>
                    <div class="flex justify-between items-center py-4 border-b border-[#e9eaeb]">
                        <span class="text-[15px] md:text-[16px] font-normal">Uang Masuk</span>
                        <span class="font-semibold text-[20px] md:text-[24px] leading-[28px] md:leading-[32px] text-[#414651]">Rp 40.000.000</span>
                    </div>
                    <div class="flex justify-between items-center py-4 border-b border-[#e9eaeb]">
                        <span class="text-[15px] md:text-[16px] font-normal">SPP Bulanan</span>
                        <span class="font-semibold text-[20px] md:text-[24px] leading-[28px] md:leading-[32px] text-[#414651]">Rp 4.000.000</span>
                    </div>
                    <div class="flex justify-between items-center py-4 border-b border-[#e9eaeb]">
                        <span class="text-[15px] md:text-[16px] font-normal">Biaya Tahunan</span>
                        <span class="font-semibold text-[20px] md:text-[24px] leading-[28px] md:leading-[32px] text-[#414651]">Rp 4.000.000</span>
                    </div>
                </div>

            </div>

            <!-- BUTTON: Selengkapnya -->
            <a href="/ppdb" class="group bg-[#0c61cf] text-white w-[149px] h-[48px] rounded-full font-semibold text-[16px] flex items-center justify-center gap-2 border border-[#d5d7da] shadow-md transition-all duration-200 hover:bg-[#094fa5] mx-0">
                <span>Selengkapnya</span>
            </a>
        </div>
    </section>


    <!-- 11. REGISTRATION BANNER / PPDB 2027/2028 (Figma Node 19900:12633) -->
    <section class="w-full max-w-full overflow-hidden flex flex-col items-center py-12 md:py-[90px] px-6 md:px-[64px] bg-[#fafafa]">
        <div class="w-full max-w-[1120px] md:max-w-[706px] lg:max-w-[1120px] mx-auto bg-[#0c61cf] rounded-[20px] p-6 sm:p-[40px] min-h-[364px] text-white flex flex-col justify-between gap-6 md:gap-8 relative overflow-hidden shadow-lg">
            <div class="w-[390px] h-[423px] rounded-full bg-white/20 blur-[64px] absolute -right-20 -top-40 pointer-events-none"></div>

            <div class="flex flex-col gap-4 z-10 max-w-[672px]">
                <span class="text-[#d5d7da] text-[14px]">PPDB 2027/2028</span>
                <h2 class="font-heading font-bold text-[28px] sm:text-[36px] md:text-[48px] leading-[36px] sm:leading-[46px] md:leading-[60px] tracking-[-1.5px] md:tracking-[-1.92px]">
                    <span class="text-[#ff7a29]">Kuota terbatas.</span> Ambil langkahmu hari ini.
                </h2>
                <p class="text-[#d5d7da] text-[15px] md:text-[16px] leading-[24px]">
                    Gelombang 1 dibuka hingga kuota per jurusan terpenuhi. Daftar sekarang untuk mengamankan tempat dan mendapatkan potongan uang masuk.
                </p>
            </div>

            <!-- BUTTONS CONTAINER -->
            <div class="flex flex-wrap items-center gap-4 z-10">
                <a href="/ppdb" class="group bg-white text-[#0c61cf] px-6 py-3 rounded-full font-semibold text-[15px] md:text-[16px] leading-none h-[48px] flex items-center justify-center gap-2 shadow-sm transition-all duration-200 hover:bg-slate-100 hover:shadow-md">
                    <span>Mulai Pendaftaran</span>
                    <svg class="w-4 h-4 transition-transform duration-200 ease-out group-hover:translate-x-1 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
                <a href="https://wa.me/6282210102006" target="_blank" class="group bg-[#0c61cf] border border-[#d5d7da] text-white px-6 py-3 rounded-full font-semibold text-[15px] md:text-[16px] leading-none h-[48px] flex items-center justify-center gap-2 transition-all duration-200 hover:bg-[#094fa5] hover:border-white">
                    <span>Tanya Via WhatsApp</span>
                    <svg class="w-4 h-4 transition-transform duration-200 ease-out group-hover:translate-x-1 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>


    <!-- 12. REUSABLE FOOTER COMPONENT -->
    <x-footer />

    <!-- 13. REUSABLE CHATBOT COMPONENT -->
    <x-chatbot />

    </body>
</html>



