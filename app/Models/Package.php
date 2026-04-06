<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Package extends Model
{
    protected $fillable = [
        'type', 'nama', 'slug', 'gambar', 'kategori_badge', 'sisa_seat',
        'deskripsi_singkat', 'deskripsi_lengkap', 'tanggal_berangkat',
        'hotel', 'maskapai', 'harga'
    ];

    // Otomatis membuat slug saat paket disimpan
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($package) {
            $package->slug = Str::slug($package->nama) . '-' . Str::random(5);
        });
    }
}