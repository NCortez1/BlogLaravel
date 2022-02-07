<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Rol;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('login.register');
    }

    public function register()
    {
        $user = User::create(request(['name','email','password','rol_id']));

        auth()->login($user);
        return redirect()->to('/');
    }
}
