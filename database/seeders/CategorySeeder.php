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
        $categories = [
            ['name' => 'Sport', 'description' => 'Articles about sports, fitness, and athletic activities'],
            ['name' => 'Travel', 'description' => 'Travel guides, destinations, and adventure stories'],
            ['name' => 'Technology', 'description' => 'Latest tech news, gadgets, and digital innovations'],
            ['name' => 'Lifestyle', 'description' => 'Life tips, wellness, and personal development'],
            ['name' => 'Food', 'description' => 'Recipes, restaurant reviews, and culinary experiences'],
            ['name' => 'Health', 'description' => 'Health tips, medical news, and wellness advice'],
            ['name' => 'Business', 'description' => 'Business news, entrepreneurship, and finance'],
            ['name' => 'Entertainment', 'description' => 'Movies, music, celebrities, and pop culture'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
