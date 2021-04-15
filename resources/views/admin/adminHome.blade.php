@extends('layouts.index')

@section('content')
    <br>
    <br>

    <h2 class="text-center"><a href={{route('blogArticle.create')}}>Ajouter un article blog</a></h2>
    <h2 class="text-center"><a href={{route('portfolioArticle.create')}}>Ajouter un article portfolio</a></h2>

    <br>
    <br>
@endsection