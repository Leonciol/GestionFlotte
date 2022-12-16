@extends("layouts.app")
@section("title", "modifier un utilisateur")
@section("content")

	<h1>modifier un utilisateur</h1>
	<!-- Le formulaire est géré par la route "users.update" -->
	<form method="post" action="{{ route('users.update',$user->id) }}" enctype="multipart/form-data" >

		<!-- Le token CSRF -->
		@csrf
        @method('PUT')
		<input class="Table" type="text" name="lastname" placeholder="lastname" value="{{$user->lastname}}">
        <input class="Table" type="text" name="firstname" placeholder="firstname" value="{{$user->firstname}}">
        <input class="Table" type="email" name="email" placeholder="email" value="{{$user->email}}">
        <x-selectComponent name="roles_id" placeholder="Choisir un Role" :default="$user->roles_id" :values="$roles" :keys="$keyRoles"/>
        <x-selectComponent name="agences_id" placeholder="Choisir une Agence" :default="$user->agences_id" :values="$agences" :keys="$keyAgences"/>

		<input class="b25" type="submit" name="valider" value="Valider" >

	</form>

@endsection
