<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Group;
use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('students')
            ->get();
//        return $categories;


        $objs = Course::inRandomOrder()
            ->with('Category')
            ->take(4)
            ->get();
//        return $objs;

        return view('home.index')
            ->with([
                'categories' => $categories,
                'objs' => $objs,
            ]);
    }
}
