@extends('layouts.admin')

@section('title', 'Testimoni Jamaah')

@section('content')
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-slate-900">Testimoni Jamaah</h2>
        <p class="text-slate-600 text-sm mt-1">Kelola ulasan dan pengalaman jamaah yang ditampilkan dalam bentuk slider di halaman depan.</p>
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
                        <i class="fas fa-plus-circle"></i> Tambah Testimoni
                    </h3>
                </div>
                
                <form action="{{ route('admin.home.testimonial.store') }}" method="POST" enctype="multipart/form-data" class="p-6 space-y-4">
                    @csrf
                    
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1">Nama Lengkap</label>
                        <input type="text" name="nama" required placeholder="Ex: Mohammed Hasnat"
                            class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-amber-500 outline-none text-sm">
                    </div>

                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1">Profesi/Status</label>
                            <input type="text" name="profesi" placeholder="Ex: Online Entrepreneur"
                                class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-amber-500 outline-none text-sm">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1">Rating</label>
                            <input type="text" name="rating" value="5.0" required placeholder="Ex: 5.0"
                                class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-amber-500 outline-none text-sm">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1">Isi Testimoni</label>
                        <textarea name="pesan" rows="4" required placeholder="Tulis pengalaman jamaah di sini..."
                            class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-amber-500 outline-none text-sm"></textarea>
                    </div>

                    <div class="p-3 bg-slate-50 border border-slate-200 rounded-lg space-y-3">
                        <div>
                            <label class="block text-xs font-bold text-slate-800 mb-1">Foto Profil (Avatar)</label>
                            <input type="file" name="avatar" accept="image/*" required class="w-full text-[11px] text-slate-500">
                        </div>
                        <div class="pt-2 border-t border-slate-200">
                            <label class="block text-xs font-bold text-slate-800 mb-1">Gambar Background Besar</label>
                            <input type="file" name="gambar_background" accept="image/*" required class="w-full text-[11px] text-slate-500">
                        </div>
                    </div>

                    <button type="submit" class="w-full bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold py-2.5 px-4 rounded-lg shadow transition-colors flex items-center justify-center gap-2 mt-2">
                        <i class="fas fa-save"></i> Simpan Testimoni
                    </button>
                </form>
            </div>
        </div>

        <div class="lg:col-span-2">
            <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
                <div class="bg-slate-950 px-6 py-4 border-b border-slate-800">
                    <h3 class="text-amber-500 font-semibold text-lg flex items-center gap-2">
                        <i class="fas fa-comments"></i> Daftar Testimoni Aktif
                    </h3>
                </div>
                
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @forelse($testimonials as $item)
                            <div class="border border-slate-200 rounded-xl overflow-hidden relative group">
                                <div class="h-32 w-full relative">
                                    <img src="{{ asset('storage/' . $item->gambar_background) }}" class="w-full h-full object-cover opacity-50">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
                                    
                                    <div class="absolute bottom-3 left-4 flex items-center gap-3">
                                        <img src="{{ asset('storage/' . $item->avatar) }}" class="w-10 h-10 rounded-full border-2 border-white object-cover">
                                        <div class="text-white">
                                            <p class="font-bold text-sm">{{ $item->nama }}</p>
                                            <p class="text-[10px] text-amber-400"><i class="fas fa-star text-[8px]"></i> {{ $item->rating }}</p>
                                        </div>
                                    </div>
                                    
                                    <form action="{{ route('admin.home.testimonial.destroy', $item->id) }}" method="POST" class="absolute top-2 right-2 opacity-0 group-hover:opacity-100 transition-opacity" onsubmit="return confirm('Hapus testimoni ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white hover:bg-red-600 w-8 h-8 rounded-full flex items-center justify-center shadow-sm">
                                            <i class="fas fa-trash-alt text-xs"></i>
                                        </button>
                                    </form>
                                </div>
                                
                                <div class="p-4 bg-white">
                                    <p class="text-xs text-slate-600 italic line-clamp-3">"{{ $item->pesan }}"</p>
                                </div>
                            </div>
                        @empty
                            <div class="col-span-full py-10 text-center text-slate-500">
                                <i class="fas fa-comment-slash text-4xl text-slate-300 mb-3 block"></i>
                                <p>Belum ada testimoni yang ditambahkan.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection