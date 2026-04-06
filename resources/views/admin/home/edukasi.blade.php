@extends('layouts.admin')

@section('title', 'Edukasi & Manasik')

@section('content')
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-slate-900">Panduan Manasik & Edukasi</h2>
        <p class="text-slate-600 text-sm mt-1">Kelola konten edukasi atau informasi penting untuk calon jamaah Fattah Travel.</p>
    </div>

    @if(session('success'))
        <div class="bg-emerald-50 border-l-4 border-emerald-500 text-emerald-700 p-4 mb-6 rounded shadow-sm">
            <div class="flex items-center">
                <i class="fas fa-check-circle mr-3 text-lg"></i>
                <p class="font-medium">{{ session('success') }}</p>
            </div>
        </div>
    @endif

    <form action="{{ route('admin.settings.update') }}" method="POST" class="space-y-6">
        @csrf

        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
            <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="edukasi_title" class="block text-sm font-semibold text-slate-700 mb-2">Judul Section</label>
                    <input type="text" id="edukasi_title" name="edukasi_title" value="{{ $settings['edukasi_title'] ?? 'Panduan Manasik & Edukasi' }}"
                        class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-amber-500 outline-none transition-all">
                </div>
                <div>
                    <label for="edukasi_subtitle" class="block text-sm font-semibold text-slate-700 mb-2">Sub-Judul (Deskripsi Singkat)</label>
                    <textarea id="edukasi_subtitle" name="edukasi_subtitle" rows="2"
                        class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-amber-500 outline-none transition-all">{{ $settings['edukasi_subtitle'] ?? 'Persiapkan perjalanan suci Anda dengan bekal ilmu yang cukup. Pelajari tata cara ibadah Umrah dan Haji sesuai sunnah.' }}</textarea>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            
            <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden h-fit">
                <div class="bg-slate-950 px-6 py-4 border-b border-slate-800">
                    <h3 class="text-amber-500 font-semibold text-lg flex items-center gap-2">
                        <i class="fab fa-youtube"></i> Video Panduan Utama
                    </h3>
                </div>
                <div class="p-6 space-y-5">
                    
                    @php
                        $ytLink = $settings['edukasi_video_link'] ?? '';
                        $ytId = '';
                        // Regex untuk mengekstrak ID YouTube dari berbagai format URL
                        if ($ytLink) {
                            preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/\s]{11})%i', $ytLink, $match);
                            $ytId = $match[1] ?? '';
                        }
                    @endphp

                    @if($ytId)
                        <div class="w-full aspect-video rounded-xl overflow-hidden border-2 border-slate-200 shadow-sm">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/{{ $ytId }}" title="YouTube video player" class="border-0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    @else
                        <div class="w-full aspect-video bg-slate-100 rounded-xl border-2 border-dashed border-slate-300 flex flex-col items-center justify-center text-slate-400">
                            <i class="fab fa-youtube text-4xl mb-2 text-slate-300"></i>
                            <p class="text-sm">Preview video akan muncul di sini</p>
                        </div>
                    @endif

                    <div>
                        <label for="edukasi_video_link" class="block text-sm font-semibold text-slate-700 mb-2">Link Video YouTube</label>
                        <input type="text" id="edukasi_video_link" name="edukasi_video_link" value="{{ $ytLink }}" placeholder="https://www.youtube.com/watch?v=..."
                            class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-amber-500 outline-none transition-all text-blue-600">
                        <p class="text-xs text-slate-500 mt-1">Cukup paste link videonya. Sistem otomatis mengatur player dan thumbnail.</p>
                    </div>

                    <div>
                        <label for="edukasi_video_title" class="block text-sm font-semibold text-slate-700 mb-2">Judul Teks di Atas Video</label>
                        <input type="text" id="edukasi_video_title" name="edukasi_video_title" value="{{ $settings['edukasi_video_title'] ?? 'Tata Cara Pelaksanaan Umrah Lengkap Sesuai Sunnah' }}"
                            class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-amber-500 outline-none transition-all">
                    </div>

                    <div>
                        <label for="edukasi_video_meta" class="block text-sm font-semibold text-slate-700 mb-2">Info Durasi / Pembimbing</label>
                        <input type="text" id="edukasi_video_meta" name="edukasi_video_meta" value="{{ $settings['edukasi_video_meta'] ?? 'Durasi: 15 Menit • Oleh Ustadz Pembimbing Fattah Travel' }}"
                            class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-amber-500 outline-none transition-all">
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
                <div class="bg-slate-950 px-6 py-4 border-b border-slate-800">
                    <h3 class="text-amber-500 font-semibold text-lg flex items-center gap-2">
                        <i class="fas fa-list-ul"></i> 3 Poin Materi Pendukung
                    </h3>
                </div>
                <div class="p-6 space-y-6">
                    
                    @php
                        $defaultPoints = [
                            1 => ['Kumpulan Doa Umrah', 'Lengkap dengan tulisan Arab, latin, dan terjemahan.'],
                            2 => ['Checklist Perlengkapan', 'Barang esensial wajib bawa untuk jamaah pria & wanita.'],
                            3 => ['Syarat & Larangan Ihram', 'Hal-hal yang membatalkan dan wajib dihindari.']
                        ];
                    @endphp

                    @for($i = 1; $i <= 3; $i++)
                        <div class="p-4 border border-slate-200 rounded-xl bg-slate-50">
                            <h4 class="font-bold text-slate-800 mb-3 border-b border-slate-200 pb-2">Kartu Materi {{ $i }}</h4>
                            <div class="space-y-3">
                                <div>
                                    <label for="edukasi_item_{{ $i }}_title" class="block text-xs font-semibold text-slate-700 mb-1">Judul Materi</label>
                                    <input type="text" id="edukasi_item_{{ $i }}_title" name="edukasi_item_{{ $i }}_title" value="{{ $settings['edukasi_item_'.$i.'_title'] ?? $defaultPoints[$i][0] }}"
                                        class="w-full px-3 py-2 border border-slate-300 rounded-md focus:ring-2 focus:ring-amber-500 outline-none text-sm">
                                </div>
                                <div>
                                    <label for="edukasi_item_{{ $i }}_desc" class="block text-xs font-semibold text-slate-700 mb-1">Deskripsi Singkat</label>
                                    <textarea id="edukasi_item_{{ $i }}_desc" name="edukasi_item_{{ $i }}_desc" rows="2"
                                        class="w-full px-3 py-2 border border-slate-300 rounded-md focus:ring-2 focus:ring-amber-500 outline-none text-sm">{{ $settings['edukasi_item_'.$i.'_desc'] ?? $defaultPoints[$i][1] }}</textarea>
                                </div>
                            </div>
                        </div>
                    @endfor

                </div>
            </div>

        </div>

        <div class="flex justify-end mt-6">
            <button type="submit" class="bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold py-3 px-8 rounded-lg shadow-lg transition-colors flex items-center gap-2 text-lg">
                <i class="fas fa-save"></i> Simpan Edukasi & Manasik
            </button>
        </div>
    </form>
@endsection