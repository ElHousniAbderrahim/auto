<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MagasinController extends Controller
{
    public function ajouter_magasin()
    {
        return view("technicien.ajouter_magasin");
    }
}
