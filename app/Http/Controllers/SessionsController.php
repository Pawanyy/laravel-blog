<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{

    public function store()
    {
        $attributes = request()->validate([
            'email'    => 'required|email|min:3|max:255|exists:users,email',
            'password' => 'required|min:3|max:255',
        ]);

        if(auth()->attempt($attributes)){
            
            session()->regenerate();
            return redirect('/')->with('success', 'Welcome Back!');
            
        }

        throw ValidationException::withMessages(['email' => 'Invalid Auth!']);
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}
