@extends('layouts.index')

@section('content')
    <br>
    <br>
    <div class="text-center">
        <a href={{route('blogList')}}><button class="btn">Liste des articles blog</button></a>
        <a href={{route('portfolioList')}}><button class="btn">Liste des articles portfolio</button></a>
    </div>

    <br>
    
    <div class="text-center">
        <a href="{{route('home')}}"><button class="btn btn-dark mt-4">Retour au site</button></a>
    </div>
    <br>
    <br>
@endsection