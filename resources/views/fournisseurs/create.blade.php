@extends("layouts.app")
@section("title", "Créer un fournisseur")
@section("content")

	<h1>Créer un utilisateur</h1>

	<!-- Le formulaire est géré par la route "fournisseurs.store" -->
	<form method="POST" action="{{ route('fournisseurs.store') }}" enctype="multipart/form-data" >

		<!-- Le token CSRF -->
		@csrf

		<input type="text" name="name" placeholder="nom du fournisseur">

		<input type="submit" name="valider" value="Valider" >

	</form>

@endsection