@extends('layouts.index')

@section('content')
    <br>
    <br>

    <h2 class="text-center"><a href={{route('blogArticle.create')}}>Ajouter un article blog</a></h2>
    <h2 class="text-center"><a href={{route('portfolioArticle.create')}}>Ajouter un article portfolio</a></h2>

    <h1>BLOG</h1>

    @foreach ($varBlog as $blog)
    <div class="d-flex">
        <h3>{{$blog->titre}}</h3>
        <form method="post" action="{{route('blogArticle.destroy', $blog->id)}}">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>
    @endforeach

    <h1>PORTFOLIO</h1>

    @foreach ($varPortfolio as $portfolio)
    <div class="d-flex">
        <h3>{{$portfolio->titre}}</h3>
        <form method="post" action="{{route('portfolioArticle.destroy', $portfolio->id)}}">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>
    @endforeach

    <br>
    <br>
@endsection