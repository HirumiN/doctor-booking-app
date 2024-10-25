<?php

use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified', 'patient'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/doctor/dashboard', [AdminController::class, 'index'])
    ->middleware(['auth', 'verified', 'admin'])
    ->name('admin-dashboard');

Route::get('/doctor/dashboard', [DoctorController::class, 'index'])
    ->middleware(['auth', 'verified', 'doctor'])
    ->name('doctor-dashboard');

require __DIR__ . '/auth.php';
