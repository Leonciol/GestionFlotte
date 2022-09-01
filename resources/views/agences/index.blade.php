@extends("layouts.app")
@section("title", "Tous les agences")
@section("content")

    <div class="mt-3 space-y-1">
        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-responsive-nav-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Déconnexion') }}
            </x-responsive-nav-link>
        </form>
    </div>

	<h1>Toutes les agences</h1>

	<p>
		<!-- Lien pour créer un nouvel article : "posts.create" -->
		<a href="{{ route('agences.create') }}" title="Créer un article" >Créer une nouvelle agence</a>
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
			@foreach ($agences as $agence)
			<tr>
				<td>
					<!-- Lien pour afficher un Post : "posts.show" -->
					<a href="{{ route('agences.show', $agence) }}" title="Lire l'article" >{{ $agence->name }}</a>
				</td>
				<td>
					<!-- Lien pour modifier un agence : "agences.edit" -->
					<a href="{{ route('agences.edit', $agence) }}" title="Modifier l'article" >Modifier</a>
				</td>
				<td>
					<!-- Formulaire pour supprimer un agence : "agences.destroy" -->
					<form method="POST" action="{{ route('agences.destroy', $agence) }}" >
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
