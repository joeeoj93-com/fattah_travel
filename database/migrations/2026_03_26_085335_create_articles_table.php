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
    Schema::create('articles', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('slug')->unique();
        $table->string('category'); // Misal: Tips Umrah, Berita, Edukasi
        $table->string('image');
        $table->text('excerpt'); // Ringkasan pendek untuk di halaman depan
        $table->longText('body'); // Isi artikel lengkap
        $table->string('author')->default('Admin Fattah Travel');
        $table->integer('views')->default(0);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
