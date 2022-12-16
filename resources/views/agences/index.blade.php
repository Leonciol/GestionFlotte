@extends("layouts.app")
@section("title", "Toutes les agences")
@section("content")


	<h1>Toutes les agences</h1>

	<p>
		<!-- Lien pour créer un nouvel article : "posts.create" -->
		<a href="{{ route('agences.create') }}" title="Créer une agence" >Créer une nouvelle agence</a>
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
			@foreach ($agences as $agence)
			<tr>
				<td>
					<!-- Lien pour afficher un Post : "posts.show" -->
					<a href="{{ route('agences.show', $agence) }}" title="Voir l'agence" >{{ $agence->name }}</a>
				</td>
				<td>
					<!-- Lien pour modifier un agence : "agences.edit" -->
					<a href="{{ route('agences.edit', $agence) }}" title="Modifier l'agence" >Modifier</a>
				</td>
				<td>
					<!-- Formulaire pour supprimer un agence : "agences.destroy" -->
					<form method="POST" action="{{ route('agences.destroy', $agence) }}" >
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
