@extends("layouts.app")
@section("title", "Créer une agence")
@section("content")

	<h1>Créer une agence</h1>

	<!-- Le formulaire est géré par la route "roles.store" -->
	<form method="POST" action="{{ route('agences.store') }}" enctype="multipart/form-data" >

		<!-- Le token CSRF -->
		@csrf

		<input class="Table" type="text" name="name" placeholder="Nom de l'Agence">

		<input class="b25" type="submit" name="valider" value="Valider" >

	</form>

@endsection
