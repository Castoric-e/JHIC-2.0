<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Program IDN Bersyukur | IDN Boarding School</title>
    <meta name="description" content="Melalui kegiatan outdoor ini, santri diajak merenung dan memperhatikan ciptaan Allah SWT serta dengan adanya membaca IDN Bersyukur.">

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
    <x-navbar active="program" activeSub="idn-bersyukur" />

    <main class="flex-1 w-full pt-[106px]">

        <!-- Hero Section (Matching Figma Spec 100%) -->
        <section class="w-full bg-[#fafafa] py-12 lg:py-[72px]">
            <div class="max-w-[1240px] mx-auto px-6 md:px-12 grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
                
                <!-- Left Text Info -->
                <div class="lg:col-span-7 space-y-5">
                    <span class="text-[#0c61cf] text-sm md:text-base font-semibold tracking-wide block uppercase">
                        Program · IDN Bersyukur
                    </span>
                    
                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-[56px] font-semibold text-[#0b0d12] tracking-[-2.24px] leading-tight lg:leading-[68px] font-['Funnel_Display',sans-serif]">
                        Hidup adalah anugerah terbesar, <span class="text-[#0c61cf]">bersyukurlah</span> selalu.
                    </h1>
                    
                    <p class="text-[#717680] text-sm md:text-base leading-relaxed font-normal max-w-2xl">
                        Melalui kegiatan outdoor ini, santri diajak merenung dan memperhatikan ciptaan Allah SWT serta dengan adanya membaca IDN Bersyukur. Bahkan mereka diajarkan untuk memahami apa yang mereka miliki dan bersyukur atas nikmat kehidupan yang sedang dialaminya.
                    </p>
                </div>

                <!-- Right Hero Image (idn-bersyukur-1.avif - 418x360, rounded-18px, border-8 30% white) -->
                <div class="lg:col-span-5 flex justify-center lg:justify-end">
                    <div class="rounded-[18px] overflow-hidden shadow-xl w-full max-w-[418px] h-[280px] sm:h-[320px] lg:h-[360px] relative bg-[#e9eaeb] flex items-center justify-center group">
                        <img src="{{ asset('assets/idn-bersyukur-1.avif') }}" 
                             alt="Program IDN Bersyukur IDN Boarding School" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">
                        
                        <!-- Fallback Empty Placeholder Icon -->
                        <div class="hidden w-16 h-16 rounded-full bg-white/70 border border-slate-300/60 flex items-center justify-center text-slate-400 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 002-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Section 2: Tujuan Program IDN Bersyukur -->
        <section class="w-full py-12 lg:py-20 bg-[#f5f5f5] border-t border-[#e9eaeb]">
            <div class="max-w-[1120px] mx-auto px-6 md:px-8">
                
                <!-- Section Header -->
                <div class="relative flex items-center justify-center gap-3 mb-12 sm:mb-16 text-center max-w-2xl mx-auto">
                    <h2 class="text-2xl sm:text-3xl lg:text-[36px] font-bold text-[#0b0d12] tracking-tight font-['Funnel_Display',sans-serif]">
                        Tujuan Program <span class="text-[#0c61cf]">IDN Bersyukur</span>
                    </h2>
                </div>

                <!-- 3 Columns Feature Cards -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
                    
                    <!-- Card 01 -->
                    <div class="bg-white p-6 lg:p-8 rounded-[18px] border border-[#e9eaeb] shadow-[0px_4px_20px_rgba(0,0,0,0.04)] hover:shadow-xl hover:border-[#0c61cf] transition-all duration-300 flex flex-col justify-between">
                        <div>
                            <span class="text-3xl sm:text-4xl font-extrabold block font-['Funnel_Display',sans-serif] mb-3" style="color: rgba(12, 97, 207, 0.3);">01</span>
                            <h3 class="text-lg sm:text-xl font-bold text-[#181d27] font-['Funnel_Display',sans-serif] mb-2 leading-snug">
                                Menumbuhkan Rasa Syukur yang Mendalam
                            </h3>
                            <p class="text-[#717680] text-sm leading-relaxed font-normal">
                                Santri diajak memahami bahwa apa yang mereka miliki dari kesehatan, ilmu, hingga kesempatan menuntut ilmu adalah anugerah Allah yang harus disyukuri, bukan dianggap biasa.
                            </p>
                        </div>
                    </div>

                    <!-- Card 02 -->
                    <div class="bg-white p-6 lg:p-8 rounded-[18px] border border-[#e9eaeb] shadow-[0px_4px_20px_rgba(0,0,0,0.04)] hover:shadow-xl hover:border-[#0c61cf] transition-all duration-300 flex flex-col justify-between">
                        <div>
                            <span class="text-3xl sm:text-4xl font-extrabold block font-['Funnel_Display',sans-serif] mb-3" style="color: rgba(12, 97, 207, 0.3);">02</span>
                            <h3 class="text-lg sm:text-xl font-bold text-[#181d27] font-['Funnel_Display',sans-serif] mb-2 leading-snug">
                                Melatih Empati dan Kepedulian Sosial
                            </h3>
                            <p class="text-[#717680] text-sm leading-relaxed font-normal">
                                Melalui interaksi dengan masyarakat sekitar yang memiliki keterbatasan ekonomi, santri diajak berinteraksi dan membantu sesama. Santri menyadari bahwa kemampuan mereka bisa berguna bagi banyak orang.
                            </p>
                        </div>
                    </div>

                    <!-- Card 03 -->
                    <div class="bg-white p-6 lg:p-8 rounded-[18px] border border-[#e9eaeb] shadow-[0px_4px_20px_rgba(0,0,0,0.04)] hover:shadow-xl hover:border-[#0c61cf] transition-all duration-300 flex flex-col justify-between">
                        <div>
                            <span class="text-3xl sm:text-4xl font-extrabold block font-['Funnel_Display',sans-serif] mb-3" style="color: rgba(12, 97, 207, 0.3);">03</span>
                            <h3 class="text-lg sm:text-xl font-bold text-[#181d27] font-['Funnel_Display',sans-serif] mb-2 leading-snug">
                                Meningkatkan Keimanan dan Ketaqwaan
                            </h3>
                            <p class="text-[#717680] text-sm leading-relaxed font-normal">
                                Melalui tadabbur alam dan merenungi ayat-ayat Allah, santri memperkuat hubungan spiritual mereka dengan Allah SWT, memperkuat landasan hidup beragama dan kedewasaan pribadinya.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- Section 3: Kegiatan dalam IDN Bersyukur -->
        <section class="w-full py-16 lg:py-[110px] bg-[#fafafa] border-t border-[#e9eaeb]">
            <div class="max-w-[1120px] mx-auto px-6 md:px-8">
                
                <!-- Section Header -->
                <div class="text-center max-w-2xl mx-auto mb-12 sm:mb-16">
                    <h2 class="text-2xl sm:text-3xl lg:text-[36px] font-bold text-[#0b0d12] tracking-tight font-['Funnel_Display',sans-serif]">
                        Kegiatan dalam <span class="text-[#0c61cf]">IDN Bersyukur</span>
                    </h2>
                </div>

                <!-- 4 Activity Cards Grid (2 Columns, with badges retaining bg-[#d9e7f9] text-[#0c61cf] strictly) -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-[960px] mx-auto">
                    
                    <!-- Card 01 -->
                    <div class="bg-white p-6 sm:p-8 rounded-[18px] border border-[#e9eaeb] hover:border-[#0c61cf] shadow-[0px_4px_20px_rgba(0,0,0,0.04)] hover:shadow-lg transition-all duration-200 flex flex-col justify-start">
                        <div class="w-12 h-12 rounded-full bg-[#d9e7f9] flex items-center justify-center shrink-0 font-bold text-[#0c61cf] font-['Funnel_Display',sans-serif] text-base mb-4">
                            01
                        </div>
                        <h3 class="text-base sm:text-lg font-bold text-[#181d27] font-['Funnel_Display',sans-serif] mb-2 leading-snug">
                            Menyusuri Sungai
                        </h3>
                        <p class="text-[#717680] text-sm leading-relaxed font-normal">
                            Santri menyusuri alam dan arus sungai untuk mentadabburi keindahan alam dan merasakan kesegaran air, merenungi ciptaan Allah, serta meredakan kelelahan.
                        </p>
                    </div>

                    <!-- Card 02 -->
                    <div class="bg-white p-6 sm:p-8 rounded-[18px] border border-[#e9eaeb] hover:border-[#0c61cf] shadow-[0px_4px_20px_rgba(0,0,0,0.04)] hover:shadow-lg transition-all duration-200 flex flex-col justify-start">
                        <div class="w-12 h-12 rounded-full bg-[#d9e7f9] flex items-center justify-center shrink-0 font-bold text-[#0c61cf] font-['Funnel_Display',sans-serif] text-base mb-4">
                            02
                        </div>
                        <h3 class="text-base sm:text-lg font-bold text-[#181d27] font-['Funnel_Display',sans-serif] mb-2 leading-snug">
                            Menyusuri Sawah
                        </h3>
                        <p class="text-[#717680] text-sm leading-relaxed font-normal">
                            Santri berjalan bersama di sekitar persawahan untuk belajar memahami nikmat Allah, menghirup udara segar, dan memahami kehidupan petani.
                        </p>
                    </div>

                    <!-- Card 03 -->
                    <div class="bg-white p-6 sm:p-8 rounded-[18px] border border-[#e9eaeb] hover:border-[#0c61cf] shadow-[0px_4px_20px_rgba(0,0,0,0.04)] hover:shadow-lg transition-all duration-200 flex flex-col justify-start">
                        <div class="w-12 h-12 rounded-full bg-[#d9e7f9] flex items-center justify-center shrink-0 font-bold text-[#0c61cf] font-['Funnel_Display',sans-serif] text-base mb-4">
                            03
                        </div>
                        <h3 class="text-base sm:text-lg font-bold text-[#181d27] font-['Funnel_Display',sans-serif] mb-2 leading-snug">
                            Menyusuri Pedesaan
                        </h3>
                        <p class="text-[#717680] text-sm leading-relaxed font-normal">
                            Santri mengelilingi daerah pemukiman warga untuk melihat kehidupan masyarakat, menumbuhkan kepedulian sosial, dan merasakan suasana warga.
                        </p>
                    </div>

                    <!-- Card 04 -->
                    <div class="bg-white p-6 sm:p-8 rounded-[18px] border border-[#e9eaeb] hover:border-[#0c61cf] shadow-[0px_4px_20px_rgba(0,0,0,0.04)] hover:shadow-lg transition-all duration-200 flex flex-col justify-start">
                        <div class="w-12 h-12 rounded-full bg-[#d9e7f9] flex items-center justify-center shrink-0 font-bold text-[#0c61cf] font-['Funnel_Display',sans-serif] text-base mb-4">
                            04
                        </div>
                        <h3 class="text-base sm:text-lg font-bold text-[#181d27] font-['Funnel_Display',sans-serif] mb-2 leading-snug">
                            Berkebun Area Sekolah
                        </h3>
                        <p class="text-[#717680] text-sm leading-relaxed font-normal">
                            Santri diajak beraktivitas di area kebun sekolah untuk mentadabburi alam sekaligus menumbuhkan rasa cinta dan rasa memiliki terhadap lingkungan sekolah.
                        </p>
                    </div>

                </div>

            </div>
        </section>

        <!-- Section 4: Manfaat dari IDN Bersyukur (Matching Figma Node 100%) -->
        <section class="w-full py-16 lg:py-[110px] bg-[#f5f5f5] border-t border-[#e9eaeb]">
            <div class="max-w-[1240px] mx-auto px-6 md:px-12 grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                
                <!-- Left Image Collage (Exact Figma 455x330 with -top-5 -left-5 and -bottom-5 -right-5 160x100 tilted polaroids) -->
                <div class="lg:col-span-6 flex justify-center">
                    <div class="relative shrink-0 w-full max-w-[455px] h-[260px] sm:h-[330px] my-6 lg:my-0 group/collage">
                        
                        <!-- Main Image (idn-bersyukur-2.avif - 455x330, rounded-18px) -->
                        <div class="w-full h-full rounded-[18px] overflow-hidden shadow-xl bg-[#e9eaeb] relative transition-all duration-500 ease-out group-hover/collage:shadow-2xl flex items-center justify-center">
                            <img src="{{ asset('assets/idn-bersyukur-2.avif') }}" 
                                 alt="Manfaat IDN Bersyukur Utama" 
                                 class="w-full h-full object-cover group-hover/collage:scale-105 transition-transform duration-500"
                                 onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">
                            
                            <div class="hidden w-14 h-14 rounded-full bg-white/70 border border-slate-300/60 flex items-center justify-center text-slate-400 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 002-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        </div>

                        <!-- Top-Left Small Tilted Frame (idn-bersyukur-3.avif - 160x100, -rotate-5) -->
                        <div class="absolute -top-[20px] -left-[15px] sm:-top-[24px] sm:-left-[20px] z-20 transition-all duration-300 ease-out hover:scale-110 hover:-rotate-12 hover:-translate-y-2 hover:z-40 cursor-pointer">
                            <div class="-rotate-5 shadow-[12px_12px_40px_rgba(0,4,45,0.16)] transition-all duration-300">
                                <div class="w-[130px] sm:w-[160px] h-[80px] sm:h-[100px] rounded-[8px] overflow-hidden bg-white shadow-lg flex items-center justify-center">
                                    <img src="{{ asset('assets/idn-bersyukur-3.avif') }}" 
                                         alt="Dokumentasi IDN Bersyukur 1" 
                                         class="w-full h-full object-cover"
                                         onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">
                                    <svg class="hidden w-6 h-6 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 002-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- Bottom-Right Small Tilted Frame (idn-bersyukur-4.avif - 160x100, rotate-5) -->
                        <div class="absolute -bottom-[20px] -right-[15px] sm:-bottom-[24px] sm:-right-[20px] z-20 transition-all duration-300 ease-out hover:scale-110 hover:rotate-12 hover:translate-y-2 hover:z-40 cursor-pointer">
                            <div class="rotate-5 shadow-[12px_12px_40px_rgba(0,4,45,0.16)] transition-all duration-300">
                                <div class="w-[130px] sm:w-[160px] h-[80px] sm:h-[100px] rounded-[8px] overflow-hidden bg-white shadow-lg flex items-center justify-center">
                                    <img src="{{ asset('assets/idn-bersyukur-4.avif') }}" 
                                         alt="Dokumentasi IDN Bersyukur 2" 
                                         class="w-full h-full object-cover"
                                         onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">
                                    <svg class="hidden w-6 h-6 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 002-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Right Text Content -->
                <div class="lg:col-span-6 space-y-5">
                    <h2 class="text-2xl sm:text-3xl lg:text-[36px] font-bold text-[#0b0d12] tracking-tight font-['Funnel_Display',sans-serif]">
                        Manfaat dari <span class="text-[#0c61cf]">IDN Bersyukur</span>
                    </h2>

                    <p class="text-[#717680] text-sm md:text-base leading-relaxed font-normal">
                        Manfaat IDN Bersyukur bagi santri adalah bahwa:
                    </p>

                    <ul class="list-disc pl-5 space-y-2 text-[#717680] text-sm md:text-base font-normal my-4 marker:text-[#717680]">
                        <li>Dengan kebiasaan bersyukur dengan "Alhamdulillah", santri juga didorong untuk senantiasa berbuat baik.</li>
                        <li>Mampu menjadi pribadi yang bersyukur, ikhlas, dan sabar dalam setiap keadaan.</li>
                        <li>Paham bahwa setiap nikmat dan nikmat yang memang ada adalah bentuk kasih dan rahmat dari Allah.</li>
                    </ul>

                    <p class="text-[#717680] text-sm md:text-base leading-relaxed font-normal">
                        Melalui kegiatan IDN Bersyukur di IDN, tidak hanya belajar ilmu dunia, tetapi juga belajar memperdalam hakikat kehidupan agar yang diperoleh berkah dunia & akhirat.
                    </p>
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
