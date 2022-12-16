@extends("layouts.app")
@section("title", "modifier un Status")
@section("content")

	<h1>modifier un utilisateur</h1>
	<!-- Le formulaire est géré par la route "users.update" -->
	<form method="post" action="{{ route('status.update',$status->id) }}" enctype="multipart/form-data" >

		<!-- Le token CSRF -->
		@csrf
        @method('PUT')

        <input class="Table" type="text" name="label"  value="{{$status->label}}">

		<input class="b25" type="submit" name="valider" value="Valider" >

	</form>

@endsection
