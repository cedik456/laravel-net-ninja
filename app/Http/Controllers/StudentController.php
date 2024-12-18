<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {

        $students = Student::orderBy('created_at', 'desc')->get(); // fetch students 
        return view('students.index', [ "students" =>  $students]);
    }

    public function show($id) {

        $student = Student::findOrFail($id);
        return view('students.show', ["student" => $student]);

    }

    public function create() {

        return view('students.create');
        
    }

    public function store() {

    }

    public function destroy($id) {

    }
}
