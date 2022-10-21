@extends("layouts.app")
@section("title", "modifier une agence")
@section("content")

	<h1>Modifier une agence</h1>
	<!-- Le formulaire est géré par la route "agences.update" -->
	<form method="post" action="{{ route('agences.update',$agence->id) }}" enctype="multipart/form-data" >

		<!-- Le token CSRF -->
		@csrf
        @method('PUT')
		<input type="text" name="name" placeholder="name" value="{{$agence->name}}">


		<input type="submit" name="valider" value="Valider" >

	</form>

@endsection
