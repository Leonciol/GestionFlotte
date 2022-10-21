@extends("layouts.app")
@section("title", $status->label)
@section("content")



	<div><h1>Status: </h1>{{ $status->label }}</div>


	<p><a href="{{ route('status.index') }}" title="Retourner a la liste des status" >Retourner a la liste des status</a></p>

@endsection
