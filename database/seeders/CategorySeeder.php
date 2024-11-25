<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(3)->create();

        Category::create([
            "name"=> "Kriteria 4 - Sumber Daya Manusia",
            "slug"=> "kriteria-4-sumber-daya-manusia"
        ]);

        Category::create([
            "name"=> "Kriteria 6 - Pendidikan",
            "slug"=> "kriteria-6-pendidikan"
        ]);

        Category::create([
            "name"=> "Kriteria 9 - Luaran dan Capaian Tridharma",
            "slug"=> "kriteria-9-luaran-dan-capaian-tridharma"
        ]);

        
    }
}
