<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('auth.login');
});

// Signup

Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('signup');

Route::post('/signup', [AuthController::class, 'processSignup'])->name('signup.post');

// Login

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

Route::post('/login', [AuthController::class, 'processLogin']);

// Profile

Route::middleware('auth')->get('/profile', [UserController::class, 'showProfile'])->name('profile');

// Logout

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// Students

// Protected Routes (Only accessible by authenticated users)
Route::middleware('auth')->group(function () {
    // Students Routes
    Route::get('/students', [StudentController::class, 'index'])->name('students.index'); 

    Route::get('/students/create', [StudentController::class, 'create'])->name('students.create'); 

    Route::get('/students/{id}', [StudentController::class, 'show'])->name('students.show'); 

    Route::post('/students', [StudentController::class, 'store'])->name('students.store'); 

    Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');

    Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');

    Route::put('/students/{id}', [StudentController::class, 'update'])->name('students.update');

});