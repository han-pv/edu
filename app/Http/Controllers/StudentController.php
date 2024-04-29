<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Group;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'category' => 'nullable|integer|min:1',
            'course' => 'nullable|integer|min:1',
            'group' => 'nullable|integer|min:1',
            'lesson' => 'nullable|integer|min:1',
            'teacher' => 'nullable|integer|min:1',
            'gender' => 'nullable|string|max:30',
            'age' => 'nullable|integer|min:1',
            'gradeLevel' => 'nullable|string|max:30',
        ]);

        $f_category = $request->has('category') ? $request->category : null;
        $f_course = $request->has('course') ? $request->course : null;
        $f_group = $request->has('group') ? $request->group : null;
        $f_lesson = $request->has('lesson') ? $request->lesson : null;
        $f_teacher = $request->has('teacher') ? $request->teacher : null;
        $f_gender = $request->has('gender') ? $request->gender : null;
        $f_age = $request->has('age') ? $request->age : null;
        $f_gradeLevel = $request->has('gradeLevel') ? $request->gradeLevel : null;


        $objs = Student::when(isset($f_category), function ($query) use ($f_category) {
                return $query->where('category_id', $f_category);
            })
            ->when(isset($f_course), function ($query) use ($f_course) {
                return $query->where('course_id', $f_course);
            })
            ->when(isset($f_group), function ($query) use ($f_group) {
                return $query->where('group_id', $f_group);
            })
            ->when(isset($f_lesson), function ($query) use ($f_lesson) {
                return $query->where('lesson_id', $f_lesson);
            })
            ->when(isset($f_teacher), function ($query) use ($f_teacher) {
                return $query->where('teacher_id', $f_teacher);
            })
            ->when(isset($f_gender), function ($query) use ($f_gender) {
                return $query->where('gender', $f_gender);
            })
            ->when(isset($f_age), function ($query) use ($f_age) {
                return $query->where('age', $f_age);
            })
            ->when(isset($f_gradeLevel), function ($query) use ($f_gradeLevel) {
                return $query->where('gradeLevel', $f_gradeLevel);
            })
            ->when(isset($f_gradeLevel), function ($query) use ($f_gradeLevel) {
                switch ($f_gradeLevel) {
                    case 'Excellent':
                        return $query->whereBetween('gradeLevel', [8, 10]);
                    case 'Average':
                        return $query->whereBetween('gradeLevel', [5, 7]);
                    case 'Poor':
                        return $query->where('gradeLevel', '<=', 5);
                    default:
                        return $query;
            }})
            ->with('category', 'course', 'teacher')
            ->paginate(40)
            ->withQueryString();

        $categories = Category::withCount('students')
            ->get();
        $courses = Course::withCount('students')
            ->orderBy('name')
            ->get();
        $groups = Group::withCount('students')
            ->orderBy('name')
            ->get();
        $teachers = Teacher::withCount('students')
            ->orderBy('name')
            ->get();


        return view('students.index')
            ->with([
                'objs' => $objs,
                'categories' => $categories,
                'courses' => $courses,
                'groups' => $groups,
                'teachers' => $teachers,
                'f_category' => $f_category,
                'f_course' => $f_course,
                'f_group' => $f_group,
                'f_teacher' => $f_teacher,
                'f_gender' => $f_gender,
                'f_age' => $f_age,
                'f_gradeLevel' => $f_gradeLevel,
            ]);
    }

    public function show($id)
    {
        $obj = Student::findOrFail($id);
//        return $obj;
        return view('courses.show')
            ->with([
                'obj' => $obj,
            ]);
    }
}
