<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function create() {
        return view('admin.portfolio.portfolioCreate');
    }
    public function store(Request $request){
        // dd($request->nom);
        $portfolioItem = new Portfolio();
        $portfolioItem->image = $request->image;
        $portfolioItem->titre = $request->titre;
        $portfolioItem->texte = $request->texte;
        $portfolioItem->save();
        // return redirect()->back();
        return redirect()->route('home');
    }
    public function destroy(Portfolio $id) {
        $id->delete();
        return redirect()->back();
    }
}
