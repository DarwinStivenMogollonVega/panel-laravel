<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->activo) {
                Auth::logout();
                return redirect()->route('dashboard');
            }else{
                Auth::logout();
                return back()->withErrors(['email' => 'Tu cuenta está inactiva. Por favor, contacta al administrador.']);
            }
        }
    }
}
