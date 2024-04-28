<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
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


        $objs = Student::when(isset($f_category), function ($query) use ($f_category) {
                return $query->where('category_id', $f_category);
            })->with('Category','groups')->get();
//        return $objs->all();

//        $categories = Category::with('courses')
//            ->get();
//
//
        return view('courses.index')
            ->with([
                'objs' => $objs,
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
