<?php

use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\BlogsController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

// Frontend
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/blog', [BlogsController::class, 'index'])->name('blog');

// Backend
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Category
    Route::resource('categories', CategoryController::class);

    // Blog
    Route::resource('blogs', BlogController::class);
});
