<?php

namespace App\Http\Controllers;

use App\Models\Agence;
use Illuminate\Http\Request;

class AgenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //On récupère tous les fournisseurs
    $agences = Agence::latest()->get();

    // On transmet les fournisseurs à la vue
    return view("agences.index", compact("agences"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("agences.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $agence = new Agence();
        $agence->name = $request->name;
        $agence->save();

        return response()->redirectToRoute('agences.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Agence $agence)
    {
        return view("agences.show", compact("agence"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Agence $agence)
    {
        return view("agences.edit", compact("agence"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Agence $agence)
    {
        $agence->update([
            "name" => $request->name,

        ]);

        // 4. On affiche le Post modifié : route("posts.show")
        return redirect(route("agences.show", $agence));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agence $agence)
    {
        // On les informations du $user de la table "users"
    $agence->delete();

    // Redirection route "users.index"
    return redirect(route('agences.index'));
    }
}
