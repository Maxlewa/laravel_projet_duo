<style type="text/css">
    .titrePortfolioEdit {
        margin-bottom: 40px;
        margin-top: 40px;
        text-align: center;
    }
    .divContenu {
        width: 60%;
        margin: auto;
        margin-top: 40px;
    }
    .formPortfolioEdit {
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
    <h1 class="titrePortfolioEdit mb-4">Modifier l'article PORTFOLIO</h1>
    <hr>
    <div class="divContenu mt-5">
        <form action="{{route('portfolioArticle.update', $portfolio->id)}}" method="POST" class="formPortfolioEdit w-50 mx-auto">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="image" class="labelThing">Image</label>
                <input type="text" value="{{$portfolio->image}}" class="form-control" id="image" name="image" placeholder="{{$portfolio->image}}">
            </div>
            <div class="form-group">
                <label for="titre" class="labelThing">Titre</label>
                <input type="text" value="{{$portfolio->titre}}" class="form-control" id="titre" name="titre" placeholder="{{$portfolio->titre}}">
            </div>
            <div class="form-group">
                <label for="texte" class="labelThing">Texte</label>
                <textarea type="text" value="{{$portfolio->texte}}" class="form-control" id="texte" name="texte" placeholder="{{$portfolio->texte}}"></textarea>
            </div>
            <button type="submit" class="btn btn-update">Actualiser</button>
        </form>
        <div class="text-center">
            <a href="{{route('portfolioList')}}"><button class="btn btn-retour">Retour</button></a>
        </div>
    </div>
@endsection