<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'type' => $this->faker->randomElement(['TV', 'Phone', 'Laptop', 'Monitor']),
            'name' => $this->faker->word,
            'description' => $this->faker->text(200),
            'price' => $this->faker->randomFloat(2, 100, 2000),
        ];
    }
}
