@extends('layouts.admin')

@section('title', 'Galeri Momen')

@section('content')
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-slate-900">Galeri Momen (Pilgrimage Moments)</h2>
        <p class="text-slate-600 text-sm mt-1">Kelola judul, sub-judul, dan komposisi 5 foto dokumentasi perjalanan.</p>
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

        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
            <div class="bg-slate-950 px-6 py-4 border-b border-slate-800">
                <h3 class="text-amber-500 font-semibold text-lg flex items-center gap-2">
                    <i class="fas fa-heading"></i> Teks Pengantar Galeri
                </h3>
            </div>
            <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Judul Galeri</label>
                    <input type="text" name="gallery_title" value="{{ $settings['gallery_title'] ?? 'Our Pilgrimage Moments' }}" 
                        class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-amber-500 outline-none transition-all">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Sub-Judul (Deskripsi Singkat)</label>
                    <input type="text" name="gallery_subtitle" value="{{ $settings['gallery_subtitle'] ?? 'Glimpses of peace and devotion from our recent journeys.' }}" 
                        class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-amber-500 outline-none transition-all">
                </div>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
            <div class="bg-slate-950 px-6 py-4 border-b border-slate-800 flex justify-between items-center">
                <h3 class="text-amber-500 font-semibold text-lg flex items-center gap-2">
                    <i class="fas fa-camera-retro"></i> Susunan 5 Foto Grid
                </h3>
                <span class="text-xs text-slate-400">Layout sesuai desain halaman depan</span>
            </div>
            
            <div class="p-6 md:p-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    
                    <div class="p-5 border-2 border-dashed border-slate-300 bg-slate-50 rounded-xl h-full flex flex-col justify-center">
                        <label class="block text-base font-bold text-slate-800 mb-2">1. Foto Utama (Besar Kiri)</label>
                        <p class="text-xs text-slate-500 mb-4">Akan menempati area kiri secara penuh (Saran format: Potrait / Vertikal).</p>
                        
                        @if(isset($settings['gallery_img_1']))
                            <div class="mb-4">
                                <img src="{{ asset('storage/' . $settings['gallery_img_1']) }}" class="w-full h-48 object-cover rounded-lg border border-slate-200">
                            </div>
                        @endif
                        
                        <input type="file" name="gallery_img_1" accept="image/*" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-amber-100 file:text-amber-700">
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        @for($i = 2; $i <= 5; $i++)
                            @php
                                $posisi = '';
                                if($i == 2) $posisi = '(Atas Kiri)';
                                if($i == 3) $posisi = '(Atas Kanan)';
                                if($i == 4) $posisi = '(Bawah Kiri)';
                                if($i == 5) $posisi = '(Bawah Kanan)';
                            @endphp
                            
                            <div class="p-4 border border-slate-200 rounded-xl bg-white shadow-sm">
                                <label class="block text-sm font-bold text-slate-800 mb-1">Foto {{ $i }}</label>
                                <p class="text-[10px] text-slate-500 mb-2">{{ $posisi }}</p>
                                
                                @if(isset($settings['gallery_img_'.$i]))
                                    <div class="mb-2">
                                        <img src="{{ asset('storage/' . $settings['gallery_img_'.$i]) }}" class="w-full h-20 object-cover rounded-md border border-slate-200">
                                    </div>
                                @endif
                                
                                <input type="file" name="gallery_img_{{ $i }}" accept="image/*" class="w-full text-[11px] text-slate-500">
                            </div>
                        @endfor
                    </div>

                </div>
            </div>
        </div>

        <div class="flex justify-end mt-4">
            <button type="submit" class="bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold py-3 px-8 rounded-lg shadow-lg transition-colors flex items-center gap-2 text-lg">
                <i class="fas fa-save"></i> Simpan Galeri Momen
            </button>
        </div>
    </form>
@endsection