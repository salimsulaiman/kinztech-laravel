<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dashboard');
});
Route::get('/', function () {
    return view('pages.dashboard');
});
Route::get('/blogs', function () {
    return view('pages.blogs.index');
});