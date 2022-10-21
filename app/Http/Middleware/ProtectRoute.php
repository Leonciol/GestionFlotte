<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Route;

class ProtectRoute
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $roleAccess = [
            // ROLE ID = 1
            [
                'commandes.index',
                'commandes.show',
                'commandes.edit',
                'commandes.create',
                'commandes.destroy'
            ],
            // ROLE ID = 2
            [
                'fournisseurs.index',
                'fournisseurs.show',
                'fournisseurs.edit',
                'fournisseurs.create',
                'fournisseurs.destroy'
            ],
            // ROLE ID = 3
            [
                'agences.index',
                'agences.show',
                'agences.edit',
                'agences.create',
                'agences.destroy'
            ]
        ];

        $route = Route::current()->getName();
        $userRole = auth()->user()->roles_id;

        if(!in_array($route, $roleAccess[$userRole - 1])){
            return redirect()->route($this->redirectedByRole($userRole));
        }

        return $next($request);
    }

    public function redirectedByRole($roleId){
        dump($roleId);
        $redirected = null;
        switch($roleId){
            case 1:
                $redirected =  'commandes.index';
                break;
            case 2:
                $redirected =  'fournisseurs.index';
                break;
            case 3:
                $redirected =  'agences.index';
                break;
            case 4:
                $redirected =  'agences.index';
                break;
            case 5:
                $redirected =  'users.index';
                break;
            default:
                $redirected =  'users.index';
                break;
        }
        return $redirected;
    }
}
