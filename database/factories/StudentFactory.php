<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Group;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $teacher = Teacher::with('course.category')->inRandomOrder()->first();

        $group = $teacher->group_id;

        $course = $teacher->course_id;
        $category = $teacher->course->category_id;



        return [
            'category_id' => $category,
            'course_id' => $course,
//            'lesson_id' => $lesson->id,
            'group_id' => $group,
            'teacher_id' => $teacher->id,
            'name' =>  fake()->firstName,
            'surname' => fake()->lastName,
            'grade' => fake()->numberBetween(1, 12),
        ];
    }
}
