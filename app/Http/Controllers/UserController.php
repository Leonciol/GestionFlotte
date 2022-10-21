<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Agence;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
        {
        //  return (var_dump(auth()->user()->roles_id));
        switch(auth()->user()->roles_id){
            case 1: return redirect(route('commandes.index'));
            break;
            case 2: return redirect(route('fournisseurs.index'));
            break;
            case 3: return redirect(route('agences.index'));
            break;
            case 4: return redirect(route('agences.index'));
            break;

        }
        //On récupère tous les Post
    $users = User::latest()->get();

    // On transmet les USERS à la vue
    return view("users.index", compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $agences = Agence::all();
        $roles = Role::all();
        $keyAgences=["name"];
        $keyRoles=["label"];
        return view("users.create",["agences"=>$agences, "roles"=>$roles, "keyRoles"=>$keyRoles, "keyAgences"=>$keyAgences]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = new User();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        // $user->password = Hash::make(STR::random(8));
        $user->password = "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi";
        $user->roles_id = $request->roles_id;
        $user->agences_id = $request->agences_id;

        $user->save();

        return response()->redirectToRoute('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user) {
        return view("users.show", compact("user"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $agences = Agence::all();
        $roles = Role::all();
        $keyAgences=["name"];
        $keyRoles=["label"];
        return view("users.edit", compact("user"), ["agences"=>$agences, "roles"=>$roles, "keyRoles"=>$keyRoles, "keyAgences"=>$keyAgences]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

    // 3. On met à jour les informations du User
    $user->update([
        "lastname" =>$request->lastname,
        "firstname" => $request->firstname,
        "email"=> $request->email,
        "roles_id"=> $request->roles_id,
        "agences_id"=> $request->agences_id,

    ]);

    // 4. On affiche le Post modifié : route("posts.show")
    return redirect(route("users.show", $user));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {

    // On les informations du $user de la table "users"
    $user->delete();

    // Redirection route "users.index"
    return redirect(route('users.index'));
    }
}
