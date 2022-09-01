@extends("layouts.app")
@section("title", $agence->name)
@section("content")

	<h1>{{ $agence->name }} </h1>

	<p><a href="{{ route('agences.index') }}" title="Retourner a la liste des agences" >Retourner à la liste des agences</a></p>

@endsection
