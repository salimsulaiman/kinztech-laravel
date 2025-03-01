<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Category::create([
            'name' => 'UI/UX',
            'slug' => strtolower(str_replace(' ', '-', 'UI/UX')),
            'description' => 'Category for UI/UX design'
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => strtolower(str_replace(' ', '-', 'Programming')),
            'description' => 'Category for programming tutorials'
        ]);

        Category::create([
            'name' => 'Video',
            'slug' => strtolower(str_replace(' ', '-', 'Video')),
            'description' => 'Category for video content'
        ]);
    }
}