@extends('layouts.admin')

@section('title', 'Banner Halaman Haji')

@section('content')
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-slate-900">Banner & Header (Halaman Haji)</h2>
        <p class="text-slate-600 text-sm mt-1">Kelola konten visual dan teks untuk program Haji Furoda & Haji Khusus.</p>
    </div>

    @if(session('success'))
        <div class="bg-emerald-50 border-l-4 border-emerald-500 text-emerald-700 p-4 mb-6 rounded shadow-sm">
            <p class="font-medium"><i class="fas fa-check-circle mr-2"></i> {{ session('success') }}</p>
        </div>
    @endif

    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
        <div class="bg-slate-950 px-6 py-4 border-b border-slate-800">
            <h3 class="text-amber-500 font-semibold text-lg flex items-center gap-2">
                <i class="fas fa-kaaba"></i> Konten Banner Haji
            </h3>
        </div>
        
        <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data" class="p-6 md:p-8">
            @csrf
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                
                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Headline (Judul Utama)</label>
                        <textarea name="haji_banner_headline" rows="2" 
                            class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-amber-500 outline-none transition-all">{{ $settings['haji_banner_headline'] ?? 'Panggilan Suci Haji Furoda & Khusus Bersama Fattah Travel' }}</textarea>
                    </div>

                    <div class="p-4 bg-slate-50 border border-slate-200 rounded-xl space-y-4">
                        <label class="block text-sm font-bold text-slate-800 border-b border-slate-200 pb-2"><i class="fas fa-quote-left mr-1 text-amber-500"></i> Teks Kutipan / Hadits</label>
                        
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1">Isi Kutipan</label>
                            <textarea name="haji_banner_quote" rows="3" 
                                class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-amber-500 outline-none text-sm italic">{{ $settings['haji_banner_quote'] ?? '"Dan haji mabrur tidak ada balasannya melainkan surga. Sebaik-baik jihad bagi para wanita adalah haji yang mabrur."' }}</textarea>
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1">Sumber Kutipan</label>
                            <input type="text" name="haji_banner_quote_source" value="{{ $settings['haji_banner_quote_source'] ?? '(HR. Bukhari dan Muslim)' }}" 
                                class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-amber-500 outline-none text-sm">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Teks Badge Melayang (Kanan)</label>
                        <input type="text" name="haji_banner_badge" value="{{ $settings['haji_banner_badge'] ?? 'TANPA ANTRE' }}" 
                            class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-amber-500 outline-none transition-all font-bold">
                    </div>
                </div>

                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Gambar Background Banner Haji</label>
                        
                        @if(isset($settings['haji_banner_image']))
                            <div class="mb-4 p-2 bg-slate-50 border border-slate-200 rounded-lg inline-block w-full">
                                <img src="{{ asset('storage/' . $settings['haji_banner_image']) }}" alt="Banner Haji Saat Ini" class="w-full h-48 object-cover rounded-md">
                            </div>
                        @endif

                        <input type="file" name="haji_banner_image" accept="image/*"
                            class="w-full text-sm text-slate-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-amber-100 file:text-amber-700 hover:file:bg-amber-200 transition-all border border-slate-300 rounded-lg">
                    </div>
                </div>

            </div>

            <div class="mt-8 pt-6 border-t border-slate-100 flex justify-end">
                <button type="submit" class="bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold py-2.5 px-6 rounded-lg shadow transition-colors flex items-center gap-2">
                    <i class="fas fa-save"></i> Simpan Banner Haji
                </button>
            </div>
        </form>
    </div>
@endsection