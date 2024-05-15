<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministrationController extends Controller
{

     //function for liste_adminisration
     public function liste_administration()
     {
         return view("administration.liste_admin");
     }


      //function for ajouter_admin
      public function ajouter_admin()
      {
          return view("administration.ajouter_admin");
      }


}

