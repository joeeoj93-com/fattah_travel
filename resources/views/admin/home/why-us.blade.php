@extends('layouts.admin')

@section('title', 'Why Us (Alasan Memilih Kami)')

@section('content')
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-slate-900">Why Us (Alasan Memilih Kami)</h2>
        <p class="text-slate-600 text-sm mt-1">Kelola 4 poin keunggulan mengapa jamaah harus memilih Fattah Travel.</p>
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

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @php
                $defaultTitles = ['Competent', 'Affordable Rates', 'Responsive', 'Trust & Safety'];
                $defaultDesc = 'The Guide are reliable in knowledge, wise, inteligent in presenting solutions so that they are able to provide calm and comfort in worship.';
            @endphp

            @for($i = 1; $i <= 4; $i++)
                @php
                    // Logika untuk membuat kartu ke-4 menjadi tema gelap
                    $isDark = ($i == 4);
                    $bgCard = $isDark ? 'bg-slate-900 border-slate-800' : 'bg-white border-slate-200';
                    $textTitle = $isDark ? 'text-white' : 'text-slate-900';
                    $bgHeader = $isDark ? 'bg-slate-950 border-slate-800' : 'bg-slate-50 border-slate-200';
                    $headerText = $isDark ? 'text-amber-500' : 'text-slate-700';
                    $inputStyle = $isDark ? 'bg-slate-800 border-slate-700 text-white placeholder-slate-400' : 'bg-white border-slate-300 text-slate-900';
                @endphp

                <div class="rounded-2xl shadow-sm border {{ $bgCard }} overflow-hidden">
                    <div class="{{ $bgHeader }} px-6 py-4 border-b">
                        <h3 class="{{ $headerText }} font-bold text-lg flex items-center gap-2">
                            <i class="fas fa-check-circle"></i> Kartu Poin {{ $i }}
                        </h3>
                    </div>

                    <div class="p-6 space-y-5">
                        <div>
                            <label for="why_us_title_{{ $i }}" class="block text-sm font-semibold {{ $textTitle }} mb-2">Judul Poin</label>
                            <input type="text" id="why_us_title_{{ $i }}" name="why_us_title_{{ $i }}" value="{{ $settings['why_us_title_'.$i] ?? $defaultTitles[$i-1] }}"
                                class="w-full px-4 py-2.5 border rounded-lg focus:ring-2 focus:ring-amber-500 outline-none transition-all {{ $inputStyle }}">
                        </div>

                        <div>
                            <label for="why_us_desc_{{ $i }}" class="block text-sm font-semibold {{ $textTitle }} mb-2">Deskripsi Singkat</label>
                            <textarea id="why_us_desc_{{ $i }}" name="why_us_desc_{{ $i }}" rows="3"
                                class="w-full px-4 py-2.5 border rounded-lg focus:ring-2 focus:ring-amber-500 outline-none transition-all {{ $inputStyle }}">{{ $settings['why_us_desc_'.$i] ?? $defaultDesc }}</textarea>
                        </div>
                    </div>
                </div>
            @endfor
        </div>

        <div class="flex justify-end mt-8">
            <button type="submit" class="bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold py-3 px-8 rounded-lg shadow-lg transition-colors flex items-center gap-2 text-lg">
                <i class="fas fa-save"></i> Simpan Poin Keunggulan
            </button>
        </div>
    </form>
@endsection