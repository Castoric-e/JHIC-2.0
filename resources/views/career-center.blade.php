<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <x-seo-head 
        title="Career Center - IDN Boarding School"
        description="Pusat Karir & Alumni IDN Boarding School. Temukan rekomendasi lowongan kerja, mitra industri IT (TKJ, RPL, UI/UX), dan penyaluran kerja lulusan."
        keywords="Career Center IDN, Lowongan Kerja IT, Penyaluran Kerja Lulusan IDN, Karir Alumni IDN"
    />

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
<body class="bg-[#fafafa] text-[#181d27] font-['Geist',sans-serif] antialiased min-h-screen flex flex-col justify-between selection:bg-[#0c61cf] selection:text-white"
      x-data="careerCenterData()">

    <!-- Header Navigation -->
    <x-navbar active="career-center" />

    <main class="flex-1 w-full pt-[106px]">
        <!-- Hero Header Section -->
        <section class="w-full bg-[#fafafa] py-12 lg:py-[72px] border-b border-[#e9eaeb]">
            <div class="max-w-[1440px] mx-auto px-6 md:px-12 lg:px-[160px] text-center space-y-4">
                <span class="text-[#717680] text-sm md:text-base font-normal tracking-wide">Career Center</span>
                
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-[56px] font-semibold text-[#0b0d12] tracking-[-2.24px] leading-tight lg:leading-[68px] font-['Funnel_Display',sans-serif] max-w-3xl mx-auto">
                    Mulai perjalanan baru<br>dalam <span class="text-[#0c61cf]">karier anda.</span>
                </h1>
                
                <p class="text-[#717680] text-sm md:text-base leading-relaxed font-normal max-w-[674px] mx-auto">
                    Temukan ribuan lowongan kerja impian berbasis jurusan TKJ, RPL, dan DKV. Dapatkan rekomendasi karir terbaik dan kembangkan jaringan profesional Anda bersama IDN.
                </p>

                <!-- Search & Major Filter Bar -->
                <div class="pt-6 max-w-[674px] mx-auto">
                    <div class="bg-white p-2 md:p-2.5 rounded-full border border-[#e9eaeb] shadow-lg flex flex-col sm:flex-row items-center gap-2 relative">
                        
                        <!-- Search Keyword Input -->
                        <div class="flex-1 flex items-center gap-2 px-4 w-full">
                            <svg class="w-5 h-5 text-[#717680] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                            <input type="text" 
                                   x-model="searchQuery" 
                                   placeholder="Pilih posisi/pekerjaan..." 
                                   class="w-full bg-transparent text-sm md:text-base text-[#181d27] placeholder-[#717680] focus:outline-none">
                        </div>

                        <!-- Divider -->
                        <div class="hidden sm:block w-px h-8 bg-[#e9eaeb]"></div>

                        <!-- Jurusan Selection Dropdown (Matching Gambar 2 Spec) -->
                        <div class="relative w-full sm:w-auto" @click.outside="majorDropdownOpen = false">
                            <button @click="majorDropdownOpen = !majorDropdownOpen" 
                                    type="button" 
                                    class="w-full sm:w-auto px-4 py-2.5 rounded-full text-sm font-medium text-[#414651] bg-[#f8fafc] hover:bg-[#f1f5f9] flex items-center justify-between gap-3 border border-[#e2e8f0] transition-colors">
                                <span x-text="selectedMajor === 'Semua' ? 'Pilih Jurusan' : selectedMajor" class="font-semibold text-[#0c61cf]"></span>
                                <svg class="w-4 h-4 text-[#717680] transition-transform duration-200" :class="{'rotate-180': majorDropdownOpen}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>

                            <!-- Dropdown Popup Menu (Spec Gambar 2) -->
                            <div x-show="majorDropdownOpen" 
                                 x-transition:enter="transition ease-out duration-150"
                                 x-transition:enter-start="opacity-0 scale-95 -translate-y-2"
                                 x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                                 x-transition:leave="transition ease-in duration-100"
                                 x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                                 x-transition:leave-end="opacity-0 scale-95 -translate-y-2"
                                 x-cloak
                                 class="absolute right-0 mt-2 w-48 bg-white rounded-2xl shadow-xl border border-[#e9eaeb] py-2 z-50 text-left overflow-hidden">
                                
                                <!-- Dropdown Header / All -->
                                <div @click="selectMajor('Semua')" 
                                     :class="selectedMajor === 'Semua' ? 'border-l-4 border-[#0c61cf] bg-[#f8fafc] font-semibold text-[#0c61cf]' : 'text-[#414651] hover:bg-[#f8fafc]'"
                                     class="px-4 py-3 text-sm cursor-pointer transition-colors flex items-center justify-between">
                                    <span>Semua Jurusan</span>
                                    <template x-if="selectedMajor === 'Semua'">
                                        <svg class="w-4 h-4 text-[#0c61cf]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    </template>
                                </div>

                                <!-- TKJ -->
                                <div @click="selectMajor('TKJ')" 
                                     :class="selectedMajor === 'TKJ' ? 'border-l-4 border-[#0c61cf] bg-[#f8fafc] font-semibold text-[#0c61cf]' : 'text-[#414651] hover:bg-[#f8fafc]'"
                                     class="px-4 py-3 text-sm cursor-pointer transition-colors flex items-center justify-between">
                                    <span>TKJ</span>
                                    <template x-if="selectedMajor === 'TKJ'">
                                        <svg class="w-4 h-4 text-[#0c61cf]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    </template>
                                </div>

                                <!-- RPL -->
                                <div @click="selectMajor('RPL')" 
                                     :class="selectedMajor === 'RPL' ? 'border-l-4 border-[#0c61cf] bg-[#f8fafc] font-semibold text-[#0c61cf]' : 'text-[#414651] hover:bg-[#f8fafc]'"
                                     class="px-4 py-3 text-sm cursor-pointer transition-colors flex items-center justify-between">
                                    <span>RPL</span>
                                    <template x-if="selectedMajor === 'RPL'">
                                        <svg class="w-4 h-4 text-[#0c61cf]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    </template>
                                </div>

                                <!-- DKV -->
                                <div @click="selectMajor('DKV')" 
                                     :class="selectedMajor === 'DKV' ? 'border-l-4 border-[#0c61cf] bg-[#f8fafc] font-semibold text-[#0c61cf]' : 'text-[#414651] hover:bg-[#f8fafc]'"
                                     class="px-4 py-3 text-sm cursor-pointer transition-colors flex items-center justify-between">
                                    <span>DKV</span>
                                    <template x-if="selectedMajor === 'DKV'">
                                        <svg class="w-4 h-4 text-[#0c61cf]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    </template>
                                </div>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <button type="button" 
                                @click="applySearch()"
                                class="w-full sm:w-auto bg-[#0c61cf] hover:bg-[#0b54b5] text-white px-6 py-3 rounded-full font-semibold text-sm md:text-base transition-colors shadow-md shrink-0">
                            Cari Kerja
                        </button>

                    </div>
                </div>

            </div>
        </section>

        <!-- Main Filtered Content Section -->
        <section class="w-full py-10 md:py-16">
            <div class="max-w-[1440px] mx-auto px-6 md:px-12 lg:px-[160px] grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                
                <!-- Left Sidebar Filters Container -->
                <aside class="lg:col-span-3 bg-white p-6 rounded-[24px] border border-[#e9eaeb] shadow-sm space-y-6 shrink-0 sticky top-28">
                    
                    <div class="flex items-center justify-between pb-3 border-b border-[#e9eaeb]">
                        <h3 class="font-semibold text-lg text-[#181d27]">Filter Pencarian</h3>
                        <button @click="resetFilters()" class="text-xs font-semibold text-[#0c61cf] hover:underline">
                            Reset All
                        </button>
                    </div>

                    <!-- Filter Group 1: Lokasi -->
                    <div class="space-y-3">
                        <div @click="toggleAccordion('location')" class="flex items-center justify-between cursor-pointer group">
                            <span class="font-semibold text-base text-[#181d27]">Lokasi</span>
                            <svg class="w-4 h-4 text-[#717680] transition-transform duration-200" :class="{'rotate-180': accordionOpen.location}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </div>
                        <div x-show="accordionOpen.location" class="space-y-2 pt-1">
                            <template x-for="loc in locationOptions" :key="loc">
                                <label class="flex items-center gap-3 cursor-pointer text-sm text-[#414651] hover:text-[#181d27] select-none">
                                    <input type="checkbox" 
                                           :value="loc" 
                                           x-model="filterLocation" 
                                           @change="onCheckboxChange('filterLocation', loc)"
                                           class="w-4 h-4 rounded border-[#d0d5dd] text-[#0c61cf] focus:ring-[#0c61cf] accent-[#0c61cf]">
                                    <span x-text="loc"></span>
                                </label>
                            </template>
                        </div>
                    </div>

                    <div class="w-full h-px bg-[#e9eaeb]"></div>

                    <!-- Filter Group 2: Lokasi Kerja -->
                    <div class="space-y-3">
                        <div @click="toggleAccordion('workLocation')" class="flex items-center justify-between cursor-pointer group">
                            <span class="font-semibold text-base text-[#181d27]">Lokasi Kerja</span>
                            <svg class="w-4 h-4 text-[#717680] transition-transform duration-200" :class="{'rotate-180': accordionOpen.workLocation}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </div>
                        <div x-show="accordionOpen.workLocation" class="space-y-2 pt-1">
                            <template x-for="wl in workLocationOptions" :key="wl">
                                <label class="flex items-center gap-3 cursor-pointer text-sm text-[#414651] hover:text-[#181d27] select-none">
                                    <input type="checkbox" 
                                           :value="wl" 
                                           x-model="filterWorkLocation" 
                                           @change="onCheckboxChange('filterWorkLocation', wl)"
                                           class="w-4 h-4 rounded border-[#d0d5dd] text-[#0c61cf] focus:ring-[#0c61cf] accent-[#0c61cf]">
                                    <span x-text="wl"></span>
                                </label>
                            </template>
                        </div>
                    </div>

                    <div class="w-full h-px bg-[#e9eaeb]"></div>

                    <!-- Filter Group 3: Tipe Kerja -->
                    <div class="space-y-3">
                        <div @click="toggleAccordion('workType')" class="flex items-center justify-between cursor-pointer group">
                            <span class="font-semibold text-base text-[#181d27]">Tipe Kerja</span>
                            <svg class="w-4 h-4 text-[#717680] transition-transform duration-200" :class="{'rotate-180': accordionOpen.workType}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </div>
                        <div x-show="accordionOpen.workType" class="space-y-2 pt-1">
                            <template x-for="wt in workTypeOptions" :key="wt">
                                <label class="flex items-center gap-3 cursor-pointer text-sm text-[#414651] hover:text-[#181d27] select-none">
                                    <input type="checkbox" 
                                           :value="wt" 
                                           x-model="filterWorkType" 
                                           @change="onCheckboxChange('filterWorkType', wt)"
                                           class="w-4 h-4 rounded border-[#d0d5dd] text-[#0c61cf] focus:ring-[#0c61cf] accent-[#0c61cf]">
                                    <span x-text="wt"></span>
                                </label>
                            </template>
                        </div>
                    </div>

                    <div class="w-full h-px bg-[#e9eaeb]"></div>

                    <!-- Filter Group 4: Waktu Post -->
                    <div class="space-y-3">
                        <div @click="toggleAccordion('postTime')" class="flex items-center justify-between cursor-pointer group">
                            <span class="font-semibold text-base text-[#181d27]">Waktu Post</span>
                            <svg class="w-4 h-4 text-[#717680] transition-transform duration-200" :class="{'rotate-180': accordionOpen.postTime}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </div>
                        <div x-show="accordionOpen.postTime" class="space-y-2 pt-1">
                            <template x-for="pt in postTimeOptions" :key="pt">
                                <label class="flex items-center gap-3 cursor-pointer text-sm text-[#414651] hover:text-[#181d27] select-none">
                                    <input type="checkbox" 
                                           :value="pt" 
                                           x-model="filterPostTime" 
                                           @change="onCheckboxChange('filterPostTime', pt)"
                                           class="w-4 h-4 rounded border-[#d0d5dd] text-[#0c61cf] focus:ring-[#0c61cf] accent-[#0c61cf]">
                                    <span x-text="pt"></span>
                                </label>
                            </template>
                        </div>
                    </div>

                </aside>

                <!-- Right Job Cards Container -->
                <div class="lg:col-span-9 space-y-6">
                    
                    <!-- Result Summary Bar -->
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 bg-white p-4 rounded-2xl border border-[#e9eaeb]">
                        <div class="flex items-center gap-2">
                            <span class="text-sm font-semibold text-[#181d27]" x-text="`Menampilkan ${filteredJobs.length} dari 21 Lowongan Kerja`"></span>
                            <template x-if="selectedMajor !== 'Semua'">
                                <span class="bg-[#0c61cf]/10 text-[#0c61cf] text-xs font-semibold px-2.5 py-1 rounded-full" x-text="`Jurusan: ${selectedMajor}`"></span>
                            </template>
                        </div>

                        <!-- Active Filter Pills Summary -->
                        <div class="flex flex-wrap items-center gap-2">
                            <template x-for="loc in filterLocation.filter(l => l !== 'Semua')" :key="loc">
                                <span class="bg-slate-100 text-[#414651] text-xs font-medium px-2.5 py-1 rounded-full flex items-center gap-1">
                                    <span x-text="loc"></span>
                                    <button @click="removeFilter('location', loc)" class="hover:text-red-500">&times;</button>
                                </span>
                            </template>
                            <template x-for="wl in filterWorkLocation.filter(w => w !== 'Semua')" :key="wl">
                                <span class="bg-blue-50 text-[#0c61cf] text-xs font-medium px-2.5 py-1 rounded-full flex items-center gap-1">
                                    <span x-text="wl"></span>
                                    <button @click="removeFilter('workLocation', wl)" class="hover:text-red-500">&times;</button>
                                </span>
                            </template>
                            <template x-for="wt in filterWorkType.filter(t => t !== 'Semua')" :key="wt">
                                <span class="bg-amber-50 text-amber-700 text-xs font-medium px-2.5 py-1 rounded-full flex items-center gap-1">
                                    <span x-text="wt"></span>
                                    <button @click="removeFilter('workType', wt)" class="hover:text-red-500">&times;</button>
                                </span>
                            </template>
                            <template x-for="pt in filterPostTime.filter(p => p !== 'Semua')" :key="pt">
                                <span class="bg-emerald-50 text-emerald-700 text-xs font-medium px-2.5 py-1 rounded-full flex items-center gap-1">
                                    <span x-text="pt"></span>
                                    <button @click="removeFilter('postTime', pt)" class="hover:text-red-500">&times;</button>
                                </span>
                            </template>
                        </div>
                    </div>

                    <!-- Job Cards Grid (3 Columns) - Exactly 21 Cards Matching Figma -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                        <template x-for="job in filteredJobs" :key="job.id">
                            <div class="bg-white rounded-[20px] p-5 border border-[#e9eaeb] shadow-sm hover:shadow-md hover:border-[#0c61cf] transition-all duration-300 flex flex-col justify-between group min-h-[236px] cursor-pointer"
                                 @click="openJobDetail(job)">
                                
                                <div>
                                    <!-- Job Title & Salary -->
                                    <div class="space-y-1">
                                        <h3 class="text-base lg:text-lg font-bold text-[#181d27] group-hover:text-[#0c61cf] transition-colors line-clamp-1" x-text="job.title"></h3>
                                        <p class="text-[#0c61cf] font-semibold text-sm lg:text-base" x-text="job.salary"></p>
                                    </div>

                                    <!-- Job Tags (Jurusan Badge Hidden as requested) -->
                                    <div class="flex flex-wrap items-center gap-2 my-3">
                                        <span class="bg-[#f8fafc] border border-[#e2e8f0] text-[#475569] text-xs font-medium px-2.5 py-1 rounded-md" x-text="job.workLocation"></span>
                                        <span class="bg-[#f8fafc] border border-[#e2e8f0] text-[#475569] text-xs font-medium px-2.5 py-1 rounded-md" x-text="job.workType"></span>
                                    </div>

                                    <!-- Company Info -->
                                    <div class="flex items-center gap-3 pt-2">
                                        <div class="w-10 h-10 rounded-xl overflow-hidden flex items-center justify-center bg-white border border-[#e9eaeb] shrink-0 shadow-sm p-1">
                                            <template x-if="job.companyImg">
                                                <img :src="job.companyImg" :alt="job.companyName" class="w-full h-full object-contain rounded-lg">
                                            </template>
                                            <template x-if="!job.companyImg">
                                                <div class="w-full h-full rounded-lg flex items-center justify-center text-white font-bold text-sm" :class="job.companyBg">
                                                    <span x-text="job.companyLogo"></span>
                                                </div>
                                            </template>
                                        </div>
                                        <div class="overflow-hidden">
                                            <p class="text-sm font-semibold text-[#181d27] truncate" x-text="job.companyName"></p>
                                            <p class="text-xs text-[#717680] truncate" x-text="job.location"></p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Posted Time Footer -->
                                <div class="pt-3 mt-4 border-t border-[#f1f5f9] flex items-center justify-between text-xs text-[#717680]">
                                    <span x-text="job.postedTime"></span>
                                    <span class="text-[#0c61cf] font-semibold group-hover:underline flex items-center gap-1">
                                        Detail
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                                    </span>
                                </div>

                            </div>
                        </template>
                    </div>

                    <!-- Empty State -->
                    <template x-if="filteredJobs.length === 0">
                        <div class="text-center py-16 bg-white rounded-[20px] border border-[#e9eaeb] space-y-3">
                            <svg class="w-12 h-12 mx-auto text-[#717680]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m46 0v2m-6 0a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V10a2 2 0 00-2-2h-2m-4-3H9"/>
                            </svg>
                            <h3 class="text-lg font-semibold text-[#181d27]">Lowongan Kerja Tidak Ditemukan</h3>
                            <p class="text-sm text-[#717680]">Coba atur ulang filter pencarian Anda atau pilih jurusan lain.</p>
                            <button @click="resetFilters()" class="inline-block mt-2 text-[#0c61cf] font-semibold text-sm hover:underline">Reset Semua Filter</button>
                        </div>
                    </template>

                </div>

            </div>
        </section>

        <!-- Job Detail Modal Dialog -->
        <div x-show="selectedJobModal !== null" 
             x-cloak
             class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/50 backdrop-blur-sm"
             @keydown.escape.window="selectedJobModal = null">
            
            <div class="bg-white rounded-3xl max-w-lg w-full p-6 md:p-8 space-y-6 shadow-2xl relative border border-[#e9eaeb]"
                 @click.outside="selectedJobModal = null">
                
                <button @click="selectedJobModal = null" class="absolute right-5 top-5 text-[#717680] hover:text-[#181d27] p-1 rounded-full hover:bg-slate-100">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>

                <template x-if="selectedJobModal">
                    <div class="space-y-5">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 rounded-2xl overflow-hidden flex items-center justify-center bg-white border border-[#e9eaeb] shadow-md shrink-0 p-1.5">
                                <template x-if="selectedJobModal.companyImg">
                                    <img :src="selectedJobModal.companyImg" :alt="selectedJobModal.companyName" class="w-full h-full object-contain rounded-xl">
                                </template>
                                <template x-if="!selectedJobModal.companyImg">
                                    <div class="w-full h-full rounded-xl flex items-center justify-center text-white font-bold text-lg" :class="selectedJobModal.companyBg">
                                        <span x-text="selectedJobModal.companyLogo"></span>
                                    </div>
                                </template>
                            </div>
                            <div>
                                <h2 class="text-xl font-bold text-[#181d27]" x-text="selectedJobModal.title"></h2>
                                <p class="text-sm text-[#0c61cf] font-semibold" x-text="selectedJobModal.companyName"></p>
                                <p class="text-xs text-[#717680]" x-text="selectedJobModal.location"></p>
                            </div>
                        </div>

                        <div class="bg-[#f8fafc] p-4 rounded-2xl border border-[#e2e8f0] space-y-2 text-sm">
                            <div class="flex justify-between">
                                <span class="text-[#717680]">Gaji Estimasi:</span>
                                <span class="font-bold text-[#0c61cf]" x-text="selectedJobModal.salary"></span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-[#717680]">Jurusan:</span>
                                <span class="font-semibold text-[#181d27]" x-text="selectedJobModal.major"></span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-[#717680]">Tipe Pekerjaan:</span>
                                <span class="font-semibold text-[#181d27]" x-text="`${selectedJobModal.workLocation} · ${selectedJobModal.workType}`"></span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-[#717680]">Waktu Post:</span>
                                <span class="font-semibold text-[#181d27]" x-text="selectedJobModal.postedTime"></span>
                            </div>
                        </div>

                        <div class="space-y-2 text-sm text-[#414651]">
                            <h4 class="font-semibold text-[#181d27]">Persyaratan Singkat:</h4>
                            <ul class="list-disc pl-5 space-y-1 text-xs md:text-sm">
                                <li>Lulusan SMK IDN (TKJ / RPL / DKV) atau sederajat.</li>
                                <li>Memiliki portofolio karya / sertifikasi internasional pendukung.</li>
                                <li>Mampu bekerja secara mandiri maupun dalam tim.</li>
                            </ul>
                        </div>

                        <div class="pt-2 flex gap-3">
                            <button @click="alert('Lamaran Anda berhasil dikirim ke mitra IDN!'); selectedJobModal = null;" 
                                    class="flex-1 bg-[#0c61cf] hover:bg-[#0b54b5] text-white py-3 rounded-full font-semibold text-center text-sm md:text-base shadow-md transition-colors">
                                Lamar Pekerjaan Ini
                            </button>
                            <button @click="selectedJobModal = null" 
                                    class="px-5 border border-[#e9eaeb] text-[#414651] hover:bg-slate-50 py-3 rounded-full font-semibold text-sm transition-colors">
                                Tutup
                            </button>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </main>

    <!-- Footer Component -->
    <x-footer />

    <!-- Chatbot Component -->
    <x-chatbot />

    <!-- Alpine.js Application Logic -->
    <script>
        function careerCenterData() {
            return {
                selectedMajor: 'Semua',
                searchQuery: '',
                majorDropdownOpen: false,
                selectedJobModal: null,

                // Accordions state
                accordionOpen: {
                    location: true,
                    workLocation: true,
                    workType: true,
                    postTime: true
                },

                // Active Filters (default to 'Semua' checked on page load)
                filterLocation: ['Semua'],
                filterWorkLocation: ['Semua'],
                filterWorkType: ['Semua'],
                filterPostTime: ['Semua'],

                // Filter options matching Figma UI
                locationOptions: ['Semua', 'Jabodetabek', 'Jawa', 'Kalimantan', 'Sumatra', 'Sulawesi', 'Papua', 'Other'],
                workLocationOptions: ['Semua', 'Onsite', 'Hybrid', 'Remote/WFH'],
                workTypeOptions: ['Semua', 'Full-time', 'Part-time', 'Contract', 'Internship', 'Freelance'],
                postTimeOptions: ['Semua', 'Hari ini', 'Minggu ini', 'Bulan ini', 'Tahun ini'],
                // Exactly 21 Jobs Matching Figma Node 19889-5661 (100% Exact Data)
                jobs: [
                    // Card 1
                    {
                        id: 1,
                        title: 'Content Creator',
                        major: 'DKV',
                        salary: 'Rp 1.5 Juta',
                        workLocation: 'Hybrid',
                        workType: 'Contract',
                        companyName: 'Digideep',
                        companyLogo: 'D',
                        companyImg: "{{ asset('assets/Digdeep.avif') }}",
                        companyBg: 'bg-indigo-600',
                        location: 'Greater Jakarta',
                        locationGroup: 'Jabodetabek',
                        postedTime: '1 hari yang lalu',
                        postTimeCategory: 'Hari ini'
                    },
                    // Card 2
                    {
                        id: 2,
                        title: 'UI/UX Developer',
                        major: 'DKV',
                        salary: 'Rp 1.5 Juta',
                        workLocation: 'Hybrid',
                        workType: 'Contract',
                        companyName: 'Tenos Data Teknologi',
                        companyLogo: 'T',
                        companyImg: "{{ asset('assets/tenos-data-teknologi.avif') }}",
                        companyBg: 'bg-amber-500',
                        location: 'Greater Jakarta',
                        locationGroup: 'Jabodetabek',
                        postedTime: '2 hari yang lalu',
                        postTimeCategory: 'Minggu ini'
                    },
                    // Card 3
                    {
                        id: 3,
                        title: 'Digital Marketing',
                        major: 'DKV',
                        salary: 'Rp 1.5 Juta',
                        workLocation: 'Hybrid',
                        workType: 'Contract',
                        companyName: 'Indekstat',
                        companyLogo: 'I',
                        companyImg: "{{ asset('assets/indekstat.avif') }}",
                        companyBg: 'bg-orange-500',
                        location: 'Greater Jakarta',
                        locationGroup: 'Jabodetabek',
                        postedTime: '3 hari yang lalu',
                        postTimeCategory: 'Minggu ini'
                    },
                    // Card 4
                    {
                        id: 4,
                        title: 'Frontend Developer',
                        major: 'RPL',
                        salary: 'Rp 2 Juta',
                        workLocation: 'Onsite',
                        workType: 'Full-time',
                        companyName: 'Alfahuma Rekayasa Teknologi',
                        companyLogo: 'A',
                        companyImg: "{{ asset('assets/alfahuma-rekayasa.avif') }}",
                        companyBg: 'bg-blue-600',
                        location: 'Bekasi, West Java',
                        locationGroup: 'Jawa',
                        postedTime: '4 hari yang lalu',
                        postTimeCategory: 'Minggu ini'
                    },
                    // Card 5
                    {
                        id: 5,
                        title: 'IT Support',
                        major: 'TKJ',
                        salary: 'Rp 3 Juta',
                        workLocation: 'Remote/WFH',
                        workType: 'Part-time',
                        companyName: 'Pertamina',
                        companyLogo: 'P',
                        companyImg: "{{ asset('assets/pertamina.avif') }}",
                        companyBg: 'bg-red-600',
                        location: 'Central Jakarta, DKI Jakarta',
                        locationGroup: 'Jabodetabek',
                        postedTime: '5 hari yang lalu',
                        postTimeCategory: 'Minggu ini'
                    },
                    // Card 6
                    {
                        id: 6,
                        title: 'Network Administrator',
                        major: 'TKJ',
                        salary: 'Rp 2.5 Juta',
                        workLocation: 'Onsite',
                        workType: 'Freelance',
                        companyName: 'Vektora Studio',
                        companyLogo: 'V',
                        companyImg: "{{ asset('assets/vektora-studio.avif') }}",
                        companyBg: 'bg-emerald-600',
                        location: 'Surakarta, Central Java',
                        locationGroup: 'Jawa',
                        postedTime: '6 hari yang lalu',
                        postTimeCategory: 'Minggu ini'
                    },
                    // Card 7
                    {
                        id: 7,
                        title: 'Cloud Engineer',
                        major: 'TKJ',
                        salary: 'Rp 1 Juta',
                        workLocation: 'Remote/WFH',
                        workType: 'Internship',
                        companyName: 'PLN',
                        companyLogo: 'P',
                        companyImg: "{{ asset('assets/pln-1.avif') }}",
                        companyBg: 'bg-cyan-600',
                        location: 'South Jakarta, DKI Jakarta',
                        locationGroup: 'Jabodetabek',
                        postedTime: '7 hari yang lalu',
                        postTimeCategory: 'Minggu ini'
                    },
                    // Card 8
                    {
                        id: 8,
                        title: 'Video Editor',
                        major: 'DKV',
                        salary: 'Rp 2 Juta',
                        workLocation: 'Hybrid',
                        workType: 'Part-time',
                        companyName: 'Telkom Indonesia',
                        companyLogo: 'T',
                        companyImg: "{{ asset('assets/telkom-id.avif') }}",
                        companyBg: 'bg-red-600',
                        location: 'South Jakarta, DKI Jakarta',
                        locationGroup: 'Jabodetabek',
                        postedTime: '8 hari yang lalu',
                        postTimeCategory: 'Bulan ini'
                    },
                    // Card 9
                    {
                        id: 9,
                        title: 'Web Developer',
                        major: 'RPL',
                        salary: 'Rp 1.5 Juta',
                        workLocation: 'Onsite',
                        workType: 'Contract',
                        companyName: 'Toyota Astra Motor',
                        companyLogo: 'T',
                        companyImg: "{{ asset('assets/toyota-astra-motor.avif') }}",
                        companyBg: 'bg-rose-700',
                        location: 'Central Jakarta, DKI Jakarta',
                        locationGroup: 'Jabodetabek',
                        postedTime: '9 hari yang lalu',
                        postTimeCategory: 'Bulan ini'
                    },
                    // Card 10
                    {
                        id: 10,
                        title: 'Graphic Designer',
                        major: 'DKV',
                        salary: 'Rp 5 Juta',
                        workLocation: 'Hybrid',
                        workType: 'Full-time',
                        companyName: 'Sisindokom Lintasbuana',
                        companyLogo: 'S',
                        companyImg: "{{ asset('assets/sisindokom-1.avif') }}",
                        companyBg: 'bg-purple-600',
                        location: 'Central Jakarta, DKI Jakarta',
                        locationGroup: 'Jabodetabek',
                        postedTime: '10 hari yang lalu',
                        postTimeCategory: 'Bulan ini'
                    },
                    // Card 11
                    {
                        id: 11,
                        title: 'Backend Developer',
                        major: 'RPL',
                        salary: 'Rp 2 Juta',
                        workLocation: 'Onsite',
                        workType: 'Freelance',
                        companyName: 'Yaksa Ersada Solusindo',
                        companyLogo: 'Y',
                        companyImg: "{{ asset('assets/yaksa-ersada.avif') }}",
                        companyBg: 'bg-red-500',
                        location: 'Bekasi, West Java',
                        locationGroup: 'Jawa',
                        postedTime: '11 hari yang lalu',
                        postTimeCategory: 'Bulan ini'
                    },
                    // Card 12
                    {
                        id: 12,
                        title: 'Security Engineer',
                        major: 'TKJ',
                        salary: 'Rp 4 Juta',
                        workLocation: 'Remote/WFH',
                        workType: 'Part-time',
                        companyName: 'Telkom Akses',
                        companyLogo: 'T',
                        companyImg: "{{ asset('assets/telkom-akses.avif') }}",
                        companyBg: 'bg-red-600',
                        location: 'Tangerang, Banten',
                        locationGroup: 'Jabodetabek',
                        postedTime: '12 hari yang lalu',
                        postTimeCategory: 'Bulan ini'
                    },
                    // Card 13
                    {
                        id: 13,
                        title: 'IT Support',
                        major: 'TKJ',
                        salary: 'Rp 4 Juta',
                        workLocation: 'Onsite',
                        workType: 'Contract',
                        companyName: 'Sucofindo',
                        companyLogo: 'S',
                        companyImg: "{{ asset('assets/Sucofindo.avif') }}",
                        companyBg: 'bg-blue-700',
                        location: 'South Jakarta, DKI Jakarta',
                        locationGroup: 'Jabodetabek',
                        postedTime: '13 hari yang lalu',
                        postTimeCategory: 'Bulan ini'
                    },
                    // Card 14
                    {
                        id: 14,
                        title: '3D Designer',
                        major: 'DKV',
                        salary: 'Rp 3 Juta',
                        workLocation: 'Hybrid',
                        workType: 'Part-time',
                        companyName: 'Pelabuhan Indonesia',
                        companyLogo: 'P',
                        companyImg: "{{ asset('assets/pelabuhanIndo.avif') }}",
                        companyBg: 'bg-sky-600',
                        location: 'North Jakarta, DKI Jakarta',
                        locationGroup: 'Jabodetabek',
                        postedTime: '14 hari yang lalu',
                        postTimeCategory: 'Bulan ini'
                    },
                    // Card 15
                    {
                        id: 15,
                        title: 'Fullstack Developer',
                        major: 'RPL',
                        salary: 'Rp 1 Juta',
                        workLocation: 'Remote/WFH',
                        workType: 'Freelance',
                        companyName: 'Tokopedia',
                        companyLogo: 'T',
                        companyImg: "{{ asset('assets/tokped.avif') }}",
                        companyBg: 'bg-emerald-600',
                        location: 'South Jakarta, DKI Jakarta',
                        locationGroup: 'Jabodetabek',
                        postedTime: '15 hari yang lalu',
                        postTimeCategory: 'Bulan ini'
                    },
                    // Card 16
                    {
                        id: 16,
                        title: 'QA Tester',
                        major: 'RPL',
                        salary: 'Rp 1.5 Juta',
                        workLocation: 'Remote/WFH',
                        workType: 'Full-time',
                        companyName: 'Shopee',
                        companyLogo: 'S',
                        companyImg: "{{ asset('assets/Shoppie.avif') }}",
                        companyBg: 'bg-orange-600',
                        location: 'South Jakarta, DKI Jakarta',
                        locationGroup: 'Jabodetabek',
                        postedTime: '16 hari yang lalu',
                        postTimeCategory: 'Bulan ini'
                    },
                    // Card 17
                    {
                        id: 17,
                        title: 'Animator',
                        major: 'DKV',
                        salary: 'Rp 2.5 Juta',
                        workLocation: 'Onsite',
                        workType: 'Internship',
                        companyName: 'Lazada',
                        companyLogo: 'L',
                        companyImg: "{{ asset('assets/lazada.avif') }}",
                        companyBg: 'bg-purple-600',
                        location: 'South Jakarta, DKI Jakarta',
                        locationGroup: 'Jabodetabek',
                        postedTime: '17 hari yang lalu',
                        postTimeCategory: 'Bulan ini'
                    },
                    // Card 18
                    {
                        id: 18,
                        title: 'Network Administrator',
                        major: 'TKJ',
                        salary: 'Rp 3.5 Juta',
                        workLocation: 'Hybrid',
                        workType: 'Part-time',
                        companyName: 'Gojek',
                        companyLogo: 'G',
                        companyImg: "{{ asset('assets/gojek.avif') }}",
                        companyBg: 'bg-emerald-600',
                        location: 'South Jakarta, DKI Jakarta',
                        locationGroup: 'Jabodetabek',
                        postedTime: '18 hari yang lalu',
                        postTimeCategory: 'Bulan ini'
                    },
                    // Card 19
                    {
                        id: 19,
                        title: 'Backend Developer',
                        major: 'RPL',
                        salary: 'Rp 6 Juta',
                        workLocation: 'Hybrid',
                        workType: 'Contract',
                        companyName: 'Grab',
                        companyLogo: 'G',
                        companyImg: "{{ asset('assets/grab.avif') }}",
                        companyBg: 'bg-emerald-700',
                        location: 'South Jakarta, DKI Jakarta',
                        locationGroup: 'Jabodetabek',
                        postedTime: '19 hari yang lalu',
                        postTimeCategory: 'Bulan ini'
                    },
                    // Card 20
                    {
                        id: 20,
                        title: 'UI/UX Designer',
                        major: 'DKV',
                        salary: 'Rp 1 Juta',
                        workLocation: 'Onsite',
                        workType: 'Freelance',
                        companyName: 'Maxim',
                        companyLogo: 'M',
                        companyImg: "{{ asset('assets/Maxim.avif') }}",
                        companyBg: 'bg-amber-400 text-black',
                        location: 'South Jakarta, DKI Jakarta',
                        locationGroup: 'Jabodetabek',
                        postedTime: '20 hari yang lalu',
                        postTimeCategory: 'Bulan ini'
                    },
                    // Card 21
                    {
                        id: 21,
                        title: 'Cloud Engineer',
                        major: 'TKJ',
                        salary: 'Rp 3 Juta',
                        workLocation: 'Remote/WFH',
                        workType: 'Full-time',
                        companyName: 'Blibli',
                        companyLogo: 'B',
                        companyImg: "{{ asset('assets/blibli.avif') }}",
                        companyBg: 'bg-blue-500',
                        location: 'Central Jakarta, DKI Jakarta',
                        locationGroup: 'Jabodetabek',
                        postedTime: '21 hari yang lalu',
                        postTimeCategory: 'Bulan ini'
                    }
                ],

                selectMajor(major) {
                    this.selectedMajor = major;
                    this.majorDropdownOpen = false;
                },

                applySearch() {
                    this.majorDropdownOpen = false;
                },

                toggleAccordion(key) {
                    this.accordionOpen[key] = !this.accordionOpen[key];
                },

                onCheckboxChange(filterKey, clickedVal) {
                    let list = this[filterKey];
                    if (clickedVal === 'Semua') {
                        if (list.includes('Semua')) {
                            // If 'Semua' is checked, clear specific options and keep 'Semua'
                            this[filterKey] = ['Semua'];
                        } else if (list.length === 0) {
                            // If user unchecks 'Semua' and nothing else is selected, revert back to 'Semua'
                            this[filterKey] = ['Semua'];
                        }
                    } else {
                        if (list.includes(clickedVal)) {
                            // When specific option is checked, remove 'Semua'
                            this[filterKey] = list.filter(item => item !== 'Semua');
                        } else if (list.length === 0) {
                            // If user unchecks specific option and list becomes empty, revert back to 'Semua'
                            this[filterKey] = ['Semua'];
                        }
                    }
                },

                resetFilters() {
                    this.selectedMajor = 'Semua';
                    this.searchQuery = '';
                    this.filterLocation = ['Semua'];
                    this.filterWorkLocation = ['Semua'];
                    this.filterWorkType = ['Semua'];
                    this.filterPostTime = ['Semua'];
                },

                removeFilter(type, value) {
                    if (type === 'location') {
                        this.filterLocation = this.filterLocation.filter(item => item !== value);
                        if (this.filterLocation.length === 0) this.filterLocation = ['Semua'];
                    } else if (type === 'workLocation') {
                        this.filterWorkLocation = this.filterWorkLocation.filter(item => item !== value);
                        if (this.filterWorkLocation.length === 0) this.filterWorkLocation = ['Semua'];
                    } else if (type === 'workType') {
                        this.filterWorkType = this.filterWorkType.filter(item => item !== value);
                        if (this.filterWorkType.length === 0) this.filterWorkType = ['Semua'];
                    } else if (type === 'postTime') {
                        this.filterPostTime = this.filterPostTime.filter(item => item !== value);
                        if (this.filterPostTime.length === 0) this.filterPostTime = ['Semua'];
                    }
                },

                openJobDetail(job) {
                    this.selectedJobModal = job;
                },

                get filteredJobs() {
                    return this.jobs.filter(job => {
                        // 1. Filter Major
                        if (this.selectedMajor !== 'Semua' && job.major !== this.selectedMajor) {
                            return false;
                        }

                        // 2. Filter Search Query
                        if (this.searchQuery.trim() !== '') {
                            const q = this.searchQuery.toLowerCase();
                            const matchTitle = job.title.toLowerCase().includes(q);
                            const matchCompany = job.companyName.toLowerCase().includes(q);
                            const matchLocation = job.location.toLowerCase().includes(q);
                            if (!matchTitle && !matchCompany && !matchLocation) {
                                return false;
                            }
                        }

                        // 3. Filter Lokasi (Region / City Filter)
                        if (this.filterLocation.length > 0 && !this.filterLocation.includes('Semua')) {
                            const matchGroup = this.filterLocation.includes(job.locationGroup);
                            const matchText = this.filterLocation.some(loc => 
                                job.location.toLowerCase().includes(loc.toLowerCase())
                            );
                            if (!matchGroup && !matchText) {
                                return false;
                            }
                        }

                        // 4. Filter Lokasi Kerja (Onsite, Hybrid, Remote/WFH)
                        if (this.filterWorkLocation.length > 0 && !this.filterWorkLocation.includes('Semua')) {
                            const normWorkLoc = this.filterWorkLocation.map(w => w.toLowerCase());
                            const jobWl = job.workLocation.toLowerCase();
                            const matchWl = normWorkLoc.includes(jobWl) || normWorkLoc.some(w => jobWl.includes(w));
                            if (!matchWl) {
                                return false;
                            }
                        }

                        // 5. Filter Tipe Kerja (Full-time, Contract, Internship, Freelance, Part-time)
                        if (this.filterWorkType.length > 0 && !this.filterWorkType.includes('Semua')) {
                            const normTypes = this.filterWorkType.map(t => t.toLowerCase().replace(/[\s-]/g, ''));
                            const jobType = job.workType.toLowerCase().replace(/[\s-]/g, '');
                            if (!normTypes.includes(jobType)) {
                                return false;
                            }
                        }

                        // 6. Filter Waktu Post (Hari ini, Minggu ini, Bulan ini, Tahun ini)
                        if (this.filterPostTime.length > 0 && !this.filterPostTime.includes('Semua')) {
                            const selectedPt = this.filterPostTime;
                            let matchPost = false;
                            
                            if (selectedPt.includes(job.postTimeCategory)) {
                                matchPost = true;
                            } else if (selectedPt.includes('Tahun ini')) {
                                matchPost = true; // All 21 jobs are within this year
                            } else if (selectedPt.includes('Bulan ini') && (job.postTimeCategory === 'Hari ini' || job.postTimeCategory === 'Minggu ini' || job.postTimeCategory === 'Bulan ini')) {
                                matchPost = true;
                            } else if (selectedPt.includes('Minggu ini') && (job.postTimeCategory === 'Hari ini' || job.postTimeCategory === 'Minggu ini')) {
                                matchPost = true;
                            }

                            if (!matchPost) {
                                return false;
                            }
                        }

                        return true;
                    });
                }
            }
        }
    </script>
</body>
</html>
