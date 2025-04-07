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
        Schema::table('paket_travel_212396', function(Blueprint $table){
            $table->foreign('id_kategori_212396')->references('id_kategori_212396')->on('kategori_212396')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('galleri_212396', function(Blueprint $table){
            $table->foreign('id_paket_212396')->references('id_paket_212396')->on('paket_travel_212396')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('fasilitas_paket_212396', function(Blueprint $table){
            $table->foreign('id_paket_212396')->references('id_paket_212396')->on('paket_travel_212396')->onUpdate('cascade')->onDelete('cascade');
        });



        Schema::table('transaksi_212396', function(Blueprint $table){
            $table->foreign('id_paket_212396')->references('id_paket_212396')->on('paket_travel_212396')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_user_212396')->references('id_user_212396')->on('users_212396')->onUpdate('cascade')->onDelete('cascade');
        });




    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
