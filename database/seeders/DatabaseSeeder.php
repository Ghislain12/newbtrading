<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Service;
use App\Models\Investment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            StatusSeeder::class,
            TypeServiveSeeder::class,
            GroupSeeder::class
        ]);
        User::factory()->count(100)->create();
        Service::factory()->count(10)->create();
        Investment::factory()->count(20)->create();
    }
}
