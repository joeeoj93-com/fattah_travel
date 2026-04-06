<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PackageController extends Controller
{
public function index(Request $request)
    {
        // Jika ada parameter ?type=haji, tampilkan haji. Jika tidak, default umrah.
        $type = $request->query('type', 'umrah');
        $packages = Package::where('type', $type)->latest()->get();
        
        return view('admin.paket.index', compact('packages', 'type'));
    }

    public function create(Request $request)
    {
        $type = $request->query('type', 'umrah');
        return view('admin.paket.create', compact('type'));
    }

    // Proses simpan data
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string|in:umrah,haji',
            'nama' => 'required|string|max:255',
            'gambar' => 'required|image|max:2048',
            'harga' => 'required|string|max:100',
            'deskripsi_singkat' => 'required|string|max:500',
            'tanggal_berangkat' => 'required|string|max:255',
            'hotel' => 'required|string|max:255',
            'maskapai' => 'required|string|max:255',
            'sisa_seat' => 'required|integer|min:0',
        ]);

        $path = $request->file('gambar')->store('packages', 'public');

        Package::create([
            'type' => $request->type,
            'nama' => $request->nama,
            'gambar' => $path,
            'kategori_badge' => $request->kategori_badge,
            'sisa_seat' => $request->sisa_seat,
            'deskripsi_singkat' => $request->deskripsi_singkat,
            'tanggal_berangkat' => $request->tanggal_berangkat,
            'hotel' => $request->hotel,
            'maskapai' => $request->maskapai,
            'harga' => $request->harga,
            // deskripsi_lengkap dibiarkan kosong dulu, nanti diisi saat edit halaman detail
        ]);

        return redirect()->route('admin.paket.index', ['type' => $request->type])->with('success', 'Paket ' . ucfirst($request->type) . ' berhasil ditambahkan!');
    }

    // Menampilkan form edit paket
    public function edit($id)
    {
        $package = Package::findOrFail($id);
        return view('admin.paket.edit', compact('package'));
    }

    // Memproses pembaruan data paket
    public function update(Request $request, $id)
    {
        $package = Package::findOrFail($id);

        $request->validate([
            'type' => 'nullable|string|in:umrah,haji',
            'nama' => 'required|string|max:255',
            'gambar' => 'nullable|image|max:2048', // Gambar boleh kosong jika tidak diubah
            'harga' => 'required|string|max:100',
            'deskripsi_singkat' => 'required|string|max:500',
            'deskripsi_lengkap' => 'nullable|string', // Field baru untuk halaman detail
            'tanggal_berangkat' => 'required|string|max:255',
            'hotel' => 'required|string|max:255',
            'maskapai' => 'required|string|max:255',
            'sisa_seat' => 'required|integer|min:0',
        ]);

        $data = $request->all();
        if ($request->has('type')) {
            $data['type'] = $request->type;
        }

        // Cek jika ada gambar baru yang diunggah
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            if (\Illuminate\Support\Facades\Storage::disk('public')->exists($package->gambar)) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($package->gambar);
            }
            // Simpan gambar baru
            $data['gambar'] = $request->file('gambar')->store('packages', 'public');
        }

        // Generate ulang slug jika nama paket berubah
        if ($request->nama !== $package->nama) {
            $data['slug'] = \Illuminate\Support\Str::slug($request->nama) . '-' . \Illuminate\Support\Str::random(5);
        }   

        $package->update($data);

        return redirect()->route('admin.paket.index', ['type' => $package->type])->with('success', 'Paket ' . ucfirst($package->type) . ' berhasil diperbarui!');
    }

    // Proses hapus data
    public function destroy($id)
    {
        $package = Package::findOrFail($id);
        if (Storage::disk('public')->exists($package->gambar)) {
            Storage::disk('public')->delete($package->gambar);
        }
        $package->delete();
        return back()->with('success', 'Paket berhasil dihapus.');
    }
}