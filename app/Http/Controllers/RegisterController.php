<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function register(Request $request)
    {
        return view("auth.register");
    }

    public function store(Request $request)
    {
        /* dd($request->all()); */
        $this->validate($request, [
            "name"=> "required",
            "username"=> "required",
            "email"=> "required",
            "password"=> "required",
            "roles" => "required",
        ]);

        User::create([
            "name"=> $request->name,
            "username"=> $request->username,
            "email"=> $request->email,
            "password"=> Hash::make($request->password),
            "roles"=> [$request->roles],
        ]);

        return redirect()->route("register")->with("success", "Utilisateur cree avec success.");
    }
}
