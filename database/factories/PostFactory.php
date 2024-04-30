<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
use Carbon\Carbon;

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
        $createdAt = fake()->dateTimeBetween('-6 months', 'now');
        $viewCount = fake()->numberBetween(1, 999);

        return array(
            'teacher_id' => $teacher->id,
            'title' => fake()->sentence(rand(5, 10)),
            'content' => fake()->paragraph(rand(1, 3)),
            'view_count' => $viewCount,
            'like_count' => fake()->numberBetween(0, $viewCount),
            'created_at' => Carbon::parse($createdAt),
            'updated_at' => Carbon::parse($createdAt)->addDays(rand(0, 7)),

        );
    }
}
