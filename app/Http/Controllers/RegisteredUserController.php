<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('components.auth.register');
    }

    public function store()
    {
        $attributes = request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email', 'max:80'],
            'password' => ['required', Password::min(8), 'confirmed'],
        ]);

        $user = User::create($attributes);
        Auth::login($user);

        // redirect
        return redirect('/jobs')->with('success', 'Account created and logged in!');
    }
}
