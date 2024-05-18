<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReclamationController extends Controller
{
    public function ajouter_reclamation()
    {
        return view("technicien.ajouter_reclamation");
    }
}
