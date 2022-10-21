<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Commande;
use App\Models\Vehicule;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commandes = Commande::latest()->get();

        // On transmet les USERS à la vue
    return view("commandes.index", compact("commandes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $vehicules = Vehicule::all();
        $keyUsers =["firstname", "lastname"];
        $keyVehicules =["models", "marque", "nb-serie"];
        return view("commandes.create",["vehicules"=>$vehicules, "users"=>$users, "keyUsers"=>$keyUsers, "keyVehicules"=>$keyVehicules]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $vehicule = Vehicule::where('statuses_id', '1')->where('id',  $request->vehicule_id)->first();
        $vehicule->update(['statuses_id'=> '2']);
        $commande = new Commande();
        $commande->user_id = $request->user_id;
        $commande->vehicule_id = $request->vehicule_id;
        $commande->save();

        return response()->redirectToRoute('commandes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Commande $commande)
    {
        return view("commandes.show", compact("commande"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Commande $commande)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commande $commande)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commande $commande)
    {
        $vehicule = Vehicule::where('id',  $commande->vehicule->id)->first();
        $vehicule->update(['statuses_id'=>'1']);
        // On les informations du $user de la table "users"
    $commande->delete();

    // Redirection route "users.index"
    return redirect(route('commandes.index'));
    }
}
