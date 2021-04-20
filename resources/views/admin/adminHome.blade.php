<style type="text/css">
    #titreAdmin {
        margin-bottom: 40px;
    }
    .btn-list {
        color: white !important;
        background-color: rgb(59, 59, 59) !important;
        margin-left: 20px;
        margin-right: 20px;
        width: 20%;
        border-radius: 7px !important;
        margin-top: 20px;
    }
    .btn-retour {
        color: white !important;
        background-color: rgb(78, 78, 236) !important;
        border-radius: 7px !important;
        margin-top: 20px;
    }
</style>

@extends('layouts.index')

@section('content')
    <br>
    <br>
    <div class="text-center">
        <h1 id="titreAdmin">ADMIN</h1>
        <hr>
    </div>
    <div class="text-center">
        <a href={{route('blogList')}}><button class="btn btn-list">Liste des articles blog</button></a>
        <a href={{route('portfolioList')}}><button class="btn btn-list">Liste des articles portfolio</button></a>
    </div>

    <br>

    <div class="text-center">
        <a href="{{route('home')}}"><button class="btn btn-retour">Retour au site</button></a>
    </div>
    <br>
    <br>
@endsection