@extends('layouts.admin')

@section('title', 'Banner Halaman Umrah')

@section('content')
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-slate-900">Banner & Header (Halaman Umrah)</h2>
        <p class="text-slate-600 text-sm mt-1">Kelola gambar latar belakang, judul, dan kutipan hadits pada halaman daftar paket Umrah.</p>
    </div>

    @if(session('success'))
        <div class="bg-emerald-50 border-l-4 border-emerald-500 text-emerald-700 p-4 mb-6 rounded shadow-sm">
            <div class="flex items-center">
                <i class="fas fa-check-circle mr-3 text-lg"></i>
                <p class="font-medium">{{ session('success') }}</p>
            </div>
        </div>
    @endif

    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
        <div class="bg-slate-950 px-6 py-4 border-b border-slate-800">
            <h3 class="text-amber-500 font-semibold text-lg flex items-center gap-2">
                <i class="fas fa-kaaba"></i> Konten Banner Umrah
            </h3>
        </div>
        
        <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data" class="p-6 md:p-8">
            @csrf
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                
                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Headline (Judul Utama)</label>
                        <textarea name="umrah_banner_headline" rows="2" 
                            class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-amber-500 outline-none transition-all">{{ $settings['umrah_banner_headline'] ?? 'Perjalanan Umroh Lebih Nyaman Bersama Fattah Travel' }}</textarea>
                        <p class="text-xs text-slate-500 mt-1">Anda bisa menggunakan tag HTML seperti &lt;span class="text-amber-500"&gt; untuk memberi warna khusus pada kata tertentu jika diperlukan di frontend.</p>
                    </div>

                    <div class="p-4 bg-slate-50 border border-slate-200 rounded-xl space-y-4">
                        <label class="block text-sm font-bold text-slate-800 border-b border-slate-200 pb-2"><i class="fas fa-quote-left mr-1"></i> Teks Kutipan / Hadits</label>
                        
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1">Isi Kutipan</label>
                            <textarea name="umrah_banner_quote" rows="3" 
                                class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-amber-500 outline-none transition-all text-sm italic">{{ $settings['umrah_banner_quote'] ?? '"Antara umrah yang satu dan umrah lainnya, itu akan menghapuskan dosa di antara keduanya. Dan haji mabrur tidak ada balasannya melainkan surga."' }}</textarea>
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1">Sumber Kutipan</label>
                            <input type="text" name="umrah_banner_quote_source" value="{{ $settings['umrah_banner_quote_source'] ?? '(HR. Bukhari dan Muslim)' }}" 
                                class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-amber-500 outline-none transition-all text-sm">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Teks Badge Melayang (Kanan)</label>
                        <input type="text" name="umrah_banner_badge" value="{{ $settings['umrah_banner_badge'] ?? 'LEBIH NYAMAN' }}" 
                            class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-amber-500 outline-none transition-all font-bold">
                    </div>
                </div>

                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Gambar Background Banner</label>
                        
                        @if(isset($settings['umrah_banner_image']))
                            <div class="mb-4 p-2 bg-slate-50 border border-slate-200 rounded-lg inline-block w-full">
                                <img src="{{ asset('storage/' . $settings['umrah_banner_image']) }}" alt="Banner Umrah Saat Ini" class="w-full h-48 object-cover rounded-md">
                            </div>
                        @endif

                        <input type="file" name="umrah_banner_image" accept="image/*"
                            class="w-full text-sm text-slate-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-amber-100 file:text-amber-700 hover:file:bg-amber-200 transition-all border border-slate-300 rounded-lg">
                        <p class="text-xs text-slate-500 mt-2 list-disc pl-4">Saran resolusi: 1920x1080 pixel (Landscape). Pastikan gambar menggunakan overlay gelap di frontend agar teks putih tetap terbaca.</p>
                    </div>
                </div>

            </div>

            <div class="mt-8 pt-6 border-t border-slate-100 flex justify-end">
                <button type="submit" class="bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold py-2.5 px-6 rounded-lg shadow transition-colors flex items-center gap-2">
                    <i class="fas fa-save"></i> Simpan Banner Umrah
                </button>
            </div>
        </form>
    </div>
@endsection