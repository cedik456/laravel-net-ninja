<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

// Students

Route::get('/students', [StudentController::class, 'index'])->name('students.index'); // for getting the students

Route::get('/students/create', [StudentController::class, 'create'])->name('students.create'); // for creating students

Route::get('/students/{id}', [StudentController::class, 'show'])->name('students.show'); // for showing the details

Route::post('/students', [StudentController::class, 'store'])->name('students.store'); // for storing data (web form)




// Subjects 

// Route without a controller (Closure)

Route::get('/subjects', function() {
    return view('subjects.index');
});