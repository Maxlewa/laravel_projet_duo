<style type="text/css">
    .titreBlogEdit {
        margin-bottom: 40px;
        margin-top: 40px;
        text-align: center;
    }
    .divContenu {
        width: 60%;
        margin: auto;
        margin-top: 40px;
    }
    .formBlogEdit {
        display: flex;
        flex-direction: column;
    }
    .labelThing {
        font-size: 30px;
    }
    .btn-update {
        width: 30%;
        margin: 0 auto;
        text-align: center;
        margin-top: 10px;
        background-color: rgb(22, 189, 50) !important;
        color: white !important;
        border-radius: 7px !important;        
    }
    .btn-retour {
        color: white !important;
        border-radius: 7px !important;
        margin-top: 10px;
        width: 20%;
        margin-bottom: 100px !important;
        background-color: rgb(78, 78, 236) !important;
    }
</style>

@extends('layouts.index')

@section('content')
    <h1 class="titreBlogEdit mb-4">Modifier l'article BLOG</h1>
    <hr>
    <div class="divContenu mt-5">
        <form action="{{route('blogArticle.update', $blog->id)}}" method="POST" class="formBlogEdit w-50 mx-auto">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="image" class="labelThing">Image</label>
                <input type="text" value="{{$blog->image}}" class="form-control" id="image" name="image" placeholder="{{$blog->image}}">
            </div>
            <div class="form-group">
                <label for="titre" class="labelThing">Titre</label>
                <input type="text" value="{{$blog->titre}}" class="form-control" id="titre" name="titre" placeholder="{{$blog->titre}}">
            </div>
            <div class="form-group">
                <label for="texte" class="labelThing">Texte</label>
                <textarea type="text" value="{{$blog->texte}}" class="form-control" id="texte" name="texte" placeholder="{{$blog->texte}}"></textarea>
            </div>
            <button type="submit" class="btn btn-update">Actualiser</button>
        </form>
        <div class="text-center">
            <a href="{{route('blogList')}}"><button class="btn btn-retour">Retour</button></a>
        </div>
    </div>
@endsection