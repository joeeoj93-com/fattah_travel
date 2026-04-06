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
    Schema::create('testimonials', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('profesi')->nullable();
        $table->text('pesan');
        $table->string('rating')->default('5.0');
        $table->string('avatar');
        $table->string('gambar_background');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
