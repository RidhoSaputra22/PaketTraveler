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
        User::factory(3)->create();
        Transaksi::factory(3)->create();
        // PaketTravel::factory(10)->create();
        // Galleri::factory(10)->create();
        // FasilitasPaket::factory(10)->create();

    }
}
