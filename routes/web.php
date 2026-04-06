<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Admin\ArticleController;

use App\Models\Sponsor;
use App\Models\Testimonial;

Route::get('/', function () {
    $sponsors = Sponsor::all();
    $testimonials = Testimonial::all();
    return view('welcome', compact('sponsors', 'testimonials'));
});

Route::get('/paket-umrah', [FrontController::class, 'umrah'])->name('front.umrah');

Route::get('/paket-haji', [FrontController::class, 'haji'])->name('front.haji');

Route::get('/artikel', [FrontController::class, 'artikel'])->name('front.artikel.index');
Route::get('/artikel/{slug}', [FrontController::class, 'showArticle'])->name('front.artikel.detail');

Route::get('/kontak', function () {
    $global_settings = \App\Models\Setting::pluck('value', 'key')->toArray();
    return view('kontak.index', compact('global_settings'));
})->name('front.kontak');
Route::post('/kontak', [\App\Http\Controllers\FrontController::class, 'storeContactMessage'])->name('front.kontak.store');

Route::get('/paket/{slug}', [FrontController::class, 'showDetail'])->name('front.paket.detail'); 

// ============================================================================
// AREA LOGIN & AUTENTIKASI
// ============================================================================
// Routes yang hanya bisa diakses oleh user yang BELUM login (guest)
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate']);
});

// Proses logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// --- AREA ADMIN (TERKUNCI) ---
Route::middleware('auth')->prefix('admin')->group(function () {
    
    Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('admin.dashboard');

    // Rute Pengaturan Global
    Route::get('/pengaturan', [SettingController::class, 'index'])->name('admin.settings');
    Route::post('/pengaturan/update', [SettingController::class, 'update'])->name('admin.settings.update');
    // ... rute pengaturan lainnya ...

    // --- GRUP HALAMAN HOME ---
    Route::prefix('home')->group(function () {
        Route::get('/navbar', [SettingController::class, 'homeNavbar'])->name('admin.home.navbar');
        Route::get('/hero-banner', [SettingController::class, 'homeHeroBanner'])->name('admin.home.hero_banner');
        Route::get('/sponsor', [SponsorController::class, 'index'])->name('admin.home.sponsor');
        Route::post('/sponsor', [SponsorController::class, 'store'])->name('admin.home.sponsor.store');
        Route::delete('/sponsor/{id}', [SponsorController::class, 'destroy'])->name('admin.home.sponsor.destroy');
        Route::get('/about', [SettingController::class, 'homeAbout'])->name('admin.home.about');
        Route::get('/pricing', [SettingController::class, 'homePricing'])->name('admin.home.pricing');
        Route::get('/why-us', [SettingController::class, 'homeWhyUs'])->name('admin.home.why_us');
        Route::get('/gallery', [SettingController::class, 'homeGallery'])->name('admin.home.gallery');
        Route::get('/testimonial', [TestimonialController::class, 'index'])->name('admin.home.testimonial');
        Route::post('/testimonial', [TestimonialController::class, 'store'])->name('admin.home.testimonial.store');
        Route::delete('/testimonial/{id}', [TestimonialController::class, 'destroy'])->name('admin.home.testimonial.destroy');
        Route::get('/edukasi', [SettingController::class, 'homeEdukasi'])->name('admin.home.edukasi');
    });

    // --- GRUP HALAMAN UMRAH ---
    Route::prefix('umrah')->group(function () {
        Route::get('/banner', [SettingController::class, 'umrahBanner'])->name('admin.umrah.banner');
        Route::get('/faq', [SettingController::class, 'umrahFaq'])->name('admin.umrah.faq');
    });

    // --- GRUP HALAMAN HAJI ---
    Route::prefix('haji')->group(function () {
        Route::get('/banner', [SettingController::class, 'hajiBanner'])->name('admin.haji.banner');
        Route::get('/faq', [SettingController::class, 'hajiFaq'])->name('admin.haji.faq');
    });

    // --- GRUP HALAMAN ARTIKEL ---
    Route::prefix('artikel')->group(function () {
        Route::get('/banner', [SettingController::class, 'articleBanner'])->name('admin.artikel.banner');
    });

// --- GRUP HALAMAN KONTAK ---
    Route::prefix('kontak')->group(function () {
        Route::get('/banner', [SettingController::class, 'contactBanner'])->name('admin.kontak.banner');
        Route::get('/profile', [SettingController::class, 'contactProfile'])->name('admin.kontak.profile');
    });

    // Route untuk Konten Footer
    Route::get('/konten-footer', [\App\Http\Controllers\SettingController::class, 'footerContent'])->name('admin.footer');

    // --- MANAJEMEN PAKET UMRAH & HAJI ---
    Route::resource('paket', PackageController::class)->names([
        'index' => 'admin.paket.index',
        'create' => 'admin.paket.create',
        'store' => 'admin.paket.store',
        'edit' => 'admin.paket.edit',
        'update' => 'admin.paket.update',
        'destroy' => 'admin.paket.destroy',
    ]);

    // --- MANAJEMEN ARTIKEL ---
    Route::resource('articles', ArticleController::class)->names([
        'index' => 'admin.articles.index',
        'create' => 'admin.articles.create',
        'store' => 'admin.articles.store',
        'show' => 'admin.articles.show',
        'edit' => 'admin.articles.edit',
        'update' => 'admin.articles.update',
        'destroy' => 'admin.articles.destroy',
    ]);
});