<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TechnicienController;
use App\Http\Controllers\AdministrationController;
use App\Http\Controllers\ajouter_magasin;
use App\Http\Controllers\Chef_divController;
use App\Http\Controllers\MagasinController;
use App\Http\Controllers\OrderDeTravailleConroller;
use App\Http\Controllers\ReclamationController;

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

Route::get('/', function(){
    return view('welcome');
});
/* les route des technicien*/
Route::get('/technicien', [TechnicienController::class,'liste_technicien']);
Route::get('/ajouter_technicien', [TechnicienController::class,'ajouter_technicien']);
Route::post('/ajouter/traitement_technicien', [TechnicienController::class,'ajouter_technicien_traitement']);
/* les route des admin*/
Route::get('/administration', [AdministrationController::class,'liste_administration']);
Route::get('/ajouter_admin', [AdministrationController::class,'ajouter_admin']);
Route::post('/ajouter/traitement_admin/', [AdministrationController::class,'ajouter_admin_traitement']);
/* les route des ched_div*/
Route::get('/chef_div', [Chef_divController::class,'liste_chef_div']);
Route::get('/ajouter_chef', [Chef_divController::class,'ajouter_chef']);

/* les route des order de travaill*/
 Route::get('/ajouter_OT', [OrderDeTravailleConroller::class,'ajouter_OT']);

 /* les route des magasin*/
 Route::get('/ajouter_magasin', [MagasinController::class,'ajouter_magasin']);
/* les route des reclamation*/
Route::get('/ajouter_reclamation', [ReclamationController::class,'ajouter_reclamation']);

