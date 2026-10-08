<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return 'Home Page Gang!';
});

Route::get('/posts', function () {
    return view('posts.index');
});
