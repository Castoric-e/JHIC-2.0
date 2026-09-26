<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="w-full max-w-full overflow-x-hidden">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <x-seo-head 
            title="Tentang Kami - IDN Boarding School Bogor"
            description="Mengenal profil IDN Boarding School, visi dan misi, sejarah pendirian, lokasi kampus (Jonggol, Sentul, Pamijahan, Solo), serta keunggulan kurikulum IT & Tahfizh."
            keywords="Profil IDN Boarding School, Visi Misi IDN, Lokasi Kampus IDN Jonggol, Sekolah IT Terbaik"
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

    <!-- 1. REUSABLE NAVBAR COMPONENT -->
    <x-navbar active="tentang-kami" />

    <!-- 2. HERO HEADER SECTION (Figma Node 19889:6006 - py-[110px], px-[160px]) -->
    <section class="w-full max-w-full overflow-hidden flex flex-col items-center pt-[130px] md:pt-[160px] pb-12 md:pb-[110px] px-6 md:px-[64px] lg:px-[160px] bg-[#fafafa]">
        <div class="w-full max-w-[706px] xl:max-w-[1120px] mx-auto flex flex-col xl:flex-row items-center justify-between gap-8 md:gap-14">
            
            <!-- LEFT TEXT CONTAINER (650px width in Figma) -->
            <div class="w-full xl:w-[650px] max-w-full flex flex-col gap-3 items-start text-left shrink-0">
                <span class="text-[#717680] text-[15px] md:text-[16px] font-normal">Tentang Kami</span>
                
                <div class="flex flex-col gap-6 items-start text-left w-full">
                    <!-- MAIN HEADING (56px Funnel Display / Geist) -->
                    <h1 class="font-heading font-semibold text-[32px] sm:text-[40px] md:text-[48px] lg:text-[56px] leading-[40px] sm:leading-[50px] md:leading-[58px] lg:leading-[68px] tracking-[-1.5px] md:tracking-[-2.24px] text-[#0b0d12]">
                        Pesantren yang melek dengan <span class="text-[#0c61cf]">kemajuan zaman</span>.
                    </h1>

                    <!-- PARAGRAPH TEXT -->
                    <p class="text-[#717680] text-[15px] md:text-[16px] leading-[24px] font-normal text-left">
                        <strong class="font-bold text-[#181d27]">Berdiri sejak 2017</strong>, IDN Boarding School lahir dari keresahan sederhana: bagaimana melahirkan generasi yang teguh imannya sekaligus siap bekerja di industri teknologi global. Hari ini, IDN menaungi jenjang SMP dan SMK di empat lokasi.
                    </p>
                </div>
            </div>

            <!-- RIGHT IMAGE CONTAINER (Stack below text on mobile/tablet/laptop, side-by-side on xl) -->
            <div class="w-full max-w-[706px] xl:w-[410px] xl:max-w-[410px] h-[300px] sm:h-[400px] md:h-[450px] xl:h-[300px] shrink-0 relative rounded-[18px] bg-[#eaecf0] shadow-[12px_12px_56px_0px_rgba(0,4,45,0.16)] flex items-center justify-center overflow-hidden mx-auto xl:mx-0">
                <img src="{{ asset('assets/pages/tentang-kami/ojan.avif') }}" alt="Team-OSIS" class="w-full h-full object-cover">
            </div>

        </div>
    </section>


    <!-- 3. SAMBUTAN KEPALA SEKOLAH SECTION (Figma Node 20123:29917 / 19889:6013) -->
    <section class="w-full max-w-full overflow-hidden flex flex-col items-center py-12 md:py-[90px] lg:py-[110px] px-6 md:px-[64px] lg:px-[160px] bg-[#fafafa]">
        <div class="w-full max-w-[706px] lg:max-w-[1120px] mx-auto flex flex-col lg:flex-row items-center justify-between gap-10 md:gap-14">
            
            <!-- SAMBUTAN CONTENT (Top on Mobile/Tablet per Figma Node 20123:29917) -->
            <div class="w-full flex-1 flex flex-col gap-3 items-center text-center lg:items-start lg:text-left order-1 lg:order-2">
                <span class="text-[#717680] text-[15px] md:text-[16px] font-normal">Sambutan</span>
                
                <div class="flex flex-col gap-6 items-center text-center lg:items-start lg:text-left w-full">
                    <!-- HEADING -->
                    <h2 class="font-bold text-[28px] md:text-[32px] leading-[38px] md:leading-[42px] text-[#181d27]">
                        Kepala Sekolah<br>
                        <span class="text-[#0c61cf]">SMK IDN Bogor</span>
                    </h2>

                    <!-- PARAGRAPH -->
                    <p class="text-[#717680] text-[15px] md:text-[16px] leading-[24px] font-normal text-center lg:text-left">
                        Selamat datang di website resmi SMK IDN Boarding School. Sebagai sekolah berbasis IT dan boarding school yang berlandaskan nilai-nilai Islam, kami berkomitmen mencetak generasi yang profesional, berkarakter, dan siap memberikan manfaat bagi masyarakat. Semoga website ini menjadi media informasi dan komunikasi yang bermanfaat bagi semua pihak.
                    </p>
                    <!-- USER BADGE (Centered on Mobile/Tablet) -->
                <div class="flex items-center justify-center lg:justify-start gap-2 pt-1">
                    <svg class="w-6 h-6 text-[#181d27] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                    <span class="font-bold text-[16px] leading-[24px] text-black">Beny Fitriyanto, S.S., M.Pd., Gr.</span>
                </div>
                </div>
            </div>

            <!-- IMAGE & USER BADGE CONTAINER (Bottom on Mobile/Tablet per Figma Node 20123:29917) -->
            <div class="w-full flex flex-col items-center gap-6 order-2 lg:order-1 shrink-0 lg:w-[410px]">
                <div class="w-full max-w-[320px] sm:max-w-[360px] md:max-w-[400px] lg:w-[410px] aspect-square relative rounded-[18px] bg-[#eaecf0] flex items-center justify-center overflow-hidden shadow-sm mx-auto lg:mx-0">
                    <img src="{{ asset('assets/pages/tentang-kami/mr-beny.avif') }}" alt="Mr Beny Fitriyanto" class="w-full h-full object-cover">
                </div>

                
            </div>

        </div>
    </section>


    <!-- 4. VISI & MISI SECTION (Figma Node 19889:6023 - bg-[#f5f5f5], py-[110px]) -->
    <section class="w-full max-w-full overflow-hidden flex flex-col items-center py-12 md:py-[90px] lg:py-[110px] px-6 md:px-[64px] lg:px-[160px] bg-[#f5f5f5]">
        <div class="w-full max-w-[706px] xl:max-w-[1120px] mx-auto flex flex-col xl:flex-row items-center justify-between gap-10 md:gap-14 relative">
            
            <!-- LEFT VISI & MISI CONTENT (Text on top for mobile/tablet/laptop) -->
            <div class="w-full xl:flex-1 flex flex-col gap-8 justify-center items-start text-left">
                <!-- VISI -->
                <div class="flex flex-col gap-3 items-start w-full">
                    <span class="text-[#717680] text-[16px] font-normal uppercase tracking-wider">VISI</span>
                    <h3 class="font-semibold text-[20px] md:text-[24px] leading-[30px] md:leading-[32px] text-[#181d27]">
                        "Menjadi pesantren teknologi rujukan yang melahirkan generasi Qur'ani, berakhlak mulia, dan berdaya saing global."
                    </h3>
                </div>

                <!-- MISI -->
                <div class="flex flex-col gap-3 items-start w-full">
                    <span class="text-[#717680] text-[16px] font-normal uppercase tracking-wider">MISI</span>
                    <ul class="flex flex-col gap-2 font-medium text-[15px] md:text-[16px] leading-[24px] text-[#06132a]">
                        <li class="flex items-start gap-2">
                            <span>·</span>
                            <span>Menanamkan aqidah dan akhlak Islam yang lurus.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span>·</span>
                            <span>Membekali santri dengan kompetensi IT bertaraf industri.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span>·</span>
                            <span>Membentuk karakter pemimpin, mandiri, dan produktif.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span>·</span>
                            <span>Mendorong kolaborasi santri dengan dunia usaha nyata.</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- RIGHT VISI MISI IMAGE PLACEHOLDERS (Image collage underneath text) -->
            <div class="w-full max-w-[500px] xl:w-[500px] shrink-0 relative my-8 xl:my-0 p-4 sm:p-6">
                <!-- MAIN CENTER CARD -->
                <div class="w-full h-[260px] sm:h-[340px] md:h-[374px] relative rounded-[18px] bg-[#eaecf0] shadow-[12px_12px_56px_0px_rgba(0,4,45,0.16)] overflow-hidden flex items-center justify-center">
                    <img src="{{ asset('assets/campuses/jonggol-ikhwan.avif') }}" alt="Visi Misi IDN Boarding School" class="w-full h-full object-cover">
                </div>

                <!-- FLOATING TOP-RIGHT ROTATED CARD -->
                <div class="absolute top-0 right-0 w-[130px] sm:w-[160px] h-[80px] sm:h-[100px] rounded-[12px] bg-white shadow-xl overflow-hidden transform rotate-6 z-10 transition-transform duration-300 hover:rotate-0">
                    <img src="{{ asset('assets/program/backpacker/backpacker.avif') }}" alt="Backpacker IDN" class="w-full h-full object-cover">
                </div>

                <!-- FLOATING BOTTOM-LEFT ROTATED CARD -->
                <div class="absolute bottom-0 left-0 w-[130px] sm:w-[160px] h-[80px] sm:h-[100px] rounded-[12px] bg-white shadow-xl overflow-hidden transform -rotate-6 z-10 transition-transform duration-300 hover:rotate-0">
                    <img src="{{ asset('assets/ekskul/basket.avif') }}" alt="Kegiatan Santri IDN" class="w-full h-full object-cover">
                </div>
            </div>

        </div>
    </section>


    <!-- 5. JURUSAN SMK SECTION (Figma Node 19889:6038 - py-[110px]) -->
    <section class="w-full max-w-full overflow-hidden flex flex-col items-center py-12 md:py-[90px] lg:py-[110px] px-6 md:px-[64px] lg:px-[160px] bg-[#fafafa]">
        <div class="w-full max-w-[706px] lg:max-w-[1120px] mx-auto flex flex-col gap-10 md:gap-14">
            
            <!-- SECTION HEADER (534px width in Figma) -->
            <div class="flex flex-col items-start text-left gap-3 w-full max-w-[534px]">
                <span class="text-[#717680] text-[14px] font-normal">Jurusan SMK</span>
                <div class="flex flex-col gap-4 w-full">
                    <h2 class="font-heading font-bold text-[28px] md:text-[32px] leading-[38px] md:leading-[42px] text-[#181d27]">
                        Belajar teknologi yang dibutuhkan <span class="text-[#0c61cf]">industri</span>.
                    </h2>
                    <p class="text-[#717680] text-[15px] md:text-[16px] leading-[24px]">
                        Setiap jurusan dirancang bersama praktisi industri. Santri belajar lewat project nyata, bukan sekadar teori.
                    </p>
                </div>
            </div>

            <!-- 3 MAJOR CARDS CONTAINER -->
            <div class="flex flex-col gap-8 w-full">
                
                <!-- CARD 01: TKJ -->
                <div class="bg-white border border-[#e9eaeb] rounded-[20px] p-6 md:p-8 lg:p-[48px] flex flex-col xl:flex-row items-start justify-between gap-8 xl:gap-[40px] w-full max-w-full overflow-hidden">
                    <!-- LEFT COLUMN -->
                    <div class="flex flex-col gap-4 items-start text-left w-full xl:w-[300px] shrink-0">
                        <div class="flex flex-col gap-0.5 w-full">
                            <span class="font-semibold text-[36px] md:text-[40px] leading-[44px] md:leading-[50px] text-[#cee3ff]">01</span>
                            <span class="text-[#0c61cf] text-[14px] font-normal">Network Engineer</span>
                        </div>
                        <h3 class="font-bold text-[28px] md:text-[32px] leading-[36px] md:leading-[42px] text-[#181d27]">
                            Teknik Komputer<br>& Jaringan
                        </h3>
                        <p class="text-[#717680] text-[15px] md:text-[16px] leading-[24px]">
                            Mendalami jaringan komputer, administrasi server, dan dasar keamanan siber.
                        </p>
                        <div class="bg-[#d9e7f9] text-[#0c61cf] px-3 py-1 rounded-full text-[12px] font-normal w-fit">
                            TKJ
                        </div>
                    </div>

                    <!-- MATERI & PROSPEK CONTAINER -->
                    <div class="flex flex-col sm:flex-row gap-8 sm:gap-8 lg:gap-10 items-start w-full xl:w-auto flex-1 max-w-full overflow-hidden">
                        <!-- MIDDLE COLUMN: MATERI UTAMA -->
                        <div class="flex flex-col gap-4 items-start text-left w-full sm:w-1/2 xl:w-[260px] flex-1">
                            <span class="text-[#717680] text-[14px] font-normal">Materi Utama</span>
                            <div class="flex flex-col gap-3 w-full">
                                <div class="flex items-center gap-2 text-[#717680] text-[15px] md:text-[16px]">
                                    <svg class="w-4 h-4 text-[#717680] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.6 9h16.8M3.6 15h16.8"/></svg>
                                    <span>MikroTik MTCNA</span>
                                </div>
                                <div class="h-px bg-[#e9eaeb] w-full"></div>
                                <div class="flex items-center gap-2 text-[#717680] text-[15px] md:text-[16px]">
                                    <svg class="w-4 h-4 text-[#717680] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.6 9h16.8M3.6 15h16.8"/></svg>
                                    <span>MikroTik MTCRE</span>
                                </div>
                                <div class="h-px bg-[#e9eaeb] w-full"></div>
                                <div class="flex items-center gap-2 text-[#717680] text-[15px] md:text-[16px]">
                                    <svg class="w-4 h-4 text-[#717680] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.6 9h16.8M3.6 15h16.8"/></svg>
                                    <span>Cisco CCNA</span>
                                </div>
                                <div class="h-px bg-[#e9eaeb] w-full"></div>
                                <div class="flex items-center gap-2 text-[#717680] text-[15px] md:text-[16px]">
                                    <svg class="w-4 h-4 text-[#717680] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.6 9h16.8M3.6 15h16.8"/></svg>
                                    <span>Cisco CCNP</span>
                                </div>
                                <div class="h-px bg-[#e9eaeb] w-full"></div>
                                <div class="flex items-center gap-2 text-[#717680] text-[15px] md:text-[16px]">
                                    <svg class="w-4 h-4 text-[#717680] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.6 9h16.8M3.6 15h16.8"/></svg>
                                    <span>Fortinet</span>
                                </div>
                                <div class="h-px bg-[#e9eaeb] w-full"></div>
                                <div class="flex items-center gap-2 text-[#717680] text-[15px] md:text-[16px]">
                                    <svg class="w-4 h-4 text-[#717680] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.6 9h16.8M3.6 15h16.8"/></svg>
                                    <span>AWS Cloud</span>
                                </div>
                            </div>
                        </div>

                        <!-- RIGHT COLUMN: PROSPEK KARIER -->
                        <div class="flex flex-col gap-4 items-start text-left w-full sm:w-1/2 xl:w-[200px] flex-1">
                            <span class="text-[#717680] text-[14px] font-normal">Prospek Karier</span>
                            <div class="flex flex-col gap-2.5 w-full">
                                <span class="bg-white border border-[#e9eaeb] text-[#181d27] px-3.5 py-2 rounded-full text-[14px] w-fit max-w-full">Cloud Engineer</span>
                                <span class="bg-white border border-[#e9eaeb] text-[#181d27] px-3.5 py-2 rounded-full text-[14px] w-fit max-w-full">Network Administrator</span>
                                <span class="bg-white border border-[#e9eaeb] text-[#181d27] px-3.5 py-2 rounded-full text-[14px] w-fit max-w-full">Security Engineer</span>
                                <span class="bg-white border border-[#e9eaeb] text-[#181d27] px-3.5 py-2 rounded-full text-[14px] w-fit max-w-full">IT Support</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CARD 02: RPL -->
                <div class="bg-white border border-[#e9eaeb] rounded-[20px] p-6 md:p-8 lg:p-[48px] flex flex-col xl:flex-row items-start justify-between gap-8 xl:gap-[40px] w-full max-w-full overflow-hidden">
                    <!-- LEFT COLUMN -->
                    <div class="flex flex-col gap-4 items-start text-left w-full xl:w-[300px] shrink-0">
                        <div class="flex flex-col gap-0.5 w-full">
                            <span class="font-semibold text-[36px] md:text-[40px] leading-[44px] md:leading-[50px] text-[#cee3ff]">02</span>
                            <span class="text-[#0c61cf] text-[14px] font-normal">Software Developer</span>
                        </div>
                        <h3 class="font-bold text-[28px] md:text-[32px] leading-[36px] md:leading-[42px] text-[#181d27]">
                            Rekayasa<br>Perangkat Lunak
                        </h3>
                        <p class="text-[#717680] text-[15px] md:text-[16px] leading-[24px]">
                            Fokus pada pemrograman modern: web full-stack, mobile, dan pengelolaan database.
                        </p>
                        <div class="bg-[#d9e7f9] text-[#0c61cf] px-3 py-1 rounded-full text-[12px] font-normal w-fit">
                            RPL
                        </div>
                    </div>

                    <!-- MATERI & PROSPEK CONTAINER -->
                    <div class="flex flex-col sm:flex-row gap-8 sm:gap-8 lg:gap-10 items-start w-full xl:w-auto flex-1 max-w-full overflow-hidden">
                        <!-- MIDDLE COLUMN: MATERI UTAMA -->
                        <div class="flex flex-col gap-4 items-start text-left w-full sm:w-1/2 xl:w-[260px] flex-1">
                            <span class="text-[#717680] text-[14px] font-normal">Materi Utama</span>
                            <div class="flex flex-col gap-3 w-full">
                                <div class="flex items-center gap-2 text-[#717680] text-[15px] md:text-[16px]">
                                    <svg class="w-4 h-4 text-[#717680] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                                    <span>HTML & CSS</span>
                                </div>
                                <div class="h-px bg-[#e9eaeb] w-full"></div>
                                <div class="flex items-center gap-2 text-[#717680] text-[15px] md:text-[16px]">
                                    <svg class="w-4 h-4 text-[#717680] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                                    <span>JavaScript & DOM</span>
                                </div>
                                <div class="h-px bg-[#e9eaeb] w-full"></div>
                                <div class="flex items-center gap-2 text-[#717680] text-[15px] md:text-[16px]">
                                    <svg class="w-4 h-4 text-[#717680] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                                    <span>Tailwind CSS & PHP</span>
                                </div>
                                <div class="h-px bg-[#e9eaeb] w-full"></div>
                                <div class="flex items-center gap-2 text-[#717680] text-[15px] md:text-[16px]">
                                    <svg class="w-4 h-4 text-[#717680] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                                    <span>SQL Database & Laravel</span>
                                </div>
                                <div class="h-px bg-[#e9eaeb] w-full"></div>
                                <div class="flex items-center gap-2 text-[#717680] text-[15px] md:text-[16px]">
                                    <svg class="w-4 h-4 text-[#717680] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                                    <span>Dart & Flutter</span>
                                </div>
                                <div class="h-px bg-[#e9eaeb] w-full"></div>
                                <div class="flex items-center gap-2 text-[#717680] text-[15px] md:text-[16px]">
                                    <svg class="w-4 h-4 text-[#717680] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                                    <span>AI Vibe Coding</span>
                                </div>
                            </div>
                        </div>

                        <!-- RIGHT COLUMN: PROSPEK KARIER -->
                        <div class="flex flex-col gap-4 items-start text-left w-full sm:w-1/2 xl:w-[200px] flex-1">
                            <span class="text-[#717680] text-[14px] font-normal">Prospek Karier</span>
                            <div class="flex flex-col gap-2.5 w-full">
                                <span class="bg-white border border-[#e9eaeb] text-[#181d27] px-3.5 py-2 rounded-full text-[14px] w-fit max-w-full">Web Developer</span>
                                <span class="bg-white border border-[#e9eaeb] text-[#181d27] px-3.5 py-2 rounded-full text-[14px] w-fit max-w-full">Mobile App Developer</span>
                                <span class="bg-white border border-[#e9eaeb] text-[#181d27] px-3.5 py-2 rounded-full text-[14px] w-fit max-w-full">Quality Assurance Tester</span>
                                <span class="bg-white border border-[#e9eaeb] text-[#181d27] px-3.5 py-2 rounded-full text-[14px] w-fit max-w-full">Software Engineer</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CARD 03: DKV -->
                <div class="bg-white border border-[#e9eaeb] rounded-[20px] p-6 md:p-8 lg:p-[48px] flex flex-col xl:flex-row items-start justify-between gap-8 xl:gap-[40px] w-full max-w-full overflow-hidden">
                    <!-- LEFT COLUMN -->
                    <div class="flex flex-col gap-4 items-start text-left w-full xl:w-[300px] shrink-0">
                        <div class="flex flex-col gap-0.5 w-full">
                            <span class="font-semibold text-[36px] md:text-[40px] leading-[44px] md:leading-[50px] text-[#cee3ff]">03</span>
                            <span class="text-[#0c61cf] text-[14px] font-normal">UI/UX Designer</span>
                        </div>
                        <h3 class="font-bold text-[28px] md:text-[32px] leading-[36px] md:leading-[42px] text-[#181d27]">
                            Desain<br>Komunikasi Visual
                        </h3>
                        <p class="text-[#717680] text-[15px] md:text-[16px] leading-[24px]">
                            Mengasah kemampuan desain visual, motion, dan produksi konten kreatif.
                        </p>
                        <div class="bg-[#d9e7f9] text-[#0c61cf] px-3 py-1 rounded-full text-[12px] font-normal w-fit">
                            DKV
                        </div>
                    </div>

                    <!-- MATERI & PROSPEK CONTAINER -->
                    <div class="flex flex-col sm:flex-row gap-8 sm:gap-8 lg:gap-10 items-start w-full xl:w-auto flex-1 max-w-full overflow-hidden">
                        <!-- MIDDLE COLUMN: MATERI UTAMA -->
                        <div class="flex flex-col gap-4 items-start text-left w-full sm:w-1/2 xl:w-[260px] flex-1">
                            <span class="text-[#717680] text-[14px] font-normal">Materi Utama</span>
                            <div class="flex flex-col gap-3 w-full">
                                <div class="flex items-center gap-2 text-[#717680] text-[15px] md:text-[16px]">
                                    <svg class="w-4 h-4 text-[#717680] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                                    <span>UI/UX Design</span>
                                </div>
                                <div class="h-px bg-[#e9eaeb] w-full"></div>
                                <div class="flex items-center gap-2 text-[#717680] text-[15px] md:text-[16px]">
                                    <svg class="w-4 h-4 text-[#717680] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                                    <span>Visual Design</span>
                                </div>
                                <div class="h-px bg-[#e9eaeb] w-full"></div>
                                <div class="flex items-center gap-2 text-[#717680] text-[15px] md:text-[16px]">
                                    <svg class="w-4 h-4 text-[#717680] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                                    <span>3D Design</span>
                                </div>
                                <div class="h-px bg-[#e9eaeb] w-full"></div>
                                <div class="flex items-center gap-2 text-[#717680] text-[15px] md:text-[16px]">
                                    <svg class="w-4 h-4 text-[#717680] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                                    <span>Motion Graphic</span>
                                </div>
                                <div class="h-px bg-[#e9eaeb] w-full"></div>
                                <div class="flex items-center gap-2 text-[#717680] text-[15px] md:text-[16px]">
                                    <svg class="w-4 h-4 text-[#717680] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                                    <span>Video Editing</span>
                                </div>
                                <div class="h-px bg-[#e9eaeb] w-full"></div>
                                <div class="flex items-center gap-2 text-[#717680] text-[15px] md:text-[16px]">
                                    <svg class="w-4 h-4 text-[#717680] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                                    <span>AI Vibe Coding</span>
                                </div>
                            </div>
                        </div>

                        <!-- RIGHT COLUMN: PROSPEK KARIER -->
                        <div class="flex flex-col gap-4 items-start text-left w-full sm:w-1/2 xl:w-[200px] flex-1">
                            <span class="text-[#717680] text-[14px] font-normal">Prospek Karier</span>
                            <div class="flex flex-col gap-2.5 w-full">
                                <span class="bg-white border border-[#e9eaeb] text-[#181d27] px-3.5 py-2 rounded-full text-[14px] w-fit max-w-full">UI/UX Designer</span>
                                <span class="bg-white border border-[#e9eaeb] text-[#181d27] px-3.5 py-2 rounded-full text-[14px] w-fit max-w-full">Video Editor & Animator</span>
                                <span class="bg-white border border-[#e9eaeb] text-[#181d27] px-3.5 py-2 rounded-full text-[14px] w-fit max-w-full">3D Designer</span>
                                <span class="bg-white border border-[#e9eaeb] text-[#181d27] px-3.5 py-2 rounded-full text-[14px] w-fit max-w-full">Graphic Designer</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- REGISTRATION BANNER 1 (Belum Yakin Pilih Jurusan) -->
            <div class="w-full max-w-[1120px] mx-auto bg-[#0c61cf] rounded-[20px] p-6 sm:p-[40px] text-white flex flex-col justify-between gap-6 md:gap-8 relative overflow-hidden shadow-lg">
                <div class="w-[390px] h-[423px] rounded-full bg-white/20 blur-[64px] absolute -right-20 -top-40 pointer-events-none"></div>

                <div class="flex flex-col gap-4 z-10 max-w-[542px] text-left">
                    <span class="text-[#d5d7da] text-[14px]">PPDB 2027/2028</span>
                    <h2 class="font-heading font-bold text-[28px] sm:text-[36px] md:text-[48px] leading-[36px] sm:leading-[46px] md:leading-[60px] tracking-[-1.5px] md:tracking-[-1.92px]">
                        <span class="text-[#ff7a29]">Belum yakin</span> pilih jurusan yang mana?
                    </h2>
                    <p class="text-[#d5d7da] text-[15px] md:text-[16px] leading-[24px]">
                        Konsultasi gratis dengan Ustadz & Guru Sekolah. Kami bantu memetakan minat dan potensi anak Anda.
                    </p>
                </div>

                <div class="z-10">
                    <a href="https://wa.me/6282210102006" target="_blank" class="group bg-white text-[#0c61cf] px-6 py-3 rounded-full font-semibold text-[15px] md:text-[16px] h-[48px] flex items-center justify-center gap-2 w-fit shadow-sm transition-all duration-200 hover:bg-slate-100">
                        <span>Tanya Via Whatsapp</span>
                    </a>
                </div>
            </div>

        </div>
    </section>


    <!-- 6. SEKOLAH KAMI SECTION (5 Sekolah, 1 Keluarga Besar - Figma Node 19889:6189 - py-[110px]) -->
    <section class="w-full max-w-full overflow-hidden flex flex-col items-center py-12 md:py-[90px] lg:py-[110px] px-6 md:px-[64px] lg:px-[160px] bg-[#fafafa]">
        <div class="w-full max-w-[706px] lg:max-w-[1120px] mx-auto flex flex-col gap-10 md:gap-14 items-center">
            
            <!-- SECTION HEADER (550px width, text-center) -->
            <div class="flex flex-col items-center text-center gap-3 w-full max-w-[550px]">
                <span class="text-[#717680] text-[14px] font-normal">Sekolah Kami</span>
                <div class="flex flex-col gap-4 w-full">
                    <h2 class="font-heading font-bold text-[28px] md:text-[32px] leading-[38px] md:leading-[42px] text-[#181d27]">
                        Lima Sekolah, <span class="text-[#0c61cf]">Satu Keluarga Besar.</span>
                    </h2>
                    <p class="text-[#717680] text-[15px] md:text-[16px] leading-[24px]">
                        Setiap sekolah punya karakter unik, namun tetap berjalan pada kurikulum dan standar pembinaan yang sama.
                    </p>
                </div>
            </div>

            <!-- SCHOOL CARDS CONTAINER -->
            <div class="flex flex-col gap-12 sm:gap-16 w-full">
                
                <!-- FEATURED SCHOOL 1: IDN Jonggol (Full Width) -->
                <div class="flex flex-col gap-8 w-full">
                    <!-- IMAGE PLACEHOLDER (500px height - Empty placeholder per directive) -->
                    <div class="w-full h-[300px] sm:h-[500px] rounded-[20px] bg-[#eaecf0] border-4 border-[#e9eaeb] flex items-center justify-center overflow-hidden">
                        <img src="{{ asset('assets/campuses/idn_jonggol.avif') }}" alt="IDN Jonggol" class="w-full h-full object-cover">
                    </div>

                    <!-- INFO ROW -->
                    <div class="flex flex-col lg:flex-row items-start justify-between gap-6 lg:gap-10 w-full">
                        <div class="flex flex-col gap-4 items-start text-left max-w-[328px]">
                            <div class="flex flex-col gap-4 items-start w-full">
                                <div class="flex items-center gap-5">
                                    <div class="flex items-center gap-1 text-[#0c61cf]">
                                        <svg class="w-5 h-5 text-[#0c61cf]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                                        <span class="text-[16px] font-normal">Ikhwan</span>
                                    </div>
                                    <div class="w-px h-5 bg-[#e9eaeb]"></div>
                                    <div class="flex items-center gap-1 text-[#717680]">
                                        <svg class="w-5 h-5 text-[#717680]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                        <span class="text-[16px] font-normal">Jonggol, Kab. Bogor</span>
                                    </div>
                                </div>
                                <h3 class="font-semibold text-[24px] leading-[32px] text-black">IDN Jonggol</h3>
                            </div>
                            <div class="h-px bg-[#e9eaeb] w-full"></div>
                            <p class="text-[#717680] text-[15px] md:text-[16px] leading-[24px]">
                                Sekolah induk dengan lab komputer, asrama, dan masjid pusat kegiatan santri.
                            </p>
                        </div>

                        <!-- SPECS TABLE -->
                        <div class="border-y border-[#e9eaeb] flex flex-wrap items-center gap-8 sm:gap-[64px] px-6 sm:px-[64px] py-[20px] w-full lg:w-fit justify-between">
                            <div class="flex flex-col gap-0.5 text-left">
                                <span class="text-[#717680] text-[16px]">Jenjang</span>
                                <span class="font-semibold text-[#181d27] text-[16px]">SMP · SMK</span>
                            </div>
                            <div class="w-px h-10 bg-[#e9eaeb] hidden sm:block"></div>
                            <div class="flex flex-col gap-0.5 text-left">
                                <span class="text-[#717680] text-[16px]">Kapasitas</span>
                                <span class="font-semibold text-[#181d27] text-[16px]">±600</span>
                            </div>
                            <div class="w-px h-10 bg-[#e9eaeb] hidden sm:block"></div>
                            <div class="flex flex-col gap-0.5 text-left">
                                <span class="text-[#717680] text-[16px]">Status</span>
                                <span class="font-semibold text-[#181d27] text-[16px]">Pusat</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- BRANCH SCHOOLS GRID 2x2 -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 w-full">
                    
                    <!-- SCHOOL 2: IDN Akhwat -->
                    <div class="flex flex-col gap-6 w-full">
                        <div class="w-full h-[250px] sm:h-[350px] rounded-[20px] bg-[#eaecf0] flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('assets/campuses/idn_akhwat.avif') }}" alt="IDN Akhwat" class="w-full h-full object-cover">
                        </div>
                        <div class="flex flex-col gap-6 items-start text-left w-full">
                            <div class="flex flex-col gap-4 items-start w-full">
                                <div class="flex items-center gap-5">
                                    <div class="flex items-center gap-1 text-[#d84e97]">
                                        <svg class="w-5 h-5 text-[#d84e97]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                                        <span class="text-[16px] font-normal">Akhwat</span>
                                    </div>
                                    <div class="w-px h-5 bg-[#e9eaeb]"></div>
                                    <div class="flex items-center gap-1 text-[#717680]">
                                        <svg class="w-5 h-5 text-[#717680]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                        <span class="text-[16px] font-normal">Jonggol, Kab. Bogor</span>
                                    </div>
                                </div>
                                <h3 class="font-semibold text-[24px] leading-[32px] text-black">IDN Akhwat</h3>
                            </div>
                            <div class="h-px bg-[#e9eaeb] w-full"></div>
                            <p class="text-[#717680] text-[15px] md:text-[16px] leading-[24px] max-w-[328px]">
                                Sekolah khusus akhwat dengan fasilitas belajar dan asrama terpisah.
                            </p>
                            <div class="border-y border-[#e9eaeb] flex items-center justify-between gap-4 px-6 py-3 w-full">
                                <div class="flex flex-col text-left">
                                    <span class="text-[#717680] text-[14px]">Jenjang</span>
                                    <span class="font-semibold text-[#181d27] text-[15px]">SMP · SMK</span>
                                </div>
                                <div class="w-px h-8 bg-[#e9eaeb]"></div>
                                <div class="flex flex-col text-left">
                                    <span class="text-[#717680] text-[14px]">Kapasitas</span>
                                    <span class="font-semibold text-[#181d27] text-[15px]">±300</span>
                                </div>
                                <div class="w-px h-8 bg-[#e9eaeb]"></div>
                                <div class="flex flex-col text-left">
                                    <span class="text-[#717680] text-[14px]">Status</span>
                                    <span class="font-semibold text-[#181d27] text-[15px]">Cabang</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SCHOOL 3: IDN Solo -->
                    <div class="flex flex-col gap-6 w-full">
                        <div class="w-full h-[250px] sm:h-[350px] rounded-[20px] bg-[#eaecf0] flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('assets/campuses/idn_solo.avif') }}" alt="IDN Solo" class="w-full h-full object-cover">
                        </div>
                        <div class="flex flex-col gap-6 items-start text-left w-full">
                            <div class="flex flex-col gap-4 items-start w-full">
                                <div class="flex items-center gap-5">
                                    <div class="flex items-center gap-1 text-[#0c61cf]">
                                        <svg class="w-5 h-5 text-[#0c61cf]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                                        <span class="text-[16px] font-normal">Ikhwan</span>
                                    </div>
                                    <div class="w-px h-5 bg-[#e9eaeb]"></div>
                                    <div class="flex items-center gap-1 text-[#717680]">
                                        <svg class="w-5 h-5 text-[#717680]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                        <span class="text-[16px] font-normal">Ngargoyoso, Kab. Karanganyar</span>
                                    </div>
                                </div>
                                <h3 class="font-semibold text-[24px] leading-[32px] text-black">IDN Solo</h3>
                            </div>
                            <div class="h-px bg-[#e9eaeb] w-full"></div>
                            <p class="text-[#717680] text-[15px] md:text-[16px] leading-[24px] max-w-[328px]">
                                Cabang IDN di kota pelajar dengan fasilitas modern dan lingkungan yang tenang.
                            </p>
                            <div class="border-y border-[#e9eaeb] flex items-center justify-between gap-4 px-6 py-3 w-full">
                                <div class="flex flex-col text-left">
                                    <span class="text-[#717680] text-[14px]">Jenjang</span>
                                    <span class="font-semibold text-[#181d27] text-[15px]">SMP · SMK</span>
                                </div>
                                <div class="w-px h-8 bg-[#e9eaeb]"></div>
                                <div class="flex flex-col text-left">
                                    <span class="text-[#717680] text-[14px]">Kapasitas</span>
                                    <span class="font-semibold text-[#181d27] text-[15px]">±350</span>
                                </div>
                                <div class="w-px h-8 bg-[#e9eaeb]"></div>
                                <div class="flex flex-col text-left">
                                    <span class="text-[#717680] text-[14px]">Status</span>
                                    <span class="font-semibold text-[#181d27] text-[15px]">Cabang</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SCHOOL 4: IDN Pamijahan -->
                    <div class="flex flex-col gap-6 w-full">
                        <div class="w-full h-[250px] sm:h-[350px] rounded-[20px] bg-[#eaecf0] flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('assets/campuses/idn_pamijahan.avif') }}" alt="IDN Pamijahan" class="w-full h-full object-cover">
                        </div>
                        <div class="flex flex-col gap-6 items-start text-left w-full">
                            <div class="flex flex-col gap-4 items-start w-full">
                                <div class="flex items-center gap-5">
                                    <div class="flex items-center gap-1 text-[#0c61cf]">
                                        <svg class="w-5 h-5 text-[#0c61cf]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                                        <span class="text-[16px] font-normal">Ikhwan</span>
                                    </div>
                                    <div class="w-px h-5 bg-[#e9eaeb]"></div>
                                    <div class="flex items-center gap-1 text-[#717680]">
                                        <svg class="w-5 h-5 text-[#717680]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                        <span class="text-[16px] font-normal">Pamijahan, Kab. Bogor</span>
                                    </div>
                                </div>
                                <h3 class="font-semibold text-[24px] leading-[32px] text-black">IDN Pamijahan</h3>
                            </div>
                            <div class="h-px bg-[#e9eaeb] w-full"></div>
                            <p class="text-[#717680] text-[15px] md:text-[16px] leading-[24px] max-w-[328px]">
                                Sekolah dengan suasana pemandangan yang alami dan segar.
                            </p>
                            <div class="border-y border-[#e9eaeb] flex items-center justify-between gap-4 px-6 py-3 w-full">
                                <div class="flex flex-col text-left">
                                    <span class="text-[#717680] text-[14px]">Jenjang</span>
                                    <span class="font-semibold text-[#181d27] text-[15px]">SMP</span>
                                </div>
                                <div class="w-px h-8 bg-[#e9eaeb]"></div>
                                <div class="flex flex-col text-left">
                                    <span class="text-[#717680] text-[14px]">Kapasitas</span>
                                    <span class="font-semibold text-[#181d27] text-[15px]">±100</span>
                                </div>
                                <div class="w-px h-8 bg-[#e9eaeb]"></div>
                                <div class="flex flex-col text-left">
                                    <span class="text-[#717680] text-[14px]">Status</span>
                                    <span class="font-semibold text-[#181d27] text-[15px]">Cabang</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SCHOOL 5: IDN Sentul -->
                    <div class="flex flex-col gap-6 w-full">
                        <div class="w-full h-[250px] sm:h-[350px] rounded-[20px] bg-[#eaecf0] flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('assets/campuses/idn_sentul.avif') }}" alt="IDN Sentul" class="w-full h-full object-cover">
                        </div>
                        <div class="flex flex-col gap-6 items-start text-left w-full">
                            <div class="flex flex-col gap-4 items-start w-full">
                                <div class="flex items-center gap-5">
                                    <div class="flex items-center gap-1 text-[#0c61cf]">
                                        <svg class="w-5 h-5 text-[#0c61cf]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                                        <span class="text-[16px] font-normal">Ikhwan</span>
                                    </div>
                                    <div class="w-px h-5 bg-[#e9eaeb]"></div>
                                    <div class="flex items-center gap-1 text-[#717680]">
                                        <svg class="w-5 h-5 text-[#717680]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                        <span class="text-[16px] font-normal">Babakan Madang, Kab. Bogor</span>
                                    </div>
                                </div>
                                <h3 class="font-semibold text-[24px] leading-[32px] text-black">IDN Sentul</h3>
                            </div>
                            <div class="h-px bg-[#e9eaeb] w-full"></div>
                            <p class="text-[#717680] text-[15px] md:text-[16px] leading-[24px] max-w-[328px]">
                                Sekolah unik dengan lingkungan yang tenang dan alami.
                            </p>
                            <div class="border-y border-[#e9eaeb] flex items-center justify-between gap-4 px-6 py-3 w-full">
                                <div class="flex flex-col text-left">
                                    <span class="text-[#717680] text-[14px]">Jenjang</span>
                                    <span class="font-semibold text-[#181d27] text-[15px]">SMP</span>
                                </div>
                                <div class="w-px h-8 bg-[#e9eaeb]"></div>
                                <div class="flex flex-col text-left">
                                    <span class="text-[#717680] text-[14px]">Kapasitas</span>
                                    <span class="font-semibold text-[#181d27] text-[15px]">±100</span>
                                </div>
                                <div class="w-px h-8 bg-[#e9eaeb]"></div>
                                <div class="flex flex-col text-left">
                                    <span class="text-[#717680] text-[14px]">Status</span>
                                    <span class="font-semibold text-[#181d27] text-[15px]">Cabang</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>


    <!-- 7. REGISTRATION BANNER 2 / PPDB CTA SECTION (Figma Node 19889:6339 - py-[90px]) -->
    <section class="w-full max-w-full overflow-hidden flex flex-col items-center py-12 md:py-[90px] px-6 md:px-[64px] lg:px-[160px] bg-[#fafafa]">
        <div class="w-full max-w-[706px] lg:max-w-[1120px] mx-auto bg-[#0c61cf] rounded-[20px] p-6 sm:p-[40px] min-h-[364px] text-white flex flex-col justify-between gap-6 md:gap-8 relative overflow-hidden shadow-lg">
            <div class="w-[390px] h-[423px] rounded-full bg-white/20 blur-[64px] absolute -right-20 -top-40 pointer-events-none"></div>

            <div class="flex flex-col gap-4 z-10 max-w-[672px] text-left">
                <span class="text-[#e0e7ff] text-[14px]">PPDB 2027/2028</span>
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
                <a href="https://wa.me/6282210102006" target="_blank" class="group bg-transparent border border-white/60 text-white px-6 py-3 rounded-full font-semibold text-[15px] md:text-[16px] leading-none h-[48px] flex items-center justify-center gap-2 transition-all duration-200 hover:bg-white/10">
                    <span>Tanya Via WhatsApp</span>
                    <svg class="w-4 h-4 transition-transform duration-200 ease-out group-hover:translate-x-1 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>


    <!-- 8. REUSABLE FOOTER COMPONENT -->
    <x-footer />

    <!-- 9. REUSABLE CHATBOT COMPONENT -->
    <x-chatbot />

    </body>
</html>
