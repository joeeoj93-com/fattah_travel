<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::latest()->get();
        return view('admin.home.testimonial', compact('testimonials'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'profesi' => 'nullable|string|max:255',
            'pesan' => 'required|string',
            'rating' => 'required|string|max:10',
            'avatar' => 'required|image|max:2048',
            'gambar_background' => 'required|image|max:5120', // Maks 5MB untuk background
        ]);

        $avatarPath = $request->file('avatar')->store('testimonials/avatars', 'public');
        $bgPath = $request->file('gambar_background')->store('testimonials/backgrounds', 'public');

        Testimonial::create([
            'nama' => $request->nama,
            'profesi' => $request->profesi,
            'pesan' => $request->pesan,
            'rating' => $request->rating,
            'avatar' => $avatarPath,
            'gambar_background' => $bgPath,
        ]);

        return back()->with('success', 'Testimoni berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        
        // Hapus file gambar dari storage
        if (Storage::disk('public')->exists($testimonial->avatar)) {
            Storage::disk('public')->delete($testimonial->avatar);
        }
        if (Storage::disk('public')->exists($testimonial->gambar_background)) {
            Storage::disk('public')->delete($testimonial->gambar_background);
        }
        
        $testimonial->delete();

        return back()->with('success', 'Testimoni berhasil dihapus.');
    }
}   