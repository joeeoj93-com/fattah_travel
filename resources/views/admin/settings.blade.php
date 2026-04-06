@extends('layouts.admin')

@section('title', 'Pengaturan Global')

@section('content')
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-slate-900">Pengaturan Global Website</h2>
        <p class="text-slate-600 text-sm mt-1">Kelola identitas utama Fattah Travel di sini.</p>
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
                <i class="fas fa-cog"></i> Konfigurasi Utama
            </h3>
        </div>
        
        <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data" class="p-6 md:p-8">
            @csrf
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                
                <div class="space-y-6">
                    <div>
                        <input type="text" name="nama_brand" value="{{ $settings['nama_brand'] ?? 'Fattah Travel' }}" 
                            class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 outline-none transition-all">
                        <p class="text-xs text-slate-500 mt-1">Akan tampil di judul web dan footer.</p>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Nomor WhatsApp</label>
                        <input type="text" name="nomor_wa" value="{{ $settings['nomor_wa'] ?? '081234567890' }}" 
                            class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 outline-none transition-all">
                        <p class="text-xs text-slate-500 mt-1">Format: 0812xxx (Gunakan untuk tombol chat jamaah).</p>
                    </div>
                </div>

                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Logo Website</label>
                        
                        @if(isset($settings['logo_header']))
                            <div class="mb-4 p-4 bg-slate-50 border border-slate-200 rounded-lg inline-block">
                                <img src="{{ asset('storage/' . $settings['logo_header']) }}" alt="Logo Saat Ini" class="h-16 object-contain">
                            </div>
                        @endif

                        <input type="file" name="logo_header" accept="image/*"
                            class="w-full text-sm text-slate-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-amber-100 file:text-amber-700 hover:file:bg-amber-200 transition-all border border-slate-300 rounded-lg">
                        <p class="text-xs text-slate-500 mt-1">Kosongkan jika tidak ingin mengubah logo saat ini. (Rekomendasi: PNG transparan).</p>
                    </div>
                </div>

            </div>

            <div class="mt-10 pt-6 border-t border-slate-100 flex justify-end">
                <button type="submit" class="bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold py-2.5 px-6 rounded-lg shadow transition-colors flex items-center gap-2">
                    <i class="fas fa-save"></i> Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
@endsection