<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Routing\Controller;
=======
>>>>>>> 1ac5a25 (Se agrego las rutas privadas, y se agrego el modulo de dashboard)
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
    public function login(request $request){
=======
    public function login(Request $request){
>>>>>>> f43cbde (Se actualizó el proyecto)
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credenciales = $request->only('email', 'password');

        if(Auth::attempt($credenciales)){
            $user = Auth::user();

            if($user->activo){
                return redirect()->route('dashboard');
            }else{
                Auth::logout();
                return back()->with('error', 'El usuario no se encuentra activo, contacte al administrador');
            }
        }
        return back()->with('error', 'Los datos ingresados no son correctos');
    }
}
<<<<<<< HEAD
>>>>>>> 1ac5a25 (Se agrego las rutas privadas, y se agrego el modulo de dashboard)
=======
>>>>>>> f43cbde (Se actualizó el proyecto)
