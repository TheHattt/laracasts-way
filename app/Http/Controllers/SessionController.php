<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create()
    {
        return view('components.auth.login');
    }

    public function store(){
        // Handle login logic here
        dd(request()->all());
    }
}
