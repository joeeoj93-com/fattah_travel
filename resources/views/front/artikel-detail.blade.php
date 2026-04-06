@extends('layouts.main')

@section('title', $article->title . ' - ' . ($global_settings['nama_brand'] ?? 'Fattah Travel'))

@section('content')
<section class="pt-28 pb-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-10">
        <div class="bg-white rounded-3xl overflow-hidden border border-gray-100 shadow-sm mb-10">
            <div class="relative h-[360px] md:h-[460px] w-full overflow-hidden">
                <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-linear-to-t from-black/70 via-black/20 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6 md:p-10 text-white">
                    <span class="inline-block bg-[#FFB300] text-black text-[11px] font-bold uppercase tracking-wider px-4 py-2 rounded-full shadow-md mb-4">{{ $article->category }}</span>
                    <h1 class="text-3xl md:text-5xl font-serif font-bold leading-tight">{{ $article->title }}</h1>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 items-start">
            <article class="lg:col-span-2 bg-white rounded-3xl border border-gray-100 p-6 md:p-10 shadow-sm">
                <div class="flex flex-wrap items-center gap-3 text-sm text-gray-500 mb-8 pb-6 border-b border-gray-100">
                    <span class="font-medium text-gray-700">Oleh {{ $article->author }}</span>
                    <span class="w-1.5 h-1.5 rounded-full bg-gray-300"></span>
                    <span>{{ $article->created_at->translatedFormat('d F Y') }}</span>
                    <span class="w-1.5 h-1.5 rounded-full bg-gray-300"></span>
                    <span>{{ number_format($article->views) }}x dibaca</span>
                </div>

                <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed prose-headings:text-gray-900 prose-a:text-amber-600">
                    {!! nl2br($article->body) !!}
                </div>
            </article>

            <aside class="lg:col-span-1 sticky top-28">
                <div class="bg-white rounded-3xl border border-gray-100 p-6 shadow-sm">
                    <h3 class="text-xl font-bold text-gray-900 font-serif mb-5">Artikel Lainnya</h3>

                    <div class="space-y-5">
                        @forelse($otherArticles as $item)
                            <a href="{{ route('front.artikel.detail', $item->slug) }}" class="group block">
                                <div class="flex gap-4 items-start">
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="w-20 h-20 rounded-xl object-cover border border-gray-100">
                                    <div>
                                        <p class="text-[11px] text-gray-400 font-medium mb-1">{{ $item->created_at->translatedFormat('d M Y') }}</p>
                                        <h4 class="text-sm font-bold text-gray-800 leading-snug group-hover:text-[#FFB300] transition">{{ $item->title }}</h4>
                                    </div>
                                </div>
                            </a>
                        @empty
                            <p class="text-sm text-gray-500">Belum ada artikel lainnya.</p>
                        @endforelse
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>
@endsection
