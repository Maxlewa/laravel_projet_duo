<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']) -> name('home');

Route::get('/blog', [BlogController::class, 'index']) -> name('blog');

Route::get('/portfolio', [PortfolioController::class, 'index']) -> name('portfolio');

Route::get('/contact', [ContactController::class, 'index']) -> name('contact');

Route::get('/admin', [AdminController::class, 'index'])->name('adminHome');

Route::get('/admin/blog/create', [BlogController::class, 'create'])->name('blogArticle.create');
Route::post('/admin/blog/store', [BlogController::class, 'store'])->name('blogArticle.store');

Route::get('/admin/portfolio/create', [PortfolioController::class, 'create'])->name('portfolioArticle.create');
Route::post('/admin/portfolio/store', [PortfolioController::class, 'store'])->name('portfolioArticle.store');
