<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

class RegisterUserController extends Controller
{

    public function create()
    {
        return view('auth.register.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $userAttributes = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed', Password::min(3)],
        ]);

        $employerAttributes = $request->validate([
            'employerName' => ['required'],
            // validate image type
            'employerLogo' => ['required', File::types(['png', 'jpg', 'webp'])],
        ]);

        // create user 
        $user = User::create($userAttributes);

        // create employer 
        $logoPath = $request->employerLogo->store('logos'); //store the image in logos dir
        $user->employer()->create([
            'name' => $employerAttributes['employerName'],
            'logo' => $logoPath,
        ]);

        Auth::login($user);

        return redirect()->route('home');
    }
}
