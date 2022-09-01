@extends("layouts.app")
@section("title", "modifier un vehicule")
@section("content")

	<h1>modifier un utilisateur</h1>
	<!-- Le formulaire est géré par la route "users.update" -->
	<form method="post" action="{{ route('vehicules.update',$vehicule->id) }}" enctype="multipart/form-data" >

		<!-- Le token CSRF -->
		@csrf
        @method('PUT')
		<input type="date" name="last_maintenance" placeholder="last_maintenance" value="{{$vehicule->last_maintenance}}">
        <input type="text" name="nb_kilometrage" placeholder="nb_kilometrage" value="{{$vehicule->nb_kilometrage}}">
        <input type="text" name="user_id" placeholder="user_id" value="{{$vehicule->user_id}}">
        <input type="text" name="status_id" placeholder="status_id" value="{{$vehicule->status_id}}">



		<input type="submit" name="valider" value="Valider" >

	</form>

@endsection
