<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
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

        $category = $this->faker->randomElement($categories);
        
        return [
            'name' => $category['name'],
            'description' => $category['description'],
        ];
    }
}
