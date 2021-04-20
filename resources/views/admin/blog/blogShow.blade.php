<style type="text/css">
    .titreBlogShow,
    .contenuPart {
        margin-bottom: 40px;
    }
    .divContenu {
        width: 60%;
        margin: auto;
        margin-top: 40px;
    }
    .h2blogShow {
        width: 100%;
        padding: 7px 0 10px 20px;
        background-color: rgb(218, 214, 214);
        border-radius: 7px;
    }
    .threeBtn {
        display: flex;
        justify-content: center;
    }
    .btn-delete,
    .btn-edit,
    .btn-retour {
        color: white !important;  
        border-radius: 7px !important; 
        margin-left: 10px;
        margin-right: 10px;
    }
    .btn-delete {
        background-color: rgb(209, 0, 0) !important;
    }
    .btn-edit {
        background-color: rgb(5, 64, 190) !important;
    }
    .btn-retour {
        background-color: rgb(78, 78, 236) !important;
    }
</style>

@extends('layouts.index')

@section('content')
    <br>
    <br>
    <div class="mt-5">
        <div class="text-center ">
            <h1 class="titreBlogShow">Article BLOG</h1>
            <hr>
        </div>
        <div class="divContenu">
            <div class="contenuPart">
                <h2 class="h2blogShow">Titre</h2>
                <h3>{{$blog->titre}}</h3>
            </div>
            <div class="contenuPart">
                <h2 class="h2blogShow">Image</h2>
                <h3>{{$blog->image}}</h3>               
            </div>
            <div class="contenuPart">
                <h2 class="h2blogShow">Texte</h2>
                <p>{{$blog->texte}}</p>
            </div>
        </div>
        <div class="threeBtn">
            <a href="{{route('blogArticle.edit', $blog->id)}}"><button class="btn btn-edit mx-1">Edit</button></a>
            <form method="post" action="{{route('blogArticle.destroy', $blog->id)}}">
                @csrf
                @method('DELETE')
                <button class="btn btn-delete mx-1" type="submit">Delete</button>
            </form>
            <a href="{{route('adminHome')}}"><button class="btn btn-retour mt-4">Retour</button></a>
        </div>
    </div>
@endsection