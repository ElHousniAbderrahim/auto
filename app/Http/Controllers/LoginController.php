<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        return view('auth.login');
    }

    public function auth(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        if (auth()->attempt($request->only('username', 'password'))) {
            $roles = auth()->user()->roles; /*
            dd($user->roles,'user connected'); */
            if (in_array('chef_div', $roles)) {
                return redirect('/technicien');
            }
        }

        return redirect()->route('login')->with('error', 'usernzme ou mot de passe incorect.');
    }
}
