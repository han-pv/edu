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



        return view('teachers.index')
            ->with([
                'teachers' => $teachers,
                'lessons' => $lessons,
                'groups' => $groups,
            ]);
    }
}
