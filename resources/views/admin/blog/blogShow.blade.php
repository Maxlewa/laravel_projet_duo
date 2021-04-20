@extends('layouts.index')

@section('content')
    <div class="text-center mt-5">
        <h1 class="mb-4">Info de l'article blog</h1>
        <h2>{{$blog->titre}}</h2>
        <h2>{{$blog->image}}</h2>
        <h2>{{$blog->texte}} ans</h2>
        <div class="d-flex justify-content-center">
            <a href="{{route('blogArticle.edit', $blog->id)}}"><button class="btn btn-primary mx-1">Edit</button></a>
            <form method="post" action="{{route('blogArticle.destroy', $blog->id)}}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger mx-1" type="submit">Delete</button>
            </form>
        </div>
        <a href="{{route('adminHome')}}"><button class="btn btn-dark mt-4">Retour</button></a>
    </div>
@endsection