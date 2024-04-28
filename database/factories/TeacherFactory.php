<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Course;
use App\Models\Group;
use App\Models\Teacher;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        $group = Group::with('course.category')->inRandomOrder()->first();
        $course = $group->course_id;
        $category = $group->course->category_id;
//        $lesson = $courses->lesson_id;

        return [
            'category_id' => $category,
            'course_id' => $course,
//            'lesson_id' => $lesson->id,
            'group_id' => $group->id,
            'name' =>  fake()->firstName,
            'surname' => fake()->lastName,
            'degree' => fake()->randomElement(['Bachelor', 'Master', 'Higher']),
            'experience' => fake()->numberBetween(1, 20),
        ];
    }
}
