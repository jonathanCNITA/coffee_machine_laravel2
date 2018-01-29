@extends('pages.template')
@section('title')
Liste boissons
@endsection

@section('title_page')
<div class="title m-b-md">Liste boissons</div>
@endsection


@section('contenu')

	<h1>Liste des boissons disponibles</h1>
	<a href="{{ route('boissonsParPrix') }}">trier par prix</a><br/>
	<a href="{{ route('boissonsParNom') }}">trier par nom</a>
	<table>
		<tr>
			<th>Nom boisson</th>
			<th>prix</th>
			<th>select</th>
			<th>edit</th>
			<th>supprimer</th>
		</tr>
		@foreach($boissons as $k)
		<tr>
			<td>{{ $k->nom }}</td>
			<td>{{ $k->prix }}</td>
			<td><a href="{{ route('ficheBoisson', [$k->id]) }}">select</a></td>
			<td><a href="{{ route('edit', [$k->id]) }}">edit</a></td>
			<td><a href="{{ route('delete', [$k->id]) }}">delete</a></td>
		</tr>
		@endforeach
	</table>
	<br/>
	<a href="boissons/create" type="button" class="btn btn-primary">Ajouter une boisson </a>

@endsection