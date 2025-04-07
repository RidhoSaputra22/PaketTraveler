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
        Schema::create('galleri_212396', function (Blueprint $table) {
            $table->id('id_galleri_212396');
            $table->unsignedBigInteger('id_paket_212396');
            $table->text('path_212396');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galleri_212396');
    }
};
