@extends('layouts.main')

@section('title', 'Hubungi Kami - Fattah Travel')

@section('content')

    <style>
        .hero-anim-up {
            opacity: 0;
            animation: fadeUpHero 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }
        .hero-anim-right {
            opacity: 0;
            animation: fadeRightHero 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }
        @keyframes fadeUpHero {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeRightHero {
            from { opacity: 0; transform: translateX(40px); }
            to { opacity: 1; transform: translateX(0); }
        }
    </style>

    <section class="relative min-h-screen w-full bg-cover bg-center flex items-center" style="background-image: url('{{ asset('storage/' . ($global_settings['contact_banner_image'] ?? 'g3.jpg')) }}');">
        <div class="absolute inset-0 bg-linear-to-r from-black/90 via-black/60 to-black/20"></div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-8 md:px-12 w-full mt-20">
            <div class="max-w-3xl">
                <h1 class="hero-anim-up text-4xl md:text-5xl lg:text-6xl font-serif font-bold text-white mb-6 leading-[1.15] drop-shadow-lg" style="animation-delay: 0.1s;">
                    {!! nl2br(e($global_settings['contact_banner_headline'] ?? 'Silaturahmi & <br>Konsultasi Ibadah <br><span class="text-[#FFB300] font-sans font-black tracking-tight">Fattah Travel</span>')) !!}
                </h1>

                <p class="hero-anim-up text-gray-200 text-base md:text-lg mb-10 leading-relaxed max-w-2xl font-sans font-light italic drop-shadow-md border-l-4 border-[#FFB300] pl-6 py-2" style="animation-delay: 0.25s;">
                    {{ $global_settings['contact_banner_desc'] ?? 'Kami selalu siap mendengarkan dan melayani kebutuhan perjalanan ibadah Anda. Jangan ragu untuk menghubungi kami guna merencanakan ibadah Umrah maupun Haji yang nyaman dan khusyuk.' }}
                </p>

                <div class="hero-anim-up flex flex-col sm:flex-row items-center gap-4 font-sans" style="animation-delay: 0.4s;">
                    @php
                        $wa_number = preg_replace('/\D+/', '', $global_settings['contact_office_phone'] ?? '');
                    @endphp
                    <a href="https://wa.me/{{ $wa_number }}" target="_blank" class="w-full sm:w-auto bg-[#FFB300] hover:bg-yellow-500 text-black font-bold py-4 px-10 rounded-full transition duration-300 text-center shadow-lg text-sm uppercase tracking-wider flex items-center justify-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-4 h-4 fill-current"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
                        Hubungi WhatsApp
                    </a>
                    <a href="#lokasi-kantor" class="w-full sm:w-auto border border-white hover:bg-white/10 text-white font-bold py-4 px-10 rounded-full transition duration-300 flex items-center justify-center gap-3 shadow-lg text-sm uppercase tracking-wider group">
                        Lokasi Kantor
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 group-hover:translate-y-1 transition-transform"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" /></svg>
                    </a>
                </div>
            </div>

            <div class="hero-anim-right hidden lg:block absolute top-20 right-12 md:right-20 rotate-12 font-sans" style="animation-delay: 0.55s;">
                <div class="flex flex-col items-center drop-shadow-2xl">
                    <span class="font-black text-3xl text-[#FFB300] uppercase tracking-wider">Layanan</span>
                    <div class="flex items-center gap-1">
                        <span class="font-black text-3xl text-white uppercase tracking-wider">Sepenuh Hati</span>
                        <div class="bg-green-500 rounded-full p-1.5 shadow-lg">
                            <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 011.037-.443 48.282 48.282 0 005.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" /></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="lokasi-kantor" class="w-full bg-[#F8F9FA] py-24 scroll-mt-28 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-8 md:px-12 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            
            <div class="scroll-reveal flex flex-col h-full justify-center" data-reveal="left">
                <span class="text-[#FFB300] font-bold tracking-widest text-sm uppercase mb-3 block">Kantor Pusat</span>
                <h2 class="text-3xl md:text-4xl font-serif font-bold text-gray-900 mb-6">{{ $global_settings['contact_office_headline'] ?? 'Kunjungi Kami di Kantor' }}</h2>
                <p class="text-gray-500 text-sm md:text-base font-light leading-relaxed mb-10 max-w-lg">
                    {{ $global_settings['contact_office_desc'] ?? 'Pintu kantor kami selalu terbuka untuk Anda yang ingin berkonsultasi mengenai persiapan ibadah Umrah dan Haji secara langsung sambil menikmati secangkir teh.' }}
                </p>

                <div class="space-y-6 mb-10">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-[#FFB300] shrink-0 shadow-sm border border-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" /></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 text-sm uppercase tracking-wider mb-1">Alamat Kantor</h4>
                            <p class="text-gray-500 text-sm font-light leading-relaxed">{!! nl2br(e($global_settings['contact_office_address'] ?? 'Jl. Jend. Sudirman No. 123, Pusat Kota,<br>Medan, Sumatera Utara 20152')) !!}</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-[#FFB300] shrink-0 shadow-sm border border-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-2.89-1.438-5.239-3.788-6.677-6.677l1.292-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" /></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 text-sm uppercase tracking-wider mb-1">Telepon & WhatsApp</h4>
                            <p class="text-gray-500 text-sm font-light leading-relaxed">{{ $global_settings['contact_office_phone'] ?? '+62 831-3338-7676' }} <br> <span class="text-xs text-gray-400">{{ $global_settings['contact_office_hours'] ?? '(Senin - Sabtu, 08:00 - 17:00)' }}</span></p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-[#FFB300] shrink-0 shadow-sm border border-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" /></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 text-sm uppercase tracking-wider mb-1">Email Pendaftaran</h4>
                            <p class="text-gray-500 text-sm font-light leading-relaxed">{{ $global_settings['contact_office_email'] ?? 'info@fattahtravel.com' }}</p>
                        </div>
                    </div>
                </div>

                <div class="w-full max-w-lg h-56 rounded-3xl overflow-hidden shadow-sm border border-gray-100 relative group">
                    {!! $global_settings['contact_office_map'] ?? '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127453.66699317513!2d98.57147778942557!3d3.593256088812678!2m3!1f0!2f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131cc1cb3be07%3A0x4039d80b220cc50!2sMedan%2C%20Kota%20Medan%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1710000000000!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="grayscale group-hover:grayscale-0 transition duration-700" title="Lokasi Kantor Fattah Travel"></iframe>' !!}
                </div>
            </div>

            <div class="scroll-reveal relative w-full max-w-lg mx-auto lg:ml-auto" data-reveal="right" style="transition-delay: 0.2s;">
                
                <div class="absolute -top-6 -left-6 w-32 h-32 bg-[radial-gradient(#CBD5E1_2px,transparent_2px)] bg-size-[12px_12px] -z-10 opacity-60"></div>
                
                <div class="absolute -bottom-8 -right-8 w-2/3 h-2/3 bg-[#FFB300]/20 rounded-full blur-3xl -z-10"></div>

                <div class="relative w-full aspect-square rounded-4xl overflow-hidden shadow-xl border-8 border-white bg-gray-200">
                    <img src="{{ asset('storage/' . ($global_settings['contact_office_image'] ?? 'foto-kantor.jpg')) }}" alt="Suasana Kantor Fattah Travel" class="w-full h-full object-cover">
                    <div class="absolute bottom-0 left-0 right-0 p-6 flex justify-center">
                        <div class="bg-white/95 backdrop-blur-md px-6 py-4 rounded-2xl shadow-lg border border-white/50 flex items-center gap-4 w-full">
                            <div class="w-10 h-10 bg-[#FFB300]/10 rounded-full flex items-center justify-center text-[#FFB300] shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 7.5v1.5m-3-1.5v1.5m-3-1.5v1.5m-1.5 6a4.5 4.5 0 004.5 4.5h3a4.5 4.5 0 004.5-4.5v-3H6v3zM21 11.25h-1.5v1.5h1.5v-1.5z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 text-sm">Ruang Konsultasi Nyaman</h4>
                                <p class="text-xs text-gray-500 font-light mt-0.5">Mari berbincang sambil ngopi santai</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection