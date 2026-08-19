<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\WPUKerenController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [WPUKerenController::class, 'welcome'])->name('welcome');

Route::get('/about', [WPUKerenController::class, 'about'])->name('about');

Route::get('/home', [WPUKerenController::class, 'home'])->name('home');

Route::get('/blog', [WPUKerenController::class, 'blog'])->name('blog');

Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/contact', [WPUKerenController::class, 'contact'])->name('contact');
