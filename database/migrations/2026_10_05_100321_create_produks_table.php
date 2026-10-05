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
            Schema::create('produks', function (Blueprint $table) {
                $table->id();
                $table->string('judul');
                $table->string('gambar');
                $table->integer('harga'); // Pakai integer biar gampang simpan Rupiah
                $table->text('deskripsi');
                $table->string('nomor_telpon');
                $table->timestamps();
            });
        }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};