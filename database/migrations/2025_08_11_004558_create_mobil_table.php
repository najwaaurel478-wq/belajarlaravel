<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mobil', function (Blueprint $table) {
            $table->id();
            $table->string('merek', 16)->nullable();
            $table->string('tipe', 32)->nullable();
            $table->string('warna', 16)->nullable();
            $table->tinyInteger('jumlah_roda')->nullable();
            $table->string('nomor_mesin', 64)->unique();
            $table->string('gambar', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobil');
    }
};
