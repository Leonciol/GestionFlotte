<?php

namespace App\Http\Controllers;

use App\Models\Fournisseur;
use Illuminate\Http\Request;

class FournisseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //On récupère tous les fournisseurs
    $fournisseurs = Fournisseur::latest()->get();

    // On transmet les fournisseurs à la vue
    return view("fournisseurs.index", compact("fournisseurs"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("fournisseurs.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fournisseur = new Fournisseur();
        $fournisseur->name = $request->name;
        $fournisseur->save();

        return response()->redirectToRoute('fournisseurs.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Fournisseur $fournisseur)
    {
        return view("fournisseurs.show", compact("fournisseur"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Fournisseur $fournisseur)
    {
        return view("fournisseurs.edit", compact("fournisseur"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fournisseur $fournisseur)
    {
        $fournisseur->update([
            "name" => $request->name,

        ]);

        // 4. On affiche le Post modifié : route("posts.show")
        return redirect(route("fournisseurs.show", $fournisseur));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fournisseur $fournisseur)
    {
        // On les informations du $user de la table "users"
    $fournisseur->delete();

    // Redirection route "users.index"
    return redirect(route('fournisseurs.index'));
    }
}
