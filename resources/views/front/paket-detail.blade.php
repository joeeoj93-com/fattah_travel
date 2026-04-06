<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $package->nama }} - Fattah Travel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-slate-50 text-slate-800 font-sans antialiased">

    <nav class="bg-slate-900 text-white py-4 px-6 md:px-12 flex justify-between items-center">
        <a href="/" class="font-bold text-xl flex items-center gap-3">
            @if(isset($global_settings['logo_header']))
                <img src="{{ asset('storage/' . $global_settings['logo_header']) }}" alt="{{ $global_settings['nama_brand'] ?? 'Fattah Travel' }}" class="h-8 w-auto object-contain">
            @else
                <i class="fas fa-kaaba text-amber-500"></i>
            @endif
            <span>{{ strtoupper($global_settings['nama_brand'] ?? 'FATTAH TRAVEL') }}</span>
        </a>
        <a href="/" class="text-sm hover:text-amber-500 transition-colors"><i class="fas fa-arrow-left mr-2"></i> Kembali ke Beranda</a>
    </nav>

    <div class="w-full h-[40vh] md:h-[50vh] relative">
        <img src="{{ asset('storage/' . $package->gambar) }}" alt="{{ $package->nama }}" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-linear-to-t from-slate-900 via-slate-900/40 to-transparent"></div>
        
        <div class="absolute bottom-0 left-0 w-full p-6 md:p-12 max-w-7xl mx-auto">
            @if($package->kategori_badge)
                <span class="bg-amber-500 text-slate-950 font-bold px-3 py-1 rounded-full text-xs md:text-sm inline-block mb-3 uppercase tracking-wider">
                    {{ $package->kategori_badge }}
                </span>
            @endif
            <h1 class="text-3xl md:text-5xl font-bold text-white mb-2">{{ $package->nama }}</h1>
            <p class="text-slate-200 text-sm md:text-base max-w-2xl">{{ $package->deskripsi_singkat }}</p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-6 md:px-12 py-10">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
            
            <div class="lg:col-span-2 space-y-8">
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4 p-6 bg-white rounded-2xl shadow-sm border border-slate-100">
                    <div>
                        <p class="text-xs text-slate-500 mb-1">Keberangkatan</p>
                        <p class="font-semibold text-slate-800"><i class="far fa-calendar-alt text-amber-500 mr-2"></i> {{ $package->tanggal_berangkat }}</p>
                    </div>
                    <div>
                        <p class="text-xs text-slate-500 mb-1">Hotel Bintang</p>
                        <p class="font-semibold text-slate-800"><i class="far fa-building text-amber-500 mr-2"></i> {{ $package->hotel }}</p>
                    </div>
                    <div class="col-span-2 md:col-span-1">
                        <p class="text-xs text-slate-500 mb-1">Maskapai</p>
                        <p class="font-semibold text-slate-800"><i class="fas fa-plane text-amber-500 mr-2"></i> {{ $package->maskapai }}</p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-6 md:p-8">
                    <h3 class="text-2xl font-bold text-slate-900 mb-6 border-b border-slate-100 pb-4">Itinerary & Detail Perjalanan</h3>
                    
                    <div class="prose max-w-none text-slate-600 leading-relaxed">
                        {{-- Menggunakan {!! !!} agar tag HTML (seperti <b> atau <br>) dari admin tereksekusi --}}
                        {!! nl2br($package->deskripsi_lengkap ?? '<i>Detail itinerary sedang disiapkan oleh tim kami.</i>') !!}
                    </div>
                </div>
            </div>

            <div class="lg:col-span-1">
                <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6 md:p-8 sticky top-6">
                    <p class="text-sm text-slate-500 font-medium mb-1">Harga Paket Mulai</p>
                    <h2 class="text-4xl font-bold text-slate-900 mb-4">{{ $package->harga }}</h2>
                    
                    <div class="flex items-center justify-between py-4 border-y border-slate-100 mb-6">
                        <span class="text-sm text-slate-600">Sisa Kuota:</span>
                        <span class="bg-red-100 text-red-600 font-bold px-3 py-1 rounded-full text-sm">{{ $package->sisa_seat }} Seat</span>
                    </div>

                    @php
                        // Memformat pesan WhatsApp otomatis
                        $pesanWa = "Halo Fattah Travel, saya tertarik dengan *" . $package->nama . "* (" . $package->harga . "). Apakah seatnya masih tersedia?";
                        // Ganti dengan nomor asli dari setting, atau nomor dummy jika kosong
                        $noWa = $global_settings['nav_wa_number'] ?? '6281234567890'; 
                        // Hilangkan karakter non-angka
                        $noWa = preg_replace('/[^0-9]/', '', $noWa);
                    @endphp

                    <a href="https://wa.me/{{ $noWa }}?text={{ urlencode($pesanWa) }}" target="_blank" class="w-full block text-center bg-green-500 hover:bg-green-600 text-white font-bold py-4 px-6 rounded-xl transition-colors shadow-md shadow-green-500/30">
                        <i class="fab fa-whatsapp text-lg mr-2"></i> Pesan Sekarang
                    </a>
                    
                    <p class="text-xs text-center text-slate-400 mt-4">
                        <i class="fas fa-shield-alt mr-1"></i> Transaksi aman & resmi bersama Fattah Travel
                    </p>
                </div>
            </div>

        </div>
    </div>

</body>
</html>