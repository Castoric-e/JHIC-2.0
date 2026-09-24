<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Program Edurace | IDN Boarding School</title>
    <meta name="description" content="Edurace menghadirkan pengalaman belajar di luar kelas melalui wahana tantangan yang melatih kerjasama, kepemimpinan, kemandirian, dan kemampuan beradaptasi di lingkungan nyata.">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@400;500;600;700&family=Outfit:wght@400;500;600;700&family=Inter:wght@400;500;600;700&family=Funnel+Display:wght@500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Alpine.js CDN -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Tailwind CSS Vite Import -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="bg-[#fafafa] text-[#181d27] font-['Geist',sans-serif] antialiased min-h-screen flex flex-col justify-between selection:bg-[#0c61cf] selection:text-white">

    <!-- Header Navigation -->
    <x-navbar active="program" activeSub="edurace" />

    <main class="flex-1 w-full pt-[106px]">

        <!-- Hero Section (Matching Figma Node 19902:13313 100%) -->
        <section class="w-full bg-[#fafafa] py-12 lg:py-[72px]">
            <div class="max-w-[1240px] mx-auto px-6 md:px-12 grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
                
                <!-- Left Text Info -->
                <div class="lg:col-span-7 space-y-5">
                    <span class="text-[#0c61cf] text-sm md:text-base font-semibold tracking-wide block uppercase">
                        Program · Edurace
                    </span>
                    
                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-[56px] font-semibold text-[#0b0d12] tracking-[-2.24px] leading-tight lg:leading-[68px] font-['Funnel_Display',sans-serif]">
                        Belajar Melalui <span class="text-[#0c61cf]">Tantangan</span>, Bertumbuh Melalui <span class="text-[#0c61cf]">Pengalaman</span>.
                    </h1>
                    
                    <p class="text-[#717680] text-sm md:text-base leading-relaxed font-normal max-w-2xl">
                        Edurace menghadirkan pengalaman belajar di luar kelas melalui wahana tantangan yang melatih kerjasama, kepemimpinan, kemandirian, dan kemampuan beradaptasi di lingkungan nyata.
                    </p>
                </div>

                <!-- Right Hero Image (Matching Figma 418x360, rounded-18px, border-8 30% white) -->
                <div class="lg:col-span-5 flex justify-center lg:justify-end">
                    <div class="rounded-[18px] overflow-hidden shadow-xl w-full max-w-[418px] h-[280px] sm:h-[320px] lg:h-[360px] relative bg-[#e9eaeb] flex items-center justify-center group">
                        <img src="{{ asset('assets/program/edurace/edurace-1.avif') }}" 
                             alt="Program Edurace" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">
                        
                        <!-- Fallback Empty Placeholder Icon -->
                        <div class="hidden w-16 h-16 rounded-full bg-white/70 border border-slate-300/60 flex items-center justify-center text-slate-400 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Section 2: Tujuan Program Edurace -->
        <section class="w-full py-12 lg:py-20 bg-[#f5f5f5] border-t border-[#e9eaeb]">
            <div class="max-w-[1120px] mx-auto px-6 md:px-8">
                
                <!-- Section Header -->
                <div class="relative flex items-center justify-center gap-3 mb-12 sm:mb-16 text-center max-w-2xl mx-auto">
                    <h2 class="text-2xl sm:text-3xl lg:text-[36px] font-bold text-[#0b0d12] tracking-tight font-['Funnel_Display',sans-serif]">
                        Tujuan Program <span class="text-[#0c61cf]">Edurace</span>
                    </h2>
                </div>

                <!-- 3 Columns Feature Cards -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
                    
                    <!-- Card 01 -->
                    <div class="bg-white p-6 lg:p-8 rounded-[18px] border border-[#e9eaeb] shadow-[0px_4px_20px_rgba(0,0,0,0.04)] hover:shadow-xl hover:border-[#0c61cf] transition-all duration-300 flex flex-col justify-between">
                        <div>
                            <span class="text-3xl sm:text-4xl font-extrabold block font-['Funnel_Display',sans-serif] mb-3" style="color: rgba(12, 97, 207, 0.3);">01</span>
                            <h3 class="text-lg sm:text-xl font-bold text-[#181d27] font-['Funnel_Display',sans-serif] mb-2 leading-snug">
                                Mengasah Kerja Sama dan Komunikasi
                            </h3>
                            <p class="text-[#717680] text-sm leading-relaxed font-normal">
                                Setiap tim harus saling berkoordinasi, menyusun strategi, dan menyelesaikan tugas dengan efisien. Edurace mengajarkan pentingnya saling percaya dan menghargai peran masing-masing anggota.
                            </p>
                        </div>
                    </div>

                    <!-- Card 02 -->
                    <div class="bg-white p-6 lg:p-8 rounded-[18px] border border-[#e9eaeb] shadow-[0px_4px_20px_rgba(0,0,0,0.04)] hover:shadow-xl hover:border-[#0c61cf] transition-all duration-300 flex flex-col justify-between">
                        <div>
                            <span class="text-3xl sm:text-4xl font-extrabold block font-['Funnel_Display',sans-serif] mb-3" style="color: rgba(12, 97, 207, 0.3);">02</span>
                            <h3 class="text-lg sm:text-xl font-bold text-[#181d27] font-['Funnel_Display',sans-serif] mb-2 leading-snug">
                                Menumbuhkan Semangat Kompetisi yang Sehat
                            </h3>
                            <p class="text-[#717680] text-sm leading-relaxed font-normal">
                                Santri belajar berkompetisi bukan untuk menjatuhkan, melainkan untuk meningkatkan kemampuan diri dan tim.
                            </p>
                        </div>
                    </div>

                    <!-- Card 03 -->
                    <div class="bg-white p-6 lg:p-8 rounded-[18px] border border-[#e9eaeb] shadow-[0px_4px_20px_rgba(0,0,0,0.04)] hover:shadow-xl hover:border-[#0c61cf] transition-all duration-300 flex flex-col justify-between">
                        <div>
                            <span class="text-3xl sm:text-4xl font-extrabold block font-['Funnel_Display',sans-serif] mb-3" style="color: rgba(12, 97, 207, 0.3);">03</span>
                            <h3 class="text-lg sm:text-xl font-bold text-[#181d27] font-['Funnel_Display',sans-serif] mb-2 leading-snug">
                                Melatih Ketahanan Fisik dan Mental
                            </h3>
                            <p class="text-[#717680] text-sm leading-relaxed font-normal">
                                Dalam setiap tantangan, santri dihadapkan pada berbagai situasi yang menguji kekuatan tubuh dan daya pikir. Ini melatih ketangguhan, kesabaran, dan kemampuan mengambil keputusan cepat.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- Section 3: Bagaimana Kegiatan Ini Berjalan? -->
        <section class="w-full py-16 lg:py-[110px] bg-[#fafafa] border-t border-[#e9eaeb]">
            <div class="max-w-[1240px] mx-auto px-6 md:px-12 grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
                
                <!-- Left Text Info -->
                <div class="lg:col-span-7 space-y-5">
                    <h2 class="text-2xl sm:text-3xl lg:text-[36px] font-bold text-[#0b0d12] tracking-tight font-['Funnel_Display',sans-serif]">
                        Bagaimana Kegiatan Ini Berjalan?
                    </h2>
                    
                    <p class="text-[#717680] text-sm md:text-base leading-relaxed font-normal">
                        Edurace adalah kegiatan berbasis petualangan dan memecahkan teka-teki, menyelesaikan berbagai tantangan di setiap tempat yang ditentukan. Setiap tim diberikan uang saku terbatas di awal serta dengan menggunakan kendaraan umum, santri diajak tantangan perjalanan mengasah fleksibilitas dan adaptasi di jalur. Sarana dan transportasi terbatas menuntut sumber daya, berinteraksi dengan masyarakat, dan membuat keputusan cepat tetapi terukur bersama kelompok.
                    </p>

                    <p class="text-[#717680] text-sm md:text-base leading-relaxed font-normal">
                        Di edurace, keberhasilan tidak hanya diukur dari cepat mencapai tujuan, tetapi bagaimana tim bisa mempertahankan nilai-nilai kejujuran, disiplin di jalanan. Melalui rute dan tantangan di tempat-tempat khusus, santri belajar untuk tidak mudah menyerah, saling mendukung sesama anggota kelompok, serta memelihara semangat kemanusiaan sebagaimana karakter siswa idn yang bertakwa.
                    </p>
                </div>

                <!-- Right Image (Matching Figma 410x410, rounded-18px) -->
                <div class="lg:col-span-5 flex justify-center lg:justify-end">
                    <div class="rounded-[18px] overflow-hidden shadow-xl w-full max-w-[410px] h-[300px] sm:h-[360px] lg:h-[410px] relative bg-[#e9eaeb] flex items-center justify-center group">
                        <img src="{{ asset('assets/program/edurace/edurace-2.avif') }}" 
                             alt="Kegiatan Edurace" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">
                        
                        <!-- Fallback Empty Placeholder Icon -->
                        <div class="hidden w-16 h-16 rounded-full bg-white/70 border border-slate-300/60 flex items-center justify-center text-slate-400 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Section 4: Nilai & Filosofi yang Dibawa (Matching Figma Node 100%) -->
        <section class="w-full py-16 lg:py-[110px] bg-[#f5f5f5] border-t border-[#e9eaeb]">
            <div class="max-w-[1240px] mx-auto px-6 md:px-12 grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                
                <!-- Left Image Collage (Exact Figma 455x330 with -top-5 -left-5 and -bottom-5 -right-5 160x100 tilted polaroids) -->
                <div class="lg:col-span-6 flex justify-center">
                    <div class="relative shrink-0 w-full max-w-[455px] h-[260px] sm:h-[330px] my-6 lg:my-0 group/collage">
                        
                        <!-- Main Image (edurace-3.avif - 455x330, rounded-18px) -->
                        <div class="w-full h-full rounded-[18px] overflow-hidden shadow-xl bg-[#e9eaeb] relative transition-all duration-500 ease-out group-hover/collage:shadow-2xl flex items-center justify-center">
                            <img src="{{ asset('assets/program/edurace/edurace-3.avif') }}" 
                                 alt="Nilai Edurace Utama" 
                                 class="w-full h-full object-cover group-hover/collage:scale-105 transition-transform duration-500"
                                 onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">
                            
                            <div class="hidden w-14 h-14 rounded-full bg-white/70 border border-slate-300/60 flex items-center justify-center text-slate-400 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        </div>

                        <!-- Top-Left Small Tilted Frame (mini-edurace-1.avif - 160x100, -rotate-5) -->
                        <div class="absolute -top-[20px] -left-[15px] sm:-top-[24px] sm:-left-[20px] z-20 transition-all duration-300 ease-out hover:scale-110 hover:-rotate-12 hover:-translate-y-2 hover:z-40 cursor-pointer">
                            <div class="-rotate-5 shadow-[12px_12px_40px_rgba(0,4,45,0.16)] transition-all duration-300">
                                <div class="w-[130px] sm:w-[160px] h-[80px] sm:h-[100px] rounded-[8px] overflow-hidden bg-white shadow-lg flex items-center justify-center">
                                    <img src="{{ asset('assets/program/edurace/mini-edurace-1.avif') }}" 
                                         alt="Dokumentasi Edurace 1" 
                                         class="w-full h-full object-cover"
                                         onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">
                                    <svg class="hidden w-6 h-6 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- Bottom-Right Small Tilted Frame (mini-edurace-2.avif - 160x100, rotate-5) -->
                        <div class="absolute -bottom-[20px] -right-[15px] sm:-bottom-[24px] sm:-right-[20px] z-20 transition-all duration-300 ease-out hover:scale-110 hover:rotate-12 hover:translate-y-2 hover:z-40 cursor-pointer">
                            <div class="rotate-5 shadow-[12px_12px_40px_rgba(0,4,45,0.16)] transition-all duration-300">
                                <div class="w-[130px] sm:w-[160px] h-[80px] sm:h-[100px] rounded-[8px] overflow-hidden bg-white shadow-lg flex items-center justify-center">
                                    <img src="{{ asset('assets/program/edurace/mini-edurace-2.avif') }}" 
                                         alt="Dokumentasi Edurace 2" 
                                         class="w-full h-full object-cover"
                                         onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">
                                    <svg class="hidden w-6 h-6 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Right Text Content -->
                <div class="lg:col-span-6 space-y-5">
                    <h2 class="text-2xl sm:text-3xl lg:text-[36px] font-bold text-[#0b0d12] tracking-tight font-['Funnel_Display',sans-serif]">
                        Nilai yang Ditanamkan
                    </h2>

                    <p class="text-[#717680] text-sm md:text-base leading-relaxed font-normal">
                        Melalui Edurace, para santri tidak hanya berkompetisi, tetapi juga belajar banyak nilai penting kehidupan:
                    </p>

                    <ul class="list-disc pl-5 space-y-2 text-[#717680] text-sm md:text-base font-normal my-4 marker:text-[#717680]">
                        <li>Disiplin dan kerja keras untuk mencapai tujuan.</li>
                        <li>Kepemimpinan dan solidaritas di tengah tantangan.</li>
                        <li>Berpikir cepat dan tepat dalam kondisi terbatas.</li>
                        <li>Menjaga adab dan etika meskipun dalam suasana kompetisi.</li>
                    </ul>

                    <p class="text-[#717680] text-sm md:text-base leading-relaxed font-normal">
                        Program ini mengajarkan bahwa setiap perlombaan bukan hanya tentang siapa yang menang, tetapi siapa yang belajar paling banyak dari prosesnya.
                    </p>
                </div>

            </div>
        </section>

    </main>

    <!-- Footer Component -->
    <x-footer />

</body>
</html>
