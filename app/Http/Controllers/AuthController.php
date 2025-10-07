<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validar los campos del formulario
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Intentar iniciar sesión con las credenciales
        $credenciales = $request->only('email', 'password');

        if (Auth::attempt($credenciales)) {
            $user = Auth::user();

            // Verificar si el usuario está activo
            if ($user->activo) {
                return redirect()->route('dashboard');
            } else {
                Auth::logout();
                return back()->with('error', 'El usuario no se encuentra activo. Contacte al administrador.');
            }
        }

        // Si las credenciales no son válidas
        return back()->with('error', 'Las credenciales ingresadas no son correctas.');
    }
}