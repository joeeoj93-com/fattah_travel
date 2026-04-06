@extends('layouts.admin')

@section('title', 'Tentang Kami (About)')

@section('content')
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-slate-900">Tentang Kami (About Section)</h2>
        <p class="text-slate-600 text-sm mt-1">Kelola teks profil utama perusahaan dan komposisi 5 gambar.</p>
    </div>

    @if(session('success'))
        <div class="bg-emerald-50 border-l-4 border-emerald-500 text-emerald-700 p-4 mb-6 rounded shadow-sm">
            <div class="flex items-center">
                <i class="fas fa-check-circle mr-3 text-lg"></i>
                <p class="font-medium">{{ session('success') }}</p>
            </div>
        </div>
    @endif

    <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            
            <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden h-fit">
                <div class="bg-slate-950 px-6 py-4 border-b border-slate-800">
                    <h3 class="text-amber-500 font-semibold text-lg flex items-center gap-2">
                        <i class="fas fa-align-left"></i> Teks Profil
                    </h3>
                </div>
                <div class="p-6 md:p-8 space-y-6">
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Headline (Judul Utama)</label>
                        <input type="text" name="about_headline" value="{{ $settings['about_headline'] ?? 'We are award winning Hajj & Umrah Agency' }}" 
                            class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-amber-500 outline-none transition-all">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Deskripsi Paragraf</label>
                        <textarea name="about_description" rows="6" 
                            class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-amber-500 outline-none transition-all">{{ $settings['about_description'] ?? 'We have been worked within the hajj and umrah travel industry for over 20 years and we\'re confident enough to say that we know our stuff, capability and hospitality.' }}</textarea>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
                <div class="bg-slate-950 px-6 py-4 border-b border-slate-800">
                    <h3 class="text-amber-500 font-semibold text-lg flex items-center gap-2">
                        <i class="fas fa-images"></i> Komposisi Gambar
                    </h3>
                </div>
                <div class="p-6 md:p-8 space-y-6">
                    <div class="p-4 bg-slate-50 border border-slate-200 rounded-xl">
                        <label class="block text-sm font-bold text-slate-800 mb-2">1. Gambar Latar (Persegi Panjang Vertikal)</label>
                        <p class="text-xs text-slate-500 mb-3">Ini adalah gambar pemandangan utama di belakang ketupat.</p>
                        @if(isset($settings['about_img_bg']))
                            <img src="{{ asset('storage/' . $settings['about_img_bg']) }}" class="h-24 w-auto object-cover rounded mb-2 border">
                        @endif
                        <input type="file" name="about_img_bg" accept="image/*" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-amber-100 file:text-amber-700">
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="p-4 border border-slate-200 rounded-xl">
                            <label class="block text-sm font-bold text-slate-800 mb-2">2. Ketupat Atas</label>
                            @if(isset($settings['about_img_top']))
                                <img src="{{ asset('storage/' . $settings['about_img_top']) }}" class="h-16 w-16 object-cover rounded mb-2 border">
                            @endif
                            <input type="file" name="about_img_top" accept="image/*" class="w-full text-xs text-slate-500">
                        </div>
                        <div class="p-4 border border-slate-200 rounded-xl">
                            <label class="block text-sm font-bold text-slate-800 mb-2">3. Ketupat Bawah</label>
                            @if(isset($settings['about_img_bottom']))
                                <img src="{{ asset('storage/' . $settings['about_img_bottom']) }}" class="h-16 w-16 object-cover rounded mb-2 border">
                            @endif
                            <input type="file" name="about_img_bottom" accept="image/*" class="w-full text-xs text-slate-500">
                        </div>
                        <div class="p-4 border border-slate-200 rounded-xl">
                            <label class="block text-sm font-bold text-slate-800 mb-2">4. Ketupat Kiri</label>
                            @if(isset($settings['about_img_left']))
                                <img src="{{ asset('storage/' . $settings['about_img_left']) }}" class="h-16 w-16 object-cover rounded mb-2 border">
                            @endif
                            <input type="file" name="about_img_left" accept="image/*" class="w-full text-xs text-slate-500">
                        </div>
                        <div class="p-4 border border-slate-200 rounded-xl">
                            <label class="block text-sm font-bold text-slate-800 mb-2">5. Ketupat Kanan</label>
                            @if(isset($settings['about_img_right']))
                                <img src="{{ asset('storage/' . $settings['about_img_right']) }}" class="h-16 w-16 object-cover rounded mb-2 border">
                            @endif
                            <input type="file" name="about_img_right" accept="image/*" class="w-full text-xs text-slate-500">
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="flex justify-end mt-4">
            <button type="submit" class="bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold py-3 px-8 rounded-lg shadow-lg transition-colors flex items-center gap-2 text-lg">
                <i class="fas fa-save"></i> Simpan Halaman Tentang Kami
            </button>
        </div>
    </form>
@endsection