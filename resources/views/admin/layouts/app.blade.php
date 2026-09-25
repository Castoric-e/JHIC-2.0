<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Dashboard') | Super Admin IDN</title>
    <meta name="robots" content="noindex, nofollow">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@400;500;600;700&family=Funnel+Display:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#f8fafc] text-[#181d27] font-sans antialiased min-h-screen flex flex-col" x-data="{ sidebarOpen: false }">
    
    <div class="flex h-screen overflow-hidden">
        
        <!-- Mobile Sidebar Backdrop -->
        <div x-show="sidebarOpen" x-cloak @click="sidebarOpen = false" 
            class="fixed inset-0 z-40 bg-slate-900/50 backdrop-blur-sm lg:hidden transition-opacity"></div>

        <!-- Sidebar Navigation -->
        <aside :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full lg:translate-x-0'"
            class="fixed inset-y-0 left-0 z-50 w-64 bg-white border-r border-[#e2e8f0] flex flex-col justify-between transition-transform duration-300 ease-in-out lg:static lg:translate-x-0">
            
            <!-- Sidebar Header -->
            <div>
                <div class="h-20 px-6 flex items-center justify-between border-b border-[#f1f5f9]">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-white border border-[#e2e8f0] shadow-sm flex items-center justify-center p-1.5 shrink-0">
                            <img src="{{ asset('assets/logos/logo_idn.png') }}" alt="IDN Logo" class="w-full h-full object-contain">
                        </div>
                        <div>
                            <span class="text-sm font-bold text-[#0f172a] block leading-tight font-['Funnel_Display',sans-serif]">IDN Boarding</span>
                            <span class="inline-flex items-center gap-1 text-[11px] font-semibold text-[#0c61cf]">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#0c61cf] animate-pulse"></span>
                                Super Admin
                            </span>
                        </div>
                    </div>

                    <!-- Close Button (Mobile Only) -->
                    <button @click="sidebarOpen = false" class="lg:hidden text-[#64748b] hover:text-[#0f172a] p-1">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>

                <!-- Navigation Links -->
                <nav class="p-4 space-y-1.5">
                    <div class="px-3 py-1.5 text-[10px] font-bold text-[#94a3b8] uppercase tracking-wider">
                        Menu Utama
                    </div>

                    <!-- Dashboard -->
                    <a href="{{ route('admin.dashboard') }}" 
                        class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-sm font-medium transition-all duration-200 {{ request()->routeIs('admin.dashboard') ? 'bg-[#0c61cf] text-white shadow-sm' : 'text-[#475569] hover:bg-[#f1f5f9] hover:text-[#0f172a]' }}">
                        <svg class="w-5 h-5 shrink-0 {{ request()->routeIs('admin.dashboard') ? 'text-white' : 'text-[#64748b]' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                        <span>Dashboard</span>
                    </a>

                    <!-- Artikel List -->
                    <a href="{{ route('admin.articles.index') }}" 
                        class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-sm font-medium transition-all duration-200 {{ request()->routeIs('admin.articles.index') || request()->routeIs('admin.articles.edit') ? 'bg-[#0c61cf] text-white shadow-sm' : 'text-[#475569] hover:bg-[#f1f5f9] hover:text-[#0f172a]' }}">
                        <svg class="w-5 h-5 shrink-0 {{ request()->routeIs('admin.articles.index') || request()->routeIs('admin.articles.edit') ? 'text-white' : 'text-[#64748b]' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                        </svg>
                        <span>Kelola Artikel</span>
                    </a>

                    <!-- Tambah Artikel -->
                    <a href="{{ route('admin.articles.create') }}" 
                        class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-sm font-medium transition-all duration-200 {{ request()->routeIs('admin.articles.create') ? 'bg-[#0c61cf] text-white shadow-sm' : 'text-[#475569] hover:bg-[#f1f5f9] hover:text-[#0f172a]' }}">
                        <svg class="w-5 h-5 shrink-0 {{ request()->routeIs('admin.articles.create') ? 'text-white' : 'text-[#64748b]' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span>Tambah Artikel</span>
                    </a>

                    <!-- Career Center (Karir & Magang) -->
                    <a href="{{ route('admin.career.index') }}" 
                        class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-sm font-medium transition-all duration-200 {{ request()->routeIs('admin.career.*') ? 'bg-[#0c61cf] text-white shadow-sm' : 'text-[#475569] hover:bg-[#f1f5f9] hover:text-[#0f172a]' }}">
                        <svg class="w-5 h-5 shrink-0 {{ request()->routeIs('admin.career.*') ? 'text-white' : 'text-[#64748b]' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <span>Career Center</span>
                    </a>

                    <div class="pt-4 px-3 py-1.5 text-[10px] font-bold text-[#94a3b8] uppercase tracking-wider">
                        Situs Utama
                    </div>

                    <!-- Web Publik Link -->
                    <a href="{{ url('/') }}" target="_blank" 
                        class="flex items-center justify-between px-3.5 py-2.5 rounded-xl text-sm font-medium text-[#475569] hover:bg-[#f1f5f9] hover:text-[#0f172a] transition-all duration-200 group">
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-[#64748b] group-hover:text-[#0c61cf] transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                            </svg>
                            <span>Buka Web Publik</span>
                        </div>
                        <span class="text-[11px] text-[#94a3b8] font-normal group-hover:text-[#0c61cf]">Tab Baru</span>
                    </a>
                </nav>
            </div>

            <!-- Sidebar Bottom User Profile -->
            <div class="p-4 border-t border-[#f1f5f9] bg-[#fafafa]">
                <div class="flex items-center justify-between gap-2 mb-3">
                    <div class="flex items-center gap-2.5 min-w-0">
                        <div class="w-9 h-9 rounded-full bg-[#0c61cf]/10 text-[#0c61cf] font-bold text-xs flex items-center justify-center shrink-0">
                            SA
                        </div>
                        <div class="truncate">
                            <span class="text-xs font-semibold text-[#0f172a] block truncate">
                                {{ auth()->user()->name ?? 'Super Admin' }}
                            </span>
                            <span class="text-[11px] text-[#64748b] block truncate">
                                {{ auth()->user()->email ?? 'admin@idn.sch.id' }}
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Logout Form -->
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" 
                        class="w-full flex items-center justify-center gap-2 py-2 px-3 bg-white hover:bg-rose-50 border border-[#e2e8f0] hover:border-rose-200 text-[#475569] hover:text-rose-600 rounded-xl text-xs font-semibold transition-all duration-200 cursor-pointer">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                        </svg>
                        <span>Keluar (Logout)</span>
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Wrapper -->
        <div class="flex-1 flex flex-col min-w-0 overflow-y-auto">
            
            <!-- Topbar Header -->
            <header class="h-20 bg-white border-b border-[#e2e8f0] px-6 flex items-center justify-between sticky top-0 z-30">
                <div class="flex items-center gap-4">
                    <!-- Mobile Hamburger -->
                    <button @click="sidebarOpen = !sidebarOpen" class="lg:hidden p-2 text-[#64748b] hover:text-[#0f172a] rounded-lg border border-[#e2e8f0]">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>

                    <div>
                        <h2 class="text-lg font-bold text-[#0f172a] font-['Funnel_Display',sans-serif] leading-tight">
                            @yield('page_title', 'Dashboard')
                        </h2>
                        <span class="text-xs text-[#64748b] font-normal">
                            {{ \Carbon\Carbon::now()->isoFormat('dddd, D MMMM Y') }}
                        </span>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <span class="hidden sm:inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-50 text-emerald-700 border border-emerald-200 text-xs font-medium">
                        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                        Sistem Aktif & Terlindungi
                    </span>
                </div>
            </header>

            <!-- Main Content Area -->
            <main class="flex-1 p-6 md:p-8 max-w-7xl w-full mx-auto">
                
                <!-- Flash Alerts -->
                @if(session('success'))
                    <div x-data="{ show: true }" x-show="show" class="mb-6 p-4 bg-emerald-50 border border-emerald-200 rounded-2xl flex items-center justify-between text-emerald-800 text-sm shadow-sm">
                        <div class="flex items-center gap-3">
                            <div class="w-7 h-7 rounded-lg bg-emerald-500 text-white flex items-center justify-center shrink-0">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span class="font-medium">{{ session('success') }}</span>
                        </div>
                        <button @click="show = false" class="text-emerald-600 hover:text-emerald-900 p-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                        </button>
                    </div>
                @endif

                @if(session('error'))
                    <div x-data="{ show: true }" x-show="show" class="mb-6 p-4 bg-rose-50 border border-rose-200 rounded-2xl flex items-center justify-between text-rose-800 text-sm shadow-sm">
                        <div class="flex items-center gap-3">
                            <div class="w-7 h-7 rounded-lg bg-rose-500 text-white flex items-center justify-center shrink-0">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </div>
                            <span class="font-medium">{{ session('error') }}</span>
                        </div>
                        <button @click="show = false" class="text-rose-600 hover:text-rose-900 p-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                        </button>
                    </div>
                @endif

                @yield('content')

            </main>
        </div>
    </div>

</body>
</html>
