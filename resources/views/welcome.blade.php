@extends('layouts.main')

@section('content')
<section class="relative min-h-screen flex items-center justify-center w-full overflow-visible">
        @php
            $heroMedia = $global_settings['hero_media'] ?? '';
            $extension = pathinfo($heroMedia, PATHINFO_EXTENSION);
            $isVideo = in_array(strtolower($extension), ['mp4', 'webm', 'ogg']);
        @endphp

        @if($heroMedia)
            @if($isVideo)
                <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover z-0">
                    <source src="{{ asset('storage/' . $heroMedia) }}" type="video/{{ $extension }}">
                </video>
            @else
                <img src="{{ asset('storage/' . $heroMedia) }}" class="absolute inset-0 w-full h-full object-cover z-0" alt="Hero Banner">
            @endif
        @else
            <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover z-0">
                <source src="/bgvid.mp4" type="video/mp4">
            </video>
        @endif
        <div class="absolute inset-0 bg-gradient-to-b from-black/50 to-black/80 z-0"></div>

        <div class="relative z-10 flex flex-col items-center justify-center text-center h-full pt-24 md:pt-40 px-4">
            <h1 class="text-4xl sm:text-5xl md:text-[8rem] font-bold leading-none tracking-wide flex flex-col md:flex-row justify-center gap-2 sm:gap-4 md:gap-8 scroll-reveal" data-reveal="up">
                <span class="text-[#FFB300]">HAJJ</span>
                <span class="text-white">UMRAH</span>
            </h1>
            
<p class="text-white text-sm sm:text-lg md:text-xl mt-6 font-light tracking-[0.1em] sm:tracking-[0.15em] max-w-[280px] md:max-w-none mx-auto uppercase scroll-reveal" data-reveal="up" data-reveal-delay="120">
    DELUXE UMRAH PACKAGES <br> 
    MULAI DARI <span class="text-[#FFB300] font-bold">Rp 39.900.000</span>
</p>

            <button class="mt-8 bg-[#FFB300] hover:bg-yellow-500 text-black font-semibold py-3 px-8 rounded-full transition duration-300 scroll-reveal" data-reveal="up" data-reveal-delay="220">
                Get Started
            </button>
        </div>

<div class="absolute -bottom-32 md:-bottom-10 left-1/2 -translate-x-1/2 w-[95%] md:w-[90%] max-w-5xl bg-white rounded-[2rem] md:rounded-full shadow-2xl py-6 md:py-4 px-4 md:px-10 grid grid-cols-2 md:flex items-center justify-center md:justify-between gap-y-6 md:gap-y-0 border border-gray-100 z-20 scroll-reveal" data-reveal="up" data-reveal-delay="320">
            
            <div class="flex items-center justify-center md:justify-start gap-2 md:gap-4">
                <div class="p-2 bg-gray-50 rounded-full text-[#FFB300]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 md:w-6 md:h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                    </svg>
                </div>
                <div class="flex flex-col">
                    <span class="text-xs md:text-sm font-bold text-gray-900">1000+</span>
                    <span class="text-[10px] md:text-xs font-medium text-gray-500">Jamaah Berangkat</span>
                </div>
            </div>

            <div class="hidden md:block h-10 w-[1px] bg-gray-200"></div>

            <div class="flex items-center justify-center md:justify-start gap-2 md:gap-4">
                <div class="p-2 bg-gray-50 rounded-full text-[#FFB300]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 md:w-6 md:h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                    </svg>
                </div>
                <div class="flex flex-col">
                    <span class="text-xs md:text-sm font-bold text-gray-900">5 Star</span>
                    <span class="text-[10px] md:text-xs font-medium text-gray-500">Hotel Facilities</span>
                </div>
            </div>

            <div class="hidden md:block h-10 w-[1px] bg-gray-200"></div>

            <div class="flex items-center justify-center md:justify-start gap-2 md:gap-4">
                <div class="p-2 bg-gray-50 rounded-full text-[#FFB300]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 md:w-6 md:h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                    </svg>
                </div>
                <div class="flex flex-col">
                    <span class="text-xs md:text-sm font-bold text-gray-900">Direct Flight</span>
                    <span class="text-[10px] md:text-xs font-medium text-gray-500">Access Available</span>
                </div>
            </div>

            <div class="hidden md:block h-10 w-[1px] bg-gray-200"></div>

            <div class="flex items-center justify-center md:justify-start gap-2 md:gap-4">
                <div class="p-2 bg-gray-50 rounded-full text-[#FFB300]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 md:w-6 md:h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.820 1.508-2.316a7.5 7.5 0 10-7.516 0c.85.496 1.508 1.333 1.508 2.316V18" />
                    </svg>
                </div>
                <div class="flex flex-col">
                    <span class="text-xs md:text-sm font-bold text-gray-900">24/7 Guide</span>
                    <span class="text-[10px] md:text-xs font-medium text-gray-500">Muthawwif Expert</span>
                </div>
            </div>

        </div>
    </section>

<section class="max-w-7xl mx-auto px-4 md:px-12 py-24 mt-20">
        
        <div class="flex flex-wrap justify-center md:justify-between items-center gap-10 scroll-reveal" data-reveal="up">
            @foreach($sponsors as $s)
                <img src="{{ asset('storage/' . $s->logo) }}" alt="{{ $s->name ?? 'Sponsor' }}" class="h-16 md:h-24 w-auto object-contain hover:scale-105 transition-transform duration-300">
            @endforeach
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 mt-24 items-center">
            
            <div class="relative mx-auto w-full max-w-[380px] h-[580px] rounded-t-[2.5rem] rounded-b-[2.5rem] shadow-2xl overflow-hidden bg-gray-900 border-[6px] border-white scroll-reveal" data-reveal="right">
                
                <img src="{{ isset($global_settings['about_img_bg']) ? asset('storage/' . $global_settings['about_img_bg']) : 'https://images.unsplash.com/photo-1591604129939-f1efa4d9f7fa?q=80&w=600&auto=format&fit=crop' }}" alt="Makkah Background" class="absolute inset-0 w-full h-full object-cover">
                
                <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/20 to-black/90"></div>
                
                <div class="absolute top-12 left-0 w-full text-center z-10 px-4">
                    <p class="text-white tracking-[0.3em] text-sm uppercase font-semibold">Madinah</p>
                    <h3 class="text-[1.8rem] font-black uppercase mt-1 tracking-tight leading-tight" style="-webkit-text-stroke: 1.5px white; color: #1A1D20;">
                        40 Prayers Eco Hajj
                    </h3>
                </div>

                <div class="absolute bottom-16 left-1/2 -translate-x-1/2 w-[200px] sm:w-[240px] h-[200px] sm:h-[240px] transform rotate-45 grid grid-cols-2 grid-rows-2 gap-3 place-items-stretch z-20">
                    
                    <div class="w-full aspect-square overflow-hidden border-[3px] border-white rounded-md shadow-md">
                        <img src="{{ isset($global_settings['about_img_top']) ? asset('storage/' . $global_settings['about_img_top']) : 'g1.jpg' }}" alt="Pattern" class="transform -rotate-45 scale-[1.55] w-full h-full object-cover">
                    </div>
                    
                    <div class="w-full aspect-square overflow-hidden border-[3px] border-white rounded-md shadow-md">
                        <img src="{{ isset($global_settings['about_img_right']) ? asset('storage/' . $global_settings['about_img_right']) : 'g2.jpg' }}" alt="Kaaba" class="transform -rotate-45 scale-[1.55] w-full h-full object-cover">
                    </div>
                    
                    <div class="w-full aspect-square overflow-hidden border-[3px] border-white rounded-md shadow-md">
                        <img src="{{ isset($global_settings['about_img_bottom']) ? asset('storage/' . $global_settings['about_img_bottom']) : 'g3.jpg' }}" alt="Umbrellas" class="transform -rotate-45 scale-[1.55] w-full h-full object-cover">
                    </div>
                    
                    <div class="w-full aspect-square overflow-hidden border-[3px] border-white rounded-md shadow-md">
                        <img src="{{ isset($global_settings['about_img_left']) ? asset('storage/' . $global_settings['about_img_left']) : 'g4.jpg' }}" alt="Inside" class="transform -rotate-45 scale-[1.55] w-full h-full object-cover">
                    </div>
                </div>
            </div>

            <div class="px-2 scroll-reveal" data-reveal="left">
                <div class="mb-6">
                    <h4 class="text-3xl text-gray-800" style="font-family: 'Amiri', serif;">بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيم</h4>
                </div>

                <h2 class="text-3xl sm:text-4xl md:text-[2.75rem] font-bold text-gray-900 leading-[1.2] tracking-tight">
                    {!! $global_settings['about_headline'] ?? 'We are award winning <br> Hajj & Umrah Agency' !!}
                </h2>
                
                <p class="text-gray-600 mt-6 text-sm sm:text-base md:text-[1.05rem] leading-relaxed font-medium max-w-lg">
                    {{ $global_settings['about_description'] ?? "We have been worked within the hajj and umrah travel industry for over 20 years and we're confident enough to say that we know our stuff, capability and hospitality." }}
                </p>

                <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 gap-y-6 gap-x-4">
                    
                    <div class="flex items-center gap-3">
                        <div class="text-[#FFB300]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6.75h1.5m-1.5 3h1.5m-1.5 3h1.5M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" /></svg>
                        </div>
                        <span class="font-bold text-gray-800 text-sm">Luxury hotel</span>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="text-[#FFB300]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" /></svg>
                        </div>
                        <span class="font-bold text-gray-800 text-sm">VIP Plane sit</span>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="text-[#FFB300]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" /></svg>
                        </div>
                        <span class="font-bold text-gray-800 text-sm">Easy Visa</span>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="text-[#FFB300]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M14.25 7.756a4.5 4.5 0 10-8.5 0m8.5 0A5.266 5.266 0 0115 9.75m-8.5-1.994A5.265 5.265 0 006 9.75m9 0H6m9 0v11.25c0 .621-.504 1.125-1.125 1.125H7.125a1.125 1.125 0 01-1.125-1.125V9.75M9 9.75v11.25m3-11.25v11.25" /></svg>
                        </div>
                        <span class="font-bold text-gray-800 text-sm">Fresh Food</span>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="text-[#FFB300]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" /></svg>
                        </div>
                        <span class="font-bold text-gray-800 text-sm">Avoid Haram</span>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="text-[#FFB300]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.674v6.674m0 0v-6.674m0 0l-3-3m3 3l3-3m-3 3l-3 3" /></svg>
                        </div>
                        <span class="font-bold text-gray-800 text-sm">Air condition car</span>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="text-[#FFB300]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M9 6.75V15m6-6v8.25m.503 3.498l4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 00-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0z" /></svg>
                        </div>
                        <span class="font-bold text-gray-800 text-sm">Roadmap Guide</span>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="text-[#FFB300]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.820 1.508-2.316a7.5 7.5 0 10-7.516 0c.85.496 1.508 1.333 1.508 2.316V18" /></svg>
                        </div>
                        <span class="font-bold text-gray-800 text-sm">24/7 Service</span>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="w-full bg-[#F8F9FA] py-24">
        <div class="max-w-7xl mx-auto px-4 md:px-12">
            
            <div class="text-center max-w-2xl mx-auto scroll-reveal" data-reveal="up">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900">{{ $global_settings['pricing_title'] ?? 'Choose Your Package' }}</h2>
                <p class="text-gray-500 mt-4 text-sm md:text-base font-medium">
                    {!! nl2br(e($global_settings['pricing_subtitle'] ?? "Select from best plans, ensuring a perfect match. Need more or less ? \nCustomize your subscription for a seamless fit")) !!}
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-16 max-w-[60rem] mx-auto items-center">
                
                <!-- Card 1 -->
                <div class="bg-white rounded-3xl p-7 shadow-sm border border-gray-100 relative overflow-hidden group hover:shadow-xl transition-shadow duration-300 scroll-reveal" data-reveal="up">
                    <div class="absolute bottom-0 left-0 w-full h-1/2 opacity-[0.03] bg-[url('https://images.unsplash.com/photo-1565552643983-65239e24f469?q=80&w=600&auto=format&fit=crop')] bg-cover bg-bottom"></div>
                    
                    <div class="relative z-10">
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="text-gray-600 font-semibold text-lg">{{ $global_settings['pricing_1_name'] ?? 'Premium Hajj' }}</h4>
                                <div class="text-4xl md:text-[2.6rem] font-bold text-gray-900 mt-2">{{ $global_settings['pricing_1_price'] ?? 'Rp 185.000.000' }}</div>
                            </div>
                            <span class="border border-gray-200 rounded-lg px-3 py-1.5 text-xs font-bold text-gray-700 bg-white shadow-sm">
                                {{ $global_settings['pricing_1_badge'] ?? 'Save 30%' }}
                            </span>
                        </div>
                        
                        <hr class="my-8 border-gray-200">
                        
                        <p class="font-bold text-gray-900 mb-6">What's included</p>
                        <ul class="space-y-4 mb-10 text-gray-600 font-medium">
                            @php
                                $pricing1Fs = explode(',', $global_settings['pricing_1_facilities'] ?? "5-Star Hotels in Makkah & Madinah,VIP Transportation,Exclusive Meals & Catering");
                            @endphp
                            @foreach($pricing1Fs as $facility)
                            <li class="flex items-center gap-3 text-sm group-hover:text-gray-900 transition-colors duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-gray-900">
                                    <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 01.208 1.04l-9 13.5a.75.75 0 01-1.154.114l-6-6a.75.75 0 011.06-1.06l5.353 5.353 8.493-12.739a.75.75 0 011.04-.208z" clip-rule="evenodd" />
                                </svg>
                                {{ trim($facility) }}
                            </li>
                            @endforeach
                        </ul>
                        
                        <a href="{{ $global_settings['pricing_1_link'] ?? '#' }}" target="_blank" class="block text-center w-full py-4 rounded-xl border-2 border-gray-200 font-bold text-gray-900 hover:border-gray-900 transition-colors duration-300">
                            Book Now
                        </a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-gray-900 rounded-3xl p-7 shadow-2xl relative overflow-hidden group hover:-translate-y-2 transition-transform duration-300 transform md:scale-105 z-10 scroll-reveal" data-reveal="up" data-reveal-delay="120">
                    <div class="absolute bottom-0 left-0 w-full h-1/2 opacity-[0.05] bg-[url('https://images.unsplash.com/photo-1591604129939-f1efa4d9f7fa?q=80&w=800&auto=format&fit=crop')] bg-cover bg-bottom"></div>
                    <div class="absolute -top-10 -right-10 w-32 h-32 bg-[#FFB300] rounded-full blur-[80px] opacity-20 group-hover:opacity-40 transition-opacity"></div>
                    
                    <div class="relative z-10">
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="text-gray-400 font-semibold text-lg">{{ $global_settings['pricing_2_name'] ?? 'Family Umrah' }}</h4>
                                <div class="text-4xl md:text-[2.6rem] font-bold text-white mt-2">{{ $global_settings['pricing_2_price'] ?? 'Rp 42.500.000' }}</div>
                            </div>
                            <span class="rounded-lg px-3 py-1.5 text-xs font-bold text-gray-900 bg-[#FFB300] shadow-[0_0_15px_rgba(255,179,0,0.5)]">
                                {{ $global_settings['pricing_2_badge'] ?? 'Save 30%' }}
                            </span>
                        </div>
                        
                        <hr class="my-8 border-gray-800">
                        
                        <p class="font-bold text-white mb-6">What's included</p>
                        <ul class="space-y-4 mb-10 text-gray-300 font-medium">
                            @php
                                $pricing2Fs = explode(',', $global_settings['pricing_2_facilities'] ?? "Jan 15 - Jan 20,Document Guide,5 Stars Hotel,Local Meals,Visa included");
                            @endphp
                            @foreach($pricing2Fs as $facility)
                            <li class="flex items-center gap-3 text-sm group-hover:text-white transition-colors duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-[#FFB300]">
                                    <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 01.208 1.04l-9 13.5a.75.75 0 01-1.154.114l-6-6a.75.75 0 011.06-1.06l5.353 5.353 8.493-12.739a.75.75 0 011.04-.208z" clip-rule="evenodd" />
                                </svg>
                                {{ trim($facility) }}
                            </li>
                            @endforeach
                        </ul>
                        
                        <a href="{{ $global_settings['pricing_2_link'] ?? '#' }}" target="_blank" class="block text-center w-full py-4 rounded-xl bg-[#FFB300] font-bold text-gray-900 hover:bg-yellow-500 transition-colors duration-300 shadow-[0_4px_14px_0_rgba(255,179,0,0.39)]">
                            Book Now
                        </a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-3xl p-7 shadow-sm border border-gray-100 relative overflow-hidden group hover:shadow-xl transition-shadow duration-300 scroll-reveal" data-reveal="up" data-reveal-delay="200">
                    <div class="absolute bottom-0 left-0 w-full h-1/2 opacity-[0.03] bg-[url('https://images.unsplash.com/photo-1584551246679-0daf3d275d0f?q=80&w=600&auto=format&fit=crop')] bg-cover bg-bottom"></div>
                    
                    <div class="relative z-10">
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="text-gray-600 font-semibold text-lg">{{ $global_settings['pricing_3_name'] ?? 'Ramadan Umrah' }}</h4>
                                <div class="text-4xl md:text-[2.6rem] font-bold text-gray-900 mt-2">{{ $global_settings['pricing_3_price'] ?? 'Rp 55.000.000' }}</div>
                            </div>
                            <span class="border border-gray-200 rounded-lg px-3 py-1.5 text-xs font-bold text-gray-700 bg-white shadow-sm">
                                {{ $global_settings['pricing_3_badge'] ?? 'Save 30%' }}
                            </span>
                        </div>
                        
                        <hr class="my-8 border-gray-200">
                        
                        <p class="font-bold text-gray-900 mb-6">What's included</p>
                        <ul class="space-y-4 mb-10 text-gray-600 font-medium">
                            @php
                                $pricing3Fs = explode(',', $global_settings['pricing_3_facilities'] ?? "Jan 15 - Jan 20,Document Guide,5 Stars Hotel,Local Meals,Visa included");
                            @endphp
                            @foreach($pricing3Fs as $facility)
                            <li class="flex items-center gap-3 text-sm group-hover:text-gray-900 transition-colors duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-gray-900">
                                    <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 01.208 1.04l-9 13.5a.75.75 0 01-1.154.114l-6-6a.75.75 0 011.06-1.06l5.353 5.353 8.493-12.739a.75.75 0 011.04-.208z" clip-rule="evenodd" />
                                </svg>
                                {{ trim($facility) }}
                            </li>
                            @endforeach
                        </ul>
                        
                        <a href="{{ $global_settings['pricing_3_link'] ?? '#' }}" target="_blank" class="block text-center w-full py-4 rounded-xl border-2 border-gray-200 font-bold text-gray-900 hover:border-gray-900 transition-colors duration-300">
                            Book Now
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="w-full bg-white py-24">
        <div class="max-w-5xl mx-auto px-4 md:px-12">
            
            <div class="text-center mb-16 scroll-reveal" data-reveal="up">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Why Us ?</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                
                <div class="bg-[#F8F9FA] rounded-2xl p-8 border border-gray-200 hover:shadow-lg transition duration-300 scroll-reveal" data-reveal="up">
                    <div class="flex items-center gap-4 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8 text-gray-900">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9 9 0 100-18 9 9 0 000 18z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 9l-6 6m0-6h6v6" />
                        </svg>
                        <h3 class="text-xl font-bold text-gray-900">{{ $global_settings['why_us_title_1'] ?? 'Competent' }}</h3>
                    </div>
                    <p class="text-gray-500 text-sm leading-relaxed font-medium">
                        {{ $global_settings['why_us_desc_1'] ?? 'The Guide are reliable in knowledge, wise, intelligent in presenting solutions so that they are able to provide calm and comfort in worship.' }}
                    </p>
                </div>

                <div class="bg-[#F8F9FA] rounded-2xl p-8 border border-gray-200 hover:shadow-lg transition duration-300 scroll-reveal" data-reveal="up" data-reveal-delay="80">
                    <div class="flex items-center gap-4 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8 text-gray-900">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9 9 0 100-18 9 9 0 000 18z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 9l-6 6m0-6h6v6" />
                        </svg>
                        <h3 class="text-xl font-bold text-gray-900">{{ $global_settings['why_us_title_2'] ?? 'Affordable Rates' }}</h3>
                    </div>
                    <p class="text-gray-500 text-sm leading-relaxed font-medium">
                        {{ $global_settings['why_us_desc_2'] ?? 'The Guide are reliable in knowledge, wise, intelligent in presenting solutions so that they are able to provide calm and comfort in worship.' }}
                    </p>
                </div>

                <div class="bg-[#F8F9FA] rounded-2xl p-8 border border-gray-200 hover:shadow-lg transition duration-300 scroll-reveal" data-reveal="up" data-reveal-delay="160">
                    <div class="flex items-center gap-4 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8 text-gray-900">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9 9 0 100-18 9 9 0 000 18z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 9l-6 6m0-6h6v6" />
                        </svg>
                        <h3 class="text-xl font-bold text-gray-900">{{ $global_settings['why_us_title_3'] ?? 'Responsive' }}</h3>
                    </div>
                    <p class="text-gray-500 text-sm leading-relaxed font-medium">
                        {{ $global_settings['why_us_desc_3'] ?? 'The Guide are reliable in knowledge, wise, intelligent in presenting solutions so that they are able to provide calm and comfort in worship.' }}
                    </p>
                </div>

                <div class="bg-[#1A1D20] rounded-2xl p-8 shadow-xl hover:-translate-y-1 transition duration-300 scroll-reveal" data-reveal="up" data-reveal-delay="240">
                    <div class="flex items-center gap-4 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9 9 0 100-18 9 9 0 000 18z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 9l-6 6m0-6h6v6" />
                        </svg>
                        <h3 class="text-xl font-bold text-white">{{ $global_settings['why_us_title_4'] ?? 'Trust & Safety' }}</h3>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed font-medium">
                        {{ $global_settings['why_us_desc_4'] ?? 'The Guide are reliable in knowledge, wise, intelligent in presenting solutions so that they are able to provide calm and comfort in worship.' }}
                    </p>
                </div>

            </div>
        </div>
    </section>

<section class="w-full bg-white py-20 mt-10">
        <div class="max-w-7xl mx-auto px-4 md:px-12">
            <div class="text-center mb-16 scroll-reveal" data-reveal="up">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900">{{ $global_settings['gallery_title'] ?? 'Our Pilgrimage Moments' }}</h2>
                <p class="text-gray-500 mt-4 text-sm md:text-base font-medium">{{ $global_settings['gallery_subtitle'] ?? 'Glimpses of peace and devotion from our recent journeys.' }}</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 auto-rows-[150px] md:auto-rows-[200px]">
                <div class="col-span-2 row-span-2 rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition duration-500 group scroll-reveal" data-reveal="up">
                    <img src="{{ isset($global_settings['gallery_img_1']) ? asset('storage/' . $global_settings['gallery_img_1']) : 'https://images.unsplash.com/photo-1591604129939-f1efa4d9f7fa?q=80&w=800&auto=format&fit=crop' }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" alt="Gallery 1">
                </div>
                <div class="rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition duration-500 group scroll-reveal" data-reveal="up" data-reveal-delay="80">
                    <img src="{{ isset($global_settings['gallery_img_2']) ? asset('storage/' . $global_settings['gallery_img_2']) : 'https://images.unsplash.com/photo-1580281699564-8395bd768310?q=80&w=400&auto=format&fit=crop' }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" alt="Gallery 2">
                </div>
                <div class="rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition duration-500 group scroll-reveal" data-reveal="up" data-reveal-delay="120">
                    <img src="{{ isset($global_settings['gallery_img_3']) ? asset('storage/' . $global_settings['gallery_img_3']) : 'https://images.unsplash.com/photo-1565552643983-65239e24f469?q=80&w=400&auto=format&fit=crop' }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" alt="Gallery 3">
                </div>
                <div class="rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition duration-500 group scroll-reveal" data-reveal="up" data-reveal-delay="160">
                    <img src="{{ isset($global_settings['gallery_img_4']) ? asset('storage/' . $global_settings['gallery_img_4']) : 'https://images.unsplash.com/photo-1604870428581-22e6b6eb4c51?q=80&w=400&auto=format&fit=crop' }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" alt="Gallery 4">
                </div>
                <div class="rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition duration-500 group scroll-reveal" data-reveal="up" data-reveal-delay="200">
                    <img src="{{ isset($global_settings['gallery_img_5']) ? asset('storage/' . $global_settings['gallery_img_5']) : 'https://images.unsplash.com/photo-1584551246679-0daf3d275d0f?q=80&w=400&auto=format&fit=crop' }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" alt="Gallery 5">
                </div>
            </div>
        </div>
    </section>

    <section class="w-full mt-10">
        <div class="max-w-6xl mx-auto px-4 md:px-12">
            <div class="relative w-full rounded-[2rem] overflow-hidden bg-gray-200">
                @if($testimonials->count() > 0)
                    @foreach($testimonials as $index => $t)
                        <div class="testi-bg absolute inset-0 bg-cover bg-right md:bg-center transition-opacity duration-500 {{ $index === 0 ? 'opacity-100' : 'opacity-0' }}" 
                             style="background-image: url('{{ asset('storage/' . $t->gambar_background) }}');" 
                             data-index="{{ $index }}"></div>
                    @endforeach
                @else
                    <div class="absolute inset-0 bg-cover bg-right md:bg-center" style="background-image: url('https://images.unsplash.com/photo-1606122017369-d782bbb78f32?q=80&w=2070&auto=format&fit=crop');"></div>
                @endif
                <div class="absolute inset-0 bg-white/60 md:bg-white/40"></div>
                <div class="absolute inset-0 bg-gradient-to-r from-gray-200/90 via-gray-200/70 to-transparent"></div>

                <div class="relative z-10 p-6 sm:p-10 md:p-16 lg:p-20 flex flex-col items-start w-full lg:w-[60%]">
                    <h2 class="text-2xl sm:text-3xl md:text-5xl font-bold text-gray-900 mb-6 md:mb-8 tracking-tight scroll-reveal" data-reveal="up">{{ $global_settings['testimonial_title'] ?? 'What Our Pilgrims Say' }}</h2>

                    <div class="relative w-full max-w-xl min-h-[420px] sm:min-h-[380px] md:min-h-[300px] scroll-reveal" data-reveal="up" data-reveal-delay="120">
                        @forelse($testimonials as $index => $t)
                        <div class="testi-card absolute inset-0 bg-white rounded-2xl p-6 md:p-8 shadow-xl flex flex-col justify-between transition-opacity duration-300 {{ $index === 0 ? 'opacity-100 z-10' : 'opacity-0 z-0' }}" data-index="{{ $index }}">
                            <p class="text-gray-600 text-sm md:text-base leading-relaxed font-medium mb-6">
                                "{{ $t->pesan }}"
                            </p>
                            <div>
                                <div class="flex text-[#FFB300] gap-1 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" /></svg>
                                    <span class="text-xs font-bold ml-2">{{ $t->rating }}</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <img src="{{ asset('storage/' . $t->avatar) }}" alt="User" class="w-12 h-12 rounded-full object-cover">
                                    <div>
                                        <h4 class="text-gray-900 font-bold text-sm">{{ $t->nama }}</h4>
                                        <p class="text-gray-400 text-xs">{{ $t->profesi }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="bg-white rounded-2xl p-6 md:p-8 shadow-xl flex flex-col justify-between">
                            <p class="text-gray-600 text-sm md:text-base leading-relaxed font-medium mb-6">
                                "Belum ada review dari jamaah."
                            </p>
                        </div>
                        @endforelse
                    </div>

                    <div class="flex items-center gap-3 mt-12 ml-6 md:ml-8 scroll-reveal" data-reveal="up" data-reveal-delay="180">
                        <button id="btn-prev" class="w-10 h-10 rounded-full border border-gray-400 flex items-center justify-center hover:bg-white transition bg-transparent text-gray-700 z-20 relative">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" /></svg>
                        </button>
                        <button id="btn-next" class="w-10 h-10 rounded-full bg-[#FFB300] flex items-center justify-center hover:bg-yellow-500 transition shadow-md text-white z-20 relative">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.testi-card');
            const bgs = document.querySelectorAll('.testi-bg');
            if(cards.length === 0) return;
            
            let currentIndex = 0;
            
            function showCard(index) {
                cards.forEach((card, i) => {
                    if(i === index) {
                        card.classList.remove('opacity-0', 'z-0');
                        card.classList.add('opacity-100', 'z-10');
                    } else {
                        card.classList.remove('opacity-100', 'z-10');
                        card.classList.add('opacity-0', 'z-0');
                    }
                });
                
                bgs.forEach((bg, i) => {
                    if(i === index) {
                        bg.classList.remove('opacity-0');
                        bg.classList.add('opacity-100');
                    } else {
                        bg.classList.remove('opacity-100');
                        bg.classList.add('opacity-0');
                    }
                });
            }
            
            document.getElementById('btn-next').addEventListener('click', () => {
                currentIndex = (currentIndex + 1) % cards.length;
                showCard(currentIndex);
            });
            
            document.getElementById('btn-prev').addEventListener('click', () => {
                currentIndex = (currentIndex - 1 + cards.length) % cards.length;
                showCard(currentIndex);
            });
        });
    </script>

    <section class="w-full bg-white py-24">
        <div class="max-w-6xl mx-auto px-4 md:px-12">
            <div class="flex justify-between items-end mb-10 scroll-reveal" data-reveal="up">
                <h2 class="text-3xl md:text-3xl md:text-4xl font-bold text-gray-900">Haramain News</h2>
                <a href="{{ route('front.artikel.index') }}" class="text-xs font-bold text-gray-900 hover:text-[#FFB300] transition flex items-center gap-1 uppercase">
                    See More <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-3 h-3"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @php
                    $haramainArticles = \App\Models\Article::latest()->take(3)->get();
                @endphp
                @foreach($haramainArticles as $index => $article)
                    <article class="scroll-reveal bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 group flex flex-col" data-reveal="up" style="transition-delay: {{ 0.1 + (($index % 3) * 0.1) }}s;">
                        <div class="relative h-60 overflow-hidden">
                            <img src="{{ asset('storage/' . $article->image) }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-700" alt="{{ $article->title }}">
                            <div class="absolute top-4 left-4">
                                <span class="bg-[#FFB300] text-black text-[10px] font-bold uppercase tracking-wider px-4 py-2 rounded-full shadow-md">{{ $article->category }}</span>
                            </div>
                        </div>
                        <div class="p-8 flex flex-col flex-grow">
                            <div class="flex items-center gap-2 text-xs font-medium text-gray-400 mb-4">
                                <span>{{ $article->created_at->translatedFormat('d F Y') }}</span>
                                <span class="w-1 h-1 rounded-full bg-gray-300"></span>
                                <span>Oleh {{ $article->author }}</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3 font-serif group-hover:text-[#FFB300] transition duration-300 leading-snug">{{ $article->title }}</h3>
                            <p class="text-gray-500 text-sm mb-8 font-light leading-relaxed line-clamp-3">{{ $article->excerpt }}</p>

                            <div class="mt-auto pt-4 border-t border-gray-100">
                                <a href="{{ route('front.artikel.detail', $article->slug) }}" class="inline-flex items-center gap-2 text-[#1A1D20] font-bold text-sm hover:text-[#FFB300] transition group/link">
                                    Baca Selengkapnya
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 group-hover/link:translate-x-1 transition-transform"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg>
                                </a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="w-full bg-[#F8F9FA] py-24 border-t border-gray-100">
        <div class="max-w-7xl mx-auto px-4 md:px-12">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 scroll-reveal" data-reveal="up">
                <div>
                    <h2 class="text-3xl md:text-3xl md:text-4xl font-bold text-gray-900">Panduan Manasik & Edukasi</h2>
                    <p class="text-gray-500 mt-4 text-sm md:text-base font-medium max-w-lg">
                        Persiapkan perjalanan suci Anda dengan bekal ilmu yang cukup. Pelajari tata cara ibadah Umrah dan Haji sesuai sunnah bersama ustadz pembimbing kami.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-5 gap-8">
                @php
                    $ytLink = $global_settings['edukasi_video_link'] ?? 'https://www.youtube.com/watch?v=dQw4w9WgXcQ';
                    preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?\s]{11})%i', $ytLink, $match);
                    $ytId = $match[1] ?? '';
                @endphp
                <div class="lg:col-span-3 relative rounded-3xl overflow-hidden shadow-lg min-h-[350px] scroll-reveal" data-reveal="right">
                    @if($ytId)
                    <iframe class="absolute inset-0 w-full h-full object-cover" src="https://www.youtube.com/embed/{{ $ytId }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    @else
                    <div class="absolute inset-0 w-full h-full bg-gray-200 flex items-center justify-center text-gray-500">Video not found</div>
                    @endif
                </div>

                <div class="lg:col-span-2 flex flex-col justify-between gap-4">
                    <div class="bg-white p-6 rounded-3xl flex items-center gap-5 hover:shadow-lg transition duration-300 border border-gray-100 group h-full scroll-reveal" data-reveal="up">
                        <div class="w-14 h-14 bg-yellow-50 rounded-2xl flex items-center justify-center text-[#FFB300] group-hover:bg-[#FFB300] group-hover:text-black transition duration-300 shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" /></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 text-lg group-hover:text-[#FFB300] transition duration-300">{{ $global_settings['edukasi_title_1'] ?? 'Kumpulan Doa Umrah' }}</h4>
                            <p class="text-sm text-gray-500 mt-1">{{ $global_settings['edukasi_desc_1'] ?? 'Lengkap dengan tulisan Arab, latin, dan terjemahan.' }}</p>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-3xl flex items-center gap-5 hover:shadow-lg transition duration-300 border border-gray-100 group h-full scroll-reveal" data-reveal="up" data-reveal-delay="120">
                        <div class="w-14 h-14 bg-yellow-50 rounded-2xl flex items-center justify-center text-[#FFB300] group-hover:bg-[#FFB300] group-hover:text-black transition duration-300 shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" /></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 text-lg group-hover:text-[#FFB300] transition duration-300">{{ $global_settings['edukasi_title_2'] ?? 'Checklist Perlengkapan' }}</h4>
                            <p class="text-sm text-gray-500 mt-1">{{ $global_settings['edukasi_desc_2'] ?? 'Barang esensial wajib bawa untuk jamaah pria & wanita.' }}</p>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-3xl flex items-center gap-5 hover:shadow-lg transition duration-300 border border-gray-100 group h-full scroll-reveal" data-reveal="up" data-reveal-delay="200">
                        <div class="w-14 h-14 bg-yellow-50 rounded-2xl flex items-center justify-center text-[#FFB300] group-hover:bg-[#FFB300] group-hover:text-black transition duration-300 shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 text-lg group-hover:text-[#FFB300] transition duration-300">{{ $global_settings['edukasi_title_3'] ?? 'Syarat & Larangan Ihram' }}</h4>
                            <p class="text-sm text-gray-500 mt-1">{{ $global_settings['edukasi_desc_3'] ?? 'Hal-hal yang membatalkan dan wajib dihindari.' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
