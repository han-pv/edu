<?php

namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{

    public function run(): void
    {
        $objs = [
            'Software Development',
            'Big Data and Analytics',
            'AI and Machine Learning',
            'Networking',
            'Cyber Security',
            'Cloud Computing',
            'Design',
            ];

        foreach ($objs as $obj) {
            Category::create([
                'name' => $obj,
            ]);
        }
    }
}
