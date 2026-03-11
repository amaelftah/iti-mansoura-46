<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/all-posts', function () {
    return view('all-posts');
});

Route::get('/single-post', function () {
    return view('single-post');
});
