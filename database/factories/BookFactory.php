<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'description' => $this->faker->sentences(3),
            'number_pages' => $this->faker->randomNumber(3, false),
            'retail_price' => $this->faker->randomNumber(3, false),
            'reading_difficulty_rating' => $this->faker->randomDigit(),
            'year_published' => $this->faker->date(),
            'is_best_seller' => $this->faker->boolean(10)
        ];
    }
}
