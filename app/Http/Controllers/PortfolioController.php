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
    public function show(Portfolio $id) {
        $portfolio = $id;
        return view('admin.portfolio.portfolioShow', compact('portfolio'));
    }
    public function edit(Portfolio $id) {
        $portfolio = $id;
        return view('admin.portfolio.portfolioEdit', compact('portfolio'));
    }
    public function update(Portfolio $id, Request $request) {
        $portfolio = $id;
        $portfolio ->image = $request->image;
        $portfolio ->titre = $request->titre;
        $portfolio ->texte = $request->texte;
        $portfolio ->save();
        return redirect('/admin' . $portfolio ->$id);
    }
}
