<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

// Students

Route::get('/students', [StudentController::class, 'index']); // for getting the students

Route::get('/students/create', [StudentController::class, 'create']); // for creating students

Route::get('/students/{id}', [StudentController::class, 'show']); // for showing the details



// Subjects 

// Route without a controller (Closure)

Route::get('/subjects', function() {
    return view('subjects.index');
});