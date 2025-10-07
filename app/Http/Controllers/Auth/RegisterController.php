<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class RegisterController extends Controller
{
    /**
     * Muestra el formulario de registro.
     */
    public function showRegistrationForm()
    {
        return view('autenticacion.registro');
    }

    /**
     * Registra un nuevo usuario y lo autentica automáticamente.
     */
    public function registration(UserRequest $request)
    {
        $user = User::create([
            'name'     => $request->input('name'),
            'email'    => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'activo'   => 1, // Usuario activo por defecto
        ]);

        // Asignar rol "cliente" automáticamente
        $clientRole = Role::where('name', 'cliente')->first();
        if ($clientRole) {
            $user->assignRole($clientRole);
        }

        // Iniciar sesión automáticamente después del registro
        Auth::login($user);

        return redirect()->route('dashboard')
            ->with('mensaje', 'Registro exitoso. ¡Bienvenido!');
    }
}