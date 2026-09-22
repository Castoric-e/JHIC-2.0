<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <x-seo-head 
        :title="$article->title . ' | IDN Boarding School'"
        :description="Str::limit(strip_tags($article->content), 155)"
        :image="asset('assets/' . $article->image)"
        :article="$article"
    />
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@400;500;600;700&family=Outfit:wght@400;500;600;700&family=Inter:wght@400;500;600;700&family=Funnel+Display:wght@500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Alpine.js for Interactive Component State -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <!-- Tailwind CSS Vite Import -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        [x-cloak] { display: none !important; }
        .article-body h3 {
            font-size: 1.375rem;
            line-height: 1.875rem;
            font-weight: 700;
            color: #181d27;
            font-family: 'Outfit', 'Funnel Display', sans-serif;
            margin-top: 1.5rem;
            margin-bottom: 0.5rem;
        }
        .article-body p {
            color: #545e6f;
            font-size: 1rem;
            line-height: 1.625;
            font-weight: 400;
        }
        .article-body strong {
            color: #181d27;
            font-weight: 600;
        }
        .article-body a {
            color: #0c61cf;
            font-weight: 600;
            text-decoration: underline;
            transition: color 0.2s ease;
        }
        .article-body a:hover {
            color: #0b54b5;
        }
        .article-body ul, .article-body ol {
            color: #545e6f;
            margin-top: 0.75rem;
            margin-bottom: 0.75rem;
        }
        .article-body li {
            line-height: 1.625;
            font-size: 1rem;
            font-weight: 400;
        }
    </style>
</head>
<body class="bg-[#fafafa] text-text-main font-sans min-height-screen overflow-x-hidden leading-normal">

    <!-- REUSABLE NAVBAR COMPONENT -->
    <x-navbar active="artikel" />

    <!-- MAIN BODY -->
    <div class="mt-[106px] w-full flex flex-col items-center">
        
        <!-- HEADER SECTION -->
        <div class="w-[1120px] pt-[60px] pb-5 flex flex-col gap-6 max-[1160px]:w-[90%] px-5">
            <a href="/" class="flex items-center gap-2 text-text-muted text-base font-medium cursor-pointer transition-colors duration-200 hover:text-brand-primary self-start">
                <img src="{{ asset('assets/arrow_left.svg') }}" alt="Back icon" class="w-5 h-5">
                Kembali ke artikel
            </a>
            
            <h1 class="font-heading text-5xl font-bold leading-tight text-text-title tracking-[-1.5px] max-md:text-3xl">
                @php
                    $title = $article->title;
                    $highlights = [
                        "Hexagon Fest An Nahl Ciangsana",
                        "Juara 1 di Lapangan Juga Bisa!",
                        "Raih Emas Olimpiade",
                        "Raih Perak Olimpiade",
                        "Olimpiade Bahasa Inggris POSN",
                        "Sumo",
                        "Jenius Medlab",
                        "Raih Juara 2 & 3",
                        "UDINUS Semarang",
                        "Prospek Masa Depan",
                        "Bantuan Bencana Banjir di Bali",
                        "Lereng Gunung Lawu di Solo",
                        "Siswa Backpacker di Istanbul",
                        "Belanda dan Arab Saudi",
                        "IDN Open House 2025",
                        "Mengajar Coding di Malaysia",
                        "Berangkatkan 30 Siswa Jelajahi 20 Negara",
                        "Juara 1 Nasional",
                        "IDN Boarding School.",
                        "Raih Juara 2 Kompetisi",
                        "Juara 2 Nasional",
                        "di Universitas Udayana",
                        "Juara 1 Coding Scratch Nasional",
                        "di IIBS Almaahira Malang",
                        "Resmi Terbit"
                    ];
                    $rendered = false;
                    foreach ($highlights as $hl) {
                        if (str_contains($title, $hl)) {
                            $parts = explode($hl, $title, 2);
                            echo htmlspecialchars($parts[0]) . '<span class="text-brand-primary">' . htmlspecialchars($hl) . '</span>' . htmlspecialchars($parts[1] ?? '');
                            $rendered = true;
                            break;
                        }
                    }
                    if (!$rendered) {
                        echo htmlspecialchars($title);
                    }
                @endphp
            </h1>
            
            <div class="flex items-center gap-3 text-sm text-text-muted">
                <div class="flex items-center gap-1.5">
                    <img src="{{ asset('assets/calendar.svg') }}" alt="Calendar icon" class="w-4 h-4">
                    <span>{{ date('d F Y', strtotime($article->published_at)) }}</span>
                </div>
                <div class="w-px h-3.5 bg-border-custom"></div>
                <div class="flex items-center gap-1.5">
                    <span>{{ $article->category }}</span>
                </div>
                <div class="w-px h-3.5 bg-border-custom"></div>
                <div class="flex items-center gap-1.5">
                    <span>Waktu baca: {{ $article->read_time }}</span>
                </div>
            </div>
        </div>

        <!-- MAIN LAYOUT GRID -->
        <div class="w-[1120px] grid grid-cols-[745px_350px] gap-[25px] pb-[60px] max-[1160px]:w-[90%] max-[1160px]:grid-cols-1 max-[1160px]:gap-10">
            
            <!-- LEFT COLUMN (Main Content) -->
            <div class="flex flex-col gap-10">
                @if(!empty($article->detail_image) || !empty($article->image))
                    <img src="{{ asset('assets/' . rawurlencode($article->detail_image ?? $article->image)) }}" alt="{{ $article->title }}" class="w-full block h-[482px] max-md:h-[300px] shrink-0 object-cover object-top rounded-[10px]" style="border-radius: 10px;">
                @else
                    <div class="w-full h-[320px] max-md:h-[200px] bg-gradient-to-br from-[#0c61cf]/10 via-[#fafafa] to-[#ff7a29]/10 rounded-[10px] flex items-center justify-center p-8" style="border-radius: 10px;">
                        <div class="flex flex-col items-center gap-3 text-center">
                            <div class="w-16 h-16 rounded-full bg-brand-primary/10 flex items-center justify-center text-brand-primary">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                            </div>
                            <span class="text-text-muted font-medium text-sm">IDN Boarding School News</span>
                        </div>
                    </div>
                @endif
                
                <div class="article-body text-text-muted text-base font-normal leading-[1.625] flex flex-col gap-5">
                    {!! $article->content !!}
                </div>
                
                <!-- CTA & Inquiry Box -->
                <div class="pt-8 flex flex-col gap-6 article-body">
                    <h3 class="!text-2xl !mt-0 font-bold text-[#181d27]">Mau ikuti jejak para juara dan bergabung di Boarding School Islami terbaik?</h3>
                    
                    <p>Pendaftaran Santri Baru Tahun Ajaran 2025/2026 telah dibuka!<br>
                    Daftar sekarang melalui:<br>
                    <a href="http://psb.idn.sch.id" target="_blank" class="text-brand-primary underline font-semibold hover:text-brand-hover">http://psb.idn.sch.id</a> atau hubungi 08115670010</p>

                    <p>Dapatkan lingkungan belajar Islam yang nyaman dan berprestasi!<br>
                    Gedung Pembelajaran SMP - SMK IDN<br>
                    Kurikulum berbasis teknologi dan entrepreneurship<br>
                    Fasilitas lengkap:</p>

                    <ul class="space-y-1.5 my-3 pl-4 list-disc">
                      <li>Asrama</li>
                      <li>Masjid</li>
                      <li>Bengkel</li>
                      <li>Lab Komputer</li>
                      <li>Lapangan</li>
                    </ul>

                    <p>Jalur Masuk Tersedia:</p>

                    <ul class="space-y-1.5 my-3 pl-4 list-disc">
                      <li>Jalur Regular SMP-SMK</li>
                      <li>Jalur Beasiswa SMP (khusus santri berprestasi)</li>
                      <li>Jalur Beasiswa Yatim/Dhuafa</li>
                      <li>Jalur Juara 1 Nasional (Beasiswa 100%)</li>
                      <li>Jalur Beasiswa 50% (Siswa ranking 1 di sekolah)</li>
                      <li>Jalur Hafiz 30 Juz (Beasiswa 100%)</li>
                      <li>Beasiswa Prestasi 2 (Syarat ketentuan berlaku)</li>
                    </ul>

                    <div class="text-text-muted text-base leading-[1.625] flex flex-col gap-3 pt-4">
                        <p>Baca juga artikel lain tentang prestasi siswa SMK IDN <a href="https://idn.sch.id/blog" target="_blank" class="text-brand-primary underline font-semibold hover:text-brand-hover">di sini</a>.</p>
                        <p>Semoga bermanfaat. Kunjungi youtube kami: <a href="https://www.youtube.com/@IDNTV2022" target="_blank" class="text-brand-primary underline font-semibold hover:text-brand-hover">https://www.youtube.com/@IDNTV2022</a></p>
                        
                        <p>Ada yang ingin ditanyakan? Silahkan konsultasikan dengan Admin Kami.<br>
                        Hubungi Kami (Admin): <strong>0822 – 1010 – 2006</strong></p>
                        
                        <p>Klik link di bawah ini untuk melihat semua cabang sekolah kami Ikhwan & Akhwat:<br>
                        – Pamijahan | – Solo | – Sentul | – Jonggol | – Akhwat | – Malang</p>
                        
                        <p><strong>Kita Sharing Bareng Yuk</strong><br>
                        Like, Comment & Share<br>
                        Mau Tau Lebih Banyak Edukasi Bermanfaat? Follow sosial media kami:<br>
                        <strong>Jonggol:</strong> <a href="https://www.instagram.com/idnboardingschool/" target="_blank" class="text-brand-primary underline font-semibold hover:text-brand-hover">@idnboardingschool</a><br>
                        <strong>Solo:</strong> <a href="https://www.instagram.com/idnboardingschoolsolo/" target="_blank" class="text-brand-primary underline font-semibold hover:text-brand-hover">@idnboardingschoolsolo</a><br>
                        <strong>Pamijahan:</strong> <a href="https://www.instagram.com/idnboardingschoolpmjbogor/" target="_blank" class="text-brand-primary underline font-semibold hover:text-brand-hover">@idnboardingschoolpmjbogor</a><br>
                        <strong>Sentul:</strong> <a href="https://www.instagram.com/idnboardingschoolsentul/" target="_blank" class="text-brand-primary underline font-semibold hover:text-brand-hover">@idnboardingschoolsentul</a><br>
                        <strong>IDN Akhwat:</strong> <a href="https://www.instagram.com/smpsmk.idnakhwat/" target="_blank" class="text-brand-primary underline font-semibold hover:text-brand-hover">@smpsmk.idnakhwat</a></p>
                    </div>
                </div>
            </div>

            <!-- RIGHT COLUMN (Sidebar Related Articles - Figma Spec 20032:33628) -->
            <div class="flex flex-col gap-[16px] w-[350px] shrink-0">
                @foreach($relatedArticles as $related)
                    <a href="{{ route('articles.show', $related->slug) }}" class="flex gap-[16px] items-center group cursor-pointer w-full h-[150px] shrink-0" style="height: 150px;">
                        <div class="w-[150px] h-[150px] min-w-[150px] max-w-[150px] min-h-[150px] max-h-[150px] rounded-[10px] overflow-hidden shrink-0 bg-slate-100 flex items-center justify-center relative" style="width: 150px; height: 150px; min-width: 150px; max-width: 150px; min-height: 150px; max-height: 150px;">
                            @if(!empty($related->image))
                                <img src="{{ asset('assets/' . rawurlencode($related->image)) }}" alt="{{ $related->title }}" class="w-[150px] h-[150px] object-cover rounded-[10px] transition-transform duration-300 group-hover:scale-105" style="width: 150px; height: 150px; object-fit: cover;">
                            @else
                                <div class="text-brand-primary/60 font-bold text-xs text-center p-2">IDN News</div>
                            @endif
                        </div>
                        <div class="flex flex-col justify-center gap-[8px] flex-1 shrink-0 py-1 overflow-hidden">
                            <h3 class="text-[16px] font-semibold text-[#181d27] leading-[24px] line-clamp-3 group-hover:text-[#0c61cf] transition-colors duration-200">{{ $related->title }}</h3>
                            <div class="flex items-center gap-[8px] text-[12px] text-[#717680]">
                                <div class="flex items-center gap-[4px]">
                                    <img src="{{ asset('assets/calendar_alt.svg') }}" alt="Calendar small" class="w-[14px] h-[14px] shrink-0 opacity-70">
                                    <span>{{ date('j F Y', strtotime($related->published_at)) }}</span>
                                </div>
                                <div class="w-px h-[12px] bg-[#d9d9d9] shrink-0"></div>
                                <span>{{ $related->category }}</span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            
        </div>

        <!-- PPDB BANNER SECTION -->
        <div class="w-[1120px] mb-20 max-[1160px]:w-[90%]">
            <div class="bg-brand-primary rounded-[20px] p-10 relative overflow-hidden flex flex-col gap-8 shadow-[0px_10px_30px_rgba(12,97,207,0.2)] after:content-[''] after:absolute after:w-[390px] after:h-[423px] after:bg-white/12 after:blur-[64px] after:rounded-full after:-top-[203px] after:-right-[100px] after:pointer-events-none">
                <div class="max-w-[672px] flex flex-col gap-4 z-10">
                    <span class="text-white/80 text-sm font-medium">PPDB 2027/2028</span>
                    <h2 class="font-heading text-5xl font-bold text-white leading-tight tracking-[-1px] max-md:text-3xl"><span class="text-brand-orange">Kuota terbatas.</span> Ambil langkahmu hari ini.</h2>
                    <p class="text-white/85 text-base leading-normal">Gelombang 1 dibuka hingga kuota per jurusan terpenuhi. Daftar sekarang untuk mengamankan tempat dan mendapatkan potongan uang masuk.</p>
                </div>
                <div class="flex gap-4 items-center z-10">
                    <a href="#" class="bg-white text-brand-primary py-3 px-6 rounded-full text-base font-semibold transition-all duration-200 hover:scale-[1.01] hover:shadow-[0px_4px_15px_rgba(255,255,255,0.2)]">Mulai Pendaftaran</a>
                    <a href="#" class="bg-white/10 text-white py-3 px-6 rounded-full text-base font-semibold transition-all duration-200 hover:bg-white/20 hover:scale-[1.01]">Tanya Via WhatsApp</a>
                </div>
            </div>
        </div>

        <!-- FOOTER SECTION -->
        <x-footer />

    <!-- REUSABLE CHATBOT COMPONENT -->
    <x-chatbot />

</body>
</html>
