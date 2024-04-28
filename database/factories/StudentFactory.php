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

        $course = $teacher->course_id;
        $group = $teacher->group_id;
        $lesson = $teacher->lesson_id;
        $category = $teacher->course->category_id;

        $gradeLevel = $this->faker->randomElement([5, 6, 7, 8, 9, 10]);


        if ($gradeLevel === 5 && $this->faker->boolean(20)) {
            $gradeLevel = $this->faker->numberBetween(1, 4);
        }


        return [
            'category_id' => $category,
            'course_id' => $course,
            'lesson_id' => $lesson,
            'group_id' => $group,
            'teacher_id' => $teacher->id,
            'name' =>  fake()->firstName,
            'surname' => fake()->lastName,
            'gender' => fake()->randomElement(['Male', 'Female']),
            'age' => fake()->numberBetween(16, 25),
            'gradeLevel' => $gradeLevel,
        ];
    }
}
