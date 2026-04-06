@extends('layouts.admin')

@section('title', 'FAQ & Keunggulan Umrah')

@section('content')
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-slate-900">FAQ & Keunggulan (Halaman Umrah)</h2>
        <p class="text-slate-600 text-sm mt-1">Kelola poin alasan memilih dan daftar pertanyaan umum khusus calon jamaah Umrah.</p>
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
                        <i class="fas fa-star mr-2"></i> Keunggulan Kami (Sisi Kiri)
                    </div>
                    <div class="p-6 space-y-6">
                        @for($i = 1; $i <= 3; $i++)
                        <div class="p-4 bg-slate-50 border border-slate-200 rounded-xl">
                            <label class="block text-xs font-bold text-slate-800 mb-2 uppercase">Poin Keunggulan {{ $i }}</label>
                            <div class="space-y-3">
                                <input type="text" name="umrah_why_title_{{ $i }}" value="{{ $settings['umrah_why_title_'.$i] ?? '' }}" placeholder="Judul (Contoh: Kepastian Berangkat)" 
                                    class="w-full px-3 py-2 border border-slate-300 rounded-md outline-none text-sm font-semibold">
                                <textarea name="umrah_why_desc_{{ $i }}" rows="2" placeholder="Deskripsi singkat..." 
                                    class="w-full px-3 py-2 border border-slate-300 rounded-md outline-none text-xs">{{ $settings['umrah_why_desc_'.$i] ?? '' }}</textarea>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>
            </div>

            <div class="space-y-6">
                <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
                    <div class="bg-slate-950 px-6 py-4 border-b border-slate-800 text-amber-500 font-bold">
                        <i class="fas fa-question-circle mr-2"></i> Pertanyaan Umum (Sisi Kanan)
                    </div>
                    <div class="p-6 space-y-6">
                        @for($i = 1; $i <= 3; $i++)
                        <div class="p-4 bg-white border border-slate-200 rounded-xl shadow-sm">
                            <label class="block text-xs font-bold text-slate-800 mb-2 uppercase">Pertanyaan {{ $i }}</label>
                            <div class="space-y-3">
                                <input type="text" name="umrah_faq_q_{{ $i }}" value="{{ $settings['umrah_faq_q_'.$i] ?? '' }}" placeholder="Apa saja perlengkapan yang didapat?" 
                                    class="w-full px-3 py-2 border border-slate-300 rounded-md outline-none text-sm font-bold text-slate-900">
                                <textarea name="umrah_faq_a_{{ $i }}" rows="3" placeholder="Jawaban..." 
                                    class="w-full px-3 py-2 border border-slate-300 rounded-md outline-none text-xs text-slate-600">{{ $settings['umrah_faq_a_'.$i] ?? '' }}</textarea>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>
            </div>

        </div>

        <div class="flex justify-end">
            <button type="submit" class="bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold py-3 px-8 rounded-lg shadow-lg transition-colors flex items-center gap-2">
                <i class="fas fa-save"></i> Simpan FAQ & Keunggulan
            </button>
        </div>
    </form>
@endsection