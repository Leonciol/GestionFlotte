@extends("layouts.app")
@section("title", "modifier un vehicule")
@section("content")

	<h1>modifier un vehicule</h1>
	<!-- Le formulaire est géré par la route "users.update" -->
	<form method="post" action="{{ route('vehicules.update',$vehicule->id) }}" enctype="multipart/form-data" >

		<!-- Le token CSRF -->
		@csrf
        @method('PUT')
        <div style="display:flex; align-items:center;">
            <p>Dernière maintenance: </p>
		<input type="date" name="last_maintenance" placeholder="last_maintenance" value="{{$vehicule->last_maintenance}}">
        <p>Nombre de kilomètre: </p>
        <input type="text" name="nb_kilometrage" placeholder="nb_kilometrage" value="{{$vehicule->nb_kilometrage}}">
        <x-selectComponent name="status_id" placeholder="choisir un status" :values="$status" :keys="$keyStatus"/>
        <x-selectComponent name="user_id" placeholder="choisir un utilisateur" :values="$users" :keys="$keyUsers"/>
        </div>




		<input type="submit" name="valider" value="Valider" >

	</form>

@endsection
