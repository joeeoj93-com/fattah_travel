<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('packages', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('slug')->unique(); // Untuk URL halaman detail nanti
        $table->string('gambar');
        $table->string('kategori_badge')->nullable(); // ex: TERLARIS, UMRAH PLUS
        $table->integer('sisa_seat')->default(0);
        $table->text('deskripsi_singkat');
        $table->longText('deskripsi_lengkap')->nullable(); // Untuk halaman detail nanti
        $table->string('tanggal_berangkat'); // ex: 15 Januari 2027 (KNO - MED)
        $table->string('hotel');
        $table->string('maskapai');
        $table->string('harga'); // Bisa diisi $2,400 atau Rp 35.000.000
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
