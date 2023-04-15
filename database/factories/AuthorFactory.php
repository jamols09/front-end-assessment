<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Author>
 */
class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'birth_state' => \fake('en_US')->state(),
            'date_of_birth' => $this->faker->date('Y-m-d'),
            'name' => $this->faker->name(),
        ];
    }
}
