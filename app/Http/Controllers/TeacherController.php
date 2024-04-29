<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Group;
use App\Models\Lesson;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::with('Category', 'Course')
            ->get();

        $lessons = Lesson::with('Course')
            ->get();

        $groups = Group::with('Course')
            ->get();
//        return $lessons;

//        $objs = Course::inRandomOrder()
//            ->with('Category', 'lessons')
//            ->take(4)
//            ->get();


        return view('teachers.index')
            ->with([
                'categories' => $teachers,
                'lessons' => $lessons,
                'groups' => $groups,
            ]);
    }
}
