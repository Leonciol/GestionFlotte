@extends("layouts.app")
@section("title", "Créer un user")
@section("content")

	<h1>Créer un utilisateur</h1>

	<!-- Le formulaire est géré par la route "users.store" -->
	<form method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data" >

		<!-- Le token CSRF -->
		@csrf

		<input type="text" name="lastname" placeholder="lastname">
        <input type="text" name="firstname" placeholder="firstname">
        <input type="email" name="email" placeholder="email">
        <x-selectComponent name="roles_id" placeholder="choisir un role" :values="$roles" :keys="$keyRoles"/>
        <x-selectComponent name="agences_id" placeholder="choisir une agence" :values="$agences" :keys="$keyAgences"/>




		<input type="submit" name="valider" value="Valider" >

	</form>

@endsection
