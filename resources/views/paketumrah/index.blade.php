@extends('layouts.main')

@section('title', 'Paket Umrah - Fattah Travel')

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

    <section class="relative min-h-screen w-full bg-cover bg-center flex items-center" style="background-image: url('{{ asset('storage/' . ($global_settings['umrah_banner_image'] ?? '')) }}');">
        <div class="absolute inset-0 bg-linear-to-r from-black/90 via-black/60 to-black/20"></div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-8 md:px-12 w-full mt-20">
            <div class="max-w-3xl">
                <h1 class="hero-anim-up text-4xl md:text-5xl lg:text-6xl font-serif font-bold text-white mb-6 leading-[1.15] drop-shadow-lg" style="animation-delay: 0.1s;">
                    {!! nl2br(e($global_settings['umrah_banner_headline'] ?? "Perjalanan Umroh \n Lebih Nyaman \n Bersama <span class=\"text-[#FFB300] font-sans font-black tracking-tight\">Fattah Travel</span>")) !!}
                </h1>

                <p class="hero-anim-up text-gray-200 text-base md:text-lg mb-10 leading-relaxed max-w-2xl font-sans font-light italic drop-shadow-md border-l-4 border-[#FFB300] pl-6 py-2" style="animation-delay: 0.25s;">
                    "{{ $global_settings['umrah_banner_quote'] ?? 'Antara umrah yang satu dan umrah lainnya, itu akan menghapuskan dosa di antara keduanya. Dan haji mabrur tidak ada balasannya melainkan surga.' }}" <br>
                    <span class="text-gray-400 text-sm font-normal not-italic mt-2 inline-block">({{ $global_settings['umrah_banner_quote_source'] ?? 'HR. Bukhari dan Muslim' }})</span>
                </p>

                <div class="hero-anim-up flex flex-col sm:flex-row items-center gap-4 font-sans" style="animation-delay: 0.4s;">
                    <a href="{{ $global_settings['wa_link'] ?? 'https://wa.me/6283133387676' }}" target="_blank" class="w-full sm:w-auto bg-[#FFB300] hover:bg-yellow-500 text-black font-bold py-4 px-10 rounded-full transition duration-300 text-center shadow-lg text-sm uppercase tracking-wider">
                        Konsultasi Gratis
                    </a>
                    <a href="#paket" class="w-full sm:w-auto border border-white hover:bg-white/10 text-white font-bold py-4 px-10 rounded-full transition duration-300 flex items-center justify-center gap-3 shadow-lg text-sm uppercase tracking-wider group">
                        Lihat Paket
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 group-hover:translate-y-1 transition-transform"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" /></svg>
                    </a>
                </div>
            </div>

            <div class="hero-anim-right hidden lg:block absolute top-20 right-12 md:right-20 rotate-12 font-sans" style="animation-delay: 0.55s;">
                <div class="flex flex-col items-center drop-shadow-2xl">
                    <span class="font-black text-3xl text-[#FFB300] uppercase tracking-wider">{!! explode(' ', $global_settings['umrah_banner_badge'] ?? 'Lebih Nyaman')[0] ?? 'Lebih' !!}</span>
                    <div class="flex items-center gap-1">
                        <span class="font-black text-3xl text-white uppercase tracking-wider">{!! explode(' ', $global_settings['umrah_banner_badge'] ?? 'Lebih Nyaman')[1] ?? 'Nyaman' !!}</span>
                        <div class="bg-blue-600 rounded-full p-1.5 shadow-lg">
                            <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="paket" class="w-full bg-[#F8F9FA] py-24 scroll-mt-28">
        <div class="max-w-7xl mx-auto px-8 md:px-12">
            
            <div class="scroll-reveal text-center max-w-3xl mx-auto mb-16" data-reveal="up">
                <span class="text-[#FFB300] font-bold tracking-widest text-sm uppercase mb-3 block">Program Eksklusif</span>
                <h2 class="text-3xl md:text-5xl font-serif font-bold text-gray-900 mb-6">Pilihan Paket Umrah</h2>
                <p class="text-gray-500 text-base md:text-lg font-light leading-relaxed">
                    Berbagai pilihan paket perjalanan suci dengan fasilitas hotel ring 1 dan bimbingan ibadah yang sesuai sunnah untuk kenyamanan Anda dan keluarga.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                @foreach($packages as $p)
                <div class="scroll-reveal bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 group flex flex-col" data-reveal="up" style="transition-delay: 0.15s;">
                    <div class="relative h-56 overflow-hidden">
                        <img src="{{ asset('storage/' . $p->gambar) }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-700" alt="{{ $p->nama }}">
                        <div class="absolute inset-0 bg-linear-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        
                        @if($p->kategori_badge)
                        <div class="absolute top-4 left-4 flex flex-col gap-2">
                            <span class="bg-[#FFB300] text-black text-[10px] font-bold uppercase tracking-wider px-3 py-1.5 rounded-full shadow-md">{{ $p->kategori_badge }}</span>
                        </div>
                        @endif
                        
                        @if($p->sisa_seat)
                        <div class="absolute top-4 right-4 bg-red-600 text-white text-[10px] font-bold uppercase tracking-wider px-3 py-1.5 rounded-full shadow-md animate-pulse">
                            Sisa {{ $p->sisa_seat }} Seat
                        </div>
                        @endif
                    </div>
                    
                    <div class="p-6 flex flex-col grow">
                        <h3 class="text-xl font-bold text-gray-900 mb-2 font-serif">{{ $p->nama }}</h3>
                        <p class="text-gray-500 text-sm mb-4 font-light leading-relaxed">{{ $p->deskripsi_singkat }}</p>
                        
                        <div class="space-y-3 mb-6 border-t border-b border-gray-100 py-4">
                            <div class="flex items-center gap-3 text-sm font-medium text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-[#FFB300]"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" /></svg>
                                {{ $p->tanggal_berangkat }}
                            </div>
                            <div class="flex items-center gap-3 text-sm font-medium text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-[#FFB300]"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" /></svg>
                                {{ $p->hotel }}
                            </div>
                            <div class="flex items-center gap-3 text-sm font-medium text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-[#FFB300]"><path d="M3.105 2.289a.75.75 0 00-.826.95l1.414 4.925A1.5 1.5 0 005.135 9.25h6.115a.75.75 0 010 1.5H5.135a1.5 1.5 0 00-1.442 1.086l-1.414 4.926a.75.75 0 00.826.95 28.896 28.896 0 0015.293-7.154.75.75 0 000-1.115A28.897 28.897 0 003.105 2.289z" /></svg>
                                {{ $p->maskapai }}
                            </div>
                        </div>
                        
                        <div class="mt-auto">
                            <div class="flex justify-between items-end mb-4">
                                <span class="text-gray-500 text-sm font-medium">Mulai dari</span>
                                <span class="text-2xl font-bold text-[#1A1D20]">{{ $p->harga }}</span>
                            </div>
                            <div class="grid grid-cols-2 gap-3">
                                <a href="{{ route('front.paket.detail', $p->slug) }}" class="w-full bg-white border-2 border-gray-200 hover:border-gray-900 text-gray-900 font-bold py-3 rounded-full transition duration-300 text-sm text-center flex justify-center items-center">Lihat Detail</a>
                                <a href="{{ $global_settings['wa_link'] ?? 'https://wa.me/6283133387676' }}?text=Halo%20Fattah%20Travel,%20saya%20tertarik%20dengan%20paket%20{{ urlencode($p->nama) }}" target="_blank" class="w-full bg-[#FFB300] hover:bg-yellow-500 text-black font-bold py-3 rounded-full transition duration-300 text-sm flex justify-center items-center shadow-md">Pesan WA</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>

    <section class="w-full bg-white py-24 border-t border-gray-100">
        <div class="max-w-7xl mx-auto px-8 md:px-12 grid grid-cols-1 lg:grid-cols-2 gap-16">
            
            <div class="scroll-reveal" data-reveal="left">
                <span class="text-[#FFB300] font-bold tracking-widest text-sm uppercase mb-3 block">Keunggulan Kami</span>
                <h2 class="text-3xl md:text-4xl font-serif font-bold text-gray-900 mb-10">Alasan Memilih <br> Fattah Travel</h2>
                
                <div class="space-y-8">
                    <div class="scroll-reveal flex gap-5 group" data-reveal="up" style="transition-delay: 0.1s;">
                        <div class="w-14 h-14 bg-yellow-50 rounded-2xl flex items-center justify-center text-[#FFB300] shrink-0 group-hover:bg-[#FFB300] group-hover:text-white transition duration-300 shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-7 h-7"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-gray-900 font-serif">{{ $global_settings['umrah_why_title_1'] ?? 'Title 1' }}</h4>
                            <p class="text-sm text-gray-500 mt-2 leading-relaxed font-light">{!! nl2br(e($global_settings['umrah_why_desc_1'] ?? 'Desc 1')) !!}</p>
                        </div>
                    </div>
                    <div class="scroll-reveal flex gap-5 group" data-reveal="up" style="transition-delay: 0.2s;">
                        <div class="w-14 h-14 bg-yellow-50 rounded-2xl flex items-center justify-center text-[#FFB300] shrink-0 group-hover:bg-[#FFB300] group-hover:text-white transition duration-300 shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-7 h-7"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" /></svg>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-gray-900 font-serif">{{ $global_settings['umrah_why_title_2'] ?? 'Title 2' }}</h4>
                            <p class="text-sm text-gray-500 mt-2 leading-relaxed font-light">{!! nl2br(e($global_settings['umrah_why_desc_2'] ?? 'Desc 2')) !!}</p>
                        </div>
                    </div>
                    <div class="scroll-reveal flex gap-5 group" data-reveal="up" style="transition-delay: 0.3s;">
                        <div class="w-14 h-14 bg-yellow-50 rounded-2xl flex items-center justify-center text-[#FFB300] shrink-0 group-hover:bg-[#FFB300] group-hover:text-white transition duration-300 shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-7 h-7"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" /></svg>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-gray-900 font-serif">{{ $global_settings['umrah_why_title_3'] ?? 'Title 3' }}</h4>
                            <p class="text-sm text-gray-500 mt-2 leading-relaxed font-light">{!! nl2br(e($global_settings['umrah_why_desc_3'] ?? 'Desc 3')) !!}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="scroll-reveal" data-reveal="right">
                <span class="text-[#FFB300] font-bold tracking-widest text-sm uppercase mb-3 block">Bantuan Cepat</span>
                <h2 class="text-3xl md:text-4xl font-serif font-bold text-gray-900 mb-10">Pertanyaan Umum</h2>
                
                <div class="space-y-5">
                    <div class="scroll-reveal bg-[#F8F9FA] rounded-2xl p-6 border border-gray-100 hover:shadow-md transition duration-300" data-reveal="up" style="transition-delay: 0.1s;">
                        <h4 class="font-bold text-gray-900 text-lg">{{ $global_settings['umrah_faq_q_1'] ?? 'FAQ Q1' }}</h4>
                        <p class="text-sm text-gray-500 mt-3 font-light leading-relaxed">{!! nl2br(e($global_settings['umrah_faq_a_1'] ?? 'FAQ A1')) !!}</p>
                    </div>
                    <div class="scroll-reveal bg-[#F8F9FA] rounded-2xl p-6 border border-gray-100 hover:shadow-md transition duration-300" data-reveal="up" style="transition-delay: 0.2s;">
                        <h4 class="font-bold text-gray-900 text-lg">{{ $global_settings['umrah_faq_q_2'] ?? 'FAQ Q2' }}</h4>
                        <p class="text-sm text-gray-500 mt-3 font-light leading-relaxed">{!! nl2br(e($global_settings['umrah_faq_a_2'] ?? 'FAQ A2')) !!}</p>
                    </div>
                    <div class="scroll-reveal bg-[#F8F9FA] rounded-2xl p-6 border border-gray-100 hover:shadow-md transition duration-300" data-reveal="up" style="transition-delay: 0.3s;">
                        <h4 class="font-bold text-gray-900 text-lg">{{ $global_settings['umrah_faq_q_3'] ?? 'FAQ Q3' }}</h4>
                        <p class="text-sm text-gray-500 mt-3 font-light leading-relaxed">{!! nl2br(e($global_settings['umrah_faq_a_3'] ?? 'FAQ A3')) !!}</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection