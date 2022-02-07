<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function login()
    {
        if(auth()->attempt(request(['email', 'password'])) == false)
        {
            return back()->withErrors([
                'message' => 'Datos erroneos'
            ]);
        }
        return redirect()->to('/');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->to('login');
    }
}
