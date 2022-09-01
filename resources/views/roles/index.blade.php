@extends("layouts.app")
@section("title", "Tous les roles")
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

	<h1>Tous les roles</h1>

	<p>
		<!-- Lien pour créer un nouvel article : "posts.create" -->
		<a href="{{ route('roles.create') }}" title="Créer un article" >Créer une nouvelle role</a>
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
			@foreach ($roles as $role)
			<tr>
				<td>
					<!-- Lien pour afficher un Post : "posts.show" -->
					<a href="{{ route('roles.show', $role) }}" title="Lire l'article" >{{ $role->label }}</a>
				</td>
				<td>
					<!-- Lien pour modifier un role : "roles.edit" -->
					<a href="{{ route('roles.edit', $role) }}" title="Modifier l'article" >Modifier</a>
				</td>
				<td>
					<!-- Formulaire pour supprimer un role : "roles.destroy" -->
					<form method="POST" action="{{ route('roles.destroy', $role) }}" >
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
