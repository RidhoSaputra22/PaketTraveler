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
        Schema::create('fasilitas_paket_212396', function (Blueprint $table) {
            $table->id('id_fasilitas_212396');
            $table->unsignedBigInteger('id_paket_212396');
            $table->string('fasilitas_212396');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fasilitas_paket_212396');
    }
};
