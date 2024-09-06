<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{

    public function create()
    {
        return view('auth.login.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate data
        $formAttributes = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(3)],
        ]);

        // attempt to login 
        if (!Auth::attempt($formAttributes)) {
            throw ValidationException::withMessages([
                'email' => 'Sorry the credential do not match'
            ]);
        }

        // regenerate session token
        request()->session()->regenerateToken();
        // redirect to all jobs page
        return redirect()->route('home');
    }


    public function destroy()
    {
        Auth::logout();
        return redirect()->route('login.create');
    }
}
