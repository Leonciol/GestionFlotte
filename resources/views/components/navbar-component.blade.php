    <div>

    @if ($user->roles_id ==1)
        <a href="{{ route('commandes.index') }}">commandes</a>
    @endif
    @if ($user->roles_id ==2)
        <a href="{{ route('vehicules.index') }}">vehicules</a>
        <a href="{{ route('fournisseurs.index') }}">fournisseurs</a>

    @endif
    @if ($user->roles_id ==3)
        <a href="{{ route('vehicules.index') }}">vehicules</a>
        <a href="{{ route('agences.index') }}">agences</a>
    @endif
    @if ($user->roles_id ==4)
        <a href="{{ route('agences.index') }}">agences</a>
    @endif

    @if ($user->roles_id == 5)
        <a href="{{ route('users.index') }}">utilisateurs</a>
    @endif

    @if ($user ->roles_id == 6)
        <a href="{{ route('commandes.index') }}">commandes</a>
        <a href="{{ route('vehicules.index') }}">vehicules</a>
        <a href="{{ route('agences.index') }}">agences</a>
        <a href="{{ route('fournisseurs.index') }}">fournisseurs</a>
        <a href="{{ route('users.index') }}">utilisateurs</a>
        <a href="{{ route('roles.index') }}">roles</a>
        <a href="{{ route('status.index') }}">status</a>
    @endif



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

</div>
