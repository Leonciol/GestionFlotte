@extends("layouts.app")
@section("title", $fournisseur->name)
@section("content")

	<h1>{{ $fournisseur->name }} </h1>

	<p><a href="{{ route('fournisseurs.index') }}" title="Retourner a la liste des fournisseurs" >Retourner à la liste des fournisseurs</a></p>

@endsection
