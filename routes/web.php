<?php

use App\Http\Controllers\Frontend\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('home.index');
Route::get('/categories', [PageController::class, 'categories'])->name('home.categories');
Route::get('/login', [PageController::class, 'login'])->name('sign-in');
Route::get('/register', [PageController::class, 'register'])->name('sign-up');