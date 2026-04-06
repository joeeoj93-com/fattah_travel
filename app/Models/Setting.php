<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    // Tambahkan baris ini
    protected $fillable = ['key', 'value', 'type'];
}