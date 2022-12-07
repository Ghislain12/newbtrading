<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = ['directeur', 'directeur', 'comptable', 'client'];
        foreach ($status as $a) {
            $new_status = Status::create([
                'id' => Str::uuid(),
                'label' => $a
            ]);
        }
    }
}
