<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Program IDN Mengajar | IDN Boarding School</title>
    <meta name="description" content="IDN Mengajar memberikan kesempatan kepada para santri untuk berbagi pengetahuan, keterampilan, dan pengalaman sekaligus menciptakan dampak yang berarti dengan sekolah lain.">

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
        
        /* Custom scrollbar hide for clean slider view */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>
<body class="bg-[#fafafa] text-[#181d27] font-['Geist',sans-serif] antialiased min-h-screen flex flex-col justify-between selection:bg-[#0c61cf] selection:text-white">

    <!-- Header Navigation -->
    <x-navbar active="program" activeSub="idn-mengajar" />

    <main class="flex-1 w-full pt-[106px]">

        <!-- Hero Section (Matching Figma Node 19902:13218) -->
        <section class="w-full bg-[#fafafa] py-12 lg:py-[72px]">
            <div class="max-w-[1240px] mx-auto px-6 md:px-12 grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
                
                <!-- Left Text Info -->
                <div class="lg:col-span-7 space-y-5">
                    <span class="text-[#0c61cf] text-sm md:text-base font-semibold tracking-wide block uppercase">
                        Program · IDN Mengajar
                    </span>
                    
                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-[56px] font-semibold text-[#0b0d12] tracking-[-2.24px] leading-tight lg:leading-[68px] font-['Funnel_Display',sans-serif]">
                        Pengetahuan menjadi lebih <span class="text-[#0c61cf]">bermakna</span> ketika dibagikan.
                    </h1>
                    
                    <p class="text-[#717680] text-sm md:text-base leading-relaxed font-normal max-w-2xl">
                        IDN Mengajar memberikan kesempatan kepada para santri untuk berbagi pengetahuan, keterampilan, dan pengalaman sekaligus menciptakan dampak yang berarti dengan sekolah lain.
                    </p>
                </div>

                <!-- Right Hero Image Container -->
                <div class="lg:col-span-5 flex justify-center lg:justify-end">
                    <div class="rounded-[24px] lg:rounded-[32px] overflow-hidden shadow-[0px_12px_40px_rgba(0,0,0,0.08)] border border-slate-200/80 w-full max-w-[548px] h-[260px] sm:h-[320px] lg:h-[360px] relative bg-slate-100 group">
                        <img src="{{ asset('assets/program/ngajar/ngajar-1.avif') }}" 
                             alt="Program IDN Mengajar" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">
                        
                        <!-- Fallback empty/placeholder state if asset not present -->
                        <div class="hidden w-full h-full bg-gradient-to-br from-slate-100 to-slate-200 flex-col items-center justify-center p-6 text-center">
                            <div class="w-16 h-16 rounded-2xl bg-[#0c61cf]/10 text-[#0c61cf] flex items-center justify-center mb-3">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 14l9-5-9-5-9 5 9 5z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0112 20.055a11.952 11.952 0 01-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/></svg>
                            </div>
                            <span class="text-[#181d27] font-semibold text-lg font-['Funnel_Display',sans-serif]">IDN Mengajar</span>
                            <span class="text-[#717680] text-xs mt-1">Berbagi Ilmu & Dampak Berkelanjutan</span>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Section 2: Mengajar Sampai ke Luar Negara (Infinite Card Slider) -->
        <section class="w-full py-12 lg:py-20 bg-white border-t border-[#e9eaeb] overflow-hidden">
            <div class="max-w-[1240px] mx-auto px-4 sm:px-6 md:px-12"
                 x-data="{
                    cards: [
                        { title: 'Program IDN Mengajar Goes to Thailand.', date: '6-9 Juli 2026', image: 'assets/program/ngajar/ngajar-2.avif' },
                        { title: 'Program IDN Mengajar Goes to Belanda.', date: '3-12 Agustus 2025', image: 'assets/program/ngajar/ngajar-1.avif' },
                        { title: 'Program IDN Mengajar Goes to Malaysia.', date: '10-16 November 2024', image: 'assets/program/ngajar/ngajar-3.avif' },
                        { title: 'Program IDN Mengajar Goes to Egypt/Mesir.', date: '15 November 2024', image: 'assets/program/ngajar/ngajar-4.avif' },
                        { title: 'Program IDN Mengajar Goes to Turkey.', date: '20-28 September 2026', image: 'assets/program/ngajar/ngajar-5.avif' },
                        { title: 'Program IDN Mengajar Goes to Filipina.', date: '27-28 November 2024', image: 'assets/program/ngajar/ngajar-6.avif' }
                    ],
                    displayCards: [],
                    currentIndex: 6,
                    isTransitioning: true,
                    cardsToShow: 3,
                    touchStartX: 0,
                    touchEndX: 0,

                    init() {
                        this.displayCards = [...this.cards, ...this.cards, ...this.cards];
                        this.updateCardsToShow();
                        window.addEventListener('resize', () => this.updateCardsToShow());
                    },

                    updateCardsToShow() {
                        const w = window.innerWidth;
                        if (w < 640) {
                            this.cardsToShow = 1;
                        } else if (w < 1024) {
                            this.cardsToShow = 2;
                        } else {
                            this.cardsToShow = 3;
                        }
                    },

                    get activeIndex() {
                        return (this.currentIndex % this.cards.length + this.cards.length) % this.cards.length;
                    },

                    getTranslateX() {
                        const gap = this.cardsToShow === 1 ? 16 : 24;
                        return `translateX(calc(-${this.currentIndex} * (100% + ${gap}px) / ${this.cardsToShow}))`;
                    },

                    getCardWidthStyle() {
                        const gap = this.cardsToShow === 1 ? 16 : 24;
                        if (this.cardsToShow === 1) {
                            return 'width: 100%;';
                        }
                        return `width: calc((100% - ${(this.cardsToShow - 1) * gap}px) / ${this.cardsToShow});`;
                    },

                    next() {
                        this.isTransitioning = true;
                        this.currentIndex++;
                    },

                    prev() {
                        this.isTransitioning = true;
                        this.currentIndex--;
                    },

                    goTo(index) {
                        this.isTransitioning = true;
                        this.currentIndex = this.cards.length + index;
                    },

                    handleTransitionEnd(e) {
                        if (e && e.target !== e.currentTarget) return;
                        const total = this.cards.length;
                        if (this.currentIndex >= total * 2) {
                            this.isTransitioning = false;
                            this.currentIndex -= total;
                        } else if (this.currentIndex < total) {
                            this.isTransitioning = false;
                            this.currentIndex += total;
                        }
                    },

                    handleTouchStart(e) {
                        this.touchStartX = e.changedTouches[0].screenX;
                    },

                    handleTouchEnd(e) {
                        this.touchEndX = e.changedTouches[0].screenX;
                        if (this.touchStartX - this.touchEndX > 40) {
                            this.next();
                        } else if (this.touchEndX - this.touchStartX > 40) {
                            this.prev();
                        }
                    }
                 }">
                
                <!-- Section Header -->
                <div class="text-center max-w-3xl mx-auto mb-10 sm:mb-14 space-y-3 relative">
                    <h2 class="text-2xl sm:text-3xl lg:text-[36px] font-bold text-[#0b0d12] tracking-tight font-['Funnel_Display',sans-serif]">
                        Mengajar Sampai ke <span class="text-[#0c61cf]">Luar Negara</span>
                    </h2>
                    <p class="text-[#717680] text-sm md:text-base leading-relaxed">
                        Program IDN Mengajar tidak hanya di sekolah ataupun universitas di Indonesia saja, namun juga sudah sampai ke dunia.
                    </p>
                </div>

                <!-- Slider Outer Container with Flex Layout (Buttons outside cards) -->
                <div class="w-full flex items-center justify-between gap-3 sm:gap-6">
                    
                    <!-- Left Nav Button (Prev) - Outside track on left -->
                    <button @click="prev()" 
                            type="button" 
                            class="shrink-0 z-30 w-11 h-11 sm:w-12 sm:h-12 rounded-full bg-[#0c61cf] text-white flex items-center justify-center shadow-[0px_4px_14px_rgba(12,97,207,0.35)] hover:bg-[#094fa5] hover:scale-110 active:scale-95 transition-all duration-200 focus:outline-none cursor-pointer"
                            aria-label="Previous Slide">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </button>

                    <!-- Cards Track Container (flex-1 overflow-hidden) -->
                    <div class="flex-1 overflow-hidden py-4 px-1"
                         @touchstart="handleTouchStart($event)"
                         @touchend="handleTouchEnd($event)">
                        
                        <div class="flex"
                             :class="cardsToShow === 1 ? 'gap-4' : 'gap-6'"
                             :style="`transform: ${getTranslateX()}; transition: ${isTransitioning ? 'transform 500ms ease-out' : 'none'};`"
                             @transitionend="handleTransitionEnd($event)"
                             style="will-change: transform;">
                            
                            <template x-for="(card, index) in displayCards" :key="index">
                                <!-- Card Item (3 cards desktop, 2 cards tablet, 1 card mobile) -->
                                <div class="shrink-0 bg-white rounded-[20px] p-4 sm:p-5 border border-slate-100 shadow-[0px_4px_20px_rgba(0,0,0,0.04)] hover:shadow-lg transition-all duration-300 flex flex-col justify-between group"
                                     :style="getCardWidthStyle()">
                                    
                                    <!-- Card Image Container -->
                                    <div class="w-full h-[200px] sm:h-[220px] rounded-[16px] bg-[#e9eaeb] border border-slate-200/60 relative overflow-hidden group-hover:border-[#0c61cf]/30 transition-colors duration-300 flex items-center justify-center">
                                        <template x-if="card.image">
                                            <img :src="'/' + card.image" 
                                                 :alt="card.title" 
                                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                        </template>
                                        <template x-if="!card.image">
                                            <div class="w-12 h-12 rounded-full bg-white/60 border border-slate-200 flex items-center justify-center text-slate-400 group-hover:scale-110 transition-transform duration-300">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                </svg>
                                            </div>
                                        </template>
                                    </div>

                                    <!-- Card Content -->
                                    <div class="mt-4 flex flex-col justify-between flex-1">
                                        <h3 class="font-bold text-[#181d27] text-base sm:text-lg leading-snug font-['Geist',sans-serif] group-hover:text-[#0c61cf] transition-colors duration-200"
                                            x-text="card.title">
                                        </h3>
                                        
                                        <p class="text-[#717680] text-xs sm:text-sm font-normal mt-3 flex items-center gap-1.5">
                                            <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                            </svg>
                                            <span x-text="card.date"></span>
                                        </p>
                                    </div>

                                </div>
                            </template>

                        </div>

                    </div>

                    <!-- Right Nav Button (Next) - Outside track on right -->
                    <button @click="next()" 
                            type="button" 
                            class="shrink-0 z-30 w-11 h-11 sm:w-12 sm:h-12 rounded-full bg-[#0c61cf] text-white flex items-center justify-center shadow-[0px_4px_14px_rgba(12,97,207,0.35)] hover:bg-[#094fa5] hover:scale-110 active:scale-95 transition-all duration-200 focus:outline-none cursor-pointer"
                            aria-label="Next Slide">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>

                </div>

                <!-- Dot Pagination Controls -->
                <div class="flex items-center justify-center gap-2 mt-8 sm:mt-10">
                    <template x-for="(card, i) in cards" :key="i">
                        <button @click="goTo(i)" 
                                type="button" 
                                class="transition-all duration-300 focus:outline-none cursor-pointer"
                                :class="activeIndex === i ? 'w-7 h-2.5 bg-[#0c61cf] rounded-full' : 'w-2.5 h-2.5 bg-[#d5d7da] hover:bg-slate-400 rounded-full'"
                                :aria-label="`Go to slide ${i + 1}`">
                        </button>
                    </template>
                </div>

            </div>
        </section>

        <!-- Section 3: Tujuan Program IDN Mengajar -->
        <section class="w-full py-12 lg:py-20 bg-[#fafafa] border-t border-[#e9eaeb]">
            <div class="max-w-[1120px] mx-auto px-6 md:px-8">
                
                <!-- Section Header -->
                <div class="text-center max-w-2xl mx-auto mb-12 sm:mb-16">
                    <h2 class="text-2xl sm:text-3xl lg:text-[36px] font-bold text-[#0b0d12] tracking-tight font-['Funnel_Display',sans-serif]">
                        Tujuan Program <span class="text-[#0c61cf]">IDN Mengajar</span>
                    </h2>
                </div>

                <!-- 4 Cards Grid (2x2 on desktop) -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                    
                    <!-- Card 01 -->
                    <div class="bg-white p-6 sm:p-8 rounded-[24px] shadow-[0px_4px_20px_rgba(0,0,0,0.03)] hover:shadow-xl transition-all duration-300 space-y-3">
                        <span class="text-3xl sm:text-4xl font-extrabold block font-['Funnel_Display',sans-serif]" style="color: rgba(12, 97, 207, 0.25);">01</span>
                        <h3 class="text-lg sm:text-xl font-bold text-[#181d27] font-['Funnel_Display',sans-serif]">
                            Meningkatkan Kepedulian Sosial
                        </h3>
                        <p class="text-[#717680] text-sm leading-relaxed font-normal">
                            Mendorong santri untuk turun langsung ke masyarakat dan memahami pentingnya berbagi ilmu yang telah dimiliki sebagai bentuk dakwah dan kontribusi sosial.
                        </p>
                    </div>

                    <!-- Card 02 -->
                    <div class="bg-white p-6 sm:p-8 rounded-[24px] shadow-[0px_4px_20px_rgba(0,0,0,0.03)] hover:shadow-xl transition-all duration-300 space-y-3">
                        <span class="text-3xl sm:text-4xl font-extrabold block font-['Funnel_Display',sans-serif]" style="color: rgba(12, 97, 207, 0.25);">02</span>
                        <h3 class="text-lg sm:text-xl font-bold text-[#181d27] font-['Funnel_Display',sans-serif]">
                            Melatih Kemampuan Mengajar & Komunikasi
                        </h3>
                        <p class="text-[#717680] text-sm leading-relaxed font-normal">
                            Santri dilatih untuk menyampaikan materi dengan cara yang menarik, jelas, dan mudah dipahami, sebagai bekal untuk menjadi mentor atau pemimpin di masa depan.
                        </p>
                    </div>

                    <!-- Card 03 -->
                    <div class="bg-white p-6 sm:p-8 rounded-[24px] shadow-[0px_4px_20px_rgba(0,0,0,0.03)] hover:shadow-xl transition-all duration-300 space-y-3">
                        <span class="text-3xl sm:text-4xl font-extrabold block font-['Funnel_Display',sans-serif]" style="color: rgba(12, 97, 207, 0.25);">03</span>
                        <h3 class="text-lg sm:text-xl font-bold text-[#181d27] font-['Funnel_Display',sans-serif]">
                            Menerapkan Ilmu Secara Nyata
                        </h3>
                        <p class="text-[#717680] text-sm leading-relaxed font-normal">
                            Ilmu yang dipelajari di IDN seperti desain grafis, UI/UX, pemrograman, dan digital marketing diterapkan secara langsung dalam pembelajaran di luar lingkungan sekolah.
                        </p>
                    </div>

                    <!-- Card 04 -->
                    <div class="bg-white p-6 sm:p-8 rounded-[24px] shadow-[0px_4px_20px_rgba(0,0,0,0.03)] hover:shadow-xl transition-all duration-300 space-y-3">
                        <span class="text-3xl sm:text-4xl font-extrabold block font-['Funnel_Display',sans-serif]" style="color: rgba(12, 97, 207, 0.25);">04</span>
                        <h3 class="text-lg sm:text-xl font-bold text-[#181d27] font-['Funnel_Display',sans-serif]">
                            Membangun Relasi & Kolaborasi
                        </h3>
                        <p class="text-[#717680] text-sm leading-relaxed font-normal">
                            Melalui kegiatan ini, IDN menjalin hubungan baik dengan sekolah-sekolah mitra serta memperluas jaringan pembelajaran Islami berbasis teknologi.
                        </p>
                    </div>

                </div>

            </div>
        </section>

        <!-- Section 4: Manfaat Dari IDN Mengajar -->
        <section class="w-full py-12 lg:py-20 bg-white border-t border-[#e9eaeb]">
            <div class="max-w-[1120px] mx-auto px-6 md:px-8">
                
                <!-- Section Header -->
                <div class="text-center max-w-2xl mx-auto mb-12 sm:mb-16">
                    <h2 class="text-2xl sm:text-3xl lg:text-[36px] font-bold text-[#0b0d12] tracking-tight font-['Funnel_Display',sans-serif]">
                        Manfaat Dari <span class="text-[#0c61cf]">IDN Mengajar</span>
                    </h2>
                </div>

                <!-- 3 Columns Benefit Cards -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
                    
                    <!-- Card 1 -->
                    <div class="bg-[#fafafa] p-6 lg:p-8 rounded-[24px] border border-[#e9eaeb] hover:border-[#0c61cf] transition-all duration-300 space-y-4 hover:shadow-lg">
                        <div class="w-12 h-12 rounded-2xl bg-[#0c61cf]/10 flex items-center justify-center text-[#0c61cf]">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold text-[#181d27] font-['Funnel_Display',sans-serif]">
                            Bagi Santri IDN
                        </h3>
                        <p class="text-[#717680] text-sm leading-relaxed">
                            Meningkatkan rasa percaya diri, memperluas pengalaman mengajar, serta mengasah soft skills kepemimpinan dan komunikasi.
                        </p>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-[#fafafa] p-6 lg:p-8 rounded-[24px] border border-[#e9eaeb] hover:border-[#0c61cf] transition-all duration-300 space-y-4 hover:shadow-lg">
                        <div class="w-12 h-12 rounded-2xl bg-[#0c61cf]/10 flex items-center justify-center text-[#0c61cf]">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold text-[#181d27] font-['Funnel_Display',sans-serif]">
                            Bagi Sekolah Mitra
                        </h3>
                        <p class="text-[#717680] text-sm leading-relaxed">
                            Mendapatkan wawasan baru mengenai perkembangan teknologi, bahasa, serta metode pembelajaran modern dari santri IDN.
                        </p>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-[#fafafa] p-6 lg:p-8 rounded-[24px] border border-[#e9eaeb] hover:border-[#0c61cf] transition-all duration-300 space-y-4 hover:shadow-lg">
                        <div class="w-12 h-12 rounded-2xl bg-[#0c61cf]/10 flex items-center justify-center text-[#0c61cf]">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold text-[#181d27] font-['Funnel_Display',sans-serif]">
                            Bagi Masyarakat Umum
                        </h3>
                        <p class="text-[#717680] text-sm leading-relaxed">
                            Terciptanya ekosistem pendidikan yang saling menginspirasi dan mendukung pemerataan pengetahuan di berbagai daerah.
                        </p>
                    </div>

                </div>

            </div>
        </section>

        <!-- Section 5: Nilai & Filosofi yang Dibawa (Matching Backpacker Polaroid Style) -->
        <section class="w-full bg-[#f5f5f5] py-16 lg:py-[110px] border-t border-[#e9eaeb]">
            <div class="max-w-[1440px] mx-auto px-6 md:px-12 lg:px-[160px] flex flex-col lg:flex-row items-center lg:items-start justify-center gap-[40px] lg:gap-[56px] relative">
                
                <!-- Left Stacked Image Collage -->
                <div class="relative shrink-0 w-full max-w-[455px] h-[260px] sm:h-[330px] my-6 lg:my-0 group/collage">
                    
                    <!-- Main Image Container -->
                    <div class="w-full h-full border-8 border-white/30 border-solid rounded-[18px] overflow-hidden shadow-xl bg-slate-200 relative transition-all duration-500 ease-out group-hover/collage:shadow-2xl group-hover/collage:border-white/50 cursor-pointer">
                        <img src="{{ asset('assets/program/ngajar/ngajar-7.avif') }}" 
                             alt="Nilai & Filosofi IDN Mengajar" 
                             class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover/collage:scale-105"
                             onerror="this.src='{{ asset('assets/program/backpacker/backpacker-tiga.avif') }}'">
                    </div>

                    <!-- Top Left Overlay Polaroid -->
                    <div class="absolute -top-[20px] -left-[15px] sm:-top-[30px] sm:-left-[30px] z-20 transition-all duration-300 ease-out hover:scale-110 hover:-rotate-12 hover:-translate-y-2 hover:z-40 cursor-pointer">
                        <div class="-rotate-5 shadow-2xl transition-all duration-300">
                            <div class="w-[130px] sm:w-[160px] h-[80px] sm:h-[100px] rounded-[8px] overflow-hidden bg-white shadow-lg border border-white/80 group/mini1">
                                <img src="{{ asset('assets/program/ngajar/mini-ngajar2.avif') }}" 
                                     alt="Dokumentasi Mengajar 1" 
                                     class="w-full h-full object-cover transition-transform duration-500 ease-out group-hover/mini1:scale-110">
                            </div>
                        </div>
                    </div>

                    <!-- Bottom Right Overlay Polaroid -->
                    <div class="absolute -bottom-[20px] -right-[15px] sm:-bottom-[30px] sm:-right-[30px] z-20 transition-all duration-300 ease-out hover:scale-110 hover:rotate-12 hover:translate-y-2 hover:z-40 cursor-pointer">
                        <div class="rotate-5 shadow-2xl transition-all duration-300">
                            <div class="w-[130px] sm:w-[160px] h-[80px] sm:h-[100px] rounded-[8px] overflow-hidden bg-white shadow-lg border border-white/80 group/mini2">
                                <img src="{{ asset('assets/program/ngajar/mini-ngajar1.avif') }}" 
                                     alt="Dokumentasi Mengajar 2" 
                                     class="w-full h-full object-cover transition-transform duration-500 ease-out group-hover/mini2:scale-110">
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Right Text Info -->
                <div class="w-full max-w-[609px] space-y-[24px] text-left">
                    <h2 class="font-bold text-2xl sm:text-3xl lg:text-[32px] leading-tight lg:leading-[42px] text-[#181d27] font-['Geist',sans-serif]">
                        Nilai & Filosofi yang Dibawa
                    </h2>
                    
                    <div class="text-[#717680] text-base leading-[24px] space-y-4 font-normal">
                        <p class="text-[#181d27] font-normal">
                            Program IDN Mengajar berpegang pada prinsip <span class="text-[#0c61cf] font-semibold">"Ilmu yang bermanfaat adalah ilmu yang dibagikan."</span>
                        </p>

                        <p>
                            Setiap santri didorong untuk tidak hanya menjadi penerima ilmu, tetapi juga menjadi pembawa manfaat bagi lingkungan sekitarnya.
                        </p>

                        <p class="font-medium text-[#181d27]">
                            Dengan nilai-nilai dasar yang ditanamkan:
                        </p>

                        <ul class="space-y-2 pl-4">
                            <li class="flex items-start gap-2">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#0c61cf] mt-2 shrink-0"></span>
                                <span>Keikhlasan dalam berbagi ilmu tanpa mengharapkan pamrih.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#0c61cf] mt-2 shrink-0"></span>
                                <span>Kepedulian terhadap pemerataan pendidikan berkualitas.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#0c61cf] mt-2 shrink-0"></span>
                                <span>Tanggung jawab atas ilmu yang telah dipelajari.</span>
                            </li>
                        </ul>
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
