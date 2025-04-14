<?php

namespace Database\Factories;

use App\Models\PaketTravel;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaksi>
 */
class TransaksiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_paket_212396' => PaketTravel::factory()->create(),
            'id_user_212396' => User::factory()->create(),
            'status_212396' => 'pending',
            'kode_212396' => fake()->uuid(),
            'kode_midtrans_212396' => fake()->uuid(),
            'jumlah_orang_212396' => fake()->numberBetween(1, 10),
            'total_harga_212396' => fake()->numberBetween(100000, 1000000),
        ];
    }
}
