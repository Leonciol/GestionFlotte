@extends("layouts.app")
@section("title", "Créer un agence")
@section("content")

	<h1>Créer une agence</h1>

	<!-- Le formulaire est géré par la route "roles.store" -->
	<form method="POST" action="{{ route('agences.store') }}" enctype="multipart/form-data" >

		<!-- Le token CSRF -->
		@csrf

		<input type="text" name="name" placeholder="nom du agence">

		<input type="submit" name="valider" value="Valider" >

	</form>

@endsection
