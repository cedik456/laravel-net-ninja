<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Students

Route::get('/students', function () {

    $students = [
        ["name" => "Ced", "skill" => "Web Development", "id" => 1], 
        ["name" => "Alex", "skill" => "Data Science", "id" => 2]
    ];

    return view('students.index', ["greetings" => "hello", "students" =>  $students]);
});

Route::get('/students/{id}', function($id) {
    return view('students.show', ["id" => $id]);
});

// Subjects 

Route::get('/subjects', function() {
    return view('subjects.index');
});