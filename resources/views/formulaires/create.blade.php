@extends('pages.template')
@section('title')
Formulaire
@endsection

@section('title_page')
<div class="title m-b-md">Formulaire - Create</div>
@endsection


@section('contenu')
	<h2>Ajouter une boisson</h2>
	<form class="" action="/store" method="post">
        {{ csrf_field() }}
        <div class="form-group">
                <label for="name">Nom de la boisson</label>
                <input type="text" class="form-control" name="name" placeholder="Drink name">
        </div>
        <div class="form-group">
            <label for="price">Prix</label>
            <input type="number" class="form-control" name="price" placeholder="Drink price">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
