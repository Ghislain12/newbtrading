<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\investments>
 */
class InvestmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $group = ['worker', 'independant'];
        return [
            'id' => Str::uuid(),
            'user_id' => User::all()->random()->id,
            'address' => fake()->address(),
            'objectif' => fake()->text(50),
            'amount' => fake()->numerify('######'),
            'group' => fake()->randomElement($group),
            'refund_deadline' => fake()->date('Y-m-d', '2050-12-31'),
            'income' => fake()->numerify('######'),
            'business_plan' => '123.pdf',
        ];
    }
}
