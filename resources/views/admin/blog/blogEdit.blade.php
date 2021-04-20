@extends('layouts.index')

@section('content')
    <div class="text-center mt-5">
        <h1 class="mb-4">Modifier l'article blog</h1>
        <form action="{{route('blogArticle.update', $blog->id)}}" method="POST" class="w-50 mx-auto">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="image">Image</label>
                <input type="text" value="{{$blog->image}}" class="form-control" id="image" name="image" placeholder="{{$blog->image}}">
            </div>
            <div class="form-group">
                <label for="titre">Titre</label>
                <input type="text" value="{{$blog->titre}}" class="form-control" id="titre" name="titre" placeholder="{{$blog->titre}}">
            </div>
            <div class="form-group">
                <label for="texte">Texte</label>
                <input type="text" value="{{$blog->texte}}" class="form-control" id="texte" name="texte" placeholder="{{$blog->texte}}">
            </div>
            <button type="submit" class="btn btn-success mt-3">Actualiser</button>
        </form>
    </div>
@endsection