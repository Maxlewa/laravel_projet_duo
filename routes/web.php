<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;


/* ___________ FRONT ___________ */

Route::get('/', [FrontController::class, 'home']) -> name('home');
Route::get('/blog', [FrontController::class, 'blog']) -> name('blog');
Route::get('/portfolio', [FrontController::class, 'portfolio']) -> name('portfolio');
Route::get('/contact', [FrontController::class, 'contact']) -> name('contact');

Route::get('/admin', [AdminController::class, 'index'])->name('adminHome');

/* ___________ BACK ___________ */

// BLOG

// Create

Route::get('/admin/blog/create', [BlogController::class, 'create'])->name('blogArticle.create');
Route::post('/admin/blog/store', [BlogController::class, 'store'])->name('blogArticle.store');

// Delete

Route::delete('/admin/blog/{id}/delete', [BlogController::class, 'destroy'])->name('blogArticle.destroy');

// PORTFOLIO

// Create

Route::get('/admin/portfolio/create', [PortfolioController::class, 'create'])->name('portfolioArticle.create');
Route::post('/admin/portfolio/store', [PortfolioController::class, 'store'])->name('portfolioArticle.store');

// Delete

Route::delete('/admin/portfolio/{id}/delete', [PortfolioController::class, 'destroy'])->name('portfolioArticle.destroy');