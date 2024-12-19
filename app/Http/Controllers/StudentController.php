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

    public function store() {

    }

    public function destroy($id) {

    }
}
