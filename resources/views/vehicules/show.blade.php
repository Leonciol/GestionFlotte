@extends("layouts.app")
@section("title", $vehicule->marque)
@section("content")

	<h1>{{ $vehicule->marque }} {{ $vehicule->models }}</h1>


	<div><h1>Derniere maintenance: </h1>{{ $vehicule->last_maintenance }}</div>
    <div><h1>Numéro de serie: </h1>{{ $vehicule->nb_serie }}</div>
    <div><h1>nombre de kilomètre: </h1>{{ $vehicule->nb_kilometrage }}</div>
    <div><h1>status: {{ $vehicule->status->label }}</h1></div>
    @if($vehicule->user)
        <div><h1>Conducteur: {{ $vehicule->user->firstname ." ". $vehicule->user->lastname }}</h1></div>
        @endif



	<p><a href="{{ route('vehicules.index') }}" title="Retourner a la liste des vehicules" >Retourner a la liste des vehicules</a></p>

@endsection
