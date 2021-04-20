<style type="text/css">
    #titrePortfolio {
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
    .portfolioElements {
        display: flex;
        justify-content: center;
        margin-top: 10px;
    }
    .h3portfolio {
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
        padding-bottom: 40px;
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
        <h1 id="titrePortfolio">PORTFOLIO</h1>
        <hr>
    </div>

    <div class="divForeach">
    @foreach ($varPortfolio as $portfolio)
        <div class="portfolioElements">
            <h3 class="h3portfolio">{{$portfolio->titre}}</h3>
            <div class="twoBtn">
                <a href="{{route('portfolioArticle.show', $portfolio->id)}}"><button class="btn btn-show">Show</button></a>
                <form method="post" action="{{route('portfolioArticle.destroy', $portfolio->id)}}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-delete" type="submit">Delete</button>
                </form>
            </div>
        </div>
    @endforeach
    </div>

    <div class="text-center">
        <a href={{route('portfolioArticle.create')}}><button class="btn btn-lightgreen">Ajouter un article portfolio</button></a>
        <a href="{{route('adminHome')}}"><button class="btn btn-retour">Retour à Admin</button></a>
    </div>

@endsection