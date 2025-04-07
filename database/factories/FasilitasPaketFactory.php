<?php

namespace Database\Factories;

use App\Models\PaketTravel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FasilitasPaket>
 */
class FasilitasPaketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'id_paket_212396' => PaketTravel::factory()->create(),
            'fasilitas_212396' => fake()->text(),
        ];
    }
}
