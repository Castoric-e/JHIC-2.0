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
        <section class="w-full max-w-full overflow-hidden flex flex-col items-center mt-16 md:mt-0 py-12 md:py-[90px] lg:py-[110px] px-6 md:px-[64px] lg:px-[160px] bg-[#fafafa]">
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
                            Temukan berbagai artikel menarik seputar kegiatan, prestasi, dan kehidupan di IDN Boarding School. Dapatkan inspirasi, informasi terbaru, dan cerita nyata dari para santri dan pembina.
                        </p>
                    </div>
                </div>

                <!-- 6 CONTACT CARDS GRID (Figma Node 19889:5503 - Default state, Hover effect like WhatsApp, template <img> tags) -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 w-full">
                    
                    <!-- CARD 1: WHATSAPP -->
                    <div class="bg-white border border-[#e9eaeb] hover:border-[#0c61cf] hover:shadow-[0px_4px_20px_rgba(0,0,0,0.1)] rounded-[18px] p-5 sm:p-6 flex flex-col justify-between gap-8 h-full transition-all duration-300 group">
                        <div class="flex flex-col gap-6 items-start text-left w-full">
                            <!-- WHATSAPP ICON (wa.avif) -->
                            <div class="w-10 h-10 flex items-center justify-center shrink-0">
                                <img src="{{ asset('assets/wa.avif') }}" alt="WhatsApp Icon" class="w-10 h-10 object-contain">
                            </div>
                            <h2 class="font-semibold text-[20px] sm:text-[24px] leading-[32px] text-[#181d27]">
                                +62 822-1010-2006
                            </h2>
                        </div>
                        <a href="https://wa.me/6282210102006" target="_blank" class="bg-white border-2 border-[#e9eaeb] text-[#414651] group-hover:border-[#0c61cf] group-hover:bg-[#0c61cf] group-hover:text-white px-5 py-3 rounded-full font-semibold text-[16px] flex items-center justify-center gap-2 w-fit transition-all duration-300">
                            <span>Chat Whatsapp</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </a>
                    </div>

                    <!-- CARD 2: INSTAGRAM -->
                    <div class="bg-white border border-[#e9eaeb] hover:border-[#0c61cf] hover:shadow-[0px_4px_20px_rgba(0,0,0,0.1)] rounded-[18px] p-5 sm:p-6 flex flex-col justify-between gap-8 h-full transition-all duration-300 group">
                        <div class="flex flex-col gap-6 items-start text-left w-full">
                            <!-- INSTAGRAM ICON (ig.avif) -->
                            <div class="w-10 h-10 flex items-center justify-center shrink-0">
                                <img src="{{ asset('assets/ig.avif') }}" alt="Instagram Icon" class="w-10 h-10 object-contain">
                            </div>
                            <h2 class="font-semibold text-[20px] sm:text-[24px] leading-[32px] text-[#181d27]">
                                @idnboardingschool
                            </h2>
                        </div>
                        <a href="https://instagram.com/idnboardingschool" target="_blank" class="bg-white border-2 border-[#e9eaeb] text-[#414651] group-hover:border-[#0c61cf] group-hover:bg-[#0c61cf] group-hover:text-white px-5 py-3 rounded-full font-semibold text-[16px] transition-all duration-300 w-fit">
                            Buka Instagram
                        </a>
                    </div>

                    <!-- CARD 3: EMAIL -->
                    <div class="bg-white border border-[#e9eaeb] hover:border-[#0c61cf] hover:shadow-[0px_4px_20px_rgba(0,0,0,0.1)] rounded-[18px] p-5 sm:p-6 flex flex-col justify-between gap-8 h-full transition-all duration-300 group">
                        <div class="flex flex-col gap-6 items-start text-left w-full">
                            <!-- EMAIL ICON (gmail.avif) -->
                            <div class="w-10 h-10 flex items-center justify-center shrink-0">
                                <img src="{{ asset('assets/gmail.avif') }}" alt="Email Icon" class="w-10 h-10 object-contain">
                            </div>
                            <h2 class="font-semibold text-[20px] sm:text-[24px] leading-[32px] text-[#181d27]">
                                info@idn.sch.id
                            </h2>
                        </div>
                        <a href="mailto:info@idn.sch.id" class="bg-white border-2 border-[#e9eaeb] text-[#414651] group-hover:border-[#0c61cf] group-hover:bg-[#0c61cf] group-hover:text-white px-5 py-3 rounded-full font-semibold text-[16px] transition-all duration-300 w-fit">
                            Kirim Email
                        </a>
                    </div>

                    <!-- CARD 4: FACEBOOK -->
                    <div class="bg-white border border-[#e9eaeb] hover:border-[#0c61cf] hover:shadow-[0px_4px_20px_rgba(0,0,0,0.1)] rounded-[18px] p-5 sm:p-6 flex flex-col justify-between gap-8 h-full transition-all duration-300 group">
                        <div class="flex flex-col gap-6 items-start text-left w-full">
                            <!-- FACEBOOK ICON (fb.avif) -->
                            <div class="w-10 h-10 flex items-center justify-center shrink-0">
                                <img src="{{ asset('assets/fb.avif') }}" alt="Facebook Icon" class="w-10 h-10 object-contain">
                            </div>
                            <h2 class="font-semibold text-[20px] sm:text-[24px] leading-[32px] text-[#181d27]">
                                IDN Boarding School
                            </h2>
                        </div>
                        <a href="https://www.facebook.com/idnboardingschool" target="_blank" class="bg-white border-2 border-[#e9eaeb] text-[#414651] group-hover:border-[#0c61cf] group-hover:bg-[#0c61cf] group-hover:text-white px-5 py-3 rounded-full font-semibold text-[16px] transition-all duration-300 w-fit">
                            Buka Facebook
                        </a>
                    </div>

                    <!-- CARD 5: TIKTOK -->
                    <div class="bg-white border border-[#e9eaeb] hover:border-[#0c61cf] hover:shadow-[0px_4px_20px_rgba(0,0,0,0.1)] rounded-[18px] p-5 sm:p-6 flex flex-col justify-between gap-8 h-full transition-all duration-300 group">
                        <div class="flex flex-col gap-6 items-start text-left w-full">
                            <!-- TIKTOK ICON (tt.avif) -->
                            <div class="w-10 h-10 flex items-center justify-center shrink-0">
                                <img src="{{ asset('assets/tt.avif') }}" alt="TikTok Icon" class="w-10 h-10 object-contain">
                            </div>
                            <h2 class="font-semibold text-[20px] sm:text-[24px] leading-[32px] text-[#181d27]">
                                IDN Boarding School
                            </h2>
                        </div>
                        <a href="https://www.tiktok.com/@idn.boardingschool" target="_blank" class="bg-white border-2 border-[#e9eaeb] text-[#414651] group-hover:border-[#0c61cf] group-hover:bg-[#0c61cf] group-hover:text-white px-5 py-3 rounded-full font-semibold text-[16px] transition-all duration-300 w-fit">
                            Buka Tiktok
                        </a>
                    </div>

                    <!-- CARD 6: YOUTUBE -->
                    <div class="bg-white border border-[#e9eaeb] hover:border-[#0c61cf] hover:shadow-[0px_4px_20px_rgba(0,0,0,0.1)] rounded-[18px] p-5 sm:p-6 flex flex-col justify-between gap-8 h-full transition-all duration-300 group">
                        <div class="flex flex-col gap-6 items-start text-left w-full">
                            <!-- YOUTUBE ICON (yt.avif) -->
                            <div class="w-10 h-10 flex items-center justify-center shrink-0">
                                <img src="{{ asset('assets/yt.avif') }}" alt="YouTube Icon" class="w-10 h-10 object-contain">
                            </div>
                            <h2 class="font-semibold text-[20px] sm:text-[24px] leading-[32px] text-[#181d27]">
                                IDN TV
                            </h2>
                        </div>
                        <a href="https://www.youtube.com/@IDNTV2022" target="_blank" class="bg-white border-2 border-[#e9eaeb] text-[#414651] group-hover:border-[#0c61cf] group-hover:bg-[#0c61cf] group-hover:text-white px-5 py-3 rounded-full font-semibold text-[16px] transition-all duration-300 w-fit">
                            Buka Youtube
                        </a>
                    </div>

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
                    <a href="/ppdb" class="bg-white text-[#0c61cf] px-6 py-3 rounded-full font-semibold text-[16px] text-center hover:bg-gray-100 transition-colors shadow-sm">
                        Mulai Pendaftaran
                    </a>
                    <a href="https://wa.me/6282210102006" target="_blank" class="bg-[#0c61cf] border border-[#d5d7da] text-white px-6 py-3 rounded-full font-semibold text-[16px] text-center hover:bg-[#0a52b3] transition-colors">
                        Tanya Via WhatsApp
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
