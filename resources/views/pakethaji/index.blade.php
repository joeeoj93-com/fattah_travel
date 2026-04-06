@extends('layouts.main')

@section('title', 'Paket Haji - Fattah Travel')

@section('content')

    @php
        $bannerImage = !empty($global_settings['haji_banner_image'])
            ? asset('storage/' . $global_settings['haji_banner_image'])
            : asset('g3.jpg');

        $headline = $global_settings['haji_banner_headline'] ?? 'Panggilan Suci Haji Bersama Fattah Travel';
        $quote = $global_settings['haji_banner_quote'] ?? 'Dan haji mabrur tidak ada balasannya melainkan surga.';
        $quoteSource = $global_settings['haji_banner_quote_source'] ?? 'HR. Bukhari dan Muslim';
        $bannerBadge = $global_settings['haji_banner_badge'] ?? 'Tanpa Antre';
    @endphp

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

    <section class="relative min-h-screen w-full bg-cover bg-center flex items-center" style="background-image: url('{{ $bannerImage }}');">
        <div class="absolute inset-0 bg-linear-to-r from-black/90 via-black/60 to-black/20"></div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-8 md:px-12 w-full mt-20">
            <div class="max-w-3xl">
                <h1 class="hero-anim-up text-4xl md:text-5xl lg:text-6xl font-serif font-bold text-white mb-6 leading-[1.15] drop-shadow-lg" style="animation-delay: 0.1s;">
                    {{ $headline }}
                </h1>

                <p class="hero-anim-up text-gray-200 text-base md:text-lg mb-10 leading-relaxed max-w-2xl font-sans font-light italic drop-shadow-md border-l-4 border-[#FFB300] pl-6 py-2" style="animation-delay: 0.25s;">
                    "{{ $quote }}" <br>
                    <span class="text-gray-400 text-sm font-normal not-italic mt-2 inline-block">({{ $quoteSource }})</span>
                </p>

                <div class="hero-anim-up flex flex-col sm:flex-row items-center gap-4 font-sans" style="animation-delay: 0.4s;">
                    <a href="{{ ($global_settings['wa_link'] ?? 'https://wa.me/6283133387676') }}" target="_blank" class="w-full sm:w-auto bg-[#FFB300] hover:bg-yellow-500 text-black font-bold py-4 px-10 rounded-full transition duration-300 text-center shadow-lg text-sm uppercase tracking-wider">
                        Cek Kuota Haji
                    </a>
                    <a href="#paket-haji" class="w-full sm:w-auto border border-white hover:bg-white/10 text-white font-bold py-4 px-10 rounded-full transition duration-300 flex items-center justify-center gap-3 shadow-lg text-sm uppercase tracking-wider group">
                        Lihat Program
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 group-hover:translate-y-1 transition-transform"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" /></svg>
                    </a>
                </div>
            </div>

            <div class="hero-anim-right hidden lg:block absolute top-20 right-12 md:right-20 rotate-12 font-sans" style="animation-delay: 0.55s;">
                <div class="flex flex-col items-center drop-shadow-2xl">
                    <span class="font-black text-3xl text-[#FFB300] uppercase tracking-wider text-center">{{ $bannerBadge }}</span>
                </div>
            </div>
        </div>
    </section>


    <section id="paket-haji" class="w-full bg-[#F8F9FA] py-24 scroll-mt-28">
        <div class="max-w-7xl mx-auto px-8 md:px-12">
            
            <div class="scroll-reveal text-center max-w-3xl mx-auto mb-16" data-reveal="up">
                <span class="text-[#FFB300] font-bold tracking-widest text-sm uppercase mb-3 block">Program Terbatas</span>
                <h2 class="text-3xl md:text-5xl font-serif font-bold text-gray-900 mb-6">Pilihan Program Haji</h2>
                <p class="text-gray-500 text-base md:text-lg font-light leading-relaxed">
                    Tunaikan rukun Islam kelima dengan nyaman dan tenang. Pilih program haji tanpa antre panjang dengan fasilitas maktab premium dan hotel bintang 5.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 max-w-5xl mx-auto">
                @forelse($packages as $p)
                    @php
                        $fiturList = collect(preg_split('/\r\n|\r|\n/', strip_tags($p->deskripsi_lengkap ?? '')))
                            ->map(fn ($line) => trim($line))
                            ->filter()
                            ->take(4);
                    @endphp

                    <div class="scroll-reveal bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 group flex flex-col" data-reveal="up">
                        <div class="relative h-64 overflow-hidden">
                            <img src="{{ asset('storage/' . $p->gambar) }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-700" alt="{{ $p->nama }}">
                            <div class="absolute inset-0 bg-linear-to-t from-black/60 via-black/20 to-transparent opacity-80 group-hover:opacity-100 transition-opacity duration-300"></div>

                            @if(!empty($p->kategori_badge))
                                <div class="absolute top-4 left-4">
                                    <span class="bg-[#FFB300] text-black text-[10px] font-bold uppercase tracking-wider px-4 py-2 rounded-full shadow-md">{{ $p->kategori_badge }}</span>
                                </div>
                            @endif

                            @if(!empty($p->sisa_seat))
                                <div class="absolute top-4 right-4 bg-red-600 text-white text-[10px] font-bold uppercase tracking-wider px-4 py-2 rounded-full shadow-md animate-pulse">
                                    Sisa {{ $p->sisa_seat }} Seat
                                </div>
                            @endif

                            <div class="absolute bottom-6 left-6 right-6">
                                <h3 class="text-2xl font-bold text-white mb-1 font-serif">{{ $p->nama }}</h3>
                                <p class="text-gray-200 text-sm font-light">{{ $p->deskripsi_singkat }}</p>
                            </div>
                        </div>

                        <div class="p-8 flex flex-col grow">
                            <div class="space-y-4 mb-8">
                                @forelse($fiturList as $fitur)
                                    <div class="flex items-start gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-[#FFB300] shrink-0"><path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 11.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" /></svg>
                                        <span class="text-sm font-medium text-gray-700 leading-relaxed">{{ $fitur }}</span>
                                    </div>
                                @empty
                                    <div class="flex items-start gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-[#FFB300] shrink-0"><path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 11.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" /></svg>
                                        <span class="text-sm font-medium text-gray-700 leading-relaxed">{{ $p->deskripsi_singkat }}</span>
                                    </div>
                                @endforelse
                            </div>

                            <div class="mt-auto border-t border-gray-100 pt-6">
                                <div class="flex flex-col mb-6">
                                    <span class="text-gray-500 text-sm font-medium mb-1">Harga Paket</span>
                                    <span class="text-4xl font-bold text-[#1A1D20] tracking-tight">{{ $p->harga }}</span>
                                </div>
                                <div class="grid grid-cols-2 gap-3">
                                    <a href="{{ route('front.paket.detail', $p->slug) }}" class="w-full bg-white border-2 border-gray-200 hover:border-gray-900 text-gray-900 font-bold py-3.5 rounded-full transition duration-300 text-sm text-center">Brosur Detail</a>
                                    <a href="{{ ($global_settings['wa_link'] ?? 'https://wa.me/6283133387676') }}?text={{ urlencode('Halo Fattah Travel, saya tertarik dengan paket haji ' . $p->nama) }}" target="_blank" class="w-full bg-[#FFB300] hover:bg-yellow-500 text-black font-bold py-3.5 rounded-full transition duration-300 text-sm flex justify-center items-center shadow-md">Booking Seat</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="md:col-span-2 bg-white rounded-3xl border border-gray-100 p-10 text-center text-gray-500">
                        Paket haji belum tersedia saat ini.
                    </div>
                @endforelse

            </div>
        </div>
    </section>

<section class="w-full bg-white py-24 border-t border-gray-100">
        <div class="max-w-7xl mx-auto px-8 md:px-12 grid grid-cols-1 lg:grid-cols-2 gap-16">
            
            <div class="scroll-reveal" data-reveal="left">
                <span class="text-[#FFB300] font-bold tracking-widest text-sm uppercase mb-3 block">Keunggulan Kami</span>
                <h2 class="text-3xl md:text-4xl font-serif font-bold text-gray-900 mb-10">Alasan Memilih Haji <br> Bersama Fattah Travel</h2>
                
                <div class="space-y-8">
                    <div class="scroll-reveal flex gap-5 group" data-reveal="up" style="transition-delay: 0.1s;">
                        <div class="w-14 h-14 bg-yellow-50 rounded-2xl flex items-center justify-center text-[#FFB300] shrink-0 group-hover:bg-[#FFB300] group-hover:text-white transition duration-300 shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-7 h-7"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-gray-900 font-serif">{{ $global_settings['haji_why_title_1'] ?? 'Keunggulan #1' }}</h4>
                            <p class="text-sm text-gray-500 mt-2 leading-relaxed font-light">{{ $global_settings['haji_why_desc_1'] ?? '-' }}</p>
                        </div>
                    </div>
                    <div class="scroll-reveal flex gap-5 group" data-reveal="up" style="transition-delay: 0.2s;">
                        <div class="w-14 h-14 bg-yellow-50 rounded-2xl flex items-center justify-center text-[#FFB300] shrink-0 group-hover:bg-[#FFB300] group-hover:text-white transition duration-300 shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-7 h-7"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" /></svg>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-gray-900 font-serif">{{ $global_settings['haji_why_title_2'] ?? 'Keunggulan #2' }}</h4>
                            <p class="text-sm text-gray-500 mt-2 leading-relaxed font-light">{{ $global_settings['haji_why_desc_2'] ?? '-' }}</p>
                        </div>
                    </div>
                    <div class="scroll-reveal flex gap-5 group" data-reveal="up" style="transition-delay: 0.3s;">
                        <div class="w-14 h-14 bg-yellow-50 rounded-2xl flex items-center justify-center text-[#FFB300] shrink-0 group-hover:bg-[#FFB300] group-hover:text-white transition duration-300 shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-7 h-7"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" /></svg>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-gray-900 font-serif">{{ $global_settings['haji_why_title_3'] ?? 'Keunggulan #3' }}</h4>
                            <p class="text-sm text-gray-500 mt-2 leading-relaxed font-light">{{ $global_settings['haji_why_desc_3'] ?? '-' }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="scroll-reveal" data-reveal="right">
                <span class="text-[#FFB300] font-bold tracking-widest text-sm uppercase mb-3 block">Bantuan Cepat</span>
                <h2 class="text-3xl md:text-4xl font-serif font-bold text-gray-900 mb-10">Pertanyaan Umum Haji</h2>
                
                <div class="space-y-5">
                    <div class="scroll-reveal bg-[#F8F9FA] rounded-2xl p-6 border border-gray-100 hover:shadow-md transition duration-300" data-reveal="up" style="transition-delay: 0.1s;">
                        <h4 class="font-bold text-gray-900 text-lg">{{ $global_settings['haji_faq_q_1'] ?? 'Pertanyaan 1' }}</h4>
                        <p class="text-sm text-gray-500 mt-3 font-light leading-relaxed">{!! nl2br(e($global_settings['haji_faq_a_1'] ?? '-')) !!}</p>
                    </div>
                    <div class="scroll-reveal bg-[#F8F9FA] rounded-2xl p-6 border border-gray-100 hover:shadow-md transition duration-300" data-reveal="up" style="transition-delay: 0.2s;">
                        <h4 class="font-bold text-gray-900 text-lg">{{ $global_settings['haji_faq_q_2'] ?? 'Pertanyaan 2' }}</h4>
                        <p class="text-sm text-gray-500 mt-3 font-light leading-relaxed">{!! nl2br(e($global_settings['haji_faq_a_2'] ?? '-')) !!}</p>
                    </div>
                    <div class="scroll-reveal bg-[#F8F9FA] rounded-2xl p-6 border border-gray-100 hover:shadow-md transition duration-300" data-reveal="up" style="transition-delay: 0.3s;">
                        <h4 class="font-bold text-gray-900 text-lg">{{ $global_settings['haji_faq_q_3'] ?? 'Pertanyaan 3' }}</h4>
                        <p class="text-sm text-gray-500 mt-3 font-light leading-relaxed">{!! nl2br(e($global_settings['haji_faq_a_3'] ?? '-')) !!}</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection