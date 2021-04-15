<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $varHome = [
            (object) [
                "image" => './img/we-are-creative.jpg',
            ]
        ];
        return view('home', compact('varHome'));
    }
}
