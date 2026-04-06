@extends('layouts.admin')

@section('title', 'Hero Banner Beranda')

@section('content')
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-slate-900">Hero Banner Utama</h2>
        <p class="text-slate-600 text-sm mt-1">Kelola file media (foto atau video) untuk latar belakang bagian paling atas halaman depan.</p>
    </div>

    @if(session('success'))
        <div class="bg-emerald-50 border-l-4 border-emerald-500 text-emerald-700 p-4 mb-6 rounded shadow-sm">
            <div class="flex items-center">
                <i class="fas fa-check-circle mr-3 text-lg"></i>
                <p class="font-medium">{{ session('success') }}</p>
            </div>
        </div>
    @endif

    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden max-w-3xl">
        <div class="bg-slate-950 px-6 py-4 border-b border-slate-800">
            <h3 class="text-amber-500 font-semibold text-lg flex items-center gap-2">
                <i class="fas fa-photo-video"></i> Media Banner (Foto / Video)
            </h3>
        </div>
        
        <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data" class="p-6 md:p-8">
            @csrf
            
            <div class="space-y-6">
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Unggah File Latar Belakang</label>
                    
                    @if(isset($settings['hero_media']))
                        @php
                            $mediaPath = $settings['hero_media'];
                            $isVideo = Str::endsWith(strtolower($mediaPath), ['.mp4', '.webm', '.ogg']);
                        @endphp
                        
                        <div class="mb-5 p-2 bg-slate-50 border border-slate-200 rounded-lg w-full">
                            <p class="text-xs text-slate-500 mb-2 font-medium">Preview Media Saat Ini:</p>
                            @if($isVideo)
                                <video src="{{ asset('storage/' . $mediaPath) }}" autoplay muted loop class="w-full h-64 object-cover rounded-md border border-slate-200"></video>
                            @else
                                <img src="{{ asset('storage/' . $mediaPath) }}" alt="Banner Saat Ini" class="w-full h-64 object-cover rounded-md border border-slate-200">
                            @endif
                        </div>
                    @endif

                    <input type="file" name="hero_media" accept="image/*,video/mp4,video/webm"
                        class="w-full text-sm text-slate-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-amber-100 file:text-amber-700 hover:file:bg-amber-200 transition-all border border-slate-300 rounded-lg">
                    
                    <ul class="text-xs text-slate-500 mt-3 list-disc pl-4 space-y-1">
                        <li>Dapat berupa foto (JPG/PNG) atau video pendek (MP4).</li>
                        <li>Saran resolusi: 1920x1080 pixel (Format Landscape/Mendatar).</li>
                        <li>Jika menggunakan video, usahakan ukuran file tidak lebih dari 10MB agar website tetap cepat dimuat.</li>
                    </ul>
                </div>
            </div>

            <div class="mt-8 pt-6 border-t border-slate-100 flex justify-end">
                <button type="submit" class="bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold py-2.5 px-6 rounded-lg shadow transition-colors flex items-center gap-2">
                    <i class="fas fa-save"></i> Simpan Media
                </button>
            </div>
        </form>
    </div>
@endsection