<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'bio' => fake()->realText(500),
            'year_level' => fake()->numberBetween(1,100),
            'email' => fake()->email(),
            'course_id' => Course::inRandomOrder()->first()->id,
        ];
    }
}
