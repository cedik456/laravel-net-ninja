<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {

        $students = Student::with('course')->orderBy('created_at', 'desc')->paginate(4); // fetch students 
        return view('students.index', [ "students" =>  $students]);
    }

    public function show($id) {

        $student = Student::with('course')->findOrFail($id);
        return view('students.show', ["student" => $student]);

    }

    public function create() {

        $courses = Course::all();
        return view('students.create', ['courses' => $courses]);
        
    }

    public function store(Request $request) {

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'grade' => 'required|integer|min:0|max:100',
            'bio' => 'required|string|min:20|max:1000',
            'course_id' => 'required|exists:courses,id'
        ]);
        
        Student::create($validated);

        return redirect()->route('students.index')->with('success', 'Student Created');
    }

    public function destroy($id) {

        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Student Deleted');
    }

    public function edit($id)
{
    $student = Student::findOrFail($id);
    $courses = Course::all();
    return view('students.edit', compact('student', 'courses'));
}

public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'grade' => 'required|integer|min:0|max:100',
        'bio' => 'required|string',
        'course_id' => 'required|exists:courses,id',
    ]);

    $student = Student::findOrFail($id);
    $student->update($validatedData);

    return redirect()->route('students.index')->with('success', 'Student updated successfully!');
}

    
}
