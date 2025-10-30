<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Login Routes
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);

// Registration Routes  
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);

// Logout Route
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Simple password reset (optional)
Route::get('forgot-password', [AuthController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('forgot-password', [AuthController::class, 'sendResetLinkEmail'])->name('password.email');