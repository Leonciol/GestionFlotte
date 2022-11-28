@extends("layouts.app")
@section("title", "Tous les vehicules ")
@section("content")


	<h1>Tous les vehicules</h1>

	<p>
		<!-- Lien pour créer un nouvel article : "posts.create" -->
		<a href="{{ route('vehicules.create') }}" title="Créer un vehicules" >Créer un nouveau vehicule</a>
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
			@foreach ($vehicules as $vehicule)
			<tr>
				<td>
					<!-- Lien pour afficher un Post : "posts.show" -->
					<a href="{{ route('vehicules.show', $vehicule) }}" title="Lire l'article" >{{ $vehicule->marque }} {{$vehicule->models }}</a>
				</td>
				<td>
					<!-- Lien pour modifier un vehicule : "vehicules.edit" -->
					<a href="{{ route('vehicules.edit', $vehicule) }}" title="Modifier l'article" >Modifier</a>
				</td>
				<td>
					<!-- Formulaire pour supprimer un vehicule : "vehicules.destroy" -->
					<form method="POST" action="{{ route('vehicules.destroy', $vehicule) }}" >
						<!-- CSRF token -->
                            @csrf
                            <!-- <input type="hidden" name="_method" value="DELETE"> -->
						@method("DELETE")
						<input type="submit" value="x Supprimer" >
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

@endsection
