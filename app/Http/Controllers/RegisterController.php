<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name'     => 'required|min:3|max:255',
            'username' => 'required|min:3|max:255|unique:users,username',
            'email'    => 'required|email|min:3|max:255|unique:users,email',
            'password' => 'required|min:3|max:255',
        ]);

        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/')->with('success', 'Your Account has Been Created');
    }
}
