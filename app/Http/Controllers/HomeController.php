<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();

//        $students = Student::with('group')->get();
//        return $categories;
//        return view('home.index', compact('students'));
        return view('home.index')
            ->with([
                'categories' => $categories,
            ]);
    }
}
