<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Artikel Seputar IDN Boarding School | IDN Boarding School</title>
    <meta name="description" content="Temukan berbagai artikel menarik seputar kegiatan, prestasi, dan kehidupan di IDN Boarding School. Dapatkan inspirasi dan informasi terbaru.">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@400;500;600;700&family=Outfit:wght@400;500;600;700&family=Inter:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600&family=Funnel+Display:wght@500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Alpine.js for Interactive Component State -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Tailwind CSS Vite Import -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="bg-[#fafafa] text-[#181d27] font-['Geist',sans-serif] antialiased min-h-screen flex flex-col justify-between selection:bg-[#0c61cf] selection:text-white">

    <!-- Header & Navigation -->
    <x-navbar active="artikel" />

    <main class="flex-1 w-full">
        <!-- Hero Header Section -->
        <section class="w-full bg-[#fafafa]">
            <div class="max-w-[1440px] mx-auto px-6 md:px-12 lg:px-[160px] pt-10 md:pt-16 lg:pt-[110px] pb-8 md:pb-12 lg:pb-[60px]">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-[56px] items-center">
                    
                    <!-- Left Hero Content -->
                    <div class="lg:col-span-6 xl:col-span-7 flex flex-col gap-3 md:gap-4 max-w-[516px]">
                        <span class="text-[#717680] text-sm md:text-base font-normal">Kabar Terbaru Kami</span>
                        
                        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-[56px] font-semibold text-[#0b0d12] tracking-[-2.24px] leading-tight lg:leading-[68px] font-['Funnel_Display',sans-serif]">
                            Artikel Seputar <span class="text-[#0c61cf] block">IDN Boarding School</span>
                        </h1>
                        
                        <p class="text-[#717680] text-sm md:text-base leading-relaxed font-normal mt-1">
                            Temukan berbagai artikel menarik seputar kegiatan, prestasi, dan kehidupan di IDN Boarding School. Dapatkan inspirasi, informasi terbaru, dan cerita nyata dari para santri dan pembina.
                        </p>
                    </div>

                    <!-- Right Hero Image Frame -->
                    <div class="lg:col-span-6 xl:col-span-5 flex justify-center lg:justify-end">
                        <div class="border-8 border-white/40 rounded-[18px] shadow-[12px_12px_56px_0px_rgba(0,4,45,0.16)] h-[260px] sm:h-[320px] lg:h-[370px] w-full max-w-[548px] overflow-hidden relative bg-slate-200">
                            <img src="{{ asset('assets/jonggol ikhwan.avif') }}" alt="Gedung IDN Boarding School" class="w-full h-full object-cover">
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Main Articles Section (Tabs, Featured, Grid) -->
        <section class="w-full">
            <div class="max-w-[1440px] mx-auto px-6 md:px-12 lg:px-[160px] py-6 md:py-10 space-y-8 md:space-y-[40px]">
                
                <!-- Category Filter Pills & Search -->
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <div class="flex flex-wrap items-center gap-2 md:gap-[8px]">
                        @foreach($categories as $cat)
                            <a href="{{ route('articles.index', array_merge(request()->query(), ['category' => $cat, 'page' => 1])) }}"
                               class="{{ $selectedCategory === $cat ? 'bg-[#0c61cf] text-white' : 'bg-white border-2 border-[#e9eaeb] text-[#414651] hover:border-[#0c61cf] hover:text-[#0c61cf]' }} px-5 py-2.5 md:py-3 rounded-full font-semibold text-sm md:text-base transition-all duration-200 inline-block shadow-sm">
                                {{ $cat }}
                            </a>
                        @endforeach
                    </div>

                    <!-- Search Input (Optional helper) -->
                    <form action="{{ route('articles.index') }}" method="GET" class="relative max-w-xs w-full">
                        @if(request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif
                        <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Cari artikel..." 
                               class="w-full bg-white border border-[#e9eaeb] rounded-full px-4 py-2.5 text-sm text-[#181d27] placeholder-[#717680] focus:outline-none focus:border-[#0c61cf] focus:ring-1 focus:ring-[#0c61cf]">
                        <button type="submit" class="absolute right-3 top-1/2 -translate-y-1/2 text-[#717680] hover:text-[#0c61cf]">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                        </button>
                    </form>
                </div>

                <!-- Featured Article Card ("Berita Terpopuler") -->
                @if($featuredArticle && request('page', 1) == 1 && (!$search))
                    <div class="border border-[#e9eaeb] bg-white rounded-[18px] overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 group">
                        <div class="h-[280px] sm:h-[380px] lg:h-[500px] w-full overflow-hidden relative bg-slate-100">
                            <img src="{{ asset('assets/' . $featuredArticle->image) }}" alt="{{ $featuredArticle->title }}" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        
                        <div class="p-6 md:p-8 space-y-4">
                            <!-- Badge -->
                            <div class="inline-flex items-center gap-2 bg-[#fcefee] border border-[#f14437] px-4 py-2 rounded-full">
                                <span class="size-2.5 rounded-full bg-[#f14437]"></span>
                                <span class="text-[#d92d21] font-medium text-xs md:text-sm">Berita Terpopuler</span>
                            </div>

                            <!-- Meta info -->
                            <div class="flex items-center gap-3 text-[#717680] text-xs md:text-sm font-normal">
                                <div class="flex items-center gap-1.5">
                                    <svg class="w-4 h-4 text-[#717680]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                    <span>{{ \Carbon\Carbon::parse($featuredArticle->published_at)->format('d F Y') }}</span>
                                </div>
                                <span class="w-[1px] h-3.5 bg-[#d9d9d9]"></span>
                                <span>{{ $featuredArticle->category }}</span>
                            </div>

                            <!-- Info -->
                            <div class="space-y-2">
                                <h2 class="text-xl sm:text-2xl lg:text-[22px] font-semibold text-[#181d27] group-hover:text-[#0c61cf] transition-colors leading-snug">
                                    <a href="{{ route('articles.show', $featuredArticle->slug) }}">{{ $featuredArticle->title }}</a>
                                </h2>
                                <p class="text-[#717680] text-sm md:text-base leading-relaxed line-clamp-3 font-normal">
                                    {{ Str::limit(strip_tags($featuredArticle->content), 260) }}
                                </p>
                            </div>

                            <!-- Read More Button -->
                            <div class="pt-2">
                                <a href="{{ route('articles.show', $featuredArticle->slug) }}" class="inline-flex items-center gap-1.5 text-[#0c61cf] font-semibold text-sm md:text-base hover:gap-2.5 transition-all">
                                    Read More
                                    <svg class="w-4 h-4 transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17L17 7M17 7H7M17 7V17"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @endif

                <!-- 3-Column Articles Grid -->
                @if($articles->count() > 0)
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-[20px]">
                        @foreach($articles as $article)
                            <div class="border border-[#e9eaeb] bg-white rounded-[18px] overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 flex flex-col justify-between group">
                                <!-- Card Image -->
                                <div class="h-[220px] sm:h-[260px] md:h-[300px] w-full overflow-hidden relative shrink-0 bg-slate-100">
                                    <img src="{{ asset('assets/' . $article->image) }}" alt="{{ $article->title }}" 
                                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                </div>

                                <!-- Card Body -->
                                <div class="p-5 flex flex-col justify-between flex-1 gap-4">
                                    <!-- Meta -->
                                    <div class="flex items-center gap-3 text-[#717680] text-xs md:text-sm font-normal">
                                        <div class="flex items-center gap-1.5">
                                            <svg class="w-4 h-4 text-[#717680]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                            </svg>
                                            <span>{{ \Carbon\Carbon::parse($article->published_at)->format('d F Y') }}</span>
                                        </div>
                                        <span class="w-[1px] h-3.5 bg-[#d9d9d9]"></span>
                                        <span>{{ $article->category }}</span>
                                    </div>

                                    <!-- Content -->
                                    <div class="space-y-2">
                                        <h3 class="text-base md:text-lg font-semibold text-[#181d27] group-hover:text-[#0c61cf] transition-colors leading-snug line-clamp-2">
                                            <a href="{{ route('articles.show', $article->slug) }}">{{ $article->title }}</a>
                                        </h3>
                                        <p class="text-[#717680] text-xs md:text-sm leading-relaxed line-clamp-2 font-normal">
                                            {{ Str::limit(strip_tags($article->content), 100) }}
                                        </p>
                                    </div>

                                    <!-- Action -->
                                    <div class="pt-1 mt-auto">
                                        <a href="{{ route('articles.show', $article->slug) }}" class="inline-flex items-center gap-1.5 text-[#0c61cf] font-semibold text-xs md:text-sm hover:gap-2.5 transition-all">
                                            Read More
                                            <svg class="w-4 h-4 transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17L17 7M17 7H7M17 7V17"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Pagination -->
                    <div class="pt-6 flex justify-center">
                        {{ $articles->links() }}
                    </div>
                @else
                    <div class="text-center py-16 bg-white rounded-[18px] border border-[#e9eaeb] space-y-3">
                        <svg class="w-12 h-12 mx-auto text-[#717680]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                        </svg>
                        <h3 class="text-lg font-semibold text-[#181d27]">Tidak Ada Artikel Ditemukan</h3>
                        <p class="text-sm text-[#717680]">Coba pilih kategori lain atau ubah kata kunci pencarian Anda.</p>
                        <a href="{{ route('articles.index') }}" class="inline-block mt-2 text-[#0c61cf] font-semibold text-sm hover:underline">Tampilkan Semua Artikel</a>
                    </div>
                @endif

                <!-- PPDB CTA Banner -->
                <div class="bg-[#0c61cf] rounded-[24px] p-8 md:p-14 text-white flex flex-col md:flex-row items-center justify-between gap-6 relative overflow-hidden shadow-xl mt-12 md:mt-20">
                    <div class="space-y-3 max-w-xl text-left">
                        <span class="text-blue-100 text-sm font-medium tracking-wide">Pendaftaran 2026</span>
                        <h2 class="text-2xl md:text-4xl font-bold tracking-tight text-white leading-tight">
                            Kuota terbatas. Ambil langkahmu hari ini.
                        </h2>
                        <p class="text-blue-100 text-sm md:text-base font-normal">
                            Segera daftarkan putra/putri Anda dan jadilah bagian dari keluarga besar IDN Boarding School.
                        </p>
                    </div>
                    <div class="flex flex-col sm:flex-row items-center gap-4 shrink-0 w-full md:w-auto">
                        <a href="/ppdb" class="w-full sm:w-auto text-center bg-white text-[#0c61cf] px-6 py-3.5 rounded-full font-semibold hover:bg-blue-50 transition-all shadow-md text-sm md:text-base">
                            Lihat Pendaftaran
                        </a>
                        <a href="https://wa.me/6282210102006" target="_blank" class="w-full sm:w-auto text-center border-2 border-white/80 text-white px-6 py-3.5 rounded-full font-semibold hover:bg-white/10 transition-all text-sm md:text-base">
                            Tanya Dulu Melalui WA
                        </a>
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
