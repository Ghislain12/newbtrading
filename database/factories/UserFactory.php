<?php

namespace Database\Factories;

use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->lastName(),
            'firstname' => fake()->firstName(),
            'civility' => fake()->randomElement(['monsieur', 'madame']),
            'phone' => fake()->phoneNumber(),
            'country' => fake()->country(),
            'status_id' => Status::all()->random()->id,
            'email' => fake()->unique()->safeEmail(),
            'account_status' => fake()->randomElement([0,1]),
            'password' => Hash::make('123456789'), // password
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
