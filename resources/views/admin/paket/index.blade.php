@extends('layouts.admin')

@section('title', 'Daftar Paket ' . ucfirst($type))

@section('content')
    <div class="flex justify-between items-center mb-8">
        <div>
            <h2 class="text-2xl font-bold text-slate-900">Daftar Paket {{ ucfirst($type) }}</h2>
            <p class="text-slate-600 text-sm mt-1">Kelola semua paket perjalanan yang ditawarkan ke jamaah.</p>
        </div>
        <a href="{{ route('admin.paket.create', ['type' => $type]) }}" class="bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold py-2.5 px-5 rounded-lg shadow-sm transition-colors flex items-center gap-2">
            <i class="fas fa-plus"></i> Tambah Paket
        </a>
    </div>

    @if(session('success'))
        <div class="bg-emerald-50 border-l-4 border-emerald-500 text-emerald-700 p-4 mb-6 rounded shadow-sm">
            <p class="font-medium"><i class="fas fa-check-circle mr-2"></i> {{ session('success') }}</p>
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($packages as $paket)
            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden group">
                <div class="relative h-48">
                    <img src="{{ asset('storage/' . $paket->gambar) }}" class="w-full h-full object-cover">
                    <div class="absolute top-3 left-3 flex flex-col gap-2">
                        @if($paket->kategori_badge)
                            <span class="bg-amber-400 text-slate-900 text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-wider">{{ $paket->kategori_badge }}</span>
                        @endif
                    </div>
                    <div class="absolute top-3 right-3">
                        <span class="bg-red-500 text-white text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-wider">Sisa {{ $paket->sisa_seat }} Seat</span>
                    </div>
                </div>
                
                <div class="p-5">
                    <h3 class="font-bold text-lg text-slate-900 mb-2">{{ $paket->nama }}</h3>
                    <p class="text-slate-500 text-xs mb-4 line-clamp-2">{{ $paket->deskripsi_singkat }}</p>
                    
                    <div class="space-y-2 mb-4">
                        <p class="text-xs text-slate-600 flex items-center gap-2"><i class="far fa-calendar-alt text-amber-500 w-4"></i> {{ $paket->tanggal_berangkat }}</p>
                        <p class="text-xs text-slate-600 flex items-center gap-2"><i class="far fa-building text-amber-500 w-4"></i> {{ $paket->hotel }}</p>
                        <p class="text-xs text-slate-600 flex items-center gap-2"><i class="fas fa-plane text-amber-500 w-4"></i> {{ $paket->maskapai }}</p>
                    </div>

                    <div class="flex items-center justify-between pt-4 border-t border-slate-100">
                        <div>
                            <p class="text-[10px] text-slate-400">Harga Mulai</p>
                            <p class="font-bold text-slate-900 text-lg">{{ $paket->harga }}</p>
                        </div>
                        <div class="flex gap-2">
                            <a href="{{ route('admin.paket.edit', $paket->id) }}" class="w-8 h-8 rounded-full bg-blue-50 text-blue-500 hover:bg-blue-500 hover:text-white flex items-center justify-center transition-colors">
                                <i class="fas fa-pen text-xs"></i>
                            </a>
                            
                            <form action="{{ route('admin.paket.destroy', $paket->id) }}" method="POST" onsubmit="return confirm('Hapus paket ini?');">
                                @csrf @method('DELETE')
                                <button type="submit" class="w-8 h-8 rounded-full bg-red-50 text-red-500 hover:bg-red-500 hover:text-white flex items-center justify-center transition-colors"><i class="fas fa-trash-alt text-xs"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-span-full bg-white rounded-2xl border border-slate-200 p-10 text-center text-slate-500">
                <i class="fas fa-box-open text-4xl mb-3 text-slate-300"></i>
                <p>Belum ada paket {{ strtolower($type) }}. Klik tombol "Tambah Paket" untuk memulai.</p>
            </div>
        @endforelse
    </div>
@endsection