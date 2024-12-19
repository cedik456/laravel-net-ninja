<?php

namespace App\Http\Controllers;


use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {

        $students = Student::with('subject')->orderBy('created_at', 'desc')->paginate(10); // fetch students 
        return view('students.index', [ "students" =>  $students]);
    }

    public function show($id) {

        $student = Student::with('subject')->findOrFail($id);
        return view('students.show', ["student" => $student]);

    }

    public function create() {

        $subjects = Subject::all();
        return view('students.create', ['subjects' => $subjects]);
        
    }

    public function store(Request $request) {

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'skill' => 'required|integer|min:0|max:100',
            'bio' => 'required|string|min:20|max:1000',
            'subject_id' => 'required|exists:subjects,id'
        ]);
        
        Student::create($validated);

        return redirect()->route('students.index');
    }

    public function destroy($id) {

    }
}
