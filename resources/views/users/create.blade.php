@extends("layouts.app")
@section("title", "Créer un user")
@section("content")

	<h1>Créer un utilisateur</h1>

	<!-- Le formulaire est géré par la route "users.store" -->
	<table class="cinereousTable">
	<form method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data" >

		<!-- Le token CSRF -->
		@csrf

		<input class="Table" type="text" class="form__field" name="lastname" placeholder="Nom..">
        <input class="Table" type="text" class="form__field" name="firstname" placeholder="Prénom..">
        <input class="Table" type="email" class="form__field" name="email" placeholder="Email..">
        <x-selectComponent name="roles_id" placeholder="Choisir un Role" :default="null" :values="$roles" :keys="$keyRoles"/>
        <x-selectComponent name="agences_id" placeholder="Choisir une Agence"  :default="null" :values="$agences" :keys="$keyAgences"/>

		<input class="b25" type="submit" name="valider" value="Valider" >

	</form>
	</table>

@endsection
