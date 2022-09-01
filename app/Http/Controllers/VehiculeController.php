<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Vehicule;
use App\Models\Fournisseur;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class VehiculeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //On récupère tous les Post
    $vehicules = Vehicule::latest()->get();

    // On transmet les USERS à la vue
    return view("vehicules.index", compact("vehicules"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $keyUsers=["firstname", "lastname"];
        $keyStatus=["label"];
        $keyFournisseurs=["name"];
        $fournisseurs = Fournisseur::all();
        $status = Status::all();
        $users = User::all();
        return view("vehicules.create",["users"=>$users, "status"=>$status,"fournisseurs"=>$fournisseurs, "keyFournisseurs"=>$keyFournisseurs, "keyStatus"=>$keyStatus, "keyUsers"=>$keyUsers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vehicule = new Vehicule();
        $vehicule->models = $request->models;
        $vehicule->marque = $request->marque;
        $vehicule->last_maintenance = $request->last_maintenance;
        $vehicule->nb_kilometrage = $request->nb_kilometrage;
        $vehicule->nb_serie = $request->nb_serie;
        $vehicule->user_id = $request->user_id;
        $vehicule->statuses_id = $request->status_id;
        $vehicule->fournisseurs_id = $request->fournisseurs_id;

        $vehicule->save();

        return response()->redirectToRoute('vehicules.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicule $vehicule)
    {

        return view("vehicules.show", compact("vehicule"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicule $vehicule)
    {
        $status = Status::all();
        $users = User::all();
        $keyUsers=["firstname", "lastname"];
        $keyStatus=["label"];
        return view("vehicules.edit", compact("vehicule"), ["users"=>$users, "status"=>$status, "keyStatus"=>$keyStatus, "keyUsers"=>$keyUsers]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicule $vehicule)
    {

    // 3. On met à jour les informations du User
    $vehicule->update([
        "last_maintenance" =>$request->last_maintenance,
        "nb_kilometrage" => $request->nb_kilometrage,
        "user_id" => $request->user_id,
        "statuses_id" => $request->status_id,


    ]);

    // 4. On affiche le Post modifié : route("posts.show")
    return redirect(route("vehicules.show", $vehicule));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicule $vehicule)
    {
        // On les informations du $user de la table "users"
    $vehicule->delete();

    // Redirection route "users.index"
    return redirect(route('vehicules.index'));
    }
}
