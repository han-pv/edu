<?php

namespace Database\Seeders;

use App\Models\Lesson;
use App\Models\Group;

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

        Group::factory()
            ->count(20)
            ->create();

        Lesson::factory()
        ->count(20)
        ->create();
    }
}
