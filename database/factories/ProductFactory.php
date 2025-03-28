<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition()
    {
        return [
            'category_id' => rand(1, 3),
            'code' => $this->faker->unique()->numerify('SP###'),
            'name' => $this->faker->word(),
            'status' => $this->faker->randomElement(['active', 'inactive']),
            'price' => $this->faker->randomFloat(2, 10000, 1000000),
            'original_price' => 500000, // Giá gốc
            'short_description' => $this->faker->sentence(),
            'full_description' => $this->faker->paragraph(),
            'specifications' => $this->faker->text(100),
            'thumbnail' => $this->faker->imageUrl(640, 480, 'food'),
            'album' => json_encode([
                $this->faker->imageUrl(640, 480, 'food'),
                $this->faker->imageUrl(640, 480, 'food')
            ]),
        ];
    }
}
