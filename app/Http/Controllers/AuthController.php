<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
            "password" => ['required','min:6'],
            "image" => ['image','mimes:png,jpg,jpeg'],
        ]);

        $fromData['image'] = request()->file('image')->store('profileImage');

        $user = User::create($fromData);

        auth()->login($user);

        return redirect("/")->with('success', 'Hello '.Auth::user()->name." Welcome");
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

        return redirect('/')->with('success', 'Welcome Back '.Auth::user()->name);
    }

    public function logout()
    {
        auth()->logout();
        return redirect("/")->with('success', 'GoodBye');
    }

    public function profileEdit()
    {
        return Inertia::render('Auth/EditProfile');
    }

    public function postProfileEdit(User $user)
    {
        $userImage = $user->image;

        if (request('image') === $user->image) {
            $user->image = null;
        }

        DB::table('users')->where('email', $user->email)->update([
            'name' => request('name') ? request('name') : $user->name,
            'password' => request('password') ? Hash::make(request('password')) : $user->password,
            'image' => $user->image ? request()->file('image')->store('profileImage') : $userImage
        ]);

        return back()->with('success', 'Updated Successfully');
    }
}
