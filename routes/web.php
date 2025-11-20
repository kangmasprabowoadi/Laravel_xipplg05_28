<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\StudentController;

// 🔹 Route untuk halaman utama (landing page)
Route::get('/', [LandingController::class, 'index']);

// 🔹 Route untuk halaman dashboard admin
Route::get('/admin/dashboard', [DashboardController::class, 'index']);

// 🔹 Route untuk data siswa (CRUD)
Route::resource('admin/students', StudentController::class);
