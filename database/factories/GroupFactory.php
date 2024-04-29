<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Group;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use function PHPUnit\Framework\isFalse;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\group>
 */
class GroupFactory extends Factory
{
    public function definition(): array
    {
        $course = Course::inRandomOrder()->first();
        $faker = Faker::create();
        $latter = $faker->randomElements(['A', 'B', 'C', 'D']);
        $sentence = $course->name;

        $words = explode(' ', $sentence);

        $initials = '';
        foreach ($words as $word) {
            $initials .=  strtoupper(substr($word, 0, 1));
        }

        return [
            'course_id' => $course->id,
            'name' => $initials .' - '. implode('', $latter),
        ];
    }
}
