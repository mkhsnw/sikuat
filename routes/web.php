<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ThreadController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminChallengeController;
use App\Http\Controllers\Admin\ReviewArticleController;
use App\Http\Controllers\Admin\AdminArticleController;
use App\Http\Controllers\Admin\AdminThreadController;

// Route::get('/home', function () {
//     return view('emails.dashboard')->name('home');
// });

// Route::get('/article', function() {
//     return view('article');
// });
Route::get('/article', [ArtikelController::class, 'index'])->name('article');



Route::get('/thread', function () {
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

Route::get('/edit', function () {
    return view('edit_profile');
})->name('edit');

Route::get('/profile/edit', [ProfileController::class, 'index'])->name('profile.edit');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

// Route untuk halaman login admin
Route::get('admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login.submit');

Route::prefix('admin')->middleware('auth:admin')->group(function () {
    // Dashboard Admin
    Route::get('/', function () {
        return view('admin.admin');
    })->name('admin.dashboard');

    // Route untuk Fitur Challenge
    Route::get('/challenge', [AdminChallengeController::class, 'index'])->name('admin.challenge.index');
    Route::post('/challenge', [AdminChallengeController::class, 'store'])->name('admin.challenge.store');
    Route::delete('/challenge/{id}', [AdminChallengeController::class, 'destroy'])->name('admin.challenge.destroy');
    Route::put('/challenge/{id}', [AdminChallengeController::class, 'update'])->name('admin.challenge.update');

    // Route untuk Fitur Thread
    Route::get('/admin-thread', [AdminThreadController::class, 'index'])->name('admin.thread.index');
    Route::get('/admin-thread/{id}', [AdminThreadController::class, 'show'])->name('admin.thread.show');
    Route::post('/admin-thread/{id}/delete', [AdminThreadController::class, 'destroy'])->name('admin.thread.destroy');

    // Review Articles
    Route::get('/review-article', [ReviewArticleController::class, 'index'])->name('admin.review.index');
    Route::post('/review-article/{id}/revisi', [ReviewArticleController::class, 'revisi'])->name('admin.review.revisi');
    Route::post('/review-article/{id}/accept', [ReviewArticleController::class, 'accept'])->name('admin.review.accept');
    Route::get('/review-article/{id}', [ReviewArticleController::class, 'show'])->name('admin.review.show');
    Route::post('/review-article/{id}/reject', [ReviewArticleController::class, 'reject'])->name('admin.review.reject');
    Route::post('/review-article/{id}/delete', [ReviewArticleController::class, 'destroy'])->name('admin.review.destroy');

    //Route untuk Fitur Admin Article
    Route::get('/article', [AdminArticleController::class, 'index'])->name('admin.article.index');
    Route::get('/article/detail', [AdminArticleController::class, 'show'])->name('admin.article.show');

    // Logout Admin
    Route::post('/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
});

Route::get('/detail_thread', function () {
    return view('detail_thread');
});

Route::get('/detail_article', function () {
    return view('detail_article');
});
