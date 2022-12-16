@extends("layouts.app")
@section("title", "Toutes les commandes")
@section("content")


	<h1>Toutes les commandes</h1>

	<p>
		<!-- Lien pour créer un nouvel article : "posts.create" -->
		<a href="{{ route('commandes.create') }}" title="Créer un article" >Créer une nouvelle commande</a>
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
			@foreach ($commandes as $commande)
			<tr>
				<td>
					<!-- Lien pour afficher un Post : "posts.show" -->
					<a href="{{ route('commandes.show', $commande) }}" title="Voir le commande" >{{ $commande->id }}</a>
				</td>
				<td>
					<!-- Formulaire pour supprimer un commande : "commandes.destroy" -->
					<form method="POST" action="{{ route('commandes.destroy', $commande) }}" >
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
