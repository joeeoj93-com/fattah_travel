@extends('layouts.admin')

@section('title', 'Konten Footer')

@section('content')
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-slate-900">Konten Footer</h2>
        <p class="text-slate-600 text-sm mt-1">Kelola deskripsi singkat dan tautan media sosial yang tampil di bagian bawah website.</p>
    </div>

    @if(session('success'))
        <div class="bg-emerald-50 border-l-4 border-emerald-500 text-emerald-700 p-4 mb-6 rounded shadow-sm">
            <p class="font-medium"><i class="fas fa-check-circle mr-2"></i> {{ session('success') }}</p>
        </div>
    @endif

    <form action="{{ route('admin.settings.update') }}" method="POST" class="space-y-6">
        @csrf

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            
            <div class="space-y-6">
                <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
                    <div class="bg-slate-950 px-6 py-4 border-b border-slate-800 text-amber-500 font-bold">
                        <i class="fas fa-align-left mr-2"></i> Teks Deskripsi Singkat
                    </div>
                    <div class="p-6">
                        <label class="block text-sm font-bold text-slate-700 mb-2">Deskripsi Perusahaan (Bawah Logo)</label>
                        <textarea name="footer_description" rows="5" placeholder="Contoh: Pelopor Solusi Perjalanan Ibadah Terdepan..." class="w-full px-4 py-3 border border-slate-300 rounded-xl outline-none focus:border-amber-500 text-sm leading-relaxed">{{ $settings['footer_description'] ?? 'Pelopor Solusi Perjalanan Ibadah Terdepan untuk Meningkatkan Pengalaman Ziarah dan Kenyamanan Jamaah.' }}</textarea>
                        
                        <div class="mt-4 p-3 bg-slate-50 border border-slate-200 rounded-lg">
                            <p class="text-[11px] text-slate-500 leading-relaxed"><i class="fas fa-info-circle text-amber-500 mr-1"></i> <strong>Catatan:</strong> Logo dan Nama Travel yang tampil di atas deskripsi ini sudah otomatis disinkronkan dengan pengaturan "Konfigurasi Navbar" agar selalu konsisten.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="space-y-6">
                <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
                    <div class="bg-slate-950 px-6 py-4 border-b border-slate-800 text-amber-500 font-bold">
                        <i class="fas fa-share-alt mr-2"></i> Tautan Media Sosial
                    </div>
                    <div class="p-6 space-y-4">
                        
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-1 flex items-center gap-2"><i class="fab fa-facebook text-blue-600"></i> Facebook URL</label>
                            <input type="url" name="social_facebook" value="{{ $settings['social_facebook'] ?? '' }}" placeholder="https://facebook.com/..." class="w-full px-4 py-2 border border-slate-300 rounded-lg outline-none focus:border-amber-500 text-sm">
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-1 flex items-center gap-2"><i class="fab fa-twitter text-sky-400"></i> Twitter / X URL</label>
                            <input type="url" name="social_twitter" value="{{ $settings['social_twitter'] ?? '' }}" placeholder="https://twitter.com/..." class="w-full px-4 py-2 border border-slate-300 rounded-lg outline-none focus:border-amber-500 text-sm">
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-1 flex items-center gap-2"><i class="fab fa-linkedin text-blue-700"></i> LinkedIn URL</label>
                            <input type="url" name="social_linkedin" value="{{ $settings['social_linkedin'] ?? '' }}" placeholder="https://linkedin.com/in/..." class="w-full px-4 py-2 border border-slate-300 rounded-lg outline-none focus:border-amber-500 text-sm">
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-1 flex items-center gap-2"><i class="fab fa-instagram text-pink-500"></i> Instagram URL</label>
                            <input type="url" name="social_instagram" value="{{ $settings['social_instagram'] ?? '' }}" placeholder="https://instagram.com/..." class="w-full px-4 py-2 border border-slate-300 rounded-lg outline-none focus:border-amber-500 text-sm">
                        </div>

                        <p class="text-[10px] text-slate-400 mt-3 border-t border-slate-100 pt-3"><i class="fas fa-lightbulb text-amber-500 mr-1"></i> Kosongkan kolom jika Anda tidak ingin ikon sosial media tersebut muncul di footer website.</p>

                    </div>
                </div>
            </div>

        </div>

        <div class="mt-8 flex justify-end">
            <button type="submit" class="bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold py-3 px-10 rounded-xl shadow-md transition-all flex items-center gap-2">
                <i class="fas fa-save"></i> Simpan Konten Footer
            </button>
        </div>
    </form>
@endsection