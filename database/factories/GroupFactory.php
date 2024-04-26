<?php

namespace Database\Factories;

use App\Models\Course;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\group>
 */
class GroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $letter = 'A';

        return [
            'course_id' => function () {
                // Örnek olarak, mevcut kurslar arasından rastgele bir kursun ID'sini seçebiliriz
                return \App\Models\Course::inRandomOrder()->first()->id;
            },
            'name' => function (array $attributes) use (&$letter) {
                // Kursun ismi ve sırası alfabenin bir harfi ile birleştirilir
                $courseName = \App\Models\Course::find($attributes['course_id'])->name;
                $groupName = $courseName . ' - ' . $letter;

                // Harfi bir sonraki harfe geçir
                ++$letter;

                // Harfi 'Z'ye ulaştığında başa döndür
                if ($letter > 'Z') {
                    $letter = 'A';
                }

                return $groupName;
            },
        ];
    }
}
