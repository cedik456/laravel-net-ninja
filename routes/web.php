<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Students

Route::get('/students', function () {

    $students = [
        ["name" => "Ced", "skill" => 100, "id" => 1], 
        ["name" => "Alex", "skill" => 65, "id" => 2]
    ];

    return view('students.index', ["greetings" => "hello", "students" =>  $students]);
});

Route::get('/students/create', function() {
    return view('students.create');
});

Route::get('/students/{id}', function($id) {
    return view('students.show', ["id" => $id]);
});

// Subjects 

Route::get('/subjects', function() {
    return view('subjects.index');
});