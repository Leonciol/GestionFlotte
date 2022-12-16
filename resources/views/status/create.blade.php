@extends("layouts.app")
@section("title", "Créer un status véhicule")
@section("content")

	<h1>Créer un status véhicule</h1>

	<!-- Le formulaire est géré par la route "users.store" -->
	<form method="POST" action="{{ route('status.store') }}" enctype="multipart/form-data" >

		<!-- Le token CSRF -->
		@csrf

		<input class="Table" type="text" name="label" placeholder="Status..">

		<input class="b25"type="submit" name="valider" value="Valider" >

	</form>

@endsection
