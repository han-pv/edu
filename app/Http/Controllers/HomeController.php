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

//        $groups = Group::withCount('students')
//            ->get();
//        return $groups;



        $objs = Course::inRandomOrder()
//            ->withCount('students')
            ->with('Category', 'lessons')
            ->take(4)
            ->get();
//        return $objs;
//        $students = Student::with('group')->get();
//        return $categories;
//        return view('home.index', compact('students'));
        return view('home.index')
            ->with([
                'categories' => $categories,
                'objs' => $objs,
            ]);
    }
}
