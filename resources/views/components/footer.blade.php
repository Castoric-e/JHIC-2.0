<!-- REUSABLE FOOTER COMPONENT -->
<footer class="w-full bg-white border-t border-[#e9eaeb] pt-16 md:pt-[110px] pb-10 md:pb-[64px] flex flex-col items-center">
    <div class="w-[1120px] max-w-full mx-auto flex flex-col gap-10 md:gap-[64px] px-4 sm:px-6">
        
        <!-- TOP FOOTER CONTENT -->
        <div class="flex justify-between items-start gap-8 md:gap-12 w-full max-lg:flex-col">
            
            <!-- BRAND & SOCIALS -->
            <div class="flex flex-col gap-6 md:gap-8 w-full lg:w-[253px] shrink-0">
                <a href="/" class="block">
                    <img src="{{ asset('assets/logo_idn_footer.png') }}" alt="Logo IDN" class="h-[60px] sm:h-[72px] w-auto object-contain">
                </a>
                <div class="flex flex-col gap-4 md:gap-5 text-[14px] leading-[20px]">
                    <p class="text-[#414651] max-w-[400px] lg:max-w-none">
                        Pesantren berbasis IT yang membentuk generasi muslim penghafal Al-Qur'an, berkarakter, dan unggul di dunia teknologi.
                    </p>
                    <div class="flex flex-col font-medium italic text-[#0c61cf] tracking-[-0.56px]">
                        <span>#Jagoan IT Pinter Ngaji</span>
                        <span>#Muda Mendunia</span>
                    </div>
                </div>
                <!-- SOCIAL BUTTONS -->
                <div class="flex items-center gap-3">
                    <!-- Instagram -->
                    <a href="https://www.instagram.com/idnboardingschool/" target="_blank" rel="noopener noreferrer" class="group w-10 sm:w-12 h-10 sm:h-12 rounded-full border-2 border-[#e9eaeb] bg-white flex items-center justify-center text-[#717680] transition-all duration-200 hover:border-[#0c61cf] hover:text-[#0c61cf] hover:shadow-[0px_4px_20px_rgba(12,97,207,0.15)]">
                        <svg class="w-5 sm:w-6 h-5 sm:h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="24" height="24" rx="6" fill="currentColor"/>
                            <rect x="5" y="5" width="14" height="14" rx="4" stroke="white" stroke-width="1.8" fill="none"/>
                            <circle cx="12" cy="12" r="3.2" stroke="white" stroke-width="1.8" fill="none"/>
                            <circle cx="15.8" cy="8.2" r="1" fill="white"/>
                        </svg>
                    </a>
                    <!-- YouTube -->
                    <a href="https://www.youtube.com/@IDNBoardingSchool" target="_blank" rel="noopener noreferrer" class="group w-10 sm:w-12 h-10 sm:h-12 rounded-full border-2 border-[#e9eaeb] bg-white flex items-center justify-center text-[#717680] transition-all duration-200 hover:border-[#0c61cf] hover:text-[#0c61cf] hover:shadow-[0px_4px_20px_rgba(12,97,207,0.15)]">
                        <svg class="w-5 sm:w-6 h-5 sm:h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="2" y="4" width="20" height="16" rx="4" fill="currentColor"/>
                            <path d="M10 9v6l5-3-5-3z" fill="white"/>
                        </svg>
                    </a>
                    <!-- Facebook -->
                    <a href="https://www.facebook.com/idnboardingschool" target="_blank" rel="noopener noreferrer" class="group w-10 sm:w-12 h-10 sm:h-12 rounded-full border-2 border-[#e9eaeb] bg-white flex items-center justify-center text-[#717680] transition-all duration-200 hover:border-[#0c61cf] hover:text-[#0c61cf] hover:shadow-[0px_4px_20px_rgba(12,97,207,0.15)]">
                        <svg class="w-5 sm:w-6 h-5 sm:h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12" cy="12" r="10" fill="currentColor"/>
                            <path d="M15 11.5h-2V20h-3v-8.5H8.5V9H10V7.2C10 5.6 11 4.5 12.8 4.5H15v2.5h-1.3c-.8 0-1 .3-1 1V9h2.3L15 11.5z" fill="white"/>
                        </svg>
                    </a>
                    <!-- WhatsApp -->
                    <a href="https://wa.me/6282210102006" target="_blank" rel="noopener noreferrer" class="group w-10 sm:w-12 h-10 sm:h-12 rounded-full border-2 border-[#e9eaeb] bg-white flex items-center justify-center text-[#717680] transition-all duration-200 hover:border-[#0c61cf] hover:text-[#0c61cf] hover:shadow-[0px_4px_20px_rgba(12,97,207,0.15)]">
                        <svg class="w-4 sm:w-5 h-4 sm:h-5 fill-current" viewBox="0 0 15 15">
                            <path d="M7.5 0C3.35833 0 0 3.35833 0 7.5C0 8.89167 0.383341 10.2 1.05001 11.325L0 15L3.67498 13.95C4.79998 14.6167 6.10833 15 7.5 15C11.6417 15 15 11.6417 15 7.5C15 3.35833 11.6417 0 7.5 0ZM11.5167 10.3667C11.3417 10.8583 10.5083 11.3083 10.1333 11.35C9.75831 11.3917 9.40835 11.525 7.67502 10.8417C5.59168 10.0083 4.26667 7.85834 4.16667 7.725C4.06667 7.59167 3.33333 6.60834 3.33333 5.59167C3.33333 4.57501 3.85832 4.08333 4.04999 3.86667C4.24165 3.65833 4.46668 3.60833 4.60002 3.60833C4.74168 3.60833 4.875 3.60833 5 3.61666C5.14167 3.61666 5.30832 3.61666 5.45832 3.96666C5.64166 4.375 6.03332 5.39167 6.08332 5.48333C6.13332 5.58333 6.16667 5.70833 6.10001 5.84166C6.02501 5.975 5.99167 6.06666 5.89167 6.18333C5.79167 6.3 5.67501 6.45 5.58334 6.54167C5.47501 6.64167 5.37502 6.75 5.49169 6.95834C5.61669 7.15834 6.02502 7.84166 6.63335 8.38333C7.41668 9.09166 8.075 9.30833 8.28334 9.40833C8.48334 9.50833 8.60831 9.49166 8.72498 9.35833C8.84998 9.225 9.24167 8.75833 9.375 8.55C9.50833 8.35 9.64166 8.38333 9.83332 8.45C10.025 8.51667 11.025 9.025 11.2333 9.125C11.4333 9.23333 11.575 9.28334 11.625 9.36667C11.675 9.45 11.675 9.86666 11.5083 10.35L11.5167 10.3667Z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- LINKS & SCHOOL INFO -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-8 md:gap-14 items-start w-full">
                
                <!-- Menu Utama -->
                <div class="flex flex-col gap-3">
                    <h4 class="font-semibold text-[14px] text-[#181d27]">Menu Utama</h4>
                    <div class="flex flex-col gap-1.5 text-[14px] text-[#717680]">
                        <a href="/" class="hover:text-[#0c61cf]">Beranda</a>
                        <a href="/ppdb" class="hover:text-[#0c61cf]">PPDB</a>
                        <a href="/tentang-kami" class="hover:text-[#0c61cf]">Tentang Kami</a>
                        <a href="/program" class="hover:text-[#0c61cf]">Program</a>
                        <a href="/career-center" class="hover:text-[#0c61cf]">Career Center</a>
                        <a href="/artikel/idn-relawan-dan-markaz-bersama-as-sunnah-salurkan-bantuan-bencana-banjir-di-bali" class="hover:text-[#0c61cf]">Artikel</a>
                        <a href="/kontak" class="hover:text-[#0c61cf]">Kontak</a>
                    </div>
                </div>

                <!-- Program -->
                <div class="flex flex-col gap-3">
                    <h4 class="font-semibold text-[14px] text-[#181d27]">Program</h4>
                    <div class="flex flex-col gap-1.5 text-[14px] text-[#717680]">
                        <a href="/program/pkl" class="hover:text-[#0c61cf]">PKL</a>
                        <a href="/program/idn-mengajar" class="hover:text-[#0c61cf]">IDN Mengajar</a>
                        <a href="/program/ekstrakurikuler" class="hover:text-[#0c61cf]">Ekstrakurikuler</a>
                        <a href="/program/edurace" class="hover:text-[#0c61cf]">Edurace</a>
                        <a href="/program/ldks" class="hover:text-[#0c61cf]">LDKS</a>
                        <a href="/program/live-in" class="hover:text-[#0c61cf]">Live In</a>
                        <a href="/program/business-survival" class="hover:text-[#0c61cf]">Business Survival</a>
                        <a href="/program/backpacker" class="hover:text-[#0c61cf]">Backpacker</a>
                        <a href="/program/it-camp" class="hover:text-[#0c61cf]">IT Camp</a>
                        <a href="/program/idn-bersyukur" class="hover:text-[#0c61cf]">IDN Bersyukur</a>
                    </div>
                </div>

                <!-- Artikel -->
                <div class="flex flex-col gap-3">
                    <h4 class="font-semibold text-[14px] text-[#181d27]">Artikel</h4>
                    <div class="flex flex-col gap-1.5 text-[14px] text-[#717680]">
                        <a href="#" class="hover:text-[#0c61cf]">Prestasi</a>
                        <a href="#" class="hover:text-[#0c61cf]">News & Event</a>
                    </div>
                </div>

                <!-- Informasi Sekolah -->
                <div class="flex flex-col gap-3 col-span-2 sm:col-span-1">
                    <h4 class="font-semibold text-[14px] text-[#181d27]">Informasi Sekolah</h4>
                    <div class="flex flex-col gap-3 text-[14px] text-[#717680]">
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 shrink-0 text-[#717680] fill-current mt-0.5" viewBox="0 0 24 24">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                            </svg>
                            <p class="leading-[20px]">Jl. Raya Jonggol-Dayeuh, Sukanegara, Kec. Jonggol, Kabupaten Bogor, Jawa Barat 16830</p>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 shrink-0 text-[#717680] fill-current" viewBox="0 0 24 24">
                                <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                            </svg>
                            <span>+62 822-1010-2006</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 shrink-0 text-[#717680] fill-current" viewBox="0 0 24 24">
                                <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                            </svg>
                            <span class="break-all">idnboardingschool@gmail.com</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- REAL INTERACTIVE MAP EMBED -->
        <div class="w-full h-[300px] sm:h-[380px] md:h-[460px] rounded-[24px] overflow-hidden border-4 sm:border-8 border-black/20 relative shadow-sm mt-8">
            <iframe 
                 src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16020.98488009986!2d107.04213275!3d-6.52736515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69bc6e5be3d9bd%3A0x6b9881dabd801476!2sSMK%20IDN%20Boarding%20School!5e1!3m2!1sid!2sid!4v1787887529975!5m2!1sid!2sid"
                class="w-full h-full border-0" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

        <!-- BOTTOM FOOTER & SPONSORS -->
        <div class="flex flex-wrap justify-center items-center gap-4 sm:gap-8 w-full pt-6 border-t border-[#e9eaeb] text-[13px] sm:text-[14px] text-[#414651] text-center">
            <span>© Copyright | 2026 IDN Boarding School.</span>
            <div class="flex flex-wrap justify-center items-center gap-4 sm:gap-6">
                <img src="{{ asset('assets/logo_jhic.png') }}" alt="JHIC Logo" class="h-6 sm:h-8 w-auto object-contain">
                <div class="h-4 sm:h-5 w-px bg-[#e9eaeb]"></div>
                <img src="{{ asset('assets/logo_jagoanhosting.png') }}" alt="Jagoan Hosting" class="h-6 sm:h-8 w-auto object-contain">
                <img src="{{ asset('assets/logo_komdigi.png') }}" alt="Komdigi" class="h-6 sm:h-8 w-auto object-contain">
                <img src="{{ asset('assets/logo_garuda.png') }}" alt="Garuda Spark" class="h-6 sm:h-8 w-auto object-contain">
                <img src="{{ asset('assets/logo_ngalup.png') }}" alt="Ngalup" class="h-6 sm:h-8 w-auto object-contain">
            </div>
        </div>

    </div>
</footer>
