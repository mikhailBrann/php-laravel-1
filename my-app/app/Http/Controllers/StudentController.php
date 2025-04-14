<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Student;
use \App\Models\Group;

class StudentController extends Controller
{
    public function index(int $group)   
    {
        $students = Student::where('group_id', $group)
            ->orderBy('surname', 'asc')
            ->get();
        $group = Group::find($group);

        return view(
            'students.index', 
            compact('students', 'group')
        );
    }

    public function find(int $group, int $student)
    {
        $student = Student::find($student);
        $group = Group::find($group);

        return view('students.detail', compact('student', 'group'));
    }

    public function create(int $group)
    {
        return view('students.create', compact('group'));
    }

    public function add(Request $request, int $group)
    {
        $student = new Student(
            [
                'group_id' => $group,
                'surname' => $request->surname,
                'name' => $request->name,
            ]
        );
        $student->save();

        return redirect('/groups/' . $group);
    }
}
