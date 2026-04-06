@extends('layouts.main')

@section('title', 'Artikel & Inspirasi - Fattah Travel')

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

    @php
        $bannerImage = !empty($global_settings['article_banner_image'])
            ? asset('storage/' . $global_settings['article_banner_image'])
            : asset('g3.jpg');
        $headline = $global_settings['article_banner_headline'] ?? 'Jurnal & Inspirasi Panduan Ibadah Fattah Travel';
        $quote = $global_settings['article_banner_quote'] ?? '"Barangsiapa menempuh suatu jalan untuk menuntut ilmu agama, maka Allah akan mudahkan baginya jalan menuju surga."';
        $quoteSource = $global_settings['article_banner_quote_source'] ?? '(HR. Muslim)';
        $bannerBadge = $global_settings['article_banner_badge'] ?? 'KABAR TERBARU';
    @endphp

    <section class="relative min-h-screen w-full bg-cover bg-center flex items-center" style="background-image: url('{{ $bannerImage }}');">
        <div class="absolute inset-0 bg-linear-to-r from-black/90 via-black/60 to-black/20"></div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-8 md:px-12 w-full mt-20">
            <div class="max-w-3xl">
                <h1 class="hero-anim-up text-4xl md:text-5xl lg:text-6xl font-serif font-bold text-white mb-6 leading-[1.15] drop-shadow-lg" style="animation-delay: 0.1s;">
                    {!! nl2br(e($headline)) !!}
                </h1>

                <p class="hero-anim-up text-gray-200 text-base md:text-lg mb-10 leading-relaxed max-w-2xl font-sans font-light italic drop-shadow-md border-l-4 border-[#FFB300] pl-6 py-2" style="animation-delay: 0.25s;">
                    {!! $quote !!} <br>
                    <span class="text-gray-400 text-sm font-normal not-italic mt-2 inline-block">{!! $quoteSource !!}</span>
                </p>

                <form action="{{ route('front.artikel.index') }}" method="GET" class="hero-anim-up w-full max-w-md" style="animation-delay: 0.4s;">
                    @if(request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    <div class="flex items-center h-12 rounded-full bg-black/30 border border-white/25 backdrop-blur-sm px-2 pl-4 transition focus-within:border-[#FFB300] focus-within:ring-1 focus-within:ring-[#FFB300]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 text-gray-300 mr-2 shrink-0">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35m1.85-5.15a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari artikel, tips, atau panduan..." class="flex-1 bg-transparent text-sm text-white placeholder-gray-300 focus:outline-none font-sans">
                        <button type="submit" class="ml-2 h-9 px-4 rounded-full bg-[#FFB300] hover:bg-yellow-500 text-black text-xs font-bold tracking-wide uppercase transition">
                            Cari
                        </button>
                    </div>
                </form>
            </div>

            <div class="hero-anim-right hidden lg:block absolute top-20 right-12 md:right-20 rotate-12 font-sans" style="animation-delay: 0.55s;">
                <div class="flex flex-col items-center drop-shadow-2xl">
                    <span class="font-black text-3xl text-[#FFB300] uppercase tracking-wider">{{ $bannerBadge }}</span>
                </div>
            </div>
        </div>
    </section>

<section class="w-full bg-[#F8F9FA] py-24">
        <div class="max-w-7xl mx-auto px-8 md:px-12">
            
            <div class="scroll-reveal flex flex-wrap items-center justify-center gap-3 mb-16" data-reveal="up">
                <a href="{{ route('front.artikel.index', ['search' => request('search')]) }}" class="{{ !request('category') ? 'bg-[#1A1D20] text-white shadow-md' : 'bg-white text-gray-600 hover:bg-[#FFB300] hover:text-black border border-gray-200' }} px-6 py-2.5 rounded-full text-sm font-bold transition duration-300">Semua</a>
                @php
                    $categories = ['Tips & Trik', 'Berita', 'Panduan Ibadah'];
                @endphp
                @foreach($categories as $cat)
                <a href="{{ route('front.artikel.index', ['category' => $cat, 'search' => request('search')]) }}" class="{{ request('category') == $cat ? 'bg-[#1A1D20] text-white shadow-md' : 'bg-white text-gray-600 hover:bg-[#FFB300] hover:text-black border border-gray-200' }} px-6 py-2.5 rounded-full text-sm font-bold transition duration-300">{{ $cat }}</a>
                @endforeach
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($articles as $index => $article)
                    <article class="scroll-reveal bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 group flex flex-col" data-reveal="up" style="transition-delay: {{ 0.1 + (($index % 3) * 0.1) }}s;">
                        <div class="relative h-60 overflow-hidden">
                            <img src="{{ asset('storage/' . $article->image) }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-700" alt="{{ $article->title }}">
                            <div class="absolute top-4 left-4">
                                <span class="bg-[#FFB300] text-black text-[10px] font-bold uppercase tracking-wider px-4 py-2 rounded-full shadow-md">{{ $article->category }}</span>
                            </div>
                        </div>
                        <div class="p-8 flex flex-col grow">
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
                @empty
                    <div class="col-span-1 md:col-span-2 lg:col-span-3 bg-white rounded-3xl border border-gray-100 p-10 text-center text-gray-500">
                        Artikel belum tersedia.
                    </div>
                @endforelse
            </div>

            <div class="scroll-reveal flex justify-center mt-20" data-reveal="up">
                {{ $articles->links() }}
            </div>

        </div>
    </section>

@endsection