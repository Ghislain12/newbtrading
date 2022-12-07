<?php

namespace Database\Factories;

use App\Models\TypeService;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
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
            'label' => fake()->text(10),
            'description' => fake()->text(100),
            'advantages' => fake()->text(100),
            'terms' => fake()->text(200),
            'type_service_id' => TypeService::all()->random()->id
        ];
    }
}
