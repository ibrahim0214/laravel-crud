<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(3)->create(); 
        Category::create([
            'name' => 'web disign',
            'slug' => 'web-disign',
            'color' => 'blue'
        ]);

        Category::create([
            'name' => 'UI UX',
            'slug' => 'UI-UX',
            'color' => 'red'
        ]);

        Category::create([
            'name' => 'machine learning',
            'slug' => 'machine-learning',
            'color' => 'yellow'
        ]);

        Category::create([
            'name' => 'basis data',
            'slug' => 'basis-data',
            'color' => 'green'
        ]);
    }
}
