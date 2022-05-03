<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
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

    public function postRegister()
    {
        $fromData = request()->validate([
            "name" => ['required'],
            "email" => ['email',Rule::unique('users', 'email')],
            "password" => ['required'],
            "image" => ['image','mimes:png,jpg,jpeg'],
        ]);

        $fromData['image'] = request()->file('image')->store('profileImage');

        User::create($fromData);

        return redirect("/");
    }
}
