@extends('layouts.admin')

@section('title', 'Dashboard Ringkasan')

@section('content')
    <div class="mb-8">
        <h2 class="text-2xl font-black text-slate-900 tracking-tight">
            Pusat Kendali 
            @php
                $brand = strtoupper($global_settings['nama_brand'] ?? 'FATTAH TRAVEL');
                $name = str_replace('TRAVEL', '', $brand);
            @endphp
            {{ trim($name) }} <span class="text-amber-500">TRAVEL</span>
        </h2>
        <p class="text-slate-500 text-sm mt-1 font-medium">Ringkasan performa website, tren pengunjung, dan jalan pintas manajemen.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 flex items-center justify-between group hover:shadow-md transition-shadow">
            <div>
                <p class="text-[11px] font-bold text-slate-400 uppercase tracking-widest mb-1">Total Paket Aktif</p>
                <h3 class="text-3xl font-black text-slate-800">{{ $total_paket ?? '0' }}</h3>
                <p class="text-xs text-slate-500 mt-2"><span class="text-emerald-500 font-bold"><i class="fas fa-arrow-up mr-1"></i></span> Paket dijual</p>
            </div>
            <div class="w-14 h-14 rounded-xl bg-amber-50 flex items-center justify-center text-amber-500 group-hover:scale-110 transition-transform">
                <i class="fas fa-box-open text-2xl"></i>
            </div>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 flex items-center justify-between group hover:shadow-md transition-shadow">
            <div>
                <p class="text-[11px] font-bold text-slate-400 uppercase tracking-widest mb-1">Total Pengunjung</p>
                <h3 class="text-3xl font-black text-slate-800">{{ number_format($total_views ?? 0, 0, ',', '.') }}</h3>
                <p class="text-xs text-slate-500 mt-2"><span class="text-emerald-500 font-bold"><i class="fas fa-arrow-up mr-1"></i> 12%</span> dari minggu lalu</p>
            </div>
            <div class="w-14 h-14 rounded-xl bg-blue-50 flex items-center justify-center text-blue-500 group-hover:scale-110 transition-transform">
                <i class="fas fa-chart-line text-2xl"></i>
            </div>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 flex items-center justify-between group hover:shadow-md transition-shadow">
            <div>
                <p class="text-[11px] font-bold text-slate-400 uppercase tracking-widest mb-1">Artikel Terbit</p>
                <h3 class="text-3xl font-black text-slate-800">{{ $total_artikel ?? '0' }}</h3>
                <p class="text-xs text-slate-500 mt-2"><span class="text-slate-400 font-medium"><i class="fas fa-check-circle mr-1"></i> Tersedia di blog</span></p>
            </div>
            <div class="w-14 h-14 rounded-xl bg-emerald-50 flex items-center justify-center text-emerald-500 group-hover:scale-110 transition-transform">
                <i class="fas fa-newspaper text-2xl"></i>
            </div>
        </div>

    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8 items-stretch">
        
        <div class="lg:col-span-2 bg-white rounded-2xl p-6 shadow-sm border border-slate-100 flex flex-col">
            <div class="flex justify-between items-center mb-6">
                <div>
                    <h3 class="text-base font-bold text-slate-800">Tren Minat Jamaah</h3>
                    <p class="text-xs text-slate-500">Statistik pengunjung website dalam 7 hari terakhir.</p>
                </div>
                <button class="w-8 h-8 rounded-lg bg-slate-50 text-slate-400 hover:text-amber-500 hover:bg-amber-50 transition-colors flex items-center justify-center">
                    <i class="fas fa-sync-alt text-xs"></i>
                </button>
            </div>
            <div class="flex-1 relative w-full h-[250px]">
                <canvas id="visitorChart"></canvas>
            </div>
        </div>

        <div class="lg:col-span-1 flex flex-col gap-6">
            
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 flex-1 flex flex-col justify-center relative overflow-hidden group">
                <div class="absolute -right-6 -top-6 w-24 h-24 bg-amber-500/10 rounded-full blur-2xl group-hover:bg-amber-500/20 transition-colors"></div>
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 rounded-lg bg-amber-100 text-amber-600 flex items-center justify-center shrink-0">
                        <i class="fas fa-coins"></i>
                    </div>
                    <h3 class="text-sm font-bold text-slate-800">Kurs Riyal (SAR)</h3>
                </div>
                <p class="text-[10px] text-slate-400 uppercase tracking-wider mb-1">Nilai Tukar Hari Ini</p>
                <div class="flex items-end gap-2">
                    <span class="text-3xl font-black text-slate-800">Rp {{ number_format($kurs_riyal ?? 4255, 0, ',', '.') }}</span>
                    <span class="text-xs font-bold text-emerald-500 mb-1"><i class="fas fa-caret-up"></i> {{ $kurs_riyal_naik ?? '12' }}</span>
                </div>
                <p class="text-[10px] text-slate-400 mt-4 border-t border-slate-100 pt-3"><i class="fas fa-info-circle mr-1"></i> Estimasi untuk perhitungan margin paket.</p>
            </div>

            <div class="bg-[#0F172A] rounded-2xl p-6 shadow-lg border border-slate-800 flex-1 flex flex-col justify-center relative overflow-hidden">
                <div class="absolute right-0 bottom-0 opacity-10 transform translate-x-4 translate-y-4">
                    <i class="fas fa-mosque text-8xl text-white"></i>
                </div>
                <div class="relative z-10">
                    <h3 class="text-sm font-bold text-slate-300 mb-4 flex items-center gap-2">
                        <i class="fas fa-moon text-amber-400"></i> Kalender Hijriah
                    </h3>
                    <div class="text-3xl font-black text-white mb-1">{{ $hijri_hari ?? '8' }} {{ $hijri_bulan ?? 'Syawal' }}</div>
                    <div class="text-lg font-medium text-amber-400">{{ $hijri_tahun ?? '1447 H' }}</div>
                    <p class="text-xs text-slate-500 mt-4">{{ $tanggal_masehi ?? 'Jumat, 27 Maret 2026' }}</p>
                </div>
            </div>

        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-start">
        
        <div class="lg:col-span-2 bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
            <div class="px-6 py-5 border-b border-slate-100 flex justify-between items-center">
                <h3 class="text-base font-bold text-slate-800">Paket Paling Sering Dilihat</h3>
                <a href="{{ route('admin.paket.index', ['type' => 'umrah']) }}" class="text-xs font-bold text-amber-500 hover:text-amber-600 transition-colors">Lihat Semua <i class="fas fa-angle-right ml-1"></i></a>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-50 text-[10px] uppercase tracking-widest text-slate-400">
                            <th class="px-6 py-3 font-bold">Nama Paket</th>
                            <th class="px-6 py-3 font-bold">Kategori</th>
                            <th class="px-6 py-3 font-bold">Harga</th>
                            <th class="px-6 py-3 font-bold text-right">Dilihat</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm divide-y divide-slate-100">
                        @forelse ($top_packages as $paket)
                        <tr class="hover:bg-slate-50/50 transition-colors">
                            <td class="px-6 py-4 font-bold text-slate-800">{{ $paket->nama }}</td>
                            <td class="px-6 py-4">
                                <span class="px-2.5 py-1 rounded-md {{ strtolower($paket->type) == 'haji' ? 'bg-emerald-100 text-emerald-700' : 'bg-amber-100 text-amber-700' }} text-[10px] font-bold uppercase tracking-wider">
                                    {{ $paket->type ?? 'Umrah' }}
                                </span>
                            </td>
                            <td class="px-6 py-4 font-medium text-slate-600">{{ is_numeric($paket->harga) ? 'Rp ' . number_format($paket->harga, 0, ',', '.') : $paket->harga }}</td>
                            <td class="px-6 py-4 text-right font-bold text-slate-800"><i class="fas fa-eye text-slate-400 mr-2"></i> {{ number_format($paket->views ?? 0) }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="px-6 py-4 text-center text-slate-500">Belum ada paket tersedia.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <div class="lg:col-span-1 bg-white rounded-2xl p-6 shadow-sm border border-slate-100">
            <h3 class="text-base font-bold text-slate-800 mb-5">Aksi Cepat</h3>
            <div class="space-y-3">
                
                <a href="{{ route('admin.paket.index', ['type' => 'umrah']) }}" class="flex items-center justify-between p-4 rounded-xl border border-slate-100 hover:border-amber-500 hover:bg-amber-50 transition-all group">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-slate-100 text-slate-500 group-hover:bg-amber-100 group-hover:text-amber-600 flex items-center justify-center transition-colors">
                            <i class="fas fa-tags text-sm"></i>
                        </div>
                        <span class="text-sm font-bold text-slate-700 group-hover:text-amber-700">Update Harga Paket</span>
                    </div>
                    <i class="fas fa-arrow-right text-slate-300 group-hover:text-amber-500 group-hover:translate-x-1 transition-all"></i>
                </a>

                <a href="{{ route('admin.articles.index') }}" class="flex items-center justify-between p-4 rounded-xl border border-slate-100 hover:border-blue-500 hover:bg-blue-50 transition-all group">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-slate-100 text-slate-500 group-hover:bg-blue-100 group-hover:text-blue-600 flex items-center justify-center transition-colors">
                            <i class="fas fa-pen text-sm"></i>
                        </div>
                        <span class="text-sm font-bold text-slate-700 group-hover:text-blue-700">Tulis Berita Baru</span>
                    </div>
                    <i class="fas fa-arrow-right text-slate-300 group-hover:text-blue-500 group-hover:translate-x-1 transition-all"></i>
                </a>

                <a href="/" target="_blank" class="flex items-center justify-between p-4 rounded-xl border border-slate-100 hover:border-emerald-500 hover:bg-emerald-50 transition-all group mt-2 bg-slate-50">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-white shadow-sm text-slate-600 group-hover:text-emerald-600 flex items-center justify-center transition-colors">
                            <i class="fas fa-external-link-alt text-sm"></i>
                        </div>
                        <span class="text-sm font-bold text-slate-700 group-hover:text-emerald-700">Lihat Web Depan</span>
                    </div>
                    <i class="fas fa-arrow-right text-slate-300 group-hover:text-emerald-500 group-hover:translate-x-1 transition-all"></i>
                </a>

            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('visitorChart').getContext('2d');
            
            // Konfigurasi Gradien Warna (Di bawah garis chart)
            let gradient = ctx.createLinearGradient(0, 0, 0, 400);
            gradient.addColorStop(0, 'rgba(245, 158, 11, 0.5)'); // Amber-500 dengan opacity
            gradient.addColorStop(1, 'rgba(245, 158, 11, 0.0)');

            const visitorChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: {!! json_encode($chart_labels ?? ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu']) !!},
                    datasets: [{
                        label: 'Pengunjung',
                        data: {!! json_encode($chart_data ?? [120, 190, 150, 220, 180, 310, 280]) !!},
                        borderColor: '#f59e0b', // Amber-500
                        backgroundColor: gradient,
                        borderWidth: 3,
                        pointBackgroundColor: '#ffffff',
                        pointBorderColor: '#f59e0b',
                        pointBorderWidth: 2,
                        pointRadius: 4,
                        pointHoverRadius: 6,
                        fill: true,
                        tension: 0.4 // Membuat garis melengkung halus (smooth)
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { display: false },
                        tooltip: {
                            backgroundColor: '#0F172A',
                            titleFont: { size: 13 },
                            bodyFont: { size: 14, weight: 'bold' },
                            padding: 10,
                            displayColors: false,
                            callbacks: {
                                label: function(context) {
                                    return context.parsed.y + ' Views';
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: '#f1f5f9',
                                drawBorder: false,
                            },
                            ticks: {
                                color: '#94a3b8',
                                font: { size: 11 }
                            }
                        },
                        x: {
                            grid: {
                                display: false,
                                drawBorder: false,
                            },
                            ticks: {
                                color: '#64748b',
                                font: { size: 11 }
                            }
                        }
                    }
                }
            });
        });
    </script>
@endsection