<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;


/* ________________________ FRONT ________________________ */

Route::get('/', [FrontController::class, 'home']) -> name('home');
Route::get('/blog', [FrontController::class, 'blog']) -> name('blog');
Route::get('/portfolio', [FrontController::class, 'portfolio']) -> name('portfolio');
Route::get('/contact', [FrontController::class, 'contact']) -> name('contact');

// ADMIN

Route::get('/admin', [AdminController::class, 'index'])->name('adminHome');
Route::get('/admin/bloglist', [AdminController::class, 'blogList'])->name('blogList');
Route::get('/admin/portfoliolist', [AdminController::class, 'portfolioList'])->name('portfolioList');

/* ________________________ BACK ________________________ */

// ___________ BLOG

// Create - Store

Route::get('/admin/blog/create', [BlogController::class, 'create'])->name('blogArticle.create');
Route::post('/admin/blog/store', [BlogController::class, 'store'])->name('blogArticle.store');

// Delete

Route::delete('/admin/blog/{id}/delete', [BlogController::class, 'destroy'])->name('blogArticle.destroy');

// Show

Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blogArticle.show');

// Edit - Update

Route::get('/admin/blog/{id}/edit', [BlogController::class, 'edit'])->name('blogArticle.edit');
Route::put('/admin/blog/{id}/update', [BlogController::class, 'update'])->name('blogArticle.update');


// ___________ PORTFOLIO

// Create

Route::get('/admin/portfolio/create', [PortfolioController::class, 'create'])->name('portfolioArticle.create');
Route::post('/admin/portfolio/store', [PortfolioController::class, 'store'])->name('portfolioArticle.store');

// Delete

Route::delete('/admin/portfolio/{id}/delete', [PortfolioController::class, 'destroy'])->name('portfolioArticle.destroy');

// Show

Route::get('/portfolio/{id}', [PortfolioController::class, 'show'])->name('portfolioArticle.show');

// Edit - Update

Route::get('/admin/portfolio/{id}/edit', [PortfolioController::class, 'edit'])->name('portfolioArticle.edit');
Route::put('/admin/portfolio/{id}/update', [PortfolioController::class, 'update'])->name('portfolioArticle.update');