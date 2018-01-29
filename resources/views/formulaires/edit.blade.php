@extends('pages.template')
@section('title')
Formulaire d'édition 
@endsection

@section('title_page')
<div class="title m-b-md">Formulaire - Edit</div>
@endsection


@section('contenu')
	<h2>Editer une boisson</h2>
	<form class="" action="/boissons/update/{{ $boisson->id }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
                <label for="name">Nom de la boisson</label>
                <input type="text" class="form-control" name="name"  value={{ $boisson->nom }}>
        </div>
        <div class="form-group">
            <label for="price">Prix</label>
            <input type="number" class="form-control" name="price"  value={{ $boisson->prix }}>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
