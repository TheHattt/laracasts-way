<?php

namespace App\Http\Controllers;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('components.auth.register');
    }


    public function store()
    {
        // Registration logic goes here
        dd(request()->all());
    }
}
