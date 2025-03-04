<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dashboard');
});
Route::get('/blogs', [PostController::class, 'index'])->name('blogs.index');
Route::get('/blogs/{slug}', [PostController::class, 'show'])->name('blogs.show');
