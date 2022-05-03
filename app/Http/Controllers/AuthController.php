<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class AuthController extends Controller
{
    public function login()
    {
        return Inertia::render('Auth/Login');
    }

    public function register()
    {
        return Inertia::render('Auth/Register');
    }

    public function postRegister(Request $request)
    {
        $request->validate([
           "name" => ['required','min:3'],
           "email" => ['email','unique:users,email'],
           "password" => ['required','min:6'],
           "image" => ['image','mimes:png,jpg.jepg'],
       ]);
    }
}
