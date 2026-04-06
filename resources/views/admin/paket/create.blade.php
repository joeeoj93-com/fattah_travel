@extends('layouts.admin')

@section('title', 'Tambah Paket ' . ucfirst($type))

@section('content')
    <div class="mb-6 flex items-center gap-4">
        <a href="{{ route('admin.paket.index', ['type' => $type]) }}" class="w-10 h-10 bg-white border border-slate-200 rounded-full flex items-center justify-center text-slate-500 hover:bg-slate-50 transition-colors">
            <i class="fas fa-arrow-left"></i>
        </a>
        <div>
            <h2 class="text-2xl font-bold text-slate-900">Buat Paket {{ ucfirst($type) }} Baru</h2>
            <p class="text-slate-600 text-sm">Isi detail informasi paket {{ strtolower($type) }} dengan lengkap.</p>
        </div>
    </div>

    <form action="{{ route('admin.paket.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        <input type="hidden" name="type" value="{{ $type }}">
        
        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-6 md:p-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="space-y-5 lg:col-span-1 border-r border-slate-100 lg:pr-8">
                <div>
                    <label class="block text-sm font-bold text-slate-800 mb-2">Gambar Paket</label>
                    <input type="file" name="gambar" accept="image/*" required class="w-full text-sm text-slate-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-lg file:border-0 file:bg-amber-100 file:text-amber-700 hover:file:bg-amber-200 border border-slate-300 rounded-lg">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-1">Badge Kiri (Label Promo)</label>
                    <input type="text" name="kategori_badge" placeholder="Ex: TERLARIS / SPESIAL RAMADHAN" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-amber-500 outline-none text-sm">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-1">Sisa Seat</label>
                    <input type="number" name="sisa_seat" value="45" min="0" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-amber-500 outline-none text-sm">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-1">Harga Ditampilkan</label>
                    <input type="text" name="harga" placeholder="Ex: $2,400 atau Rp 39.900.000" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-amber-500 outline-none text-sm font-bold text-slate-900">
                </div>
            </div>

            <div class="space-y-5 lg:col-span-2">
                <div>
                    <label class="block text-sm font-bold text-slate-800 mb-1">Nama Paket</label>
                    <input type="text" name="nama" placeholder="{{ $type === 'haji' ? 'Ex: Haji Furoda 2027' : 'Ex: Umrah Reguler 9 Hari' }}" required class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-amber-500 outline-none">
                </div>

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-1">Deskripsi Singkat (Tampil di Card)</label>
                    <textarea name="deskripsi_singkat" rows="3" placeholder="Program fokus ibadah dengan fasilitas hotel..." required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-amber-500 outline-none text-sm"></textarea>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-4 bg-slate-50 rounded-xl border border-slate-200">
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1"><i class="far fa-calendar-alt text-amber-500"></i> Tanggal & Rute</label>
                        <input type="text" name="tanggal_berangkat" placeholder="15 Jan 2027 (KNO-MED)" required class="w-full px-3 py-2 border border-slate-300 rounded-md outline-none text-xs">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1"><i class="far fa-building text-amber-500"></i> Info Hotel</label>
                        <input type="text" name="hotel" placeholder="Bintang 5 (Makkah & Madinah)" required class="w-full px-3 py-2 border border-slate-300 rounded-md outline-none text-xs">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1"><i class="fas fa-plane text-amber-500"></i> Maskapai</label>
                        <input type="text" name="maskapai" placeholder="Saudia Airlines (Direct)" required class="w-full px-3 py-2 border border-slate-300 rounded-md outline-none text-xs">
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
            <div class="bg-[#0F172A] px-6 py-4 border-b border-slate-800">
                <h3 class="text-amber-500 font-semibold text-lg flex items-center gap-2">
                    <i class="fas fa-file-alt"></i> Detail Konten (Untuk Halaman Detail Paket)
                </h3>
            </div>
            <div class="p-6 md:p-8">
                <label class="block text-sm font-semibold text-slate-700 mb-2">Itinerary, Fasilitas, & Syarat Ketentuan</label>
                <textarea name="deskripsi_lengkap" rows="15" placeholder="Tuliskan jadwal perjalanan hari per hari, fasilitas yang didapat, dan yang tidak didapat di sini..." class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-amber-500 outline-none transition-all text-sm leading-relaxed"></textarea>
                <p class="text-xs text-slate-500 mt-2">Tips: Anda dapat menggunakan tag HTML dasar seperti &lt;b&gt;tebal&lt;/b&gt;, &lt;br&gt; (enter), atau &lt;ul&gt;&lt;li&gt;poin&lt;/li&gt;&lt;/ul&gt; untuk merapikan teks.</p>
            </div>
        </div>

        <div class="flex justify-end">
            <button type="submit" class="bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold py-3 px-8 rounded-lg shadow-lg transition-colors flex items-center gap-2">
                <i class="fas fa-save"></i> Simpan Paket
            </button>
        </div>
    </form>
@endsection