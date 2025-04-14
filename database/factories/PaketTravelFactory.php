<?php

namespace Database\Factories;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PaketTravel>
 */
class PaketTravelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_kategori_212396' => Kategori::factory()->create(),
            'nama_212396' => fake()->city(),
            'deskripsi_212396' => fake()->text(),
            'thumbnail_212396' => fake()->imageUrl(),
            'harga_212396' => fake()->numberBetween(100000, 1000000),
            'tanggal_berangkat_212396' => fake()->dateTime(),
            'tanggal_pulang_212396' => fake()->dateTime(),
            'lokasi_212396' => fake()->city(),
        ];
    }
}
