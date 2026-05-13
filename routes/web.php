<?php

use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('students.index');
});

// Public auth routes: only login is not protected.
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('login.store');
});

// Protected application + auth-management routes.
Route::middleware('auth')->group(function () {
    Route::get('/register', [AuthController::class, 'create'])->name('register');
    Route::post('/register', [AuthController::class, 'store'])->name('register.store');

    Route::get('/password/change', [AuthController::class, 'edit'])->name('password.edit');
    Route::put('/password/change', [AuthController::class, 'update'])->name('password.update');

    Route::post('/logout', [AuthController::class, 'destroy'])->name('logout');

    Route::resource('students', StudentController::class);
    Route::resource('courses', CourseController::class);
    Route::resource('enrollments', EnrollmentController::class)->only(['index', 'create', 'store', 'destroy']);
    Route::resource('assignments', AssignmentController::class);
});
