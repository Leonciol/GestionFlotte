@extends("layouts.app")
@section("title", "modifier un role")
@section("content")

	<h1>modifier un role</h1>
	<!-- Le formulaire est géré par la route "roles.update" -->
	<form method="post" action="{{ route('roles.update',$role->id) }}" enctype="multipart/form-data" >

		<!-- Le token CSRF -->
		@csrf
        @method('PUT')
		<input type="text" name="label" placeholder="name" value="{{$role->name}}">


		<input type="submit" name="valider" value="Valider" >

	</form>

@endsection
