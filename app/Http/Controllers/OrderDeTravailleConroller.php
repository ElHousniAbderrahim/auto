<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderDeTravailleConroller extends Controller
{
    // public function liste OT()
    public function ajouter_OT()
    {
        return view("technicien.ajouter_OT");
    }
}
