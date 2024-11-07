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

Route::group(['middleware' => 'admin'], function(){
    Route::get('/admin/dashboard', [AdminController::class, 'index'])
    ->name('admin-dashboard');

    Route::get('/admin/doctors', [AdminController::class, 'view'])
    ->name('admin-doctors');

    Route::get('/admin/doctors/create', [AdminController::class, 'createDoctor'])
    ->name('create-doctor');

    Route::get('/admin/specialities', [AdminController::class, 'viewSpecialities'])
    ->name('admin-specialities');

    Route::get('/admin/specialities/create', [AdminController::class, 'createSpecialities'])
    ->name('create-specialities');
});



Route::get('/doctor/dashboard', [DoctorController::class, 'index'])
    ->middleware(['auth', 'verified', 'doctor'])
    ->name('doctor-dashboard');

require __DIR__ . '/auth.php';
