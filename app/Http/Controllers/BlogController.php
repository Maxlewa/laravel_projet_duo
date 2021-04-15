<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function create() {
        return view('admin.blog.blogCreate');
    }
    public function store(Request $request){
        // dd($request->nom);
        $blogItem = new Blog();
        $blogItem->image = $request->image;
        $blogItem->titre = $request->titre;
        $blogItem->texte = $request->texte;
        $blogItem->save();
        // return redirect()->back();
        return redirect()->route('home');
    }
    public function index() {
        $varBlog = Blog::all();
        return view('pages.blog', compact('varBlog'));
    }
}
