@extends("layouts.app")
@section("title")
@section("content")

	<h1>Nom du conducteur: {{ $commande->user->firstname." ". $commande->user->lastname }}  </h1>
    <h1>Vehicule: {{$commande->vehicule->marque." ". $commande->vehicule->models. " numéro de série: ". $commande->vehicule->nb_serie}}</h1>

	<p><a href="{{ route('commandes.index') }}" title="Retourner a la liste des commandes" >Retourner à la liste des commandes</a></p>

@endsection
