<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNav">
        <div class="space">

        
    <ul class="navbar-nav">
        
    @if ($user->roles_id ==1)
            <a class="nav-link" href="{{ route('commandes.index') }}">commandes</a>
    @endif
    @if ($user->roles_id ==2)
            <a class="nav-link" href="{{ route('vehicules.index') }}">vehicules</a>
            <a class="nav-link" href="{{ route('fournisseurs.index') }}">fournisseurs</a>
    @endif
    @if ($user->roles_id ==3)
        <a class="nav-link" href="{{ route('vehicules.index') }}">vehicules</a>
        <a class="nav-link" href="{{ route('agences.index') }}">agences</a>
    @endif
    @if ($user->roles_id ==4)
        <a class="nav-link" href="{{ route('agences.index') }}">agences</a>
    @endif

    @if ($user->roles_id == 5)
        <a class="nav-link" href="{{ route('users.index') }}">utilisateurs</a>
    @endif

    @if ($user ->roles_id == 6)
        <a class="nav-link" href="{{ route('commandes.index') }}">Commandes</a>
        <a class="nav-link" href="{{ route('vehicules.index') }}">Vehicules</a>
        <a class="nav-link" href="{{ route('agences.index') }}">Agences</a>
        <a class="nav-link" href="{{ route('fournisseurs.index') }}">Fournisseurs</a>
        <a class="nav-link" href="{{ route('users.index') }}">Utilisateurs</a>
        <a class="nav-link" href="{{ route('roles.index') }}">Roles</a>
        <a class="nav-link" href="{{ route('status.index') }}">Status</a>
    @endif



    <div class="mt-3 space-y-1">
        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-responsive-nav-link :href="route('logout') " class="nav-link"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Déconnexion') }}
            </x-responsive-nav-link>
        </form>
    </div>
</ul>
</div>
</div>
</div>
</nav>
