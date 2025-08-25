<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    use AuthorizesRequests;
=======
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
>>>>>>> dba1577 (Se agrego la migracion de activo a users, se agrego paguinacion, y se eliminaron las rutas iniciales de prueba.)
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
<<<<<<< HEAD
        $this->authorize('user-list');
        $texto = $request->input("texto");
         $registros = User::with('roles')->where('name','like','%'.$texto.'%')
         ->orWhere('email','like','%'.$texto.'%')
         ->orderBy('id','desc')
         ->paginate(10);
         return view('usuario.index', compact('registros','texto'));
=======
        $texto = $request->input('texto');
        $registros=User::where('name', 'like', '%'.$texto.'%')
            ->orWhere('email','like','%'.$texto.'%')
            ->orderBy('id','desc')
            ->paginate(1);
            return view('usuario.index', compact('registros','texto'));
>>>>>>> dba1577 (Se agrego la migracion de activo a users, se agrego paguinacion, y se eliminaron las rutas iniciales de prueba.)
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
<<<<<<< HEAD
        $this->authorize('user-create');
        $roles=Role::all();
        return view('usuario.action', compact('roles'));
=======
        //
>>>>>>> dba1577 (Se agrego la migracion de activo a users, se agrego paguinacion, y se eliminaron las rutas iniciales de prueba.)
    }

    /**
     * Store a newly created resource in storage.
     */
<<<<<<< HEAD
    public function store(UserRequest $request)
    {
        $this->authorize('user-edit');
        $registro=new User();
        $registro->name=$request->input('name');
        $registro->email=$request->input('email');
        $registro->password=bcrypt($request->input('password'));
        $registro->activo=$request->input('activo');
        $registro->save();

        $registro->assignRole($request->input('role'));
        return redirect()->route('usuarios.index')->with('mensaje', 'registro '.$registro->name. ' Agregado correctamente');
=======
    public function store(Request $request)
    {
        //
>>>>>>> dba1577 (Se agrego la migracion de activo a users, se agrego paguinacion, y se eliminaron las rutas iniciales de prueba.)
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
<<<<<<< HEAD
    public function edit($id)
    {
        $this->authorize('user-edit');
        $roles=Role::all();
        $registro = User::findOrFail($id);

        return view('usuario.action', compact('registro', 'roles'));
=======
    public function edit(User $user)
    {
        //
>>>>>>> dba1577 (Se agrego la migracion de activo a users, se agrego paguinacion, y se eliminaron las rutas iniciales de prueba.)
    }

    /**
     * Update the specified resource in storage.
     */
<<<<<<< HEAD
    public function update(Request $request, $id)
    {
        $this->authorize('user-edit');
        $registro=User::findOrFail($id);
        $registro->name=$request->input('name');
        $registro->email=$request->input('email');
        $registro->password=bcrypt($request->input('password'));
        $registro->activo=$request->input('activo');
        $registro->save();

        $registro->assignRole($request->input('role'));
        return redirect()->route('usuarios.index')->with('mensaje', 'El Registro de '.$registro->name.' actualizado satisfactoriamente');
=======
    public function update(Request $request, User $user)
    {
        //
>>>>>>> dba1577 (Se agrego la migracion de activo a users, se agrego paguinacion, y se eliminaron las rutas iniciales de prueba.)
    }

    /**
     * Remove the specified resource from storage.
     */
<<<<<<< HEAD
    public function destroy($id)
    {
        $this->authorize('user-delete');
        $registro=User::findOrFail($id);
        $registro->delete();
        return redirect()->route('usuarios.index')->with('mensaje', $registro->name. ' <Eliminado Satisfactoriamente.');
    }

    public function toggleStatus(User $usuario){
        $this->authorize('user-activate');
        $usuario->activo =!$usuario->activo;
        $usuario->save();
        return redirect()->route('usuarios.index')->with('mensaje', 'El estado del usuario ha sido actualizado satisfactoriamente');
    }
}
=======
    public function destroy(User $user)
    {
        //
    }
}
>>>>>>> dba1577 (Se agrego la migracion de activo a users, se agrego paguinacion, y se eliminaron las rutas iniciales de prueba.)
