@extends("layouts.app")
@section("title", "modifier un utilisateur")
@section("content")

	<h1>modifier un utilisateur</h1>
	<!-- Le formulaire est géré par la route "users.update" -->
	<form method="post" action="{{ route('users.update',$user->id) }}" enctype="multipart/form-data" >

		<!-- Le token CSRF -->
		@csrf
        @method('PUT')
		<input type="text" name="lastname" placeholder="lastname" value="{{$user->lastname}}">
        <input type="text" name="firstname" placeholder="firstname" value="{{$user->firstname}}">
        <input type="email" name="email" placeholder="email" value="{{$user->email}}">
        <x-selectComponent name="roles_id" placeholder="choisir un role" :values="$roles" :keys="$keyRoles"/>
        <x-selectComponent name="agences_id" placeholder="choisir une agence" :values="$agences" :keys="$keyAgences"/>

		<input type="submit" name="valider" value="Valider" >

	</form>

@endsection
