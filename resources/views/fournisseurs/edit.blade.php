@extends("layouts.app")
@section("title", "Modifier un fournisseur")
@section("content")

	<h1>Modifier un Fournisseur</h1>
	<!-- Le formulaire est géré par la route "fournisseurs.update" -->
	<form method="post" action="{{ route('fournisseurs.update',$fournisseur->id) }}" enctype="multipart/form-data" >

		<!-- Le token CSRF -->
		@csrf
        @method('PUT')
		<input class="Table" type="text" name="name" placeholder="name" value="{{$fournisseur->name}}">


		<input class="b25" type="submit" name="valider" value="Valider" >

	</form>

@endsection
