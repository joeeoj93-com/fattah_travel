@extends('layouts.admin')

@section('title', 'Edit Paket Umrah')

@section('content')
    <div class="mb-6 flex items-center gap-4">
        <a href="{{ route('admin.paket.index') }}" class="w-10 h-10 bg-white border border-slate-200 rounded-full flex items-center justify-center text-slate-500 hover:bg-slate-50 transition-colors">
            <i class="fas fa-arrow-left"></i>
        </a>
        <div>
            <h2 class="text-2xl font-bold text-slate-900">Edit Paket: {{ $package->nama }}</h2>
            <p class="text-slate-600 text-sm">Perbarui informasi dan lengkapi detail itinerary perjalanan.</p>
        </div>
    </div>

    <form action="{{ route('admin.paket.update', $package->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')
        
        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-6 md:p-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="space-y-5 lg:col-span-1 border-r border-slate-100 lg:pr-8">
                    <div>
                        <label class="block text-sm font-bold text-slate-800 mb-2">Gambar Paket</label>
                        <div class="mb-3 p-2 border border-slate-200 rounded-lg inline-block w-full bg-slate-50">
                            <img src="{{ asset('storage/' . $package->gambar) }}" class="w-full h-32 object-cover rounded-md">
                        </div>
                        <input type="file" name="gambar" accept="image/*" class="w-full text-xs text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-amber-100 file:text-amber-700 hover:file:bg-amber-200 border border-slate-300 rounded-lg">
                        <p class="text-[10px] text-slate-500 mt-1">Kosongkan jika tidak ingin mengubah gambar.</p>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-1">Badge Kiri (Label Promo)</label>
                        <input type="text" name="kategori_badge" value="{{ $package->kategori_badge }}" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-amber-500 outline-none text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-1">Sisa Seat</label>
                        <input type="number" name="sisa_seat" value="{{ $package->sisa_seat }}" min="0" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-amber-500 outline-none text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-1">Harga Ditampilkan</label>
                        <input type="text" name="harga" value="{{ $package->harga }}" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-amber-500 outline-none text-sm font-bold text-slate-900">
                    </div>
                </div>

                <div class="space-y-5 lg:col-span-2">
                    <div>
                        <label class="block text-sm font-bold text-slate-800 mb-1">Nama Paket</label>
                        <input type="text" name="nama" value="{{ $package->nama }}" required class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-amber-500 outline-none">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-1">Deskripsi Singkat (Tampil di Card Depan)</label>
                        <textarea name="deskripsi_singkat" rows="3" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-amber-500 outline-none text-sm">{{ $package->deskripsi_singkat }}</textarea>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-4 bg-slate-50 rounded-xl border border-slate-200">
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1"><i class="far fa-calendar-alt text-amber-500"></i> Tanggal & Rute</label>
                            <input type="text" name="tanggal_berangkat" value="{{ $package->tanggal_berangkat }}" required class="w-full px-3 py-2 border border-slate-300 rounded-md outline-none text-xs">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1"><i class="far fa-building text-amber-500"></i> Info Hotel</label>
                            <input type="text" name="hotel" value="{{ $package->hotel }}" required class="w-full px-3 py-2 border border-slate-300 rounded-md outline-none text-xs">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1"><i class="fas fa-plane text-amber-500"></i> Maskapai</label>
                            <input type="text" name="maskapai" value="{{ $package->maskapai }}" required class="w-full px-3 py-2 border border-slate-300 rounded-md outline-none text-xs">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
            <div class="bg-slate-950 px-6 py-4 border-b border-slate-800">
                <h3 class="text-amber-500 font-semibold text-lg flex items-center gap-2">
                    <i class="fas fa-file-alt"></i> Detail Konten (Untuk Halaman Detail Paket)
                </h3>
            </div>
            <div class="p-6 md:p-8">
                <label class="block text-sm font-semibold text-slate-700 mb-2">Itinerary, Fasilitas, & Syarat Ketentuan</label>
                <textarea name="deskripsi_lengkap" rows="15" placeholder="Tuliskan jadwal perjalanan hari per hari, fasilitas yang didapat, dan yang tidak didapat di sini..." class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-amber-500 outline-none transition-all text-sm leading-relaxed">{{ $package->deskripsi_lengkap }}</textarea>
                <p class="text-xs text-slate-500 mt-2">Tips: Anda dapat menggunakan tag HTML dasar seperti &lt;b&gt;tebal&lt;/b&gt;, &lt;br&gt; (enter), atau &lt;ul&gt;&lt;li&gt;poin&lt;/li&gt;&lt;/ul&gt; untuk merapikan teks.</p>
            </div>
        </div>

        <div class="flex justify-end">
            <button type="submit" class="bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold py-3 px-8 rounded-lg shadow-lg transition-colors flex items-center gap-2">
                <i class="fas fa-save"></i> Perbarui Paket & Detail
            </button>
        </div>
    </form>
@endsection