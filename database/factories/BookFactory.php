<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Book;
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
            'description' => $this->faker->sentence(),
            'number_pages' => $this->faker->randomNumber(3, false),
            'retail_price' => $this->faker->randomNumber(3, false),
            'reading_difficulty_rating' => $this->faker->randomDigit(),
            'year_published' => $this->faker->date(),
            'is_best_seller' => $this->faker->boolean()
        ];
    }

    // public function addAuthor(int $count = null): self
    // {
    //     $count = $count ?? rand(1, 5);

    //     return $this->afterCreating(
    //         fn (Book $post) => Author::factory()->count($count)->for($post)->create()
    //     );
    // }
}
