<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Student;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'category' => 'nullable|integer|min:1',
        ]);
//        return $request->all();

        $f_category = $request->has('category') ? $request->category : null;

//        return $f_category;


        $objs = Course::when(isset($f_category), function ($query) use ($f_category) {
                return $query->where('category_id', $f_category);
            })->with('Category', 'lessons','groups', 'teachers', 'students')->get();

//        $courses = Course::inRandomOrder()
//            ->with('Category', 'lessons')
//            ->take(4)
//            ->get();
//        $lessons = Lesson::with('Course')
//            ->orderBy('name')
//            ->get();
//        return $objs->all();

//        $categories = Category::with('courses')
//            ->get();
//
//
        return view('courses.index')
            ->with([
//                'courses' => ,$courses
                'objs' => $objs,
//                'lessons' => $lessons,
//                'categories' => $categories,
            ]);
//        }
//
//    public function show($id)
//    {
//        $obj = Category::findOrFail($id);
//
//        return view('courses.show')
//            ->with([
//                'obj' => $obj,
//            ]);
    }

    public function show($id)
    {
        $obj = Course::findOrFail($id);
//        return $obj;
        return view('courses.show')
            ->with([
                'obj' => $obj,
            ]);
    }
}
