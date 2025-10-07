<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
<<<<<<< HEAD
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('autenticacion.registro');
    }

    public function registration(UserRequest $request)
    {
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'activo' => 1,
        ]);

        $clientRole = Role::where('name', 'cliente')->first();
        if ($clientRole) {
            $user->assignRole($clientRole);
    }
        Auth::login($user);
        return redirect()->route('dashboard')->with('mensaje', 'Registro exitoso. ¡Bienvenido!');
  }
}
=======
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserRequest;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('autenticacion.registro');
    }
    public function Registration(UserRequest $request){
        $user =User::create([
            'name'=> $request->input('name'),
            'email'=> $request->input('email'),
            'password'=> Hash::make($request->input('password')),
            'activo'=> 1, //activado automaticamente
        ]);

        $clientRole = Role::where('name', 'cliente')->fierst();
        if($clientRole){
            $user->assingRole($clientRole);
        }
        Auth::login($user);

        return redirect()->route('dashboard')->with('mensaje','Registro exitoso. ¡Bienvenido!');


    }
}
>>>>>>> 5cfa32a (Se agregaron la vista del error 403, se agrego un nuevo apartado para asignar rol en usaurios)
