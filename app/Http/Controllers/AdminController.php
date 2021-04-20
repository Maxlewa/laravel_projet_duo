<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $varBlog = Blog::all();
        $varPortfolio = Portfolio::all();
        return view('admin.adminHome', compact('varBlog', 'varPortfolio'));
    }
    public function blogList() {
        $varBlog = Blog::all();
        return view('admin.blog.blogList', compact('varBlog'));
    }
    public function portfolioList() {
        $varPortfolio = Portfolio::all();
        return view('admin.portfolio.portfolioList', compact('varPortfolio'));
    }
}
