@extends("layouts.app")
@section("title", "Tous les status ")
@section("content")

	<h1>Tous les status</h1>

	<p>
		<!-- Lien pour créer un nouvel article : "posts.create" -->
		<a href="{{ route('status.create') }}" title="Créer un status" >Créer un nouveau status</a>
	</p>

	<!-- Le tableau pour lister les articles/posts -->
	<table class="cinereousTable" >
		<thead>
			<tr>
				<th>Nom</th>
				<th colspan="2" >Opérations</th>
			</tr>
		</thead>
		<tbody>
			<!-- On parcourt la collection de Post -->
			@foreach ($statuses as $status)
			<tr>
				<td>
					<!-- Lien pour afficher un Post : "posts.show" -->
					<a href="{{ route('status.show', $status) }}" title="Lire l'article" >{{ $status->label }} </a>
				</td>
				<td>
					<!-- Lien pour modifier un status : "status.edit" -->
					<a href="{{ route('status.edit', $status) }}" title="Modifier l'article" >Modifier</a>
				</td>
				<td>
					<!-- Formulaire pour supprimer un status : "status.destroy" -->
					<form method="POST" action="{{ route('status.destroy', $status) }}" >
						<!-- CSRF token -->
                            @csrf
                            <!-- <input type="hidden" name="_method" value="DELETE"> -->
						@method("DELETE")
						<input class="button-24" type="submit" value="x Supprimer" >
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

@endsection
