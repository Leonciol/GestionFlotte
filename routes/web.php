<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AgenceController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\VehiculeController;
use App\Http\Controllers\FournisseurController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource("users", UserController::class)->middleware(['auth']);
Route::resource("agences", AgenceController::class)->middleware(['auth']);
Route::resource("fournisseurs", FournisseurController::class)->middleware(['auth']);
Route::resource("roles", RoleController::class)->middleware(['auth']);
Route::resource("status", StatusController::class)->middleware(['auth']);
Route::resource("vehicules", VehiculeController::class)->middleware(['auth']);

require __DIR__.'/auth.php';
