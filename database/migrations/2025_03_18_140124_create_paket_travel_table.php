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
        Schema::create('paket_travel_212396', function (Blueprint $table) {
            $table->id('id_paket_212396');
            $table->unsignedBigInteger('id_kategori_212396');
            $table->string('nama_212396');
            $table->text('deskripsi_212396');
            $table->text('thumbnail_212396');
            $table->double('harga_212396');
            $table->dateTime('tanggal_berangkat_212396');
            $table->dateTime('tanggal_pulang_212396');
            $table->string('lokasi_212396');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paket_travel_212396');
    }
};
