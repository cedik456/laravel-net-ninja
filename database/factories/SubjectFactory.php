<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $subjects = ['Networking II', 'Web Standards', 'Social Ethics', 'Mobile Development', 'Machine Learning'];

        return [
            'name' => fake()->randomElement($subjects),
            'location' => fake()->city(),
            'description' => fake()->paragraph(10),
        ];
    }
}
