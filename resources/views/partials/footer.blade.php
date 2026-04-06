<div class="relative mt-40">
    <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[90%] max-w-5xl z-20">
        <div class="bg-gray-900 rounded-3xl overflow-hidden relative shadow-2xl">
            <div class="absolute inset-0 bg-cover bg-center opacity-40 mix-blend-overlay" style="background-image: url('https://images.unsplash.com/photo-1591604129939-f1efa4d9f7fa?q=80&w=1200&auto=format&fit=crop');"></div>
            <div class="absolute inset-0 bg-linear-to-b from-black/60 to-black/90"></div>

            <div class="relative z-10 py-16 px-4 sm:px-8 flex flex-col items-center text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Are you Ready ?</h2>
                <p class="text-gray-300 text-sm md:text-base max-w-2xl mb-8 leading-relaxed">
                    Select from best plans, ensuring a perfect match. Need more or less ? <br class="hidden md:block">
                    Customize your subscription for a seamless fit
                </p>
                <div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto px-4 sm:px-0">
                    <button class="w-full sm:w-auto bg-[#FFB300] hover:bg-yellow-500 text-black font-bold py-3 px-6 rounded-full transition duration-300 text-sm">
                        Hajj Pre Registration
                    </button>
                    <button class="w-full sm:w-auto bg-white hover:bg-gray-100 text-gray-900 font-bold py-3 px-6 rounded-full transition duration-300 text-sm">
                        30% Off Package
                    </button>
                </div>
            </div>
        </div>
    </div>

<footer class="bg-[#1A1D20] pt-48 pb-8 px-4 md:px-12 relative z-10 border-t border-gray-800">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-8 border-b border-gray-700 pb-12">
            
            <div>
                <div class="flex items-center gap-3 mb-6">
                    <img src="{{ isset($global_settings['logo_header']) ? asset('storage/' . $global_settings['logo_header']) : asset('logo.png') }}" alt="{{ $global_settings['nama_brand'] ?? 'Fattah Travel' }}" class="h-12 w-auto object-contain">
                    @php
                        $brand_name = $global_settings['nama_brand'] ?? 'Fattah Travel';
                        $brand_parts = explode(' ', $brand_name);
                        $last_word = count($brand_parts) > 1 ? array_pop($brand_parts) : '';
                        $first_part = implode(' ', $brand_parts);
                    @endphp
                    <span class="text-white font-bold text-lg tracking-wider">
                        {{ strtoupper($first_part) }} <span class="text-[#FFB300]">{{ strtoupper($last_word) }}</span>
                    </span>
                </div>
                <p class="text-gray-400 text-sm leading-relaxed mb-6 pr-4">
                    {{ $global_settings['footer_description'] ?? 'Pelopor Solusi Perjalanan Ibadah Terdepan untuk Meningkatkan Pengalaman Ziarah dan Kenyamanan Jamaah.' }}
                </p>
                <div class="flex gap-3">
                    <a href="{{ $global_settings['social_facebook'] ?? '#' }}" class="w-8 h-8 rounded-full bg-[#1A1D20] border border-gray-700 flex items-center justify-center text-blue-500 hover:bg-blue-500 hover:text-white transition">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/></svg>
                    </a>
                    <a href="{{ $global_settings['social_twitter'] ?? '#' }}" class="w-8 h-8 rounded-full bg-[#1A1D20] border border-gray-700 flex items-center justify-center text-sky-400 hover:bg-sky-400 hover:text-white transition">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723 10.054 10.054 0 01-3.127 1.184 4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                    </a>
                    <a href="{{ $global_settings['social_linkedin'] ?? '#' }}" class="w-8 h-8 rounded-full bg-[#1A1D20] border border-gray-700 flex items-center justify-center text-blue-700 hover:bg-blue-700 hover:text-white transition">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                    <a href="{{ $global_settings['social_instagram'] ?? '#' }}" class="w-8 h-8 rounded-full bg-[#1A1D20] border border-gray-700 flex items-center justify-center text-pink-500 hover:bg-linear-to-tr hover:from-yellow-400 hover:to-pink-600 hover:text-white transition">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                    </a>
                </div>
            </div>

            <div>
                <h4 class="text-white font-bold text-lg mb-6">Layanan Kami</h4>
                <ul class="space-y-4">
                    <li><a href="{{ route('front.umrah') }}" class="text-gray-400 hover:text-[#FFB300] transition text-sm flex items-center gap-2"><span class="text-lg text-[#FFB300]">→</span> Paket Umrah Reguler</a></li>
                    <li><a href="{{ route('front.umrah') }}" class="text-gray-400 hover:text-[#FFB300] transition text-sm flex items-center gap-2"><span class="text-lg text-[#FFB300]">→</span> Paket Umrah Plus Tur</a></li>
                    <li><a href="{{ route('front.haji') }}" class="text-gray-400 hover:text-[#FFB300] transition text-sm flex items-center gap-2"><span class="text-lg text-[#FFB300]">→</span> Paket Haji Furoda</a></li>
                    <li><a href="{{ route('front.artikel.index') }}" class="text-gray-400 hover:text-[#FFB300] transition text-sm flex items-center gap-2"><span class="text-lg text-[#FFB300]">→</span> Artikel</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-white font-bold text-lg mb-6">Hubungi Kami</h4>
                <ul class="space-y-4 mb-6">
                    <li class="flex items-start gap-3 text-sm text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-[#FFB300] shrink-0 mt-0.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" /></svg>
                        <span>{{ $global_settings['contact_office_address'] ?? 'Medan, Sumatera Utara, Indonesia' }}</span>
                    </li>
                    <li class="flex items-center gap-3 text-sm text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-[#FFB300] shrink-0"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-2.89-1.438-5.239-3.788-6.677-6.677l1.292-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" /></svg>
                        <span>{{ $global_settings['contact_office_phone'] ?? '+62 831-3338-7676' }}</span>
                    </li>
                    <li class="flex items-center gap-3 text-sm text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-[#FFB300] shrink-0"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" /></svg>
                        <span>{{ $global_settings['contact_office_email'] ?? 'info@fattahtravel.com' }}</span>
                    </li>
                </ul>
                <div class="inline-flex items-center gap-2 bg-[#24282D] border border-gray-700 rounded-lg px-3 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-emerald-500"><path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" /></svg>
                    <span class="text-[10px] text-gray-400 font-bold uppercase tracking-wider">Terdaftar Resmi Kemenag RI</span>
                </div>
            </div>

            <div>
                <h4 class="text-white font-bold text-lg mb-6">Waktu Setempat</h4>
                <div class="space-y-4">
                    <div class="bg-[#24282D] rounded-xl p-5 border border-gray-700 shadow-inner">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-gray-400 text-xs font-bold tracking-widest uppercase">Makkah</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 text-[#FFB300]"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        </div>
                        <div id="makkah-time" class="text-2xl font-bold text-white tracking-widest font-mono">--:--:--</div>
                        <div id="makkah-date" class="text-xs text-gray-500 mt-1 uppercase tracking-wide">Loading...</div>
                    </div>

                    <div class="bg-[#24282D] rounded-xl p-5 border border-gray-700 shadow-inner">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-gray-400 text-xs font-bold tracking-widest uppercase">Madinah</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 text-[#FFB300]"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        </div>
                        <div id="madinah-time" class="text-2xl font-bold text-white tracking-widest font-mono">--:--:--</div>
                        <div id="madinah-date" class="text-xs text-gray-500 mt-1 uppercase tracking-wide">Loading...</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto mt-6 flex flex-col md:flex-row justify-between items-center text-xs text-gray-500 gap-4">
            <p>Copyright © {{ $global_settings['nama_brand'] ?? 'Fattah Travel' }} all rights reserved.</p>
            <p>Sistem Pembayaran yang Didukung</p>
            <div class="flex gap-2">
                <div class="w-8 h-5 bg-white rounded flex items-center justify-center font-bold text-[8px] text-blue-900">VISA</div>
                <div class="w-8 h-5 bg-white rounded flex items-center justify-center font-bold text-[8px] text-red-600">MASTER</div>
                <div class="w-8 h-5 bg-white rounded flex items-center justify-center font-bold text-[8px] text-[#00A19D]">BSI</div>
            </div>
        </div>
    </footer>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const testimonials = [
            {
                text: "Working with this company has been a breath of air. They've streamlined our hiring process, delivering top-quality candidates who align perfectly.",
                name: "Mohammed hasnat",
                role: "Online Entrepreneur",
                img: "https://randomuser.me/api/portraits/men/32.jpg"
            },
            {
                text: "Perjalanan ibadah kami menjadi sangat fokus dan tenang. Pelayanan dari tim Fattah Travel sangat profesional, hotelnya dekat, dan muthawwif-nya luar biasa.",
                name: "Ahmad Sulaiman",
                role: "Business Owner",
                img: "https://randomuser.me/api/portraits/men/45.jpg"
            },
            {
                text: "Sangat direkomendasikan! Dari awal keberangkatan hingga pulang ke tanah air, semuanya diurus dengan sangat baik. Fasilitas sesuai dengan yang dijanjikan.",
                name: "Fatimah Zahra",
                role: "Doctor",
                img: "https://randomuser.me/api/portraits/women/44.jpg"
            }
        ];

        let currentIndex = 0;

        const testiText = document.getElementById('testi-text');
        const testiName = document.getElementById('testi-name');
        const testiRole = document.getElementById('testi-role');
        const testiImg = document.getElementById('testi-img');
        const testiCard = document.getElementById('testi-card');

        const btnPrev = document.getElementById('btn-prev');
        const btnNext = document.getElementById('btn-next');

        function updateTestimonial(index) {
            if (!testiCard) return;

            testiCard.classList.add('opacity-50');

            setTimeout(() => {
                testiText.textContent = testimonials[index].text;
                testiName.textContent = testimonials[index].name;
                testiRole.textContent = testimonials[index].role;
                testiImg.src = testimonials[index].img;

                testiCard.classList.remove('opacity-50');
            }, 150);
        }

        if (btnNext && btnPrev) {
            btnNext.addEventListener('click', () => {
                currentIndex = (currentIndex + 1) % testimonials.length;
                updateTestimonial(currentIndex);
            });

            btnPrev.addEventListener('click', () => {
                currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
                updateTestimonial(currentIndex);
            });
        }

        function updateSaudiTime() {
            const optionsTime = { timeZone: 'Asia/Riyadh', hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: false };
            const optionsDate = { timeZone: 'Asia/Riyadh', weekday: 'short', year: 'numeric', month: 'short', day: 'numeric' };

            const now = new Date();
            const timeString = now.toLocaleTimeString('en-US', optionsTime);
            const dateString = now.toLocaleDateString('en-US', optionsDate);

            const makkahTimeElem = document.getElementById('makkah-time');
            const makkahDateElem = document.getElementById('makkah-date');
            if (makkahTimeElem) makkahTimeElem.textContent = timeString;
            if (makkahDateElem) makkahDateElem.textContent = dateString;

            const madinahTimeElem = document.getElementById('madinah-time');
            const madinahDateElem = document.getElementById('madinah-date');
            if (madinahTimeElem) madinahTimeElem.textContent = timeString;
            if (madinahDateElem) madinahDateElem.textContent = dateString;
        }

        setInterval(updateSaudiTime, 1000);
        updateSaudiTime();

        const navbar = document.getElementById('main-navbar');
        if (navbar) {
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    navbar.classList.remove('top-10', 'py-6', 'bg-transparent');
                    navbar.classList.add('top-0', 'py-4', 'bg-[#1A1D20]/90', 'backdrop-blur-md', 'shadow-lg', 'border-b', 'border-gray-800');
                } else {
                    navbar.classList.add('top-10', 'py-6', 'bg-transparent');
                    navbar.classList.remove('top-0', 'py-4', 'bg-[#1A1D20]/90', 'backdrop-blur-md', 'shadow-lg', 'border-b', 'border-gray-800');
                }
            });
        }
    });

    async function getPrayerTimes() {
        try {
            const response = await fetch('https://api.aladhan.com/v1/timingsByCity?city=Semarang&country=Indonesia&method=11');
            const data = await response.json();

            if (data.code === 200) {
                const timings = data.data.timings;

                const waktuSubuh = document.getElementById('waktu-subuh');
                const waktuDzuhur = document.getElementById('waktu-dzuhur');
                const waktuAshar = document.getElementById('waktu-ashar');
                const waktuMaghrib = document.getElementById('waktu-maghrib');
                const waktuIsya = document.getElementById('waktu-isya');

                if (waktuSubuh) waktuSubuh.textContent = timings.Fajr;
                if (waktuDzuhur) waktuDzuhur.textContent = timings.Dhuhr;
                if (waktuAshar) waktuAshar.textContent = timings.Asr;
                if (waktuMaghrib) waktuMaghrib.textContent = timings.Maghrib;
                if (waktuIsya) waktuIsya.textContent = timings.Isha;
            }
        } catch (error) {
            console.error('Gagal mengambil jadwal sholat:', error);
        }
    }

    getPrayerTimes();
</script>

<a href="https://wa.me/{{ $global_settings['nomor_wa'] ?? '6283133387676' }}?text=Assalamu'alaikum%20{{ urlencode($global_settings['nama_brand'] ?? 'Fattah Travel') }},%20saya%20ingin%20bertanya%20mengenai%20paket%20Umrah."
   target="_blank"
   class="fixed bottom-8 right-8 z-100 bg-[#25D366] text-white p-4 rounded-full shadow-[0_10px_20px_rgba(37,211,102,0.3)] hover:scale-105 transition-all duration-300 group flex items-center justify-center cursor-pointer">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-7 h-7 fill-current">
        <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
    </svg>

    <span class="max-w-0 overflow-hidden whitespace-nowrap group-hover:max-w-xs group-hover:ml-3 transition-all duration-500 font-bold text-sm">
        Chat CS Kami
    </span>
</a>

