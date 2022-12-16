@extends("layouts.app")
@section("title", $user->firstname)
@section("content")

	<h1>{{ $user->firstname }} {{ $user->lastname }}</h1>

	<div class="Table" style= "display: flex; align-items: center"><h2>email:</h2><div>{{ $user->email }}</div></div>
    <div class="Table" style= "display: flex; align-items: center"><h2>Role:</h2><div>{{ $user->role->label }}</div></div>
	<div class="Table" style= "display: flex; align-items: center"><h2>Agence:</h2><div>{{ $user->agence->name }}</div></div>

	<p><a href="{{ route('users.index') }}" title="Retourner a la liste des utilisateur" >Retourner à la liste des utilisateur</a></p>

@endsection
