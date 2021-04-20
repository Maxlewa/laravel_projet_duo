@extends('layouts.index')

@section('content')

<h1>BLOG</h1>

    @foreach ($varBlog as $blog)
        <div class="d-flex">
            <h3>{{$blog->titre}}</h3>
            <a href="{{route('blogArticle.show', $blog->id)}}" class="btn btn-primary">Show</a>
            <form method="post" action="{{route('blogArticle.destroy', $blog->id)}}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </div>
    @endforeach

    <div class="text-center">
        <a href={{route('blogArticle.create')}}><button class="btn">Ajouter un article blog</button></a>
        <a href="{{route('adminHome')}}"><button class="btn btn-dark mt-4">Retour</button></a>
    </div>
    
@endsection