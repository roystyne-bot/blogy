<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;



Route::get('/', function () {
    return 'Home Page Gang!';
});

Route::get('/register', [RegisterController::class, 'index'])->name('register');

Route::get('/posts', function () {
    return view('posts.index');
})->name('posts');
