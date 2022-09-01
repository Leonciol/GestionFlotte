@extends("layouts.app")
@section("title", "modifier un fournisseur")
@section("content")

	<h1>modifier un fournisseur</h1>
	<!-- Le formulaire est géré par la route "fournisseurs.update" -->
	<form method="post" action="{{ route('fournisseurs.update',$fournisseur->id) }}" enctype="multipart/form-data" >

		<!-- Le token CSRF -->
		@csrf
        @method('PUT')
		<input type="text" name="name" placeholder="name" value="{{$fournisseur->name}}">


		<input type="submit" name="valider" value="Valider" >

	</form>

@endsection
