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
        Schema::create('users_212396', function (Blueprint $table) {
            $table->id('id_user_212396');
            $table->string('nama_212396');
            $table->string('alamat_212396');
            $table->string('email_212396')->unique();
            $table->string('password_212396');
            $table->string('hp_212396');
            $table->string('foto_212396');

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_212396');
    }
};
