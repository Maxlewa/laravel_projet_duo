@extends('layouts.index')

@section('content')

<h1>BLOG</h1>

    @foreach ($varPortfolio as $portfolio)
        <div class="d-flex">
            <h3>{{$portfolio->titre}}</h3>
            <a href="{{route('portfolioArticle.show', $portfolio->id)}}" class="btn btn-primary">Show</a>
            <form method="post" action="{{route('portfolioArticle.destroy', $portfolio->id)}}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </div>
    @endforeach

    <div class="text-center">
        <a href={{route('portfolioArticle.create')}}><button class="btn">Ajouter un article portfolio</button></a>
        <a href="{{route('adminHome')}}"><button class="btn btn-dark mt-4">Retour</button></a>
    </div>
    
@endsection