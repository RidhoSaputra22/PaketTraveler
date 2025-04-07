<?php

namespace Database\Factories;

use App\Models\PaketTravel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Galleri>
 */
class GalleriFactory extends Factory
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
            'path_212396' => 'test.jpg',
        ];
    }
}
