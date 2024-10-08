<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/article', function() {
    return view('article');
});

Route::get('/thread', function() {
    return view('thread');
});

