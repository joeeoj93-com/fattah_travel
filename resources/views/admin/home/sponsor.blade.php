@extends('layouts.admin')

@section('title', 'Sponsor & Mitra')

@section('content')
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-slate-900">Sponsor & Mitra</h2>
        <p class="text-slate-600 text-sm mt-1">Kelola logo maskapai, hotel, atau lembaga yang bekerja sama dengan Fattah Travel.</p>
    </div>

    @if(session('success'))
        <div class="bg-emerald-50 border-l-4 border-emerald-500 text-emerald-700 p-4 mb-6 rounded shadow-sm">
            <div class="flex items-center">
                <i class="fas fa-check-circle mr-3 text-lg"></i>
                <p class="font-medium">{{ session('success') }}</p>
            </div>
        </div>
    @endif

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        
        <div class="lg:col-span-1">
            <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden sticky top-6">
                <div class="bg-slate-950 px-6 py-4 border-b border-slate-800">
                    <h3 class="text-amber-500 font-semibold text-lg flex items-center gap-2">
                        <i class="fas fa-plus-circle"></i> Tambah Mitra Baru
                    </h3>
                </div>
                
                <form action="{{ route('admin.home.sponsor.store') }}" method="POST" enctype="multipart/form-data" class="p-6">
                    @csrf
                    
                    <div class="mb-5">
                        <label for="nama_mitra" class="block text-sm font-semibold text-slate-700 mb-2">Nama Mitra / Maskapai</label>
                        <input type="text" id="nama_mitra" name="nama_mitra" required placeholder="Contoh: Garuda Indonesia"
                            class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 outline-none transition-all">
                        <p class="text-xs text-slate-500 mt-1">Hanya digunakan untuk nama di panel admin & teks alternatif gambar.</p>
                    </div>

                    <div class="mb-6">
                        <label for="logo" class="block text-sm font-semibold text-slate-700 mb-2">Logo Mitra</label>
                        <input type="file" id="logo" name="logo" accept="image/*" required
                            class="w-full text-sm text-slate-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-amber-100 file:text-amber-700 hover:file:bg-amber-200 transition-all border border-slate-300 rounded-lg">
                        <p class="text-xs text-slate-500 mt-1">Gunakan gambar PNG dengan latar transparan agar rapi seperti pada desain front-end.</p>
                    </div>

                    <button type="submit" class="w-full bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold py-2.5 px-4 rounded-lg shadow transition-colors flex items-center justify-center gap-2">
                        <i class="fas fa-upload"></i> Unggah Logo
                    </button>
                </form>
            </div>
        </div>

        <div class="lg:col-span-2">
            <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
                <div class="bg-slate-950 px-6 py-4 border-b border-slate-800 shrink-0 flex items-center justify-between">
                    <h3 class="text-amber-500 font-semibold text-lg flex items-center gap-2">
                        <i class="fas fa-th-large"></i> Daftar Mitra Aktif
                    </h3>
                </div>
                
                <div class="p-6">
                    <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4">
                        @forelse($sponsors as $sponsor)
                            <div class="border border-slate-200 rounded-xl p-4 flex flex-col items-center relative group hover:border-amber-400 transition-colors">
                                
                                <form action="{{ route('admin.home.sponsor.destroy', $sponsor->id) }}" method="POST" class="absolute top-2 right-2 opacity-0 group-hover:opacity-100 transition-opacity" onsubmit="return confirm('Apakah Anda yakin ingin menghapus logo mitra ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-100 text-red-600 hover:bg-red-600 hover:text-white w-8 h-8 rounded-full flex items-center justify-center transition-colors shadow-sm" title="Hapus">
                                        <i class="fas fa-trash-alt text-sm"></i>
                                    </button>
                                </form>

                                <div class="h-20 w-full flex items-center justify-center mb-3">
                                    <img src="{{ asset('storage/' . $sponsor->logo) }}" alt="{{ $sponsor->nama_mitra }}" class="max-h-full max-w-full object-contain">
                                </div>
                                
                                <p class="text-sm font-semibold text-slate-700 text-center w-full truncate" title="{{ $sponsor->nama_mitra }}">{{ $sponsor->nama_mitra }}</p>
                            </div>
                        @empty
                            <div class="col-span-full py-10 text-center text-slate-500">
                                <i class="fas fa-building text-4xl text-slate-300 mb-3 block"></i>
                                <p class="text-base">Belum ada logo mitra yang ditambahkan.</p>
                                <p class="text-sm mt-1">Gunakan form di sebelah kiri untuk mengunggah.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection