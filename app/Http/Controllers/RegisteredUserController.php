<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function create() {
        return view('auth.register');
    }

    public function store(Request $request) {
        // Validation
        $userAttribute = $request->validate([
            'name' => ['required' , 'min:3' , 'max:255'],
            'email' => ['required' , 'email' , 'unique:users,email'],
            'password' => ['required' , 'min:8' , 'confirmed' , Password::min(6) ],
        ]);

        $employerAttribute = $request->validate([
            'employer' => ['required' , 'min:3'],
            'logo' => ['required' , File::types(['png' , 'jpg' , 'jpeg' , 'svg'])],
        ]);

        $user   = User::create($userAttribute);

        $logoPath = $request->file('logo')->store('logo');

        $user->employer()->create(
            [
                'name' => $employerAttribute['employer'],
                'logo' => $logoPath,
            ]
        );

        Auth::login($user);

        return redirect('/')->with('success', 'You have been registered');
    }
}
