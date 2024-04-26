<?php

namespace Database\Seeders;

use App\Models\Lesson;
use App\Models\Group;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            CategorySeeder::class,
            CourseSeeder::class,
        ]);

        Lesson::factory()
            ->count(500)
            ->create();

        Group::factory()
            ->count(50)
            ->create();

        Teacher::factory()
            ->count(20)
            ->create();

        Student::factory()
            ->count(500)
            ->create();
    }
}
