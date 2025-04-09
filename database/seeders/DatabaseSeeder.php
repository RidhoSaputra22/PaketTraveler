<?php

namespace Database\Seeders;

use App\Models\FasilitasPaket;
use App\Models\Galleri;
use App\Models\PaketTravel;
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
        User::create([
            'nama_212396' => 'Admin',
            'email_212396' => 'admin@gmail.com',
            'alamat_212396' => fake()->address(),
            'password_212396' => Hash::make('admin'),
            'hp_212396' => fake()->phoneNumber(),
            'role_212396' => 'admin',
        ]);
        User::factory(3)->create();
        PaketTravel::factory(10)->create();
        Galleri::factory(10)->create();
        FasilitasPaket::factory(10)->create();

    }
}
