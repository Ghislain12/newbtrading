<?php

namespace Database\Factories;

use App\Models\Groups;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Loan>
 */
class LoanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id' => Str::uuid(),
            'user_id' => User::all()->random()->id,
            'address' => fake()->address(),
            'objectif' => fake()->text(200),
            'amount' => fake()->numerify('######'),
            'group' => Groups::all()->random()->label,
            'period' => fake()->date('Y-m-d', '2050-12-31'),
            'income' => fake()->numerify('######'),
            'statut' => fake()->randomElement([true, false]),
            
        ];
    }
}
