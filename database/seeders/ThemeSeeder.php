<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Theme;

class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Theme::create([
            'name' => 'Multisectoral approach in addressing NCDs in children'
        ]);

        Theme::create([
            'name' => 'Nutrition, growth, and early childhood development'
        ]);

        Theme::create([
            'name' => 'Infections and NCDs'
        ]);

        Theme::create([
            'name' => 'Newborn, child and adolescent health (NCAH)'
        ]);

        Theme::create([
            'name' => 'Hema /oncology in children and adolescent'
        ]);

        Theme::create([
            'name' => 'Systemic Non-Communicable diseases'
        ]);
    }
}
