<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ThreadController;
use App\Http\Controllers\Auth\RegisterController;


// Route::get('/home', function () {
//     return view('emails.dashboard')->name('home');
// });

Route::get('/article', function() {
    return view('article');
});

Route::get('/thread', function() {
    return view('thread');
});


Route::get('register', [RegisterController::class, 'RegistrationUser'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login.submit'); // Periksa nama rute ini
Route::get('input-token', [LoginController::class, 'showTokenForm'])->name('token.input');
Route::post('verify-token', [LoginController::class, 'verifyToken'])->name('token.verify');

// Route untuk halaman home (setelah login)
Route::get('/', function () {return view('dashboard');})->middleware('auth')->name('dashboard');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/thread', [ThreadController::class, 'index']);

Route::get('/thread/create',function(){
    return view('add_thread');
});

Route::get('/article/create',function(){
    return view('add_article');
});

Route::get('/edit',function(){
    return view('edit_profile');
})->name('edit');

