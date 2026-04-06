@extends('layouts.admin')

@section('content')
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-slate-900">Banner & Header (Halaman Kontak)</h2>
        <p class="text-slate-600 text-sm mt-1">Kelola teks sambutan dan visual untuk mempermudah jamaah menghubungi Anda.</p>
    </div>

    @if(session('success'))
        <div class="bg-emerald-50 border-l-4 border-emerald-500 text-emerald-700 p-4 mb-6 rounded shadow-sm">
            <p class="font-medium"><i class="fas fa-check-circle mr-2"></i> {{ session('success') }}</p>
        </div>
    @endif

    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
        <div class="bg-slate-950 px-6 py-4 border-b border-slate-800 flex items-center gap-2">
            <i class="fas fa-headset text-amber-500"></i>
            <h3 class="text-white font-semibold">Konten Header Kontak</h3>
        </div>
        
        <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data" class="p-6 md:p-8">
            @csrf
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Headline Utama</label>
                        <textarea name="contact_banner_headline" rows="2" class="w-full px-4 py-2 border border-slate-300 rounded-lg outline-none focus:border-amber-500">{{ $settings['contact_banner_headline'] ?? 'Silaturahmi & Konsultasi Ibadah Fattah Travel' }}</textarea>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Teks Deskripsi/Kutipan</label>
                        <textarea name="contact_banner_desc" rows="4" class="w-full px-4 py-2 border border-slate-300 rounded-lg outline-none focus:border-amber-500">{{ $settings['contact_banner_desc'] ?? 'Kami selalu siap mendengarkan dan melayani kebutuhan perjalanan ibadah Anda...' }}</textarea>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Badge Melayang (Kanan)</label>
                        <input type="text" name="contact_banner_badge" value="{{ $settings['contact_banner_badge'] ?? 'LAYANAN SEPENUH HATI' }}" class="w-full px-4 py-2 border border-slate-300 rounded-lg outline-none focus:border-amber-500">
                    </div>
                </div>

                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Background Banner</label>
                        @if(isset($settings['contact_banner_image']))
                            <img src="{{ asset('storage/' . $settings['contact_banner_image']) }}" class="w-full h-48 object-cover rounded-lg mb-4 border">
                        @endif
                        <input type="file" name="contact_banner_image" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:bg-amber-50 file:text-amber-700">
                    </div>
                </div>
            </div>

            <div class="mt-8 pt-6 border-t flex justify-end">
                <button type="submit" class="bg-amber-500 hover:bg-amber-600 text-slate-900 font-bold py-2.5 px-8 rounded-lg transition-all shadow-md">
                    Simpan Perubahan Kontak
                </button>
            </div>
        </form>
    </div>
@endsection