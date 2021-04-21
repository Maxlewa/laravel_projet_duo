<style type="text/css">
    .blogCreateH1 {
        margin-bottom: 40px;
    }
    .divForm {
        width: 60%;
        margin: auto;
    }
    .formCreate {
        display: flex;
        flex-direction: column;
    }
    .labelThing {
        font-size: 30px;
    }
    .btn-submit {
        width: 30%;
        margin: auto;
        margin-top: 20px;
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
    <br>
    <br>
    <div class="text-center">
        <h1 class="blogCreateH1">Créer un article Portfolio</h1>
        <hr>
    </div>
    <div class="divForm">
        <form method="POST" action={{route('portfolioArticle.store')}} class="formCreate">
            @csrf
            <label for="image" class="labelThing">Image</label>
            <input type="text" name="image" class="form-control">

            <br>

            <label for="titre" class="labelThing">Titre</label>
            <input type="text" name="titre" class="form-control">

            <br>

            <label for="texte" class="labelThing">Texte</label>
            <textarea name="texte" rows="9" cols="100" class="form-control"></textarea>

            <br>

            <button type="submit" class="btn btn-submit">SUBMIT</button>
        </form>
        <div class="text-center">
            <a href="{{route('portfolioList')}}"><button class="btn btn-retour">Retour</button></a>
        </div>
    </div>
@endsection