<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\URL;
use App\Models\Setting;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        /**
         * 1. CLOUDFLARE TUNNEL FIX (FORCE HTTPS)
         * Memaksa Laravel menggunakan skema HTTPS agar aset (CSS/JS/Images) 
         * tidak diblokir oleh browser saat demo via tunnel.
         */
        //if (app()->environment('local') || env('APP_URL') !== 'http://localhost') {
          //  URL::forceScheme('https');
        //}

        /**
         * 2. GLOBAL SETTINGS SHARING
         * Mengambil semua settings dari database dan membagikannya ke seluruh file Blade.
         */
        try {
            // Kita gunakan pluck agar akses di Blade gampang: $global_settings['key']
            $settings = Setting::all();
            $settingsData = $settings->pluck('value', 'key')->toArray();
            View::share('global_settings', $settingsData);
        } catch (\Exception $e) {
            // Jika tabel settings belum ada (sebelum migration) atau error, bagikan array kosong
            View::share('global_settings', []);
        }
    }
}