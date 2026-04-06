<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SponsorController extends Controller
{
    // Menampilkan halaman management sponsor
    public function index()
    {
        // Mengambil semua data sponsor, diurutkan dari yang terbaru
        $sponsors = Sponsor::latest()->get();
        return view('admin.home.sponsor', compact('sponsors'));
    }

    // Memproses penyimpanan logo baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_mitra' => 'required|string|max:255',
            // Wajib berupa gambar, maks 2MB
            'logo' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        // Simpan file ke folder storage/app/public/sponsors
        $path = $request->file('logo')->store('sponsors', 'public');

        // Simpan data ke database
        Sponsor::create([
            'nama_mitra' => $request->nama_mitra,
            'logo' => $path,
        ]);

        return back()->with('success', 'Logo Mitra berhasil ditambahkan.');
    }

    // Memproses penghapusan logo
    public function destroy($id)
    {
        $sponsor = Sponsor::findOrFail($id);
        
        // Hapus file gambar asli dari penyimpanan
        if (Storage::disk('public')->exists($sponsor->logo)) {
            Storage::disk('public')->delete($sponsor->logo);
        }
        
        // Hapus data dari database
        $sponsor->delete();

        return back()->with('success', 'Mitra berhasil dihapus.');
    }
}