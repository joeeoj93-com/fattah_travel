@extends('layouts.admin')

@section('title', 'Pilihan Paket Utama')

@section('content')
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-slate-900">Pilihan Paket (Pricing Cards)</h2>
        <p class="text-slate-600 text-sm mt-1">Kelola 3 kartu paket promosi yang ditampilkan di halaman depan.</p>
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

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            
            @for($i = 1; $i <= 3; $i++)
                @php 
                    // Penanda untuk kartu tengah yang berwarna gelap di frontend
                    $isMiddle = ($i == 2);
                    $cardTitle = $isMiddle ? 'Kartu Tengah (Sorotan Gelap)' : 'Kartu ' . ($i == 1 ? 'Kiri' : 'Kanan');
                    $bgHeader = $isMiddle ? 'bg-slate-900' : 'bg-slate-100';
                    $textHeader = $isMiddle ? 'text-amber-500' : 'text-slate-800';
                @endphp

                <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
                    <div class="{{ $bgHeader }} px-6 py-4 border-b border-slate-200">
                        <h3 class="{{ $textHeader }} font-bold text-lg flex items-center gap-2">
                            <i class="fas fa-ticket-alt"></i> {{ $cardTitle }}
                        </h3>
                    </div>
                    
                    <div class="p-6 space-y-5">
                        <div class="grid grid-cols-2 gap-3">
                            <div class="col-span-2">
                                <label class="block text-xs font-semibold text-slate-700 mb-1">Nama Paket</label>
                                <input type="text" name="pricing_{{ $i }}_name" value="{{ $settings['pricing_'.$i.'_name'] ?? '' }}" placeholder="Ex: Premium Hajj"
                                    class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-amber-500 outline-none transition-all text-sm">
                            </div>
                        </div>

                        <div class="grid grid-cols-3 gap-3">
                            <div class="col-span-2">
                                <label class="block text-xs font-semibold text-slate-700 mb-1">Harga (Rp)</label>
                                <input type="text" name="pricing_{{ $i }}_price" value="{{ $settings['pricing_'.$i.'_price'] ?? '' }}" placeholder="Ex: 42.500.000"
                                    class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-amber-500 outline-none transition-all text-sm font-bold text-slate-800">
                            </div>
                            <div class="col-span-1">
                                <label class="block text-xs font-semibold text-slate-700 mb-1">Badge</label>
                                <input type="text" name="pricing_{{ $i }}_badge" value="{{ $settings['pricing_'.$i.'_badge'] ?? '' }}" placeholder="Save 30%"
                                    class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-amber-500 outline-none transition-all text-sm">
                            </div>
                        </div>

                        <div class="pt-4 border-t border-slate-100">
                            <label class="block text-xs font-bold text-slate-800 mb-3"><i class="fas fa-list-ul mr-1"></i> Daftar Fasilitas (5 Baris)</label>
                            <div class="space-y-2">
                                @for($f = 1; $f <= 5; $f++)
                                    <input type="text" name="pricing_{{ $i }}_feat_{{ $f }}" value="{{ $settings['pricing_'.$i.'_feat_'.$f] ?? '' }}" placeholder="Fasilitas {{ $f }}"
                                        class="w-full px-3 py-1.5 border border-slate-200 rounded text-sm focus:border-amber-500 outline-none">
                                @endfor
                            </div>
                        </div>

                        <div class="pt-4 border-t border-slate-100">
                            <label class="block text-xs font-semibold text-slate-700 mb-1">Link Tombol 'Get started'</label>
                            <input type="text" name="pricing_{{ $i }}_link" value="{{ $settings['pricing_'.$i.'_link'] ?? '#' }}" placeholder="https://wa.me/..."
                                class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-amber-500 outline-none transition-all text-sm">
                        </div>
                    </div>
                </div>
            @endfor

        </div>

        <div class="flex justify-end mt-8">
            <button type="submit" class="bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold py-3 px-8 rounded-lg shadow-lg transition-colors flex items-center gap-2 text-lg">
                <i class="fas fa-save"></i> Simpan Pilihan Paket
            </button>
        </div>
    </form>
@endsection