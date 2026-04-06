<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Menampilkan halaman form login
    public function index()
    {
        return view('auth.login');
    }

    // Memproses data email & password yang dikirim dari form
    public function authenticate(Request $request)
    {
        // 1. Validasi inputan harus diisi dan formatnya email
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // 2. Cek kecocokan dengan database
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // Hindari serangan session fixation
            
            // Kalau sukses, lempar ke halaman dashboard admin
            return redirect()->intended('admin/dashboard');
        }

        // 3. Kalau gagal login, kembalikan ke form dan bawa pesan error
        return back()->withErrors([
            'email' => 'Email atau password salah nih.',
        ])->onlyInput('email');
    }

    // Memproses logout admin
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Kalau sukses logout, lempar balik ke halaman utama web
        return redirect('/');
    }
}