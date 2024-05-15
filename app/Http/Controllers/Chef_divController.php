<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Chef_divController extends Controller
{
    //function for liste_adminisration
    public function liste_chef_div()
    {
        return view("division.liste_chef_div");
    }
    //function for ajouter_chef
    public function ajouter_chef()
    {
        return view("division.ajouter_chef");
    }
}
