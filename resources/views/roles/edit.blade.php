@extends("layouts.app")
@section("title", "Modifier un role")
@section("content")

	<h1>Modifier un Role</h1>
	<!-- Le formulaire est géré par la route "roles.update" -->
	<form method="post" action="{{ route('roles.update',$role->id) }}" enctype="multipart/form-data" >

		<!-- Le token CSRF -->
		@csrf
        @method('PUT')
		<input class="Table" type="text" name="label" placeholder="Role.." value="{{$role->name}}">


		<input class="b25" type="submit" name="valider" value="Valider" >

	</form>

@endsection
