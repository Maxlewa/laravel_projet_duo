@extends('layouts.index')

@section('content')
    <h2><a href={{route('blogArticle.create')}}>Ajouter un article blog</a></h2>
    <h2><a href={{route('portfolioArticle.create')}}>Ajouter un article portfolio</a></h2>
@endsection