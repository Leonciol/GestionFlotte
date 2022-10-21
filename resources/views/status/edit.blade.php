@extends("layouts.app")
@section("title", "modifier un Status")
@section("content")

	<h1>modifier un utilisateur</h1>
	<!-- Le formulaire est géré par la route "users.update" -->
	<form method="post" action="{{ route('status.update',$status->id) }}" enctype="multipart/form-data" >

		<!-- Le token CSRF -->
		@csrf
        @method('PUT')

        <input type="text" name="label"  value="{{$status->label}}">

		<input type="submit" name="valider" value="Valider" >

	</form>

@endsection
