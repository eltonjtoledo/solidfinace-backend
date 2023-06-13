<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\subcategory>
 */
class SubcategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'description' => $this->faker->jobTitle(),
            'active' => $this->faker->randomElement(['Y', 'N']),
            'category_id' => fn() => Category::factory()->create()->id,
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}