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
    public function destroy(Blog $id) {
        $id->delete();
        return redirect()->back();
    }
    public function show(Blog $id) {
        $blog = $id;
        return view('admin.blog.blogShow', compact('blog'));
    }
    public function edit(Blog $id) {
        $blog = $id;
        return view('admin.blog.blogEdit', compact('blog'));
    }
    public function update(Blog $id, Request $request) {
        $blog = $id;
        $blog->image = $request->image;
        $blog->titre = $request->titre;
        $blog->texte = $request->texte;
        $blog->save();
        return redirect('/admin' . $blog->$id);
    }
}
