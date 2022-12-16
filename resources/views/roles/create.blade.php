@extends("layouts.app")
@section("title", "Créer un role")
@section("content")

	<h1>Créer une role</h1>

	<!-- Le formulaire est géré par la route "roles.store" -->
	<form method="POST" action="{{ route('roles.store') }}" enctype="multipart/form-data" >

		<!-- Le token CSRF -->
		@csrf

		<input class="Table" type="text" name="label" placeholder="Nom du Role">

		<input class="b25" type="submit" name="valider" value="Valider" >

	</form>

@endsection
