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

        $user = User::create($fromData);

        auth()->login($user);

        return redirect("/");
    }

    public function postLogin()
    {
        $fromData = request()->validate([
            "email" => ['email','required',Rule::exists('users', 'email')],
            "password" => ['required']
        ]);

        if (!auth()->attempt($fromData)) {
            return back()->withErrors([
                'password' => 'User Creadential Wrong'
            ]);
        }

        return redirect('/');
    }

    public function logout()
    {
        auth()->logout();
        return redirect("/");
    }

    public function profileEdit()
    {
        return Inertia::render('Auth/EditProfile');
    }
}
