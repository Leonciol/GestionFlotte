@extends("layouts.app")
@section("title", "Créer un user")
@section("content")

	<h1>Créer un utilisateur</h1>

	<!-- Le formulaire est géré par la route "users.store" -->
	<form method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data" >

		<!-- Le token CSRF -->
		@csrf

		<input type="text" name="lastname" placeholder="Nom..">
        <input type="text" name="firstname" placeholder="Prénom..">
        <input type="email" name="email" placeholder="Email..">
        <x-selectComponent name="roles_id" placeholder="Choisir un Role" :default="null" :values="$roles" :keys="$keyRoles"/>
        <x-selectComponent name="agences_id" placeholder="Choisir une Agence"  :default="null" :values="$agences" :keys="$keyAgences"/>

		<input type="submit" name="valider" value="Valider" >

	</form>

@endsection
