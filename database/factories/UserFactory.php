<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_212396' => fake()->name(),
            'email_212396' => fake()->unique()->safeEmail(),
            'alamat_212396' => fake()->address(),
            'password_212396' => Hash::make('user'),
            'hp_212396' => fake()->phoneNumber(),
            'role_212396' => 'user',
        ];
    }
}
