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
        Schema::create('transaksi_212396', function (Blueprint $table) {
            $table->id('id_transaksi_212396');
            $table->unsignedBigInteger('id_paket_212396');
            $table->unsignedBigInteger('id_user_212396');
            $table->enum('status_212396', ['pending', 'lunas', 'batal']);
            $table->text('kode_212396');
            $table->text('kode_midtrans_212396');
            $table->integer('jumlah_orang_212396');
            $table->integer('total_harga_212396');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_212396');
    }
};
