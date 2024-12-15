<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ThreadController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;

// Route::get('/home', function () {
//     return view('emails.dashboard')->name('home');
// });

// Route::get('/article', function() {
//     return view('article');
// });
Route::get('/article', [ArtikelController::class, 'index'])->name('article');



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
// Route::get('/', function () {return view('dashboard');})->middleware('auth')->name('dashboard');


Route::get('/', [DashboardController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');


Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/thread', [ThreadController::class, 'index']);

// Route::get('/thread/create',function(){
//     return view('add_thread');
// });
Route::get('/threads/create', [ThreadController::class, 'showaddThread'])->name('threads.create');
Route::post('/threads', [ThreadController::class, 'store'])->name('threads.store');


// Route::get('/article/create',function(){
//     return view('add_article');
// })->name('article.create');
Route::get('/articles/create', [ArtikelController::class, 'create'])->name('articles.create');
Route::post('/articles/store', [ArtikelController::class, 'store'])->name('articles.store');

Route::get('/edit',function(){
    return view('edit_profile');
})->name('edit');

Route::get('/profile/edit', [ProfileController::class, 'index'])->name('profile.edit');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

Route::get('/admin/dashboard',function(){
    return view('admin');
})->name('admin');

Route::get('/admin/article',function(){
    return view('admin_article');
})->name('admin_article');

Route::get('/admin/detail_article',function(){
    return view('admin_detail_artikel');
})->name('admin_detail_article');

Route::get('/admin/challange',function(){
    return view('admin_challange');
})->name('admin_challange');

