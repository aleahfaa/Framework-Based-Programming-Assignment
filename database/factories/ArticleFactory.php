<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(5, true),
            'description' => fake()->paragraph(3),
            // 'published_at' => fake()->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
            'image' => fake()->imageUrl(800, 600, 'articles', true),
            'content' => fake()->paragraphs(8, true),
        ];
    }
    public function withRandomPublishedDate(): static
    {
        return $this->state(fn (array $attributes) => [
            'published_at' => fake()->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
        ]);
    }
}
