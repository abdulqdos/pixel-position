<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create() {
        return view('session.login');
    }

    public function store(Request $request) {
        $user = $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8',
        ]);

        if(!Auth::attempt($user)) {
            throw ValidationException::withMessages([
                'email' => 'Sorry , the email or password is incorrect.',
                'password' => 'Sorry , the email or password is incorrect.',
            ]);
        }

        return redirect('/')->with('success', 'You are now logged in');
    }

    public function destroy() {
        Auth::logout();
        return redirect('/')->with('success', 'You are now logged out');
    }
}
