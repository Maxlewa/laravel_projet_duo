<style type="text/css">
    .blogCreateH1 {
        margin-bottom: 40px;
    }
    .divForm {
        width: 60%;
        margin: auto;
    }
</style>

@extends('layouts.index')

@section('content')
    <br>
    <br>
    <div class="text-center">
        <h1 class="blogCreateH1">Créer un article BLOG</h1>
        <hr>
    </div>
    <div class="divForm">
        <form method="POST" action={{route('blogArticle.store')}}>
            @csrf
            <label for="image">Image</label>
            <input type="text" name="image">

            <br>

            <label for="titre">Titre</label>
            <input type="text" name="titre">

            <br>

            <label for="texte">Texte</label>
            <textarea name="texte" rows="12" cols="100"></textarea>

            <br>

            <button type="submit">SUBMIT</button>
        </form>
    </div>
@endsection