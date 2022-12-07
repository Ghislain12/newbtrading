<?php

namespace Database\Seeders;

use App\Models\Groups;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $labels = ['Particulier', 'Indépendant', 'Travailleur', 'Retraité', 'Officiel', 'Autres'];
        foreach ($labels as $label) {
            $group = Groups::create([
                'id' => Str::uuid(),
                'label' => $label,
            ]);
        }
    }
}
