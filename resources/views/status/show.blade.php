@extends("layouts.app")
@section("title", $vehicule->marque)
@section("content")

	<h1>{{ $vehicule->marque }} {{ $vehicule->models }}</h1>


	<div><h1>Derniere maintenance: </h1>{{ $vehicule->last_maintenance }}</div>
    <div><h1>Numéro de serie: </h1>{{ $vehicule->nb_serie }}</div>
    <div><h1>nombre de kilomètre: </h1>{{ $vehicule->nb_kilometrage }}</div>

	<p><a href="{{ route('vehicules.index') }}" title="Retourner a la liste des vehicules" >Retourner a la liste des vehicules</a></p>

@endsection
