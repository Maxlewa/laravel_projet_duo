<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        $varBlog = Blog::all();
        // $varBlog = [
        //     (object) [
        //         "image" => './img/portfolio-1.jpg',
        //         "titre" => 'Is Passion Good For Business?',
        //         "texte" => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        //     ],
        //     (object) [
        //         "image" => './img/portfolio-1.jpg',
        //         "titre" => 'Is Passion Good For Business?',
        //         "texte" => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        //     ],
        // ];
        return view('pages.blog', compact('varBlog'));
    }
}
