@extends("layouts.app")
@section("title", "Créer un fournisseur")
@section("content")

	<h1>Créer un fournisseur</h1>

	<!-- Le formulaire est géré par la route "fournisseurs.store" -->
	<form method="POST" action="{{ route('fournisseurs.store') }}" enctype="multipart/form-data" >

		<!-- Le token CSRF -->
		@csrf

		<input class="Table" type="text" name="name" placeholder="Nom du Fournisseur">

		<input class="b25" type="submit" name="valider" value="Valider" >

	</form>

@endsection
