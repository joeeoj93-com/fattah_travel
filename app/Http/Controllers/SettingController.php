<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    // Menampilkan halaman form pengaturan
    public function index()
    {
        // Ambil semua data setting dan jadikan array dengan key sebagai kuncinya
        $settings = Setting::pluck('value', 'key')->toArray();
        
        return view('admin.settings', compact('settings'));
    }
// Menampilkan halaman Konfigurasi Navbar
    public function homeNavbar()
    {
        // Ambil semua data dari tabel settings
        $settings = \App\Models\Setting::pluck('value', 'key')->toArray();
        
        return view('admin.home.navbar', compact('settings'));
    }  

    // Menampilkan halaman Hero Banner
    public function homeHeroBanner()
    {
        $settings = \App\Models\Setting::pluck('value', 'key')->toArray();
        return view('admin.home.hero-banner', compact('settings'));
    }

    // Menampilkan halaman Tentang Kami (About)
    public function homeAbout()
    {
        $settings = \App\Models\Setting::pluck('value', 'key')->toArray();
        return view('admin.home.about', compact('settings'));
    }

    // Menampilkan halaman Pilihan Paket (Pricing)
    public function homePricing()
    {
        $settings = \App\Models\Setting::pluck('value', 'key')->toArray();
        return view('admin.home.pricing', compact('settings'));
    }

    // Menampilkan halaman Why Us (Alasan Memilih Kami)
    public function homeWhyUs()
    {
        $settings = \App\Models\Setting::pluck('value', 'key')->toArray();
        return view('admin.home.why-us', compact('settings'));
    }

    // Menampilkan halaman Galeri Momen
    public function homeGallery()
    {
        $settings = \App\Models\Setting::pluck('value', 'key')->toArray();
        return view('admin.home.gallery', compact('settings'));
    }

    // Menampilkan halaman Edukasi & Manasik
    public function homeEdukasi()
    {
        $settings = \App\Models\Setting::pluck('value', 'key')->toArray();
        return view('admin.home.edukasi', compact('settings'));
    }

    // Menampilkan halaman Banner & Header (Halaman Umrah)
    public function umrahBanner()
    {
        $settings = \App\Models\Setting::pluck('value', 'key')->toArray();
        return view('admin.umrah.banner', compact('settings'));
    }

    // Menampilkan halaman FAQ & Keunggulan (Halaman Umrah)
    public function umrahFaq()
    {
        $settings = \App\Models\Setting::pluck('value', 'key')->toArray();
        return view('admin.umrah.faq', compact('settings'));
    }

    // Menampilkan halaman Banner & Header (Halaman Haji)
    public function hajiBanner()
    {
        $settings = \App\Models\Setting::pluck('value', 'key')->toArray();
        return view('admin.haji.banner', compact('settings'));
    }

    // Menampilkan halaman FAQ & Keunggulan (Halaman Haji)
    public function hajiFaq()
    {
        $settings = \App\Models\Setting::pluck('value', 'key')->toArray();
        return view('admin.haji.faq', compact('settings'));
    }

    // Menampilkan halaman Banner & Header (Halaman Artikel)
    public function articleBanner()
    {
        $settings = \App\Models\Setting::pluck('value', 'key')->toArray();
        return view('admin.artikel.banner', compact('settings'));
    }

    // Menampilkan halaman Banner & Header (Halaman Kontak)
    public function contactBanner()
    {
        $settings = \App\Models\Setting::pluck('value', 'key')->toArray();
        return view('admin.kontak.banner', compact('settings'));
    }

// Menampilkan halaman Profil Kantor (Halaman Kontak)
    public function contactProfile()
    {
        $settings = \App\Models\Setting::pluck('value', 'key')->toArray();
        return view('admin.kontak.profile', compact('settings'));
    }

    // Menampilkan halaman Kelola Konten Footer
    public function footerContent()
    {
        $settings = \App\Models\Setting::pluck('value', 'key')->toArray();
        return view('admin.footer', compact('settings'));
    }

    // Menyimpan perubahan ke database
    public function update(Request $request)
    {
        $data = $request->except('_token');

        foreach ($data as $key => $value) {
            // Khusus untuk input file (Upload Logo)
            if ($request->hasFile($key)) {
                $file = $request->file($key);
                $path = $file->store('pengaturan', 'public'); // Simpan di folder storage/app/public/pengaturan
                $value = $path;
            }

            // Update atau buat data baru di tabel settings
            Setting::updateOrCreate(
                ['key' => $key],
                ['value' => $value, 'type' => $request->hasFile($key) ? 'image' : 'text']
            );
        }

        return back()->with('success', 'Pengaturan Global berhasil diperbarui! ');
    }
}