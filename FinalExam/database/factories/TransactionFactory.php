<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => $this->faker->date(),
            'product' => $this->faker->word,
            'price' => $this->faker->randomFloat(2, 100, 1000),
            'customer_name' => $this->faker->name,
            'type' => $this->faker->randomElement(['Purchase', 'Return', 'Exchange']), 
        ];
    }
    
}
