<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('components.auth.login');
    }

    public function store()
    {
        $credentials = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        request()->session()->regenerate();

        if (! Auth::attempt($credentials)){
            throw ValidationException::withMessages([
                'email' => 'The provided credentials do not match our records.',
                'password' => 'The provided credentials do not match our records.',
            ]);
        }
        return redirect('/jobs')->with('success', 'Logged in successfully!');
    }


    public function destroy()
    {
        // Handle logout logic here
        Auth::logout();
        return redirect('/login')->with('success', 'Logged out successfully!');
    }
}
