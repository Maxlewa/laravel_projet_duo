@extends('layouts.index')

@section('content')
    <h1>Article PORTFOLIO</h1>
    <form method="POST" action={{route('portfolioArticle.store')}}>
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
@endsection