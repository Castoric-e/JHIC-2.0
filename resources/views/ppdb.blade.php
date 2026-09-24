<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="w-full max-w-full overflow-x-hidden">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <x-seo-head 
            title="PPDB IDN Boarding School - Pendaftaran Santri Baru SMP & SMA IT"
            description="Pendaftaran Peserta Didik Baru (PPDB) IDN Boarding School Bogor. Dapatkan informasi syarat pendaftaran, biaya pendidikan, jadwal seleksi, dan beasiswa."
            keywords="PPDB IDN, Pendaftaran SMP IT Bogor, Pendaftaran SMA IT Bogor, Beasiswa IDN Boarding School, Biaya Masuk IDN"
        />
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Geist:wght@400;500;600;700&family=Outfit:wght@400;500;600;700&family=Inter:ital,wght@0,400;0,500;0,600;1,500&family=Funnel+Display:wght@500;600;700;800&family=Figtree:wght@400;500;600;700&display=swap" rel="stylesheet">
        
        <!-- Alpine.js for Interactive Component State -->
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#fafafa] text-[#181d27] min-h-screen w-full max-w-full overflow-x-hidden font-sans antialiased flex flex-col items-center relative">

    <!-- 1. REUSABLE NAVBAR COMPONENT -->
    <x-navbar active="ppdb" />

    <!-- 2. HERO HEADER SECTION (Tablet max-w-[706px], Desktop max-w-[1120px]) -->
    <section class="w-full max-w-full overflow-hidden flex flex-col items-center mt-20 lg:mt-0 py-12 md:py-[90px] lg:py-[110px] px-6 md:px-[64px] bg-[#fafafa]">
        <div class="w-full max-w-[706px] lg:max-w-[1120px] mx-auto flex flex-col lg:flex-row items-start justify-between gap-8 md:gap-10">
            
            <!-- LEFT TEXT CONTAINER (604px width) -->
            <div class="w-full lg:w-[604px] max-w-full flex flex-col gap-6 md:gap-8 items-start text-left">
                
                <!-- SLOGAN BADGE (Status Pendaftaran Dibuka) -->
                <div class="bg-[#f0fdf4] border border-[#22c55e] flex items-center justify-center gap-2 px-4 py-1.5 rounded-full w-fit">
                    <span class="w-3.5 h-3.5 rounded-full bg-[#22c55e] shrink-0"></span>
                    <span class="text-[#16a34a] font-medium text-[14px] leading-[22px]">Status Pendaftaran Dibuka</span>
                </div>

                <!-- DESCRIPTION CONTAINER -->
                <div class="flex flex-col gap-4 md:gap-6 items-start text-left w-full">
                    <!-- MAIN HEADING -->
                    <h1 class="font-heading font-bold text-[32px] sm:text-[40px] md:text-[48px] lg:text-[56px] leading-[40px] sm:leading-[50px] md:leading-[58px] lg:leading-[68px] tracking-[-1.5px] md:tracking-[-2.24px] text-[#0b0d12] flex flex-col items-start text-left">
                        <span>Penerimaan Santri Baru</span>
                        <span>Tahun Ajaran <span class="text-[#0c61cf]">2027/2028</span></span>
                    </h1>

                    <!-- PARAGRAPH TEXT -->
                    <p class="text-[#717680] text-[15px] md:text-[16px] leading-[24px] max-w-[604px] font-normal text-left">
                        Gelombang 1 dibuka hingga <strong class="font-semibold text-[#181d27]">31 Desember 2026</strong>. Kuota terbatas per jurusan. Daftar lebih awal untuk mengunci tempat dan mendapatkan potongan uang masuk.
                    </p>
                </div>

                <!-- BUTTON CONTAINER (Daftar PPDB & Login) -->
                <div class="flex flex-wrap items-center justify-start gap-4 pt-2 w-full">
                    <a href="#biaya-pendidikan" class="group bg-[#0c61cf] text-white px-6 py-3 rounded-full font-semibold text-[15px] md:text-[16px] h-[48px] flex items-center justify-center gap-2 shadow-sm transition-all duration-300 hover:bg-[#094fa5] hover:shadow-md shrink-0">
                        <span>Daftar PPDB</span>
                        <svg class="w-4 h-4 transition-transform duration-300 ease-out transform translate-x-0 group-hover:translate-x-1.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                    <a href="/login" class="group bg-white border border-[#e5e7eb] text-[#374151] px-8 py-3 rounded-full font-semibold text-[15px] md:text-[16px] h-[48px] flex items-center justify-center gap-2 transition-all duration-300 hover:bg-slate-50 hover:border-[#0c61cf] shrink-0">
                        <span>Login</span>
                        <svg class="w-4 h-4 transition-transform duration-300 ease-out transform translate-x-0 group-hover:translate-x-1.5 text-[#374151] group-hover:text-[#0c61cf] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- RIGHT HERO ILLUSTRATION IMAGE -->
            <div class="w-full max-w-[460px] lg:w-[460px] h-[260px] sm:h-[290px] shrink-0 relative flex items-center justify-start mt-4 lg:mt-0">
                <img src="{{ asset('assets/pages/home/virtual-ngaji.avif') }}" alt="Penerimaan Santri Baru IDN" class="max-w-full max-h-full object-contain object-left">
            </div>

        </div>
    </section>


    <!-- 3. ALUR PENDAFTARAN SECTION (Tablet 2 columns grid, Desktop 3 columns grid) -->
    <section class="w-full max-w-full overflow-hidden flex flex-col items-center py-12 md:py-[90px] lg:py-[110px] px-6 md:px-[64px] bg-white">
        <div class="w-full max-w-[706px] lg:max-w-[1120px] mx-auto flex flex-col gap-8 md:gap-12">
            
            <!-- SECTION HEADER -->
            <div class="flex flex-col items-start text-left gap-2 w-full">
                <span class="text-[#717680] text-[14px] font-normal">Alur Pendaftaran</span>
                <h2 class="font-heading font-bold text-[28px] md:text-[32px] leading-[38px] md:leading-[42px] text-[#0b0d12]">
                    Enam langkah, jelas dari awal.
                </h2>
            </div>

            <!-- 6 CARDS GRID (2 cols on tablet sm/md, 3 cols on lg desktop) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 w-full justify-items-center">
                
                <!-- Card 1 -->
                <div class="group bg-white border border-[#e9eaeb] hover:border-[#0c61cf] rounded-[18px] p-6 flex flex-col gap-4 items-start w-full max-w-[343px] sm:max-w-[360px] h-full sm:h-[186px] justify-between transition-all duration-300 hover:shadow-[0px_12px_24px_rgba(12,97,207,0.12)]">
                    <span class="font-bold text-[36px] leading-[44px] text-[#c2d8f5] group-hover:text-[#0c61cf] transition-colors duration-300">01</span>
                    <div class="flex flex-col gap-2">
                        <h3 class="font-semibold text-[20px] leading-[28px] text-[#181d27]">Buat Akun</h3>
                        <p class="text-[#717680] text-[14px] leading-[22px]">Daftarkan email atau nomor WhatsApp, verifikasi OTP.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="group bg-white border border-[#e9eaeb] hover:border-[#0c61cf] rounded-[18px] p-6 flex flex-col gap-4 items-start w-full max-w-[343px] sm:max-w-[360px] h-full sm:h-[186px] justify-between transition-all duration-300 hover:shadow-[0px_12px_24px_rgba(12,97,207,0.12)]">
                    <span class="font-bold text-[36px] leading-[44px] text-[#c2d8f5] group-hover:text-[#0c61cf] transition-colors duration-300">02</span>
                    <div class="flex flex-col gap-2">
                        <h3 class="font-semibold text-[20px] leading-[28px] text-[#181d27]">Isi Data</h3>
                        <p class="text-[#717680] text-[14px] leading-[22px]">Lengkapi biodata calon santri dan orang tua.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="group bg-white border border-[#e9eaeb] hover:border-[#0c61cf] rounded-[18px] p-6 flex flex-col gap-4 items-start w-full max-w-[343px] sm:max-w-[360px] h-full sm:h-[186px] justify-between transition-all duration-300 hover:shadow-[0px_12px_24px_rgba(12,97,207,0.12)]">
                    <span class="font-bold text-[36px] leading-[44px] text-[#c2d8f5] group-hover:text-[#0c61cf] transition-colors duration-300">03</span>
                    <div class="flex flex-col gap-2">
                        <h3 class="font-semibold text-[20px] leading-[28px] text-[#181d27]">Unggah Berkas</h3>
                        <p class="text-[#717680] text-[14px] leading-[22px]">Pas foto, akta, KTP orang tua, KK, dan surat pernyataan.</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="group bg-white border border-[#e9eaeb] hover:border-[#0c61cf] rounded-[18px] p-6 flex flex-col gap-4 items-start w-full max-w-[343px] sm:max-w-[360px] h-full sm:h-[186px] justify-between transition-all duration-300 hover:shadow-[0px_12px_24px_rgba(12,97,207,0.12)]">
                    <span class="font-bold text-[36px] leading-[44px] text-[#c2d8f5] group-hover:text-[#0c61cf] transition-colors duration-300">04</span>
                    <div class="flex flex-col gap-2">
                        <h3 class="font-semibold text-[20px] leading-[28px] text-[#181d27]">Bayar Pendaftaran</h3>
                        <p class="text-[#717680] text-[14px] leading-[22px]">Transfer biaya pendaftaran dan unggah bukti bayar.</p>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="group bg-white border border-[#e9eaeb] hover:border-[#0c61cf] rounded-[18px] p-6 flex flex-col gap-4 items-start w-full max-w-[343px] sm:max-w-[360px] h-full sm:h-[186px] justify-between transition-all duration-300 hover:shadow-[0px_12px_24px_rgba(12,97,207,0.12)]">
                    <span class="font-bold text-[36px] leading-[44px] text-[#c2d8f5] group-hover:text-[#0c61cf] transition-colors duration-300">05</span>
                    <div class="flex flex-col gap-2">
                        <h3 class="font-semibold text-[20px] leading-[28px] text-[#181d27]">Tes Seleksi</h3>
                        <p class="text-[#717680] text-[14px] leading-[22px]">Tes akademik, wawancara, dan tes baca Qur'an.</p>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="group bg-white border border-[#e9eaeb] hover:border-[#0c61cf] rounded-[18px] p-6 flex flex-col gap-4 items-start w-full max-w-[343px] sm:max-w-[360px] h-full sm:h-[186px] justify-between transition-all duration-300 hover:shadow-[0px_12px_24px_rgba(12,97,207,0.12)]">
                    <span class="font-bold text-[36px] leading-[44px] text-[#c2d8f5] group-hover:text-[#0c61cf] transition-colors duration-300">06</span>
                    <div class="flex flex-col gap-2">
                        <h3 class="font-semibold text-[20px] leading-[28px] text-[#181d27]">Pengumuman</h3>
                        <p class="text-[#717680] text-[14px] leading-[22px]">Hasil seleksi diumumkan melalui akun PPDB.</p>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!-- 4. PERSYARATAN ADMINISTRASI SECTION -->
    <section class="w-full max-w-full overflow-hidden flex flex-col items-center py-12 md:py-[90px] lg:py-[110px] px-6 md:px-[64px] bg-[#fafafa]">
        <div class="w-full max-w-[706px] lg:max-w-[1120px] mx-auto flex flex-col lg:flex-row items-start justify-between gap-10 md:gap-14">
            
            <!-- LEFT ILLUSTRATION IMAGE -->
            <div class="w-full max-w-[450px] lg:w-[450px] h-[260px] sm:h-[284px] shrink-0 relative flex items-center justify-start">
                <img src="{{ asset('assets/pages/home/virtual-buku.avif') }}" alt="Persyaratan Administrasi IDN" class="max-w-full max-h-full object-contain object-left">
            </div>

            <!-- RIGHT CONTENT -->
            <div class="w-full lg:w-[580px] flex flex-col gap-6 items-start text-left">
                <div class="flex flex-col gap-2 w-full">
                    <span class="text-[#717680] text-[14px] font-normal">Apa yang harus dipersiapkan?</span>
                    <h2 class="font-heading font-bold text-[28px] md:text-[32px] leading-[38px] md:leading-[42px] text-[#0b0d12]">
                        Persyaratan Administrasi
                    </h2>
                </div>

                <div class="flex flex-col gap-3 w-full">
                    <h3 class="font-bold text-[20px] leading-[28px] text-[#181d27]">Apa yang harus di persiapkan?</h3>
                    
                    <!-- REQUIREMENTS LIST WITH BULLET POINTS -->
                    <ul class="flex flex-col gap-2 text-[#717680] text-[15px] md:text-[16px] leading-[24px]">
                        <li class="flex items-start gap-2">
                            <span class="text-[#717680] text-[18px] leading-[24px]">•</span>
                            <span>Pas photo 80% wajah, background biru</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-[#717680] text-[18px] leading-[24px]">•</span>
                            <span>Akte kelahiran</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-[#717680] text-[18px] leading-[24px]">•</span>
                            <span>KTP orang tua</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-[#717680] text-[18px] leading-[24px]">•</span>
                            <span>Kartu Keluarga</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-[#717680] text-[18px] leading-[24px]">•</span>
                            <span>Surat pernyataan orang tua (format disediakan)</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-[#717680] text-[18px] leading-[24px]">•</span>
                            <span>Surat pernyataan santri (format disediakan)</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-[#717680] text-[18px] leading-[24px]">•</span>
                            <span>Sertifikat prestasi (jika ada)</span>
                        </li>
                    </ul>
                </div>

                <!-- WARNING BADGE ALERT -->
                <div class="w-full bg-[#fff7ed] border border-[#fb923c] text-[#ea580c] px-5 py-2.5 rounded-full flex items-center gap-2.5 text-[13px] md:text-[14px]">
                    <div class="w-5 h-5 rounded-full border border-[#ea580c] flex items-center justify-center font-bold text-[12px] shrink-0">!</div>
                    <span>Semua berkas di atas disediakan dalam bentuk <b>Soft Copy/Scan</b></span>
                </div>
            </div>

        </div>
    </section>


    <!-- 5. BIAYA PENDIDIKAN SECTION WITH EXCLUSIVE ACCORDION -->
    <section id="biaya-pendidikan" class="w-full max-w-full overflow-hidden flex flex-col items-center py-12 md:py-[90px] lg:py-[110px] px-6 md:px-[64px] bg-white" x-data="{ activeAccordion: null }">
        <div class="w-full max-w-[706px] lg:max-w-[1120px] mx-auto flex flex-col gap-8 items-start">
            <div class="flex flex-col lg:flex-row items-start justify-between gap-10 lg:gap-14 w-full">
                
                <!-- LEFT TUITION INFO -->
                <div class="w-full lg:w-[394px] flex flex-col gap-6 items-start text-left shrink-0">
                    <div class="flex flex-col gap-2 w-full">
                        <span class="text-[#717680] text-[14px] font-normal">Biaya Pendidikan</span>
                        <h2 class="font-heading font-bold text-[32px] sm:text-[40px] md:text-[48px] leading-[40px] sm:leading-[50px] md:leading-[60px] tracking-[-1.5px] md:tracking-[-1.92px] text-[#0b0d12]">
                            <span class="text-[#0c61cf]">Transparan,</span><br class="hidden sm:inline">
                            tanpa biaya<br class="hidden sm:inline">
                            tersembunyi.
                        </h2>
                    </div>
                    <p class="text-[#717680] text-[15px] md:text-[16px] leading-[24px]">
                        Estimasi biaya untuk santri baru IDN Boarding School, tahun ajaran 2027/2028.
                    </p>

                    <!-- RED WARNING ALERT BOX -->
                    <div class="w-full bg-[#fef2f2] border border-[#fca5a5] text-[#dc2626] p-4 rounded-[14px] flex items-start gap-3 text-[13px] md:text-[14px] leading-[20px]">
                        <div class="w-5 h-5 rounded-full border border-[#dc2626] flex items-center justify-center font-bold text-[12px] shrink-0 mt-0.5">!</div>
                        <span>Biaya yang sudah di transfer tidak bisa dikembalikan dengan kondisi dan alasan apapun</span>
                    </div>
                </div>

                <!-- RIGHT EXCLUSIVE ACCORDION LIST -->
                <div class="w-full lg:w-[526px] flex flex-col gap-4">
                    
                    <!-- ACCORDION ITEM 1: Biaya Pendaftaran -->
                    <div class="bg-white border border-[#e9eaeb] rounded-[18px] p-5 sm:p-6 transition-all duration-300 shadow-2xs"
                         :class="activeAccordion === 1 ? 'border-[#0c61cf] ring-2 ring-[#0c61cf]/10 shadow-md' : 'hover:border-slate-300'">
                        <button type="button" 
                                @click="activeAccordion = (activeAccordion === 1 ? null : 1)"
                                class="w-full flex items-center justify-between gap-4 text-left cursor-pointer focus:outline-none">
                            <div class="flex flex-col gap-1">
                                <h3 class="font-semibold text-[20px] leading-[28px] text-[#181d27]">Biaya Pendaftaran</h3>
                                <span class="text-[#717680] text-[14px]">Sekali Bayar</span>
                            </div>
                            <div class="flex items-center gap-3 shrink-0">
                                <span class="font-bold text-[22px] sm:text-[24px] text-[#181d27]">Rp 900.000</span>
                                <svg class="w-5 h-5 text-[#181d27] transition-transform duration-300"
                                     :class="activeAccordion === 1 ? 'rotate-180 text-[#0c61cf]' : ''"
                                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </div>
                        </button>
                        <div x-show="activeAccordion === 1" x-collapse class="pt-4 mt-4 border-t border-[#e9eaeb]">
                            <p class="text-[#545e6f] text-[14px] sm:text-[15px] leading-[24px]">
                                Pembayaran biaya pendaftaran dapat dilakukan paling lambat 3 hari setelah pembuatan akun di sistem PSB Online. Perlu diketahui bahwa biaya tersebut sudah mencakup seluruh tahapan Tes Masuk, mulai dari psikotes, tes online, hingga tes wawancara untuk calon santri dan orang tua, sehingga Anda tidak perlu khawatir akan adanya biaya tambahan untuk rangkaian ujian tersebut.
                            </p>
                        </div>
                    </div>

                    <!-- ACCORDION ITEM 2: Uang Masuk -->
                    <div class="bg-white border border-[#e9eaeb] rounded-[18px] p-5 sm:p-6 transition-all duration-300 shadow-2xs"
                         :class="activeAccordion === 2 ? 'border-[#0c61cf] ring-2 ring-[#0c61cf]/10 shadow-md' : 'hover:border-slate-300'">
                        <button type="button" 
                                @click="activeAccordion = (activeAccordion === 2 ? null : 2)"
                                class="w-full flex items-center justify-between gap-4 text-left cursor-pointer focus:outline-none">
                            <div class="flex flex-col gap-1">
                                <h3 class="font-semibold text-[20px] leading-[28px] text-[#181d27]">Uang Masuk</h3>
                                <span class="text-[#717680] text-[14px]">Sekali Bayar</span>
                            </div>
                            <div class="flex items-center gap-3 shrink-0">
                                <span class="font-bold text-[22px] sm:text-[24px] text-[#181d27]">Rp 40.000.000</span>
                                <svg class="w-5 h-5 text-[#181d27] transition-transform duration-300"
                                     :class="activeAccordion === 2 ? 'rotate-180 text-[#0c61cf]' : ''"
                                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </div>
                        </button>
                        <div x-show="activeAccordion === 2" x-collapse class="pt-4 mt-4 border-t border-[#e9eaeb]">
                            <p class="text-[#545e6f] text-[14px] sm:text-[15px] leading-[24px]">
                                Biaya pendaftaran tersebut sudah mencakup seluruh kebutuhan awal santri selama tahun pertama, meliputi Biaya Pengembangan Pendidikan, Biaya Organisasi Santri, ekstrakurikuler tahun pertama, pelayanan kesehatan, serta buku atau modul pembelajaran. Selain itu, calon santri juga akan menerima fasilitas lengkap berupa 3 stel seragam sekolah, 1 stel seragam olahraga, kebutuhan asrama (kasur, ranjang, lemari, dan lainnya), serta pembiayaan seluruh kegiatan santri untuk tahun pertama. Harap diperhatikan bahwa total biaya ini belum termasuk biaya SPP bulanan untuk bulan Juli 2026.
                            </p>
                        </div>
                    </div>

                    <!-- ACCORDION ITEM 3: SPP Bulanan -->
                    <div class="bg-white border border-[#e9eaeb] rounded-[18px] p-5 sm:p-6 transition-all duration-300 shadow-2xs"
                         :class="activeAccordion === 3 ? 'border-[#0c61cf] ring-2 ring-[#0c61cf]/10 shadow-md' : 'hover:border-slate-300'">
                        <button type="button" 
                                @click="activeAccordion = (activeAccordion === 3 ? null : 3)"
                                class="w-full flex items-center justify-between gap-4 text-left cursor-pointer focus:outline-none">
                            <div class="flex flex-col gap-1">
                                <h3 class="font-semibold text-[20px] leading-[28px] text-[#181d27]">SPP Bulanan</h3>
                                <span class="text-[#717680] text-[14px]">per Bulan</span>
                            </div>
                            <div class="flex items-center gap-3 shrink-0">
                                <span class="font-bold text-[22px] sm:text-[24px] text-[#181d27]">Rp 4.000.000</span>
                                <svg class="w-5 h-5 text-[#181d27] transition-transform duration-300"
                                     :class="activeAccordion === 3 ? 'rotate-180 text-[#0c61cf]' : ''"
                                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </div>
                        </button>
                        <div x-show="activeAccordion === 3" x-collapse class="pt-4 mt-4 border-t border-[#e9eaeb]">
                            <p class="text-[#545e6f] text-[14px] sm:text-[15px] leading-[24px]">
                                Biaya SPP bulanan dibayarkan selama 12 bulan penuh setiap tahunnya dengan besaran tetap (tanpa pengurangan akibat libur, cuti, atau ketidak hadiran) dan wajib dilunasi paling lambat tanggal 10 setiap bulan. Biaya ini sudah mencakup makan 3x sehari, fasilitas kesehatan standar (di luar biaya rawat inap, operasi, atau cek lab), laundry hingga 20 kg per bulan (kelebihan bobot dikenakan Rp7.500/kg), serta biaya pendidikan dan ujian reguler/semesteran. Khusus ujian pilihan seperti sertifikasi IT (Cisco, Android Developer, AWS Cloud) atau pengambilan sanad, biaya tidak termasuk dalam SPP bulanan. Adapun bagi santri yang sedang menjalankan kegiatan PKL di luar pesantren, berlaku tarif khusus sebesar Rp1.000.000 per bulan.
                            </p>
                        </div>
                    </div>

                    <!-- ACCORDION ITEM 4: Biaya Tahunan -->
                    <div class="bg-white border border-[#e9eaeb] rounded-[18px] p-5 sm:p-6 transition-all duration-300 shadow-2xs"
                         :class="activeAccordion === 4 ? 'border-[#0c61cf] ring-2 ring-[#0c61cf]/10 shadow-md' : 'hover:border-slate-300'">
                        <button type="button" 
                                @click="activeAccordion = (activeAccordion === 4 ? null : 4)"
                                class="w-full flex items-center justify-between gap-4 text-left cursor-pointer focus:outline-none">
                            <div class="flex flex-col gap-1">
                                <h3 class="font-semibold text-[20px] leading-[28px] text-[#181d27]">Biaya Tahunan</h3>
                                <span class="text-[#717680] text-[14px]">per Tahun</span>
                            </div>
                            <div class="flex items-center gap-3 shrink-0">
                                <span class="font-bold text-[22px] sm:text-[24px] text-[#181d27]">Rp 4.000.000</span>
                                <svg class="w-5 h-5 text-[#181d27] transition-transform duration-300"
                                     :class="activeAccordion === 4 ? 'rotate-180 text-[#0c61cf]' : ''"
                                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </div>
                        </button>
                        <div x-show="activeAccordion === 4" x-collapse class="pt-4 mt-4 border-t border-[#e9eaeb]">
                            <p class="text-[#545e6f] text-[14px] sm:text-[15px] leading-[24px]">
                                Biaya tahunan mencakup perawatan fasilitas, pemeliharaan peralatan IT laboratorium, pendaftaran ulang tahunan, serta buku dan modul pembelajaran untuk tahun ajaran berikutnya.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>


    <!-- 6. REGISTRATION BANNER / PPDB CTA SECTION -->
    <section class="w-full max-w-full overflow-hidden flex flex-col items-center py-12 md:py-[90px] px-6 md:px-[64px] bg-[#fafafa]">
        <div class="w-full max-w-[706px] lg:max-w-[1120px] mx-auto bg-[#0c61cf] rounded-[20px] p-6 sm:p-[40px] min-h-[364px] text-white flex flex-col justify-between gap-6 md:gap-8 relative overflow-hidden shadow-lg">
            <div class="w-[390px] h-[423px] rounded-full bg-white/20 blur-[64px] absolute -right-20 -top-40 pointer-events-none"></div>

            <div class="flex flex-col gap-4 z-10 max-w-[672px]">
                <span class="text-[#e0e7ff] text-[14px]">PPDB 2027/2028</span>
                <h2 class="font-heading font-bold text-[28px] sm:text-[36px] md:text-[48px] leading-[36px] sm:leading-[46px] md:leading-[60px] tracking-[-1.5px] md:tracking-[-1.92px]">
                    <span class="text-[#ff7a29]">Kuota terbatas.</span> Ambil langkahmu hari ini.
                </h2>
                <p class="text-[#d5d7da] text-[15px] md:text-[16px] leading-[24px]">
                    Gelombang 1 dibuka hingga kuota per jurusan terpenuhi. Daftar sekarang untuk mengamankan tempat dan mendapatkan potongan uang masuk.
                </p>
            </div>

            <!-- BUTTONS CONTAINER -->
            <div class="flex flex-wrap items-center gap-4 z-10">
                <a href="#biaya-pendidikan" class="group bg-white text-[#0c61cf] px-6 py-3 rounded-full font-semibold text-[15px] md:text-[16px] h-[48px] flex items-center justify-center gap-2 shadow-sm transition-all duration-300 hover:bg-slate-100">
                    <span>Mulai Pendaftaran</span>
                    <svg class="w-4 h-4 transition-transform duration-300 ease-out transform translate-x-0 group-hover:translate-x-1.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
                <a href="https://wa.me/6282210102006" target="_blank" class="group bg-transparent border border-white/60 text-white px-6 py-3 rounded-full font-semibold text-[15px] md:text-[16px] h-[48px] flex items-center justify-center gap-2 transition-all duration-300 hover:bg-white/10">
                    <span>Tanya Via WhatsApp</span>
                    <svg class="w-4 h-4 transition-transform duration-300 ease-out transform translate-x-0 group-hover:translate-x-1.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>


    <!-- 7. REUSABLE FOOTER COMPONENT -->
    <x-footer />

    <!-- 8. REUSABLE CHATBOT COMPONENT -->
    <x-chatbot />

    </body>
</html>
