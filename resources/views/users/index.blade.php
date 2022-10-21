@extends("layouts.app")
@section("title", "Tous les utilisateurs")
@section("content")


	<h1>Tous les utilisateurs</h1>

	<p>
		<!-- Lien pour créer un nouvel article : "posts.create" -->
		<a href="{{ route('users.create') }}" title="Créer un article" >Créer un nouveau utilisateurs</a>
	</p>

	<!-- Le tableau pour lister les articles/posts -->
	<table border="1" >
		<thead>
			<tr>
				<th>Nom</th>
				<th colspan="2" >Opérations</th>
			</tr>
		</thead>
		<tbody>
			<!-- On parcourt la collection de Post -->
			@foreach ($users as $user)
			<tr>
				<td>
					<!-- Lien pour afficher un Post : "posts.show" -->
					<a href="{{ route('users.show', $user) }}" title="Lire l'article" >{{ $user->firstname }} {{$user->lastname }}</a>
				</td>
				<td>
					<!-- Lien pour modifier un user : "users.edit" -->
					<a href="{{ route('users.edit', $user) }}" title="Modifier l'article" >Modifier</a>
				</td>
				<td>
					<!-- Formulaire pour supprimer un user : "users.destroy" -->
					<form method="POST" action="{{ route('users.destroy', $user) }}" >
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
