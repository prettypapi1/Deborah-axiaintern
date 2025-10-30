<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Main page - show login selection
Route::get('/', function () {
    return view('role-selection');
});

// Auth routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard route
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Protected routes with role-based access
Route::middleware(['auth'])->group(function () {
    // SuperAdmin only routes
    Route::middleware(['role:SuperAdmin'])->group(function () {
        Route::get('/super-admin', [DashboardController::class, 'superAdmin'])->name('super.admin');
        Route::get('/system-settings', [DashboardController::class, 'systemSettings'])->name('system.settings');
    });

    // SchoolAdmin only routes
    Route::middleware(['role:SchoolAdmin'])->group(function () {
        Route::get('/school-admin', [DashboardController::class, 'schoolAdmin'])->name('school.admin');
        Route::get('/manage-users', [DashboardController::class, 'manageUsers'])->name('manage.users');
    });

    // Teacher only routes
    Route::middleware(['role:Teacher'])->group(function () {
        Route::get('/teacher', [DashboardController::class, 'teacher'])->name('teacher.dashboard');
        Route::get('/manage-classes', [DashboardController::class, 'manageClasses'])->name('manage.classes');
    });

    // Student only routes
    Route::middleware(['role:Student'])->group(function () {
        Route::get('/student', [DashboardController::class, 'student'])->name('student.dashboard');
        Route::get('/my-grades', [DashboardController::class, 'myGrades'])->name('my.grades');
    });

    // Parent only routes
    Route::middleware(['role:Parent'])->group(function () {
        Route::get('/parent', [DashboardController::class, 'parent'])->name('parent.dashboard');
        Route::get('/child-grades', [DashboardController::class, 'childGrades'])->name('child.grades');
    });

    // Bursar only routes
    Route::middleware(['role:Bursar'])->group(function () {
        Route::get('/bursar', [DashboardController::class, 'bursar'])->name('bursar.dashboard');
        Route::get('/manage-payments', [DashboardController::class, 'managePayments'])->name('manage.payments');
    });
});