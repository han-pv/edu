<?php

namespace Database\Factories;

use App\Models\Course;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\lesson>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $course = Course::inRandomOrder()->first();
        $faker = Faker::create();
        $name = $faker->sentence(3, 10);
        return array(
            'course_id' => $course->id,
            'name' => $name,
        );
    }
}

