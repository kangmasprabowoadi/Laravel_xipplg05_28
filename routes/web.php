<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Admin\DashboardController; // 🔹 tambahkan baris ini

// 🔹 Route untuk halaman utama (landing page)
Route::get('/', [LandingController::class, 'index']);

// 🔹 Route untuk halaman dashboard admin
Route::get('/admin/dashboard', [DashboardController::class, 'index']);
