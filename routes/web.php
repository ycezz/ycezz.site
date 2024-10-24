<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontController::class, 'index'])->name('front.index');

Route::get('/details/{blogs_article:slug}', [FrontController::class, 'details'])->name('front.details');

Route::get('/about/{about:slug}', [FrontController::class, 'about'])->name('front.about');

Route::get('/portfolio/{portfolio:slug}', [FrontController::class, 'portfolio'])->name('front.portfolio');

Route::get('/search', [FrontController::class, 'search'])->name('front.search');

Route::get('/quote', [FrontController::class, 'quote'])->name('front.quote');