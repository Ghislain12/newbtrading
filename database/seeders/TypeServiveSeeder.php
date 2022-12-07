<?php

namespace Database\Seeders;

use App\Models\TypeService;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class TypeServiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typeServices = ['Loan', 'Investment', 'Saving'];
        foreach ($typeServices as $typeService) {
            $typeService = TypeService::create([
                'id' => Str::uuid(),
                'label' => $typeService,
                'description' => fake()->text(200)
            ]);
        }
    }
}
