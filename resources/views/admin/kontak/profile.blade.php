@extends('layouts.admin')

@section('title', 'Profil & Lokasi Kantor')

@section('content')
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-slate-900">Profil & Lokasi Kantor</h2>
        <p class="text-slate-600 text-sm mt-1">Kelola teks sambutan, alamat, kontak, peta lokasi, dan foto yang tampil di halaman Kontak.</p>
    </div>

    @if(session('success'))
        <div class="bg-emerald-50 border-l-4 border-emerald-500 text-emerald-700 p-4 mb-6 rounded shadow-sm">
            <p class="font-medium"><i class="fas fa-check-circle mr-2"></i> {{ session('success') }}</p>
        </div>
    @endif

    <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            
            <div class="space-y-6">
                <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
                    <div class="bg-slate-950 px-6 py-4 border-b border-slate-800 text-amber-500 font-bold">
                        <i class="fas fa-building mr-2"></i> Teks Sambutan & Info Kontak
                    </div>
                    <div class="p-6 space-y-5">
                        
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-1">Headline Profil</label>
                            <input type="text" name="contact_office_headline" value="{{ $settings['contact_office_headline'] ?? 'Kunjungi Kami di Kantor' }}" class="w-full px-4 py-2 border border-slate-300 rounded-lg outline-none focus:border-amber-500">
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-1">Deskripsi Singkat</label>
                            <textarea name="contact_office_desc" rows="3" class="w-full px-4 py-2 border border-slate-300 rounded-lg outline-none focus:border-amber-500 text-sm">{{ $settings['contact_office_desc'] ?? 'Pintu kantor kami selalu terbuka untuk Anda yang ingin berkonsultasi mengenai persiapan ibadah Umrah dan Haji secara langsung sambil menikmati secangkir teh.' }}</textarea>
                        </div>

                        <div class="grid grid-cols-2 gap-4 pt-4 border-t border-slate-100">
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-1">Telepon/WA</label>
                                <input type="text" name="contact_office_phone" value="{{ $settings['contact_office_phone'] ?? '+62 831-3338-7676' }}" class="w-full px-4 py-2 border border-slate-300 rounded-lg outline-none focus:border-amber-500">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-1">Email Pendaftaran</label>
                                <input type="email" name="contact_office_email" value="{{ $settings['contact_office_email'] ?? 'info@fattahtravel.com' }}" class="w-full px-4 py-2 border border-slate-300 rounded-lg outline-none focus:border-amber-500">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-1">Jam Operasional</label>
                            <input type="text" name="contact_office_hours" value="{{ $settings['contact_office_hours'] ?? '(Senin - Sabtu, 08:00 - 17:00)' }}" placeholder="Contoh: (Senin - Sabtu, 08:00 - 17:00)" class="w-full px-4 py-2 border border-slate-300 rounded-lg outline-none focus:border-amber-500 text-sm italic">
                        </div>

                    </div>
                </div>
            </div>

            <div class="space-y-6">
                <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
                    <div class="bg-slate-950 px-6 py-4 border-b border-slate-800 text-amber-500 font-bold">
                        <i class="fas fa-map-marked-alt mr-2"></i> Lokasi, Peta & Foto
                    </div>
                    <div class="p-6 space-y-6">
                        
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-1">Alamat Lengkap</label>
                            <textarea name="contact_office_address" rows="3" class="w-full px-4 py-2 border border-slate-300 rounded-lg outline-none focus:border-amber-500 text-sm">{{ $settings['contact_office_address'] ?? 'Jl. Jend. Sudirman No. 123, Pusat Kota, Medan, Sumatera Utara 20152' }}</textarea>
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-1">Link Iframe Google Maps</label>
                            <textarea name="contact_office_map" rows="3" placeholder='<iframe src="https://www.google.com/maps/embed?..."></iframe>' class="w-full px-4 py-2 border border-slate-300 rounded-lg outline-none focus:border-amber-500 font-mono text-xs text-slate-500">{{ $settings['contact_office_map'] ?? '' }}</textarea>
                        </div>

                        <div class="pt-4 border-t border-slate-100">
                            <label class="block text-sm font-bold text-slate-700 mb-2">Foto Suasana Kantor</label>
                            
                            @if(isset($settings['contact_office_image']))
                                <div class="mb-3 p-2 bg-slate-50 border border-slate-200 rounded-lg inline-block">
                                    <img src="{{ asset('storage/' . $settings['contact_office_image']) }}" alt="Foto Kantor Saat Ini" class="h-24 w-24 object-cover rounded-md border border-slate-300">
                                </div>
                            @endif

                            <input type="file" name="contact_office_image" accept="image/*" class="w-full text-sm text-slate-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-amber-100 file:text-amber-700 hover:file:bg-amber-200 transition-all border border-slate-300 rounded-lg">
                            <p class="text-[10px] text-slate-400 mt-2"><i class="fas fa-info-circle"></i> Gunakan foto beresolusi tinggi. Rasio 1:1 (Persegi) sangat disarankan agar tampil maksimal di halaman depan.</p>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <div class="mt-8 flex justify-end">
            <button type="submit" class="bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold py-3 px-10 rounded-xl shadow-md transition-all flex items-center gap-2">
                <i class="fas fa-save"></i> Simpan Profil & Foto
            </button>
        </div>
    </form>
@endsection