@props(['active' => null, 'activeSub' => null])

@php
    // Detect current route / path
    $currentPath = request()->path();
    $currentRouteName = request()->route() ? request()->route()->getName() : '';

    // Auto-detect main active item if not explicitly passed
    $isBeranda = $active === 'beranda' || ($active === null && (request()->is('/') || $currentPath === '' || $currentPath === '/'));
    $isPpdb = $active === 'ppdb' || ($active === null && request()->is('ppdb*'));
    $isTentangKami = $active === 'tentang-kami' || ($active === null && request()->is('tentang-kami*'));
    $isCareerCenter = $active === 'career-center' || ($active === null && request()->is('career-center*'));
    $isArtikel = $active === 'artikel' || ($active === null && (request()->is('artikel*') || $currentRouteName === 'articles.show'));
    $isKontak = $active === 'kontak' || ($active === null && request()->is('kontak*'));

    // Program dropdown sub-items definition (Figma specs: PKL, IDN Mengajar, Ekstrakurikuler, Edurace, LDKS, Live In, Business Survival, Backpacker, IT Camp, IDN Bersyukur)
    $programItems = [
        ['name' => 'PKL', 'slug' => 'pkl', 'url' => '/program/pkl'],
        ['name' => 'IDN Mengajar', 'slug' => 'idn-mengajar', 'url' => '/program/idn-mengajar'],
        ['name' => 'Ekstrakurikuler', 'slug' => 'ekstrakurikuler', 'url' => '/program/ekstrakurikuler'],
        ['name' => 'Edurace', 'slug' => 'edurace', 'url' => '/program/edurace'],
        ['name' => 'LDKS', 'slug' => 'ldks', 'url' => '/program/ldks'],
        ['name' => 'Live In', 'slug' => 'live-in', 'url' => '/program/live-in'],
        ['name' => 'Business Survival', 'slug' => 'business-survival', 'url' => '/program/business-survival'],
        ['name' => 'Backpacker', 'slug' => 'backpacker', 'url' => '/program/backpacker'],
        ['name' => 'IT Camp', 'slug' => 'it-camp', 'url' => '/program/it-camp'],
        ['name' => 'IDN Bersyukur', 'slug' => 'idn-bersyukur', 'url' => '/program/idn-bersyukur'],
    ];

    // Determine active sub-item
    $currentActiveSub = $activeSub;
    if ($currentActiveSub === null && request()->is('program/*')) {
        $currentActiveSub = request()->segment(2);
    }

    // Determine if parent "Program" menu is active
    $isProgram = $active === 'program' || $currentActiveSub !== null || ($active === null && request()->is('program*'));
@endphp

<!-- FIXED TOP BAR CONTAINER WITH BACKDROP BLUR -->
<div x-data="{ mobileOpen: false, mobileProgramOpen: false }" class="fixed top-0 left-0 right-0 z-50 flex flex-col items-center py-4 px-4 bg-white/75 backdrop-blur-md max-w-full">
    
    <!-- NAVBAR CARD (Figma Spec: 1120px width, 60px height, rounded-full, drop-shadow 0px 4px 15px rgba(0,0,0,0.04)) -->
    <div class="w-full max-w-[1120px] bg-white h-[60px] flex items-center justify-between px-4 sm:px-6 rounded-full shadow-[0px_4px_15px_rgba(0,0,0,0.05)] border border-slate-100 relative">
        
        <!-- LOGO BRAND -->
        <a href="/" class="flex items-center shrink-0">
            <img src="{{ asset('assets/logo_idn.png') }}" alt="Logo IDN Boarding School" class="h-7 sm:h-8 w-auto block">
        </a>

        <!-- NAVIGATION MENU (DESKTOP) -->
        <nav class="hidden lg:flex items-center gap-8">
            
            <!-- Beranda -->
            <a href="/" 
               class="text-[16px] leading-[24px] font-semibold transition-colors duration-150 {{ $isBeranda ? 'text-[#0c61cf]' : 'text-[#717680] hover:text-[#0c61cf]' }}">
                Beranda
            </a>

            <!-- PPDB -->
            <a href="/ppdb" 
               class="text-[16px] leading-[24px] font-semibold transition-colors duration-150 {{ $isPpdb ? 'text-[#0c61cf]' : 'text-[#717680] hover:text-[#0c61cf]' }}">
                PPDB
            </a>

            <!-- Tentang Kami -->
            <a href="/tentang-kami" 
               class="text-[16px] leading-[24px] font-semibold transition-colors duration-150 {{ $isTentangKami ? 'text-[#0c61cf]' : 'text-[#717680] hover:text-[#0c61cf]' }}">
                Tentang Kami
            </a>

            <!-- Program (With Dropdown Menu) -->
            <div class="relative group">
                <button type="button" 
                        class="flex items-center gap-1.5 text-[16px] leading-[24px] font-semibold transition-colors duration-150 cursor-pointer py-2 {{ $isProgram ? 'text-[#0c61cf]' : 'text-[#717680] hover:text-[#0c61cf]' }}">
                    <span>Program</span>
                    <svg class="w-4 h-4 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                <!-- PROGRAM DROPDOWN MENU CARD (Figma Spec: 200px width, rounded-2xl, shadow 0px 4px 25px rgba(0,0,0,0.15)) -->
                <div class="absolute top-full left-1/2 -translate-x-1/2 pt-2 w-[200px] hidden group-hover:block transition-all duration-200 z-50">
                    <div class="bg-white rounded-[16px] shadow-[0px_4px_25px_0px_rgba(0,0,0,0.15)] overflow-hidden border border-slate-100 py-1.5">
                        @foreach($programItems as $item)
                            @php
                                $isSubActive = ($currentActiveSub === $item['slug']);
                            @endphp
                            <a href="{{ $item['url'] }}" 
                               class="px-[20px] py-[12px] text-[14px] leading-[20px] text-[#181d27] block transition-all duration-150 {{ $isSubActive ? 'bg-white border-l-2 border-[#0c61cf] font-semibold hover:bg-[#f5f5f5]' : 'bg-white border-l-2 border-transparent font-medium hover:bg-[#f5f5f5]' }}">
                                {{ $item['name'] }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Career Center -->
            <a href="/career-center" 
               class="text-[16px] leading-[24px] font-semibold transition-colors duration-150 {{ $isCareerCenter ? 'text-[#0c61cf]' : 'text-[#717680] hover:text-[#0c61cf]' }}">
                Career Center
            </a>

            <!-- Artikel -->
            <a href="/artikel" 
               class="text-[16px] leading-[24px] font-semibold transition-colors duration-150 {{ $isArtikel ? 'text-[#0c61cf]' : 'text-[#717680] hover:text-[#0c61cf]' }}">
                Artikel
            </a>

            <!-- Kontak -->
            <a href="/kontak" 
               class="text-[16px] leading-[24px] font-semibold transition-colors duration-150 {{ $isKontak ? 'text-[#0c61cf]' : 'text-[#717680] hover:text-[#0c61cf]' }}">
                Kontak
            </a>
        </nav>

        <!-- CTA BUTTON (DESKTOP) -->
        <a href="/ppdb" 
           class="hidden lg:inline-flex bg-[#0c61cf] text-white px-[16px] py-[10px] rounded-full text-[14px] leading-[20px] font-semibold shadow-[0px_2px_6px_rgba(12,97,207,0.32)] transition-all duration-200 hover:bg-[#094fa5] hover:shadow-md shrink-0">
            Daftar PPDB
        </a>

        <!-- HAMBURGER BUTTON (MOBILE / TABLET) -->
        <button @click="mobileOpen = !mobileOpen" 
                type="button" 
                class="lg:hidden p-2 rounded-lg text-[#181d27] hover:text-[#0c61cf] hover:bg-slate-50 transition-colors focus:outline-none"
                aria-label="Toggle navigation menu">
            <svg x-show="!mobileOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
            <svg x-show="mobileOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" x-cloak>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

    </div>

    <!-- MOBILE / TABLET DROPDOWN CARD (Matching Image 2 Spec 100% Precisely) -->
    <div x-show="mobileOpen" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 transform -translate-y-2"
         x-transition:enter-end="opacity-100 transform translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 transform translate-y-0"
         x-transition:leave-end="opacity-0 transform -translate-y-2"
         class="w-full max-w-[1120px] bg-white rounded-[24px] shadow-[0px_12px_40px_rgba(0,0,0,0.12)] border border-slate-100 p-6 flex flex-col gap-4 mt-3 z-50 lg:hidden"
         x-cloak>
        
        <div class="flex flex-col gap-3.5">
            <!-- Beranda -->
            <a href="/" 
               class="text-[16px] font-semibold py-1 transition-colors {{ $isBeranda ? 'text-[#0c61cf]' : 'text-[#414651] hover:text-[#0c61cf]' }}">
                Beranda
            </a>

            <!-- PPDB -->
            <a href="/ppdb" 
               class="text-[16px] font-semibold py-1 transition-colors {{ $isPpdb ? 'text-[#0c61cf]' : 'text-[#414651] hover:text-[#0c61cf]' }}">
                PPDB
            </a>

            <!-- Tentang Kami -->
            <a href="/tentang-kami" 
               class="text-[16px] font-semibold py-1 transition-colors {{ $isTentangKami ? 'text-[#0c61cf]' : 'text-[#414651] hover:text-[#0c61cf]' }}">
                Tentang Kami
            </a>

            <!-- Program -->
            <div class="flex flex-col">
                <button @click="mobileProgramOpen = !mobileProgramOpen" 
                        type="button" 
                        class="flex items-center justify-between w-full text-[16px] font-semibold py-1 text-left transition-colors {{ $isProgram ? 'text-[#0c61cf]' : 'text-[#414651] hover:text-[#0c61cf]' }}">
                    <span>Program</span>
                    <svg class="w-4 h-4 text-[#181d27] transition-transform duration-200" :class="mobileProgramOpen ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <!-- Program Sub-items accordion -->
                <div x-show="mobileProgramOpen" x-collapse class="pl-4 flex flex-col gap-2 pt-2 pb-1 border-l-2 border-[#0c61cf]/30 ml-2 mt-1">
                    @foreach($programItems as $item)
                        @php
                            $isSubActive = ($currentActiveSub === $item['slug']);
                        @endphp
                        <a href="{{ $item['url'] }}" 
                           class="text-[14px] font-medium py-1 transition-colors {{ $isSubActive ? 'text-[#0c61cf] font-semibold' : 'text-[#717680] hover:text-[#0c61cf]' }}">
                            {{ $item['name'] }}
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- Career Center -->
            <a href="/career-center" 
               class="text-[16px] font-semibold py-1 transition-colors {{ $isCareerCenter ? 'text-[#0c61cf]' : 'text-[#414651] hover:text-[#0c61cf]' }}">
                Career Center
            </a>

            <!-- Artikel -->
            <a href="/artikel/idn-relawan-dan-markaz-bersama-as-sunnah-salurkan-bantuan-bencana-banjir-di-bali" 
               class="text-[16px] font-semibold py-1 transition-colors {{ $isArtikel ? 'text-[#0c61cf]' : 'text-[#414651] hover:text-[#0c61cf]' }}">
                Artikel
            </a>

            <!-- Kontak -->
            <a href="/kontak" 
               class="text-[16px] font-semibold py-1 transition-colors {{ $isKontak ? 'text-[#0c61cf]' : 'text-[#414651] hover:text-[#0c61cf]' }}">
                Kontak
            </a>

            <!-- IT Camp -->
            <a href="/program/it-camp" 
               class="text-[16px] font-semibold py-1 transition-colors {{ $currentActiveSub === 'it-camp' ? 'text-[#0c61cf]' : 'text-[#414651] hover:text-[#0c61cf]' }}">
                IT Camp
            </a>

            <!-- LDKS -->
            <a href="/program/ldks" 
               class="text-[16px] font-semibold py-1 transition-colors {{ $currentActiveSub === 'ldks' ? 'text-[#0c61cf]' : 'text-[#414651] hover:text-[#0c61cf]' }}">
                LDKS
            </a>

            <!-- IDN Bersyukur -->
            <a href="/program/idn-bersyukur" 
               class="text-[16px] font-semibold py-1 transition-colors {{ $currentActiveSub === 'idn-bersyukur' ? 'text-[#0c61cf]' : 'text-[#414651] hover:text-[#0c61cf]' }}">
                IDN Bersyukur
            </a>
        </div>

        <div class="h-px w-full bg-[#e9eaeb] my-1"></div>

        <!-- FULL-WIDTH MOBILE CTA BUTTON (Matching Image 2 Spec) -->
        <a href="/ppdb" 
           class="w-full bg-[#0c61cf] text-white py-3.5 rounded-full font-semibold text-[16px] flex items-center justify-center shadow-[0px_4px_15px_rgba(12,97,207,0.32)] transition-all hover:bg-[#094fa5]">
            Daftar PPDB
        </a>

    </div>

</div>
