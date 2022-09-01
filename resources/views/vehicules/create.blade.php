@extends("layouts.app")
@section("title", "Créer un vehicule")
@section("content")

	<h1>Créer un vehicule</h1>

	<!-- Le formulaire est géré par la route "users.store" -->
	<form method="POST" action="{{ route('vehicules.store') }}" enctype="multipart/form-data" >

		<!-- Le token CSRF -->
		@csrf

		<input type="text" name="models" placeholder="models">
        <input type="text" name="marque" placeholder="marque">
        <input type="date" name="last_maintenance" placeholder="last_maintenance">
        <input type="text" name="nb_kilometrage" placeholder="nb_kilometrage">
        <input type="text" name="nb_serie" placeholder="nb_serie">
        <x-selectComponent name="status_id" placeholder="choisir un status" :values="$status" :keys="$keyStatus"/>
        <x-selectComponent name="fournisseur_id" placeholder="choisir un fournisseur" :values="$fournisseurs" :keys="$keyFournisseurs"/>

        <x-selectComponent name="user_id" placeholder="choisir un utilisateur" :values="$users" :keys="$keyUsers"/>

		<input type="submit" name="valider" value="Valider" >

	</form>

@endsection
