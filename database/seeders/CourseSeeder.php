<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $objs = [
            1 => [
                'Web Development',
                'Mobile App Development',
                'Software development',
                'Game development',
            ],
            2 => [
                'Big Data Fundamentals',
                'Data Analysis and Visualization',
                'Big Data Platforms',
                'Statistics',
            ],
            3 => [
                'Artificial Intelligence Fundamentals',
                'Machine Learning Algorithms',
                'Internet of Things',
                'Deep Learning',
            ],
            4 => [
                'Networking Fundamentals',
                'Wired and Wireless Networks',
                'Network Administration and Protocols',
            ],
            5 => [
                'Application Security',
                'Cyber Attack Detection and Prevention',
                'Network Security',
                'Cloud Security',
                'Password Management ',
            ],
            6 => [
                'Cloud Computing Fundamentals',
                'Cloud Infrastructure and Services',
                'DevOps and Cloud Automation',
            ],
            7 => [
                'Web Design',
                'User Interface (UI)',
                'User Experience (UX)',
                'Graphic design',
                'Animation',
            ],
        ];

        foreach ($objs as $categoryId => $courseNames) {
            foreach ($courseNames as $courseName) {
                Course::create([
                    'name' => $courseName,
                    'category_id' => $categoryId,
                ]);
            }
        }
    }
}
