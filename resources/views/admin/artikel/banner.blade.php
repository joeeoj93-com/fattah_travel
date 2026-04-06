@extends('layouts.admin')

@section('title', 'Banner Halaman Artikel')

@section('content')
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-slate-900">Banner & Header (Halaman Artikel)</h2>
        <p class="text-slate-600 text-sm mt-1">Kelola konten visual, judul, dan kutipan untuk halaman jurnal & inspirasi.</p>
    </div>

    @if(session('success'))
        <div class="bg-emerald-50 border-l-4 border-emerald-500 text-emerald-700 p-4 mb-6 rounded shadow-sm">
            <p class="font-medium"><i class="fas fa-check-circle mr-2"></i> {{ session('success') }}</p>
        </div>
    @endif

    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
        <div class="bg-slate-950 px-6 py-4 border-b border-slate-800">
            <h3 class="text-amber-500 font-semibold text-lg flex items-center gap-2">
                <i class="fas fa-newspaper"></i> Konten Banner Artikel
            </h3>
        </div>
        
        <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data" class="p-6 md:p-8">
            @csrf
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                
                <div class="space-y-6">
                    <div>
                        <label for="article_banner_headline" class="block text-sm font-semibold text-slate-700 mb-2">Headline (Judul Utama)</label>
                        <textarea id="article_banner_headline" name="article_banner_headline" rows="2"
                            class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-amber-500 outline-none transition-all">{{ $settings['article_banner_headline'] ?? 'Jurnal & Inspirasi Panduan Ibadah Fattah Travel' }}</textarea>
                    </div>

                    <div class="p-4 bg-slate-50 border border-slate-200 rounded-xl space-y-4">
                        <label class="block text-sm font-bold text-slate-800 border-b border-slate-200 pb-2"><i class="fas fa-quote-left mr-1 text-amber-500"></i> Teks Kutipan / Hadits</label>
                        
                        <div>
                            <label for="article_banner_quote" class="block text-xs font-semibold text-slate-700 mb-1">Isi Kutipan</label>
                            <textarea id="article_banner_quote" name="article_banner_quote" rows="3"
                                class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-amber-500 outline-none text-sm italic">{{ $settings['article_banner_quote'] ?? '"Barangsiapa menempuh suatu jalan untuk menuntut ilmu agama, maka Allah akan mudahkan baginya jalan menuju surga."' }}</textarea>
                        </div>

                        <div>
                            <label for="article_banner_quote_source" class="block text-xs font-semibold text-slate-700 mb-1">Sumber Kutipan</label>
                            <input type="text" id="article_banner_quote_source" name="article_banner_quote_source" value="{{ $settings['article_banner_quote_source'] ?? '(HR. Muslim)' }}"
                                class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-amber-500 outline-none text-sm">
                        </div>
                    </div>

                    <div>
                        <label for="article_banner_badge" class="block text-sm font-semibold text-slate-700 mb-2">Teks Badge Melayang (Kanan)</label>
                        <input type="text" id="article_banner_badge" name="article_banner_badge" value="{{ $settings['article_banner_badge'] ?? 'KABAR TERBARU' }}" 
                            class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-amber-500 outline-none transition-all font-bold">
                    </div>
                </div>

                <div class="space-y-6">
                    <div>
                        <label for="article_banner_image" class="block text-sm font-semibold text-slate-700 mb-2">Gambar Background Banner Artikel</label>
                        
                        @if(isset($settings['article_banner_image']))
                            <div class="mb-4 p-2 bg-slate-50 border border-slate-200 rounded-lg inline-block w-full">
                                <img src="{{ asset('storage/' . $settings['article_banner_image']) }}" alt="Banner Artikel Saat Ini" class="w-full h-48 object-cover rounded-md">
                            </div>
                        @endif

                        <input type="file" id="article_banner_image" name="article_banner_image" accept="image/*"
                            class="w-full text-sm text-slate-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-amber-100 file:text-amber-700 hover:file:bg-amber-200 transition-all border border-slate-300 rounded-lg">
                    </div>
                </div>

            </div>

            <div class="mt-8 pt-6 border-t border-slate-100 flex justify-end">
                <button type="submit" class="bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold py-2.5 px-6 rounded-lg shadow transition-colors flex items-center gap-2">
                    <i class="fas fa-save"></i> Simpan Banner Artikel
                </button>
            </div>
        </form>
    </div>
@endsection