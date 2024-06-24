<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
// use App\Http\Controllers\PostController;

// Public Route
Route::get('/', function () {
    return view('welcome');
});

// Dashboard Route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'redirect'])->name('dashboard');

// Route::resource('posts', PostController::class)->middleware('auth');

// Authenticated User Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Routes
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('admin/account', [AdminController::class, 'account'])->name('admin.account');
});

// Siswa Routes
Route::middleware(['auth', 'siswa'])->group(function () {
    Route::get('siswa/dashboard', [SiswaController::class, 'index'])->name('siswa.dashboard');
});

// Guru Routes
Route::middleware(['auth', 'guru'])->group(function () {
    Route::get('guru/dashboard', [GuruController::class, 'index'])->name('guru.dashboard');
});

require __DIR__.'/auth.php';
