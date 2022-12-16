@extends("layouts.app")
@section("title", "Tous les fournisseurs")
@section("content")


	<h1>Tous les fournisseurs</h1>

	<p>
		<!-- Lien pour créer un nouvel article : "posts.create" -->
		<a href="{{ route('fournisseurs.create') }}" title="Créer un article" >Créer un nouveau fournisseur</a>
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
			@foreach ($fournisseurs as $fournisseur)
			<tr>
				<td>
					<!-- Lien pour afficher un Post : "posts.show" -->
					<a href="{{ route('fournisseurs.show', $fournisseur) }}" title="Voir le Fournisseur" >{{ $fournisseur->name }}</a>
				</td>
				<td>
					<!-- Lien pour modifier un fournisseur : "fournisseurs.edit" -->
					<a href="{{ route('fournisseurs.edit', $fournisseur) }}" title="Modifier le Fournisseur" >Modifier</a>
				</td>
				<td>
					<!-- Formulaire pour supprimer un fournisseur : "fournisseurs.destroy" -->
					<form method="POST" action="{{ route('fournisseurs.destroy', $fournisseur) }}" >
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
