<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\Agence;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Sequence;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $agence = Agence::factory(10)->create();
        $role = Role::factory()
                ->count(6)
                ->state(new Sequence(
                    ['label' => 'Gestionnaire de commandes'],
                    ['label' => 'Gestionnaire des Fournisseurs'],
                    ['label' => 'Gestionnaire d\'agences'],
                    ['label' => 'Chef d\'agences'],
                    ['label' => 'RH'],
                    ['label' => 'Administration'],


                ))->create();
        $user = User::factory(10)->create();

    }
}
