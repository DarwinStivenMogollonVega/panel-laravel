<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
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
                return redirect()->route('dashboard');
            }else{
                Auth::logout();
                return back()->with(['error' => 'El usuario no se encuentra activo. Por favor, contacta al administrador.']);
            }
        } return back()->with('error', 'Credenciales inválidas. Por favor, intenta de nuevo.');
    }
}
