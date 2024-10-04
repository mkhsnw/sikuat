<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

Route::get('register', [RegisterController::class, 'RegistrationUser'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login.submit'); // Periksa nama rute ini
Route::get('input-token', [LoginController::class, 'showTokenForm'])->name('token.input');
Route::post('verify-token', [LoginController::class, 'verifyToken'])->name('token.verify');

// Route untuk halaman home (setelah login)
Route::get('/dashboard', function () {return view('auth.dashboard');})->middleware('auth')->name('dashboard');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');