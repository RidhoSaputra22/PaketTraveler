<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\FasilitasPaket;
use App\Models\Galleri;
use App\Models\PaketTravel;
use App\Models\Transaksi;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Admin::create([
            'name' => "admin",
            'email' => "admin@gmail.com",
            'password' => "admin",
            'remember_token' => null,
        ]);
        User::create([
            'nama_212396' => "user",
            'email_212396' => "user@gmail.com",
            'password_212396' => Hash::make("user"),
            'alamat_212396' => fake()->address(),
            'hp_212396' => fake()->phoneNumber(),
        ]);
        User::factory(3)->create();
        Transaksi::factory(2)->create();
        // PaketTravel::factory(10)->create();
        // Galleri::factory(10)->create();
        // FasilitasPaket::factory(10)->create();

    }
}
