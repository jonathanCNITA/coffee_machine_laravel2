@extends('pages.template')
@section('title')
Info boissons
@endsection

@section('title_page')
<div class="title m-b-md">Info boissons</div>
@endsection


@section('contenu')
	<h2>Boisson : {{$boisson->nom}}</h2>
	<h3>Prix : {{$boisson->prix}} ¥</h3>
	<h3>Code : {{$boisson->code}}</h3>
	<h3>Id : {{$boisson->id}}</h3>
@endsection