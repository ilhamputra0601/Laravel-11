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

        Category::factory()->createMany([
            [
                'name' => 'Web Design',
                'slug' => 'web-design',
                'color' => 'red',

            ],
            [
                'name' => 'UI UX',
                'slug' => 'ui-ux',
                'color' => 'green',
            ],
            [
                'name' => 'Machine Learning',
                'slug' => 'machine-learning',
                'color' => 'blue',
            ],
            [
                'name' => 'Data Structures',
                'slug' => 'data-structures',
                'color' => 'yellow',
            ],
        ]);
    }
}
