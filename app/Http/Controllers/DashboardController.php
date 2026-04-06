<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Article;
use Illuminate\Support\Facades\Schema;

class DashboardController extends Controller
{
    public function index()
    {
        // 1. Total Paket (Misalnya yang sisa_seat > 0 atau semuanya dihitung aktif)
        $total_paket = Package::count();

        // 2. Artikel Terbit (Semua artikel)
        $total_artikel = Article::count();

        // 3. Paket Paling Sering Dilihat
        // Gunakan fallback ke latest() jika kolom 'views' belum ada
        if (Schema::hasColumn('packages', 'views')) {
            $top_packages = Package::orderBy('views', 'desc')->take(3)->get();
            // Total pengunjung (optional, jika ada tabel terpisah untuk menghitung ini. Fallback: SUM dari 'views')
            $total_views = Package::sum('views'); 
        } else {
            $top_packages = Package::latest()->take(3)->get();
            $total_views = 0; // Fallback jika kolom tidak ada
        }

        // 4. Kurs Riyal (Hardcoded / static, bisa diganti dengan ambil API atau Database)
        $kurs_riyal = 4255;
        $kurs_riyal_naik = 12; // Indikator naik turun (contoh)

        // 5. Tanggal Hijriah & Masehi (Dinamis dari sistem atau package tambahan jika ada, sementara proxy variable)
        $tanggal_masehi = \Carbon\Carbon::now()->locale('id')->translatedFormat('l, d F Y');
        
        // Catatan: Jika ingin kalender hijriah akurat, butuh package seperti 'genius/hijri-dates' atau fetch API
        // Di sini kita buat variabel dinamis yang disimulasikan dari waktu sekarang.
        $hijri_hari = '8'; 
        $hijri_bulan = 'Syawal';
        $hijri_tahun = '1447 H';

        // 6. Data Grafik Pengunjung (Tren Minat Jamaah - 7 Hari Terakhir)
        // Di sistem real, ambil dari tabel visitors berdasarkan DATE(created_at). Ini fallback dinamis.
        $chart_labels = [];
        $chart_data = [];
        for ($i = 6; $i >= 0; $i--) {
            $date = \Carbon\Carbon::now()->subDays($i);
            $chart_labels[] = $date->locale('id')->translatedFormat('l'); // Senin, Selasa...
            $chart_data[] = rand(100, 400); // Dummy data pengunjung, ganti Query ke DB nanti
        }

        return view('admin.dashboard', compact(
            'total_paket', 
            'total_artikel', 
            'top_packages', 
            'total_views', 
            'kurs_riyal',
            'kurs_riyal_naik',
            'tanggal_masehi',
            'hijri_hari',
            'hijri_bulan',
            'hijri_tahun',
            'chart_labels',
            'chart_data'
        ));
    }
}
