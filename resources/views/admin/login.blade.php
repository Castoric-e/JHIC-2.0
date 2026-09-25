<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Super Admin Portal | IDN Boarding School</title>
    <meta name="robots" content="noindex, nofollow">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@400;500;600;700&family=Funnel+Display:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#f8fafc] text-[#181d27] font-sans antialiased min-h-screen flex items-center justify-center p-4 relative overflow-hidden select-none">
    
    <!-- Background Ambient Glow -->
    <div class="absolute -top-40 -left-40 w-96 h-96 bg-[#0c61cf]/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-40 -right-40 w-96 h-96 bg-[#0c61cf]/15 rounded-full blur-3xl pointer-events-none"></div>

    <!-- Login Card Container -->
    <div class="w-full max-w-[440px] relative z-10" x-data="{ showPassword: false, isLoading: false }">
        
        <!-- Brand Header -->
        <div class="flex flex-col items-center text-center mb-8">
            <div class="w-16 h-16 rounded-2xl bg-white border border-[#e2e8f0] shadow-sm flex items-center justify-center p-2.5 mb-4 transition-transform duration-300 hover:scale-105">
                <img src="{{ asset('assets/logos/logo_idn.png') }}" alt="IDN Boarding School" class="w-full h-full object-contain">
            </div>
            
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#0c61cf]/10 text-[#0c61cf] text-xs font-semibold uppercase tracking-wider mb-2">
                <span class="w-1.5 h-1.5 rounded-full bg-[#0c61cf] animate-pulse"></span>
                Portal Super Admin
            </div>

            <h1 class="text-2xl font-bold text-[#0f172a] font-['Funnel_Display',sans-serif] tracking-tight">
                IDN Boarding School
            </h1>
            <p class="text-xs text-[#64748b] mt-1 font-normal">
                Silakan masuk untuk mengelola seluruh sistem website.
            </p>
        </div>

        <!-- Card Form -->
        <div class="bg-white border border-[#e2e8f0] rounded-2xl shadow-[0_10px_30px_-5px_rgba(15,23,42,0.06)] p-7 md:p-8">
            
            <!-- Alert Feedback -->
            @if(session('success'))
                <div class="mb-5 p-3.5 bg-emerald-50 border border-emerald-200 rounded-xl flex items-center gap-3 text-xs text-emerald-800">
                    <svg class="w-4 h-4 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            @if($errors->any())
                <div class="mb-5 p-3.5 bg-rose-50 border border-rose-200 rounded-xl flex items-start gap-3 text-xs text-rose-800">
                    <svg class="w-4 h-4 text-rose-600 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                    </svg>
                    <div>
                        <span class="font-semibold block mb-0.5">Terjadi Kesalahan:</span>
                        <ul class="list-disc list-inside space-y-0.5 text-[11px] text-rose-700">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            <form action="{{ route('admin.login.post') }}" method="POST" @submit="isLoading = true" class="space-y-4">
                @csrf

                <!-- Email Input -->
                <div>
                    <label for="email" class="block text-xs font-semibold text-[#334155] mb-1.5">
                        Alamat Email Super Admin
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-[#94a3b8]">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"/>
                            </svg>
                        </div>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus
                            placeholder="admin@idn.sch.id"
                            class="w-full pl-10 pr-3.5 py-2.5 bg-[#f8fafc] border border-[#e2e8f0] rounded-xl text-sm text-[#0f172a] placeholder-[#94a3b8] focus:outline-none focus:border-[#0c61cf] focus:ring-4 focus:ring-[#0c61cf]/10 transition-all duration-200">
                    </div>
                </div>

                <!-- Password Input -->
                <div>
                    <label for="password" class="block text-xs font-semibold text-[#334155] mb-1.5">
                        Kata Sandi
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-[#94a3b8]">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                        </div>
                        <input :type="showPassword ? 'text' : 'password'" id="password" name="password" required
                            placeholder="••••••••••••"
                            class="w-full pl-10 pr-10 py-2.5 bg-[#f8fafc] border border-[#e2e8f0] rounded-xl text-sm text-[#0f172a] placeholder-[#94a3b8] focus:outline-none focus:border-[#0c61cf] focus:ring-4 focus:ring-[#0c61cf]/10 transition-all duration-200">
                        <button type="button" @click="showPassword = !showPassword"
                            class="absolute inset-y-0 right-0 pr-3.5 flex items-center text-[#94a3b8] hover:text-[#475569] transition-colors focus:outline-none">
                            <svg x-show="!showPassword" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                            <svg x-show="showPassword" x-cloak class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l18 18"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Remember Me Checkbox -->
                <div class="flex items-center justify-between pt-1">
                    <label class="flex items-center gap-2 cursor-pointer select-none">
                        <input type="checkbox" name="remember" class="w-4 h-4 rounded text-[#0c61cf] focus:ring-[#0c61cf] border-[#cbd5e1]">
                        <span class="text-xs text-[#64748b]">Ingat saya di perangkat ini</span>
                    </label>
                    <span class="text-[11px] text-[#94a3b8] italic">Akses Terenkripsi</span>
                </div>

                <!-- Submit Button -->
                <div class="pt-2">
                    <button type="submit" :disabled="isLoading"
                        class="w-full py-2.5 px-4 bg-[#0c61cf] hover:bg-[#0b54b5] active:scale-[0.99] text-white text-sm font-semibold rounded-xl shadow-sm transition-all duration-200 flex items-center justify-center gap-2 disabled:opacity-70 disabled:cursor-not-allowed cursor-pointer">
                        <svg x-show="isLoading" x-cloak class="animate-spin -ml-1 mr-2 h-4 w-4 text-white" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        <span x-show="!isLoading">Masuk ke Dashboard</span>
                        <span x-show="isLoading" x-cloak>Memverifikasi Akun...</span>
                    </button>
                </div>
            </form>
        </div>

        <!-- Footer Info -->
        <div class="mt-6 text-center text-xs text-[#94a3b8]">
            &copy; {{ date('Y') }} IDN Boarding School. Sistem Administrasi Internal Terpusat.
        </div>
    </div>

</body>
</html>
