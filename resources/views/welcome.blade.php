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

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#fafafa] text-[#181d27] min-h-screen w-full max-w-full overflow-x-hidden font-sans antialiased flex flex-col items-center">

    <!-- 1. REUSABLE NAVBAR COMPONENT (Desktop Specs strictly per Figma) -->
    <x-navbar active="beranda" />

    <!-- 2. HERO HEADER SECTION (Figma Node 19900:12342) -->
    <section class="w-full max-w-full overflow-hidden flex flex-col items-center mt-16 md:mt-0 py-12 md:py-[110px] bg-[#fafafa]">
        
        <!-- MAIN CONTENT CONTAINER (1120px width, centered) -->
        <div class="w-[1120px] max-w-full mx-auto flex flex-col lg:flex-row items-center justify-between gap-8 md:gap-14 py-4 px-4 sm:px-6">
            
            <!-- LEFT TEXT CONTAINER (615px width) -->
            <div class="w-full lg:w-[615px] max-w-full flex flex-col gap-6 md:gap-8 items-start text-left">
                
                <!-- SLOGAN BADGE -->
                <div class="bg-white border border-[#d5d7da] flex items-center justify-center gap-2 px-4 py-2 rounded-full shadow-2xs">
                    <span class="w-3.5 h-3.5 rounded-full bg-[#ff7a29] shrink-0"></span>
                    <span class="text-[#0c61cf] font-medium text-[15px] md:text-[16px] leading-[24px]">Muda Mendunia</span>
                </div>

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
                    <a href="/ppdb" class="group bg-[#0c61cf] text-white w-[195px] h-[48px] px-5 py-3 rounded-full font-semibold text-[16px] leading-[24px] flex items-center justify-center gap-2 shadow-[0px_2px_6px_rgba(12,97,207,0.32)] transition-all duration-200 hover:bg-[#094fa5] hover:shadow-md shrink-0">
                        <span>Daftar Sekarang</span>
                        <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-1 block lg:hidden lg:group-hover:block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                    <a href="/program" class="group bg-white border-2 border-[#e9eaeb] text-[#414651] w-[145px] h-[48px] px-5 py-3 rounded-full font-semibold text-[16px] leading-[24px] flex items-center justify-center gap-2 transition-all duration-200 hover:bg-slate-50 hover:border-[#0c61cf] shrink-0">
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
        <div class="w-[1120px] max-w-full mx-auto border-t border-b border-[#e9eaeb] py-4 mt-6 md:mt-10 grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-0 text-center px-4">
            <div class="border-r border-[#e9eaeb] px-4 md:px-6 py-3 flex flex-col gap-1 items-center">
                <span class="font-bold text-[24px] md:text-[28px] leading-[34px] md:leading-[38px] text-[#0c61cf]">10+</span>
                <span class="text-[#717680] text-[14px] md:text-[18px] leading-[22px] md:leading-[26px]">Tahun Berdiri</span>
            </div>
            <div class="md:border-r border-[#e9eaeb] px-4 md:px-6 py-3 flex flex-col gap-1 items-center">
                <span class="font-bold text-[24px] md:text-[28px] leading-[34px] md:leading-[38px] text-[#0c61cf]">5</span>
                <span class="text-[#717680] text-[14px] md:text-[18px] leading-[22px] md:leading-[26px]">Cabang</span>
            </div>
            <div class="border-r border-[#e9eaeb] px-4 md:px-6 py-3 flex flex-col gap-1 items-center">
                <span class="font-bold text-[24px] md:text-[28px] leading-[34px] md:leading-[38px] text-[#0c61cf]">1.500+</span>
                <span class="text-[#717680] text-[14px] md:text-[18px] leading-[22px] md:leading-[26px]">Alumni Sukses</span>
            </div>
            <div class="px-4 md:px-6 py-3 flex flex-col gap-1 items-center">
                <span class="font-bold text-[24px] md:text-[28px] leading-[34px] md:leading-[38px] text-[#0c61cf]">1 Milyar+</span>
                <span class="text-[#717680] text-[14px] md:text-[18px] leading-[22px] md:leading-[26px]">Penghasilan Siswa</span>
            </div>
        </div>

    </section>


    <!-- 3. KENAPA MEMILIH IDN BOARDING SCHOOL? (Figma Node 19900:12369) -->
    <section class="w-full max-w-full overflow-hidden flex flex-col items-center py-12 md:py-[90px] bg-white">
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
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-5 w-full">
                
                <!-- Card 1: Sekolah IT Terbaik -->
                <div class="feature-card bg-white border-2 border-[#e9eaeb] rounded-[18px] p-5 flex flex-col gap-4 items-start w-full">
                    <div class="feature-icon-btn bg-white border-2 border-[#e9eaeb] w-12 h-12 rounded-full flex items-center justify-center text-[#414651] shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                        </svg>
                    </div>
                    <div class="flex flex-col gap-2">
                        <h3 class="font-semibold text-[20px] md:text-[24px] leading-[28px] md:leading-[32px] text-[#181d27]">Sekolah IT Terbaik</h3>
                        <p class="text-[#717680] text-[14px] md:text-[16px] leading-[22px] md:leading-[24px]">Terbukti dengan lulusan kami yang berada di atas standar atau bisa dikatakan expert, dan siap menjadi talenta IT profesional.</p>
                    </div>
                </div>

                <!-- Card 2: Ekstrakurikuler Menarik -->
                <div class="feature-card bg-white border-2 border-[#e9eaeb] rounded-[18px] p-5 flex flex-col gap-4 items-start w-full">
                    <div class="feature-icon-btn bg-white border-2 border-[#e9eaeb] w-12 h-12 rounded-full flex items-center justify-center text-[#414651] shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                        </svg>
                    </div>
                    <div class="flex flex-col gap-2">
                        <h3 class="font-semibold text-[20px] md:text-[24px] leading-[28px] md:leading-[32px] text-[#181d27]">Ekstrakurikuler Menarik</h3>
                        <p class="text-[#717680] text-[14px] md:text-[16px] leading-[22px] md:leading-[24px]">Backpacking ASEAN, Edurace, Entrepreneur, Public Speaking, Berkuda, Beladiri, dan berbagai kegiatan menarik lainnya.</p>
                    </div>
                </div>

                <!-- Card 3: Pengajar Profesional -->
                <div class="feature-card bg-white border-2 border-[#e9eaeb] rounded-[18px] p-5 flex flex-col gap-4 items-start w-full">
                    <div class="feature-icon-btn bg-white border-2 border-[#e9eaeb] w-12 h-12 rounded-full flex items-center justify-center text-[#414651] shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0112 20.055a11.952 11.952 0 01-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/>
                        </svg>
                    </div>
                    <div class="flex flex-col gap-2">
                        <h3 class="font-semibold text-[20px] md:text-[24px] leading-[28px] md:leading-[32px] text-[#181d27]">Pengajar Profesional</h3>
                        <p class="text-[#717680] text-[14px] md:text-[16px] leading-[22px] md:leading-[24px]">S2 UI, CCIE, Alumni STDI Imam Syafii Jember, Florida USA, dan berbagai pengalaman profesional di bidangnya.</p>
                    </div>
                </div>

                <!-- Card 4: Program Unggulan -->
                <div class="feature-card bg-white border-2 border-[#e9eaeb] rounded-[18px] p-5 flex flex-col gap-4 items-start w-full">
                    <div class="feature-icon-btn bg-white border-2 border-[#e9eaeb] w-12 h-12 rounded-full flex items-center justify-center text-[#414651] shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                        </svg>
                    </div>
                    <div class="flex flex-col gap-2">
                        <h3 class="font-semibold text-[20px] md:text-[24px] leading-[28px] md:leading-[32px] text-[#181d27]">Program Unggulan</h3>
                        <p class="text-[#717680] text-[14px] md:text-[16px] leading-[22px] md:leading-[24px]">Mengembangkan soft skill dan kompetensi melalui IDN Mengajar, Bootcamp, Leadership Camp, English Camp, IT Camp, dan lainnya.</p>
                    </div>
                </div>

                <!-- Card 5: Pesantren Berbasis IT -->
                <div class="feature-card bg-white border-2 border-[#e9eaeb] rounded-[18px] p-5 flex flex-col gap-4 items-start w-full">
                    <div class="feature-icon-btn bg-white border-2 border-[#e9eaeb] w-12 h-12 rounded-full flex items-center justify-center text-[#414651] shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <div class="flex flex-col gap-2">
                        <h3 class="font-semibold text-[20px] md:text-[24px] leading-[28px] md:leading-[32px] text-[#181d27]">Pesantren Berbasis IT</h3>
                        <p class="text-[#717680] text-[14px] md:text-[16px] leading-[22px] md:leading-[24px]">Menggabungkan pembelajaran Diniyah, Tahfidz, Bahasa Inggris, dan teknologi sesuai dengan jurusan serta kebutuhan industri.</p>
                    </div>
                </div>

                <!-- Card 6: Full Praktik -->
                <div class="feature-card bg-white border-2 border-[#e9eaeb] rounded-[18px] p-5 flex flex-col gap-4 items-start w-full">
                    <div class="feature-icon-btn bg-white border-2 border-[#e9eaeb] w-12 h-12 rounded-full flex items-center justify-center text-[#414651] shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
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
                    <a href="/program" class="group bg-[#0c61cf] text-white w-full h-[48px] rounded-full font-semibold text-[16px] flex items-center justify-center gap-2 transition-all duration-200 hover:bg-[#094fa5]">
                        <span>Selengkapnya</span>
                        <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                    <a href="/program" class="group bg-[#0c61cf] text-white w-full h-[48px] rounded-full font-semibold text-[16px] flex items-center justify-center gap-2 transition-all duration-200 hover:bg-[#094fa5]">
                        <span>Selengkapnya</span>
                        <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>

                <!-- Major 3: DKV -->
                <div class="bg-white border border-[#e9eaeb] rounded-[18px] p-6 flex flex-col gap-8 items-center w-full max-w-none lg:max-w-[360px] justify-between transition-all duration-300 hover:border-[#0c61cf] hover:shadow-lg hover:-translate-y-1">
                    <div class="flex flex-col gap-6 w-full items-start">
                        <div class="flex items-center justify-between w-full">
                            <div class="w-12 h-12 rounded-full border border-[#c2d8f5] bg-white flex items-center justify-center text-[#0c61cf]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
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
                    <a href="/program" class="group bg-[#0c61cf] text-white w-full h-[48px] rounded-full font-semibold text-[16px] flex items-center justify-center gap-2 transition-all duration-200 hover:bg-[#094fa5]">
                        <span>Selengkapnya</span>
                        <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                <div class="text-[#717680] text-[15px] md:text-[16px] leading-[24px] max-w-[750px]">
                    <p>IDN Boarding School telah menjalin kerjasama dengan berbagai perusahaan, baik nasional maupun internasional</p>
                    <p>untuk mendukung berbagai program, dan pengembangan karir para siswa.</p>
                </div>
            </div>

            <!-- MARQUEE LOGO TICKER CONTAINER -->
            <div class="w-full overflow-hidden relative py-4 group">
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
                    ['name' => 'Universitas Negeri Jakarta (UNJ)', 'img' => 'UJ.avif'],
                    ['name' => 'Universitas Pembangunan Nasional "Veteran" Jakarta (UPNVJ)', 'img' => 'UNIJA.avif'],
                    ['name' => 'Universitas Indraprasta PGRI (UNINDRA)', 'img' => 'PGRI.avif'],
                    ['name' => 'Universitas Komputer Indonesia (UNIKOM)', 'img' => 'UNIKOM.avif'],
                    ['name' => 'Institut Pertanian Bogor (IPB University)', 'img' => 'IPB.avif'],
                    ['name' => 'Politeknik Negeri Jakarta (PNJ)', 'img' => 'PNJ.avif'],
                    ['name' => 'Universitas Primagraha (UPG)', 'img' => 'Universitas Primagraha (UPG) .avif'],
                    ['name' => 'Harbour.Space University', 'img' => 'harbour space university.avif'],
                    ['name' => 'Universitas Lampung (UNILA)', 'img' => 'univ lampung.avif'],
                    ['name' => 'Universitas Borneo Tarakan (UBT)', 'img' => 'univ borneo tarakan.avif'],
                    ['name' => 'Universitas Gadjah Mada (UGM)', 'img' => 'UP.avif'],
                    ['name' => 'Universitas Esa Unggul (UAI / UEU)', 'img' => 'UAI.avif'],
                    ['name' => 'Universitas Teknologi Sumbawa (UTS)', 'img' => 'UTS.avif'],
                    ['name' => 'Universitas Airlangga (UNAIR)', 'img' => 'UNAIR.avif'],
                    ['name' => 'Universiti Putra Malaysia (UPM)', 'img' => 'UPM.avif']
                ];
            @endphp

            <div class="grid grid-cols-4 sm:grid-cols-5 md:grid-cols-7 lg:grid-cols-10 gap-3 sm:gap-4 md:gap-5 w-full max-w-[1120px] mx-auto px-4 justify-items-center md:max-lg:[&>:nth-child(7n+1):last-child]:col-span-7 md:max-lg:[&>:nth-child(7n+1):last-child]:justify-self-center">
                @foreach($allUniversities as $index => $u)
                @php
                    $uName = is_array($u) ? $u['name'] : $u;
                    $uImg = is_array($u) && isset($u['img']) ? $u['img'] : null;
                @endphp
                <div class="univ-card bg-white w-[72px] sm:w-[94px] h-[72px] sm:h-[94px] rounded-[14px] sm:rounded-[18px] flex items-center justify-center cursor-pointer shadow-2xs"
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
            <div class="w-full overflow-hidden">
                <div class="flex w-full transition-transform duration-500 ease-in-out"
                     :style="activeTab === 'Perusahaan' ? 'transform: translateX(0%);' : (activeTab === 'Wali Santri' ? 'transform: translateX(-100%);' : 'transform: translateX(-200%);')">
                    
                    <!-- TAB 1: PERUSAHAAN TESTIMONIALS -->
                    <div class="w-full shrink-0 flex flex-col lg:flex-row gap-5 items-center justify-center">
                        
                        <!-- Perusahaan 1 -->
                        <div class="bg-white rounded-[18px] p-6 flex flex-col h-auto lg:h-[340px] justify-between w-full max-w-[706px] border border-[#e9eaeb] shadow-sm">
                            <div class="flex flex-col gap-4 md:gap-5">
                                <div class="flex justify-between items-center">
                                    <div class="w-8 h-8 text-[#0c61cf] text-3xl font-bold leading-none">“</div>
                                    <div class="flex text-[#ff7a29] gap-1 text-sm">★★★★★</div>
                                </div>
                                <p class="text-[#414651] text-[13px] md:text-[14px] leading-[20px]">
                                    “Team alumni SMK IDN siap untuk diberikan Tugas, dapat task dan mampu belajar cepat untuk menyesuaikan Tugas Technical yang cukup dynamis. Adanya team IDN sangat membantu akselerasi Teknis dan kompetensi terhadap kebutuhan Mobile Developer dan Kebutuhan Network Operation Center, IT & Internet Service . Semoga IDN Terus menghasilkan SDM yang terlatih baik soft skill atau pun hardskill.”
                                </p>
                            </div>
                            <div class="pt-4 border-t border-[#e9eaeb] flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center font-bold text-xs text-[#0c61cf]">👤</div>
                                <div class="flex flex-col">
                                    <h4 class="font-semibold text-[15px] md:text-[16px] text-[#414651]">Nugroho Wibisono</h4>
                                    <span class="text-[#717680] text-[12px]">General Manager IT & Cyber Security Telkomsat</span>
                                </div>
                            </div>
                        </div>

                        <!-- Perusahaan 2 -->
                        <div class="bg-white rounded-[18px] p-6 flex flex-col h-auto lg:h-[340px] justify-between w-full max-w-[706px] border border-[#e9eaeb] shadow-sm">
                            <div class="flex flex-col gap-4 md:gap-5">
                                <div class="flex justify-between items-center">
                                    <div class="w-8 h-8 text-[#0c61cf] text-3xl font-bold leading-none">“</div>
                                    <div class="flex text-[#ff7a29] gap-1 text-sm">★★★★★</div>
                                </div>
                                <p class="text-[#414651] text-[13px] md:text-[14px] leading-[20px]">
                                    MobileCom telah beberapa kali merekut siswa dan alumni IDN, dan yang dapat kami sampaikan adalah bahwa kami benar-benar puas dan bangga dengan pendidikan yang diberikan IDN Boarding School kepada para siswanya; kami sangat yakin bahwa IDN telah berhasil menumbuhkan ketangguhan mental dan kemampuan mereka untuk memasuki dunia kerja dengan lancar.
                                </p>
                            </div>
                            <div class="pt-4 border-t border-[#e9eaeb] flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center font-bold text-xs text-[#0c61cf]">👤</div>
                                <div class="flex flex-col">
                                    <h4 class="font-semibold text-[15px] md:text-[16px] text-[#414651]">Suryanto Hinarto</h4>
                                    <span class="text-[#717680] text-[12px]">CTO MobileCom</span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- TAB 2: WALI SANTRI TESTIMONIALS -->
                    <div class="w-full shrink-0 flex flex-col lg:flex-row gap-5 items-center justify-center">
                        
                        <!-- Wali Santri 1 -->
                        <div class="bg-white rounded-[18px] p-6 flex flex-col h-auto lg:h-[340px] justify-between w-full max-w-[706px] border border-[#e9eaeb] shadow-sm">
                            <div class="flex flex-col gap-4">
                                <div class="flex justify-between items-center">
                                    <div class="w-8 h-8 text-[#0c61cf] text-3xl font-bold leading-none">“</div>
                                    <div class="flex text-[#ff7a29] gap-1 text-sm">★★★★★</div>
                                </div>
                                <p class="font-medium text-[#414651] text-[13px] md:text-[14px] leading-[20px]">
                                    "Awalnya ragu, tapi sekarang sangat bersyukur! Setelah beberapa bulan di IDN Boarding School, anak saya jadi jauh lebih mandiri, disiplin, dan sopan. Kemampuan IT-nya pun melesat hingga sudah bisa bikin website sendiri."
                                </p>
                            </div>
                            <div class="pt-4 border-t border-[#e9eaeb] flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center font-bold text-xs text-[#0c61cf]">👤</div>
                                <div class="flex flex-col">
                                    <h4 class="font-semibold text-[15px] md:text-[16px] text-[#414651]">Abu Athallah</h4>
                                    <span class="text-[#717680] text-[12px]">Walisantri SMK IDN</span>
                                </div>
                            </div>
                        </div>

                        <!-- Wali Santri 2 -->
                        <div class="bg-white rounded-[18px] p-6 flex flex-col h-auto lg:h-[340px] justify-between w-full max-w-[706px] border border-[#e9eaeb] shadow-sm">
                            <div class="flex flex-col gap-4">
                                <div class="flex justify-between items-center">
                                    <div class="w-8 h-8 text-[#0c61cf] text-3xl font-bold leading-none">“</div>
                                    <div class="flex text-[#ff7a29] gap-1 text-sm">★★★★★</div>
                                </div>
                                <p class="font-medium text-[#414651] text-[13px] md:text-[14px] leading-[20px]">
                                    'IDN Boarding School pilihan tepat! Kedua anak kami makin mandiri dan percaya diri berkat pendidikan adab, IT, hingga public speaking dan entrepreneurship.'
                                </p>
                            </div>
                            <div class="pt-4 border-t border-[#e9eaeb] flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center font-bold text-xs text-[#0c61cf]">👤</div>
                                <div class="flex flex-col">
                                    <h4 class="font-semibold text-[15px] md:text-[16px] text-[#414651]">Abu Kuswandi</h4>
                                    <span class="text-[#717680] text-[12px]">Walisantri SMP IDN</span>
                                </div>
                            </div>
                        </div>

                        <!-- Wali Santri 3 -->
                        <div class="bg-white rounded-[18px] p-6 flex flex-col h-auto lg:h-[340px] justify-between w-full max-w-[706px] border border-[#e9eaeb] shadow-sm">
                            <div class="flex flex-col gap-4">
                                <div class="flex justify-between items-center">
                                    <div class="w-8 h-8 text-[#0c61cf] text-3xl font-bold leading-none">“</div>
                                    <div class="flex text-[#ff7a29] gap-1 text-sm">★★★★★</div>
                                </div>
                                <p class="font-medium text-[#414651] text-[13px] md:text-[14px] leading-[20px]">
                                    'Bersekolah di IDN Boarding School membawa dampak luar biasa. Anak kami yang tadinya pendiam kini tumbuh menjadi lebih percaya diri dan berani tampil.'
                                </p>
                            </div>
                            <div class="pt-4 border-t border-[#e9eaeb] flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center font-bold text-xs text-[#0c61cf]">👤</div>
                                <div class="flex flex-col">
                                    <h4 class="font-semibold text-[15px] md:text-[16px] text-[#414651]">Abu Fauzan</h4>
                                    <span class="text-[#717680] text-[12px]">Walisantri SMK IDN</span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- TAB 3: ALUMNI TESTIMONIALS -->
                    <div class="w-full shrink-0 flex flex-col lg:flex-row gap-5 items-center justify-center">
                        
                        <!-- Alumni 1 -->
                        <div class="bg-white rounded-[18px] p-6 flex flex-col h-auto lg:h-[340px] justify-between w-full max-w-[706px] border border-[#e9eaeb] shadow-sm">
                            <div class="flex flex-col gap-4">
                                <div class="flex justify-between items-center">
                                    <div class="w-8 h-8 text-[#0c61cf] text-3xl font-bold leading-none">“</div>
                                    <div class="flex text-[#ff7a29] gap-1 text-sm">★★★★★</div>
                                </div>
                                <p class="font-medium text-[#414651] text-[13px] md:text-[14px] leading-[20px]">
                                    IDN adalah starting point saya di dunia IT, disana saya pertama kali mengenal pemrograman, pertama kali terjun ke dunia industri (PKL), dan pertama kali public speaking.
                                </p>
                            </div>
                            <div class="pt-4 border-t border-[#e9eaeb] flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center font-bold text-xs text-[#0c61cf]">👤</div>
                                <div class="flex flex-col">
                                    <h4 class="font-semibold text-[15px] md:text-[16px] text-[#414651]">Hafidz Naufal</h4>
                                    <span class="text-[#717680] text-[12px]">Alumni SMK IDN · Angkatan 0</span>
                                </div>
                            </div>
                        </div>

                        <!-- Alumni 2 -->
                        <div class="bg-white rounded-[18px] p-6 flex flex-col h-auto lg:h-[340px] justify-between w-full max-w-[706px] border border-[#e9eaeb] shadow-sm">
                            <div class="flex flex-col gap-4">
                                <div class="flex justify-between items-center">
                                    <div class="w-8 h-8 text-[#0c61cf] text-3xl font-bold leading-none">“</div>
                                    <div class="flex text-[#ff7a29] gap-1 text-sm">★★★★★</div>
                                </div>
                                <p class="font-medium text-[#414651] text-[13px] md:text-[14px] leading-[20px]">
                                    3 tahun di IDN merupakan 3 tahun yang sangat berwarna, karena tidak hanya belajar IT dan Ngaji, kami juga mendapatkan lingkungan dan pertemanan yang luar biasa.
                                </p>
                            </div>
                            <div class="pt-4 border-t border-[#e9eaeb] flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center font-bold text-xs text-[#0c61cf]">👤</div>
                                <div class="flex flex-col">
                                    <h4 class="font-semibold text-[15px] md:text-[16px] text-[#414651]">Joe Renaldi F.</h4>
                                    <span class="text-[#717680] text-[12px]">Alumni SMK IDN · Angkatan 0</span>
                                </div>
                            </div>
                        </div>

                        <!-- Alumni 3 -->
                        <div class="bg-white rounded-[18px] p-6 flex flex-col h-auto lg:h-[340px] justify-between w-full max-w-[706px] border border-[#e9eaeb] shadow-sm">
                            <div class="flex flex-col gap-4">
                                <div class="flex justify-between items-center">
                                    <div class="w-8 h-8 text-[#0c61cf] text-3xl font-bold leading-none">“</div>
                                    <div class="flex text-[#ff7a29] gap-1 text-sm">★★★★★</div>
                                </div>
                                <p class="font-medium text-[#414651] text-[13px] md:text-[14px] leading-[20px]">
                                    Bersekolah di IDN Sangat membentuk mental salah satunya adalah mental kemandirian yang mungkin hanya di dapat dari perpaduan antara SMK dan Boarding School.
                                </p>
                            </div>
                            <div class="pt-4 border-t border-[#e9eaeb] flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center font-bold text-xs text-[#0c61cf]">👤</div>
                                <div class="flex flex-col">
                                    <h4 class="font-semibold text-[15px] md:text-[16px] text-[#414651]">Abdul Hadi</h4>
                                    <span class="text-[#717680] text-[12px]">Alumni SMK IDN · Angkatan 3</span>
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
                        <span class="font-semibold text-[20px] md:text-[24px] leading-[28px] md:leading-[32px] text-[#181d27]">Rp 900.000</span>
                    </div>
                    <div class="flex justify-between items-center py-4 border-b border-[#e9eaeb]">
                        <span class="text-[15px] md:text-[16px] font-normal">Uang Masuk</span>
                        <span class="font-semibold text-[20px] md:text-[24px] leading-[28px] md:leading-[32px] text-[#181d27]">Rp 40.000.000</span>
                    </div>
                    <div class="flex justify-between items-center py-4 border-b border-[#e9eaeb]">
                        <span class="text-[15px] md:text-[16px] font-normal">SPP Bulanan</span>
                        <span class="font-semibold text-[20px] md:text-[24px] leading-[28px] md:leading-[32px] text-[#181d27]">Rp 4.000.000</span>
                    </div>
                    <div class="flex justify-between items-center py-4 border-b border-[#e9eaeb]">
                        <span class="text-[15px] md:text-[16px] font-normal">Biaya Tahunan</span>
                        <span class="font-semibold text-[20px] md:text-[24px] leading-[28px] md:leading-[32px] text-[#181d27]">Rp 4.000.000</span>
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
                <a href="/ppdb" class="group bg-white text-[#0c61cf] px-6 py-3 rounded-full font-semibold text-[15px] md:text-[16px] h-[48px] flex items-center justify-center gap-2 shadow-md transition-all duration-200 hover:bg-slate-100">
                    <span>Mulai Pendaftaran</span>
                </a>
                <a href="https://wa.me/6282210102006" target="_blank" class="group bg-[#0c61cf] border border-[#d5d7da] text-white px-6 py-3 rounded-full font-semibold text-[15px] md:text-[16px] h-[48px] flex items-center justify-center gap-2 transition-all duration-200 hover:bg-[#094fa5]">
                    <span>Tanya Via WhatsApp</span>
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



