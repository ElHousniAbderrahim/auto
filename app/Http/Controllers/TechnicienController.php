<?php

namespace App\Http\Controllers;

use App\Models\Technicien;
use Illuminate\Http\Request;

class TechnicienController extends Controller
{
    //function for liste_technicien
    public function liste_technicien()
    {
        $techniciens = Technicien::all();

        return view('technicien.liste', ['techniciens' => $techniciens]);
    }

    //function for ajouter_technicien
    public function ajouter_technicien()
    {
        return view('technicien.ajouter_technicien');
    }

    public function ajouter_technicien_traitement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'password' => 'required',
        ]);
        /*  dd($request->all()); */
        $technicien = new technicien();
        $technicien->nom = $request->nom;
        $technicien->prenom = $request->prenom;
        $technicien->password = $request->password;
        $technicien->save();

        return redirect('ajouter_technicien')->with('status', 'Technicien a été ajouter avec succes.');
    }
}
