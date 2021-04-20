<style type="text/css">
    #titreBlog {
        margin-bottom: 40px;
    }
    .twoBtn {
        display: flex;
        padding-left: 20px;
        padding-right: 20px;
    }
    .btn-show,
    .btn-delete {
        color: white !important;  
        border-radius: 7px !important;      
    }
    .btn-show {
        background-color: rgb(3, 77, 3) !important;
        margin-right: 20px;
    }
    .btn-delete {
        background-color: rgb(209, 0, 0) !important;
    }
    .divForeach {
        margin-top: 40px !important;
    }
    .blogElements {
        display: flex;
        justify-content: center;
        margin-top: 10px;
    }
    .h3blog {
        margin-left: 20px;
        margin-right: 20px;
        margin-bottom: 0;
        padding-top: 7px;
    }
    .btn-lightgreen,
    .btn-retour {
        color: white !important;
        border-radius: 7px !important;
        margin-top: 20px;
        margin-right: 20px;
        width: 20%;
        margin-bottom: 100px !important;
    }
    .btn-lightgreen {
        background-color: rgb(0, 189, 47) !important;
    }
    .btn-retour {
        background-color: rgb(78, 78, 236) !important;
    }
</style>

@extends('layouts.index')

@section('content')
    <br>
    <br>
    <div class="text-center">
        <h1 id="titreBlog">BLOG</h1>
        <hr>
    </div>

    <div class="divForeach">
    @foreach ($varBlog as $blog)
        <div class="blogElements">
            <h3 class="h3blog">{{$blog->titre}}</h3>
            <div class="twoBtn">
                <a href="{{route('blogArticle.show', $blog->id)}}"><button class="btn btn-show">Show</button></a>
                <form method="post" action="{{route('blogArticle.destroy', $blog->id)}}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-delete" type="submit">Delete</button>
                </form>
            </div>
        </div>
    @endforeach
    </div>

    <div class="text-center">
        <a href={{route('blogArticle.create')}}><button class="btn btn-lightgreen">Ajouter un article blog</button></a>
        <a href="{{route('adminHome')}}"><button class="btn btn-retour">Retour à Admin</button></a>
    </div>
    
@endsection