@extends('layouts.index')

@section('content')
    <br>
    <br>
    <div class="text-center">
        <a href={{route('blogList')}}><button class="btn">Liste des articles blog</button></a>
        <a href={{route('portfolioList')}}><button class="btn">Liste des articles portfolio</button></a>
    </div>
    {{-- <h1>BLOG</h1>

    @foreach ($varBlog as $blog)
    <div class="d-flex">
        <h3>{{$blog->titre}}</h3>
        <form method="post" action="{{route('blogArticle.destroy', $blog->id)}}">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>
    @endforeach --}}

    {{-- <h1>PORTFOLIO</h1>

    @foreach ($varPortfolio as $portfolio)
    <div class="d-flex">
        <h3>{{$portfolio->titre}}</h3>
        <form method="post" action="{{route('portfolioArticle.destroy', $portfolio->id)}}">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>
    @endforeach --}}

    <br>
    <div class="text-center">
        <a href="{{route('home')}}"><button class="btn btn-dark mt-4">Retour au site</button></a>
    </div>
    <br>
    <br>
@endsection