@extends('layouts.index')

@section('content')
    <div class="text-center mt-5">
        <h1 class="mb-4">Modifier l'article portfolio</h1>
        <form action="{{route('portfolioArticle.update', $portfolio->id)}}" method="POST" class="w-50 mx-auto">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="image">Image</label>
                <input type="text" value="{{$portfolio->titre}}" class="form-control" id="image" name="image" placeholder="{{$portfolio->image}}">
            </div>
            <div class="form-group">
                <label for="titre">Titre</label>
                <input type="text" value="{{$portfolio->titre}}" class="form-control" id="titre" name="titre" placeholder="{{$portfolio->titre}}">
            </div>
            <div class="form-group">
                <label for="texte">Texte</label>
                <input type="text" value="{{$portfolio->texte}}" class="form-control" id="texte" name="texte" placeholder="{{$portfolio->texte}}">
            </div>
            <button type="submit" class="btn btn-success mt-3">Actualiser</button>
        </form>
    </div>
@endsection