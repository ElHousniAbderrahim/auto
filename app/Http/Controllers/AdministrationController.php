<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;


class AdministrationController extends Controller
{

     //function for liste_adminisr
     public function liste_administration()
     {

         $admins = admin::all();
         return view("administration.liste_admin", ['admins' => $admins]);
     }




      //function for ajouter_admin
      public function ajouter_admin()
      {
          return view("administration.ajouter_admin");
      }

      public function ajouter_admin_traitement(Request $request)
    {
        $request->validate([
            "nom"=> "required",
            "prenom"=> "required",
            "password"=> "required",
        ]);
       /*  dd($request->all()); */
            $admin = new admin();
            $admin->nom = $request->nom;
            $admin->prenom = $request->prenom;
            $admin->password = $request->password;
            $admin->save();
            return redirect("ajouter_admin")->with('status','Admin a été ajouter avec succes.');
    }
}

