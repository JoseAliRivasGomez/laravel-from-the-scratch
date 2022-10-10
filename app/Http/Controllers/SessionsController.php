<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{

    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ]);

        if(!auth()->attempt($attributes)){
            //throw ValidationException::withMessages(['password' => 'Your provided credentials are incorrect']);
            return back()->withInput()->withErrors(['password' => 'Your provided credentials are incorrect']);
        }

        session()->regenerate();

        return redirect('/')->with('success', 'Welcome back!');

    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success', 'Goodbye!');
    }
}
