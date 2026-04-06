<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = ['nama', 'profesi', 'pesan', 'rating', 'avatar', 'gambar_background'];
}