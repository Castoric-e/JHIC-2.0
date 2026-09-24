<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Program Backpacker | IDN Boarding School</title>
    <meta name="description" content="Eksplorasi Global dan Menyelami Budaya Indah di Dunia bersama IDN Boarding School melalui program Backpacker internasional.">

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
    <x-navbar active="program" activeSub="backpacker" />

    <main class="flex-1 w-full pt-[106px]">

        <!-- Hero Section (Matching Backpacker Design 100%) -->
        <section class="w-full bg-[#fafafa] py-12 lg:py-[72px]">
            <div class="max-w-[1240px] mx-auto px-6 md:px-12 grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
                
                <!-- Left Text Info -->
                <div class="lg:col-span-7 space-y-5">
                    <span class="text-[#0c61cf] text-sm md:text-base font-semibold tracking-wide block">
                        Program · Backpacker
                    </span>
                    
                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-[56px] font-semibold text-[#0b0d12] tracking-[-2.24px] leading-tight lg:leading-[68px] font-['Funnel_Display',sans-serif]">
                        Eksplorasi Global dan Menyelami Budaya <span class="text-[#0c61cf]">Indah di Dunia.</span>
                    </h1>
                    
                    <p class="text-[#717680] text-sm md:text-base leading-relaxed font-normal max-w-2xl">
                        IDN Boarding School memfasilitasi santri untuk menjelajahi berbagai negara melalui program Backpacker. Program ini dirancang untuk mengasah kemandirian, wawasan internasional, serta keberanian santri di kancah dunia.
                    </p>
                </div>

                <!-- Right Hero Image (bp-11-negara.avif) -->
                <div class="lg:col-span-5 flex justify-center lg:justify-end">
                    <div class="rounded-[24px] lg:rounded-[32px] overflow-hidden shadow-[0px_12px_40px_rgba(0,0,0,0.08)] w-full max-w-[548px] h-[260px] sm:h-[320px] lg:h-[360px] relative bg-slate-100 group">
                        <img src="{{ asset('assets/program/backpacker/backpacker-satu.avif') }}" 
                             alt="Program Backpacker 11 Negara IDN" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                </div>

            </div>
        </section>

        <!-- Feature / Benefit Section (Apa Yang Didapatkan dari Backpacker?) -->
        <section class="w-full py-12 lg:py-20 bg-white border-t border-[#e9eaeb]">
            <div class="max-w-[1120px] mx-auto px-6 md:px-8">
                
                <!-- Section Header -->
                <div class="flex items-center justify-center gap-3 mb-12 sm:mb-16 text-center">
                    <h2 class="text-2xl sm:text-3xl lg:text-[36px] font-bold text-[#0b0d12] tracking-tight font-['Funnel_Display',sans-serif]">
                        Apa Yang Didapatkan dari <span class="text-[#0c61cf]">Backpacker?</span>
                    </h2>
                </div>

                <!-- 3 Columns Feature Cards -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
                    
                    <!-- Card 1 -->
                    <div class="bg-[#fafafa] p-6 lg:p-8 rounded-[24px] border border-[#e9eaeb] hover:border-[#0c61cf] transition-all duration-300 space-y-4 hover:shadow-lg">
                        <div class="w-12 h-12 rounded-2xl bg-[#0c61cf]/10 flex items-center justify-center text-[#0c61cf]">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 002 2h1.5a2.5 2.5 0 002.5-2.5V7a2 2 0 00-2-2h-1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold text-[#181d27] font-['Funnel_Display',sans-serif]">
                            Manajemen Perjalanan & Kemandirian
                        </h3>
                        <p class="text-[#717680] text-sm leading-relaxed">
                            Santri belajar mengelola anggaran perjalanan, tiket, akomodasi, serta navigasi mandiri antar negara dengan disiplin dan kemandirian penuh.
                        </p>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-[#fafafa] p-6 lg:p-8 rounded-[24px] border border-[#e9eaeb] hover:border-[#0c61cf] transition-all duration-300 space-y-4 hover:shadow-lg">
                        <div class="w-12 h-12 rounded-2xl bg-[#0c61cf]/10 flex items-center justify-center text-[#0c61cf]">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold text-[#181d27] font-['Funnel_Display',sans-serif]">
                            Studi Budaya & Peradaban Dunia
                        </h3>
                        <p class="text-[#717680] text-sm leading-relaxed">
                            Membuka cakrawala santri terhadap keberagaman peradaban, nilai-nilai budaya global, serta situs sejarah Islam yang mendunia.
                        </p>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-[#fafafa] p-6 lg:p-8 rounded-[24px] border border-[#e9eaeb] hover:border-[#0c61cf] transition-all duration-300 space-y-4 hover:shadow-lg">
                        <div class="w-12 h-12 rounded-2xl bg-[#0c61cf]/10 flex items-center justify-center text-[#0c61cf]">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold text-[#181d27] font-['Funnel_Display',sans-serif]">
                            Ekspansi Jaringan & Wawasan Global
                        </h3>
                        <p class="text-[#717680] text-sm leading-relaxed">
                            Berinteraksi langsung dengan masyarakat lokal dan pelajar internasional untuk membangun rasa percaya diri serta kemampuan komunikasi global.
                        </p>
                    </div>

                </div>

            </div>
        </section>

        <!-- Exploration Section (open-house.avif Image) -->
        <section class="w-full py-12 lg:py-20 bg-[#fafafa] border-t border-[#e9eaeb]">
            <div class="max-w-[1240px] mx-auto px-6 md:px-12 grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
                
                <!-- Left Content -->
                <div class="lg:col-span-7 space-y-5">
                    <h2 class="text-2xl sm:text-3xl lg:text-[36px] font-bold text-[#0b0d12] tracking-tight font-['Funnel_Display',sans-serif]">
                        Kegiatan Eksplorasi & Studi Lapangan
                    </h2>
                    
                    <p class="text-[#717680] text-sm md:text-base leading-relaxed font-normal">
                        Selama kegiatan Backpacker, para santri tidak hanya berkunjung sebagai wisatawan biasa, tetapi juga melakukan riset budaya, wawancara masyarakat lokal, serta kunjungan edukasi ke universitas ternama.
                    </p>

                    <p class="text-[#717680] text-sm md:text-base leading-relaxed font-normal">
                        Pengalaman ini membentuk mentalitas global yang tangguh, adab berorientasi internasional, serta kemampuan adaptasi tinggi di berbagai kondisi lingkungan baru.
                    </p>
                </div>

                <!-- Right Image (open-house.avif) -->
                <div class="lg:col-span-5 flex justify-center lg:justify-end">
                    <div class="rounded-[24px] lg:rounded-[32px] overflow-hidden shadow-lg w-full max-w-[548px] h-[260px] sm:h-[320px] lg:h-[360px] relative bg-slate-100 group">
                        <img src="{{ asset('assets/program/backpacker/backpacker-dua.avif') }}" 
                             alt="Studi Lapangan Backpacker IDN" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                </div>

            </div>
        </section>

        <!-- Values Section / Nilai yang Ditanamkan (Matching Figma Node 19902:13571 100%) -->
        <section class="w-full bg-[#f5f5f5] py-16 lg:py-[110px] border-t border-[#e9eaeb]">
            <div class="max-w-[1440px] mx-auto px-6 md:px-12 lg:px-[160px] flex flex-col lg:flex-row items-center lg:items-start justify-center gap-[40px] lg:gap-[56px] relative">
                
                <!-- Left Stacked Image Collage (Exact 455x330) -->
                <div class="relative shrink-0 w-full max-w-[455px] h-[260px] sm:h-[330px] my-6 lg:my-0 group/collage">
                    
                    <!-- Main Image (backpacker-tiga.avif - 455x330 rounded-18px) -->
                    <div class="w-full h-full rounded-[18px] overflow-hidden shadow-xl bg-slate-200 relative transition-all duration-500 ease-out group-hover/collage:shadow-2xl cursor-pointer">
                        <img src="{{ asset('assets/program/backpacker/backpacker-tiga.avif') }}" 
                             alt="Dokumentasi Backpacker" 
                             class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover/collage:scale-105">
                    </div>

                    <!-- Top Left Overlay Polaroid (backpacker-mini1.avif - 160x100, -rotate-5, smooth hover lift & rotate) -->
                    <div class="absolute -top-[20px] -left-[15px] sm:-top-[30px] sm:-left-[30px] z-20 transition-all duration-300 ease-out hover:scale-110 hover:-rotate-12 hover:-translate-y-2 hover:z-40 cursor-pointer">
                        <div class="-rotate-5 shadow-2xl transition-all duration-300">
                            <div class="w-[130px] sm:w-[160px] h-[80px] sm:h-[100px] rounded-[8px] overflow-hidden bg-white shadow-lg group/mini1">
                                <img src="{{ asset('assets/program/backpacker/backpacker-mini1.avif') }}" 
                                     alt="Kegiatan Backpacker 1" 
                                     class="w-full h-full object-cover transition-transform duration-500 ease-out group-hover/mini1:scale-110">
                            </div>
                        </div>
                    </div>

                    <!-- Bottom Right Overlay Polaroid (backpacker-mini2.avif - 160x100, rotate-5, smooth hover lift & rotate) -->
                    <div class="absolute -bottom-[20px] -right-[15px] sm:-bottom-[30px] sm:-right-[30px] z-20 transition-all duration-300 ease-out hover:scale-110 hover:rotate-12 hover:translate-y-2 hover:z-40 cursor-pointer">
                        <div class="rotate-5 shadow-2xl transition-all duration-300">
                            <div class="w-[130px] sm:w-[160px] h-[80px] sm:h-[100px] rounded-[8px] overflow-hidden bg-white shadow-lg group/mini2">
                                <img src="{{ asset('assets/program/backpacker/backpacker-mini2.avif') }}" 
                                     alt="Kegiatan Backpacker 2" 
                                     class="w-full h-full object-cover transition-transform duration-500 ease-out group-hover/mini2:scale-110">
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Right Values Container (609px width, 24px gap, 32px bold title, 16px text) -->
                <div class="w-full max-w-[609px] space-y-[24px] text-left">
                    <h2 class="font-bold text-2xl sm:text-3xl lg:text-[32px] leading-tight lg:leading-[42px] text-[#181d27] font-['Geist',sans-serif]">
                        Nilai yang Ditanamkan
                    </h2>
                    
                    <div class="text-[#717680] text-base leading-[24px] space-y-4 font-normal">
                        <p>Program Backpacker mencerminkan filosofi pendidikan IDN:</p>
                        
                        <p class="text-[#181d27] font-normal">
                            "Mendidik santri agar tidak hanya cerdas secara teknologi, tetapi juga kuat secara mental dan bermanfaat bagi umat."
                        </p>

                        <p>
                            Dari kegiatan ini, santri belajar bahwa dunia nyata tidak selalu mudah - namun dengan adab, ilmu, dan keberanian, mereka dapat menghadapi apa pun.
                        </p>

                        <p>
                            Kegiatan ini menjadi salah satu pengalaman paling berkesan dalam perjalanan santri IDN menuju kedewasaan dan kemandirian sejati.
                        </p>
                    </div>
                </div>

            </div>
        </section>

    </main>

    <!-- Footer Component -->
    <x-footer />

    <!-- Chatbot Component -->
    <x-chatbot />

</body>
</html>
