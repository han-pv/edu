<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $teacher = Teacher::inRandomOrder()->first();

        return [
            'teacher_id' => $teacher->id,
            'title' => fake()->sentence(rand(5, 10)),
            'content' => fake()->paragraph(rand(1, 3)),
            'view_count' => fake()->numberBetween(0, 50),
            'like_count' => fake()->numberBetween(0, 50),
            'created_at' => fake()->dateTimeBetween('-6 months', 'now'),
            'updated_at' => fake()->dateTimeBetween('-6 months', 'now'),

        ];
    }
}
