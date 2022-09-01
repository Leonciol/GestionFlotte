@extends("layouts.app")
@section("title", $role->label)
@section("content")

	<h1>{{ $role->label }} </h1>

	<p><a href="{{ route('roles.index') }}" title="Retourner a la liste des roles" >Retourner à la liste des roles</a></p>

@endsection
