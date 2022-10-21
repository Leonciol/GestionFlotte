@extends("layouts.app")
@section("title", "Créer une commande")
@section("content")

	<h1>Créer une commande</h1>

	<!-- Le formulaire est géré par la route "commandes.store" -->
	<form method="POST" action="{{ route('commandes.store') }}" enctype="multipart/form-data" >

		<!-- Le token CSRF -->
		@csrf

        <x-selectComponent name="user_id" placeholder="choisir un utilisateur" :default="null" :values="$users" :keys="$keyUsers"/>
        <div>
    <select name="vehicule_id">
        <option value="" disabled selected >choisir un vehicule </option>

    @foreach ($vehicules as $v )
    @if ($v->statuses_id ==1)
        <option value="{{$v->id}}">{{$v->marque}} {{$v->models}}
        </option>
    @endif
    @endforeach
</select>
</div>


		<input type="submit" name="valider" value="Valider" >

	</form>

@endsection
