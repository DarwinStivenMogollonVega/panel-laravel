<?php

namespace App\Http\Controllers;
<<<<<<< HEAD
<<<<<<< HEAD

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleController extends Controller
{
    use AuthorizesRequests;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $this->authorize('rol-list');
        $texto = $request->input('texto'); //Variable del texto de búsqueda
        $registros=Role::with('permissions')->where('name', 'like', "%{$texto}")
                            ->orderBy('id', 'desc')
                            ->paginate(10);
        return view('role.index', compact('registros', 'texto'));
=======
use App\Models\User;
=======

>>>>>>> 2958d9e (Se actualizo el proyecto)
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        //
>>>>>>> 8389d7b (Se agrego el controlador de Roles y se agrego la ruta)
=======
        $texto= $request->input('texto');//variable del texto de la busqueda
        $registros= Role::with('permissions')->where('name','like',"%{$texto}%")
        ->orderBy('id','desc')
        ->paginate(5);
        return view('role.index', compact('registros', 'texto'));
>>>>>>> 5e79dd8 (Se agrego casi al 100% el CRUD de rol)
=======
        $texto = $request->input('texto'); // variable del texto de busqueda
        $registros = Role::with('permissions')->where('name', 'like', "%{$texto}%")
            ->orderBy('id', 'desc')
            ->paginate(2);

        return view('role.index', compact('registros', 'texto'));

>>>>>>> 2958d9e (Se actualizo el proyecto)
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $this->authorize('rol-create');
        $permissions = Permission::all();

        return view('role.action', compact('permissions'));
=======
        //
>>>>>>> 8389d7b (Se agrego el controlador de Roles y se agrego la ruta)
=======
        $permisions=Permission::all();
        return view('role.action', compact('permisions'));
>>>>>>> 5e79dd8 (Se agrego casi al 100% el CRUD de rol)
=======
        $permissions = Permission::all();

        return view('role.action', compact('permissions'));
>>>>>>> 2958d9e (Se actualizo el proyecto)
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $this->authorize('rol-edit');
        $request->validate([
            'name' => 'required|unique:roles,name',
            'permissions' => 'required|array',
        ]);

        $registro = Role::create(['name' => $request->name]);
        $registro->syncPermissions($request->permissions);

        return redirect()->route('roles.index')->with('mensaje', 'Rol '.$registro->name.' creado exitosamente.');
=======
        //
>>>>>>> 8389d7b (Se agrego el controlador de Roles y se agrego la ruta)
=======
        $request->validate([
            'name' => 'required|unique:roles,name',
            'permissions' => 'required|array',
        ]);
        $registro = Role::create(['name' => $request->name]);
        $registro->syncPermissions($request->permissions);

<<<<<<< HEAD
        return redirect()->route('roles.index')->with('mesaje','Rol'.$registro->name.' Creado satisfactoriamente');
>>>>>>> 5e79dd8 (Se agrego casi al 100% el CRUD de rol)
=======
        return redirect()->route('roles.index')->with('mensaje', 'Rol '.$registro->name.' creado satisfactoriamente');
>>>>>>> 2958d9e (Se actualizo el proyecto)
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $this->authorize('rol-edit');
=======
>>>>>>> 2958d9e (Se actualizo el proyecto)
        $registro = Role::findOrFail($id);
        $permissions = Permission::all();

        return view('role.action', compact('registro', 'permissions'));
<<<<<<< HEAD
=======
        //
>>>>>>> 8389d7b (Se agrego el controlador de Roles y se agrego la ruta)
=======
        $registro=Role::findOrFail($id);
        $permisions=Permission::all();
        return view('role.action',compact('registro', 'permissions'));
>>>>>>> 5e79dd8 (Se agrego casi al 100% el CRUD de rol)
=======
>>>>>>> 2958d9e (Se actualizo el proyecto)
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $this->authorize('rol-edit');
        $registro = Role::findOrFail($id);
        $request->validate([
            'name' => 'required|unique:roles,name,'.$registro->id,
            'permissions' => 'required|array',
        ]);

        $registro->update(['name' => $request->name]);
        $registro->syncPermissions($request->permissions);
        return redirect()->route('roles.index')->with('mensaje', 'Registro '.$registro->name.' actualizado exitosamente.');
=======
        //
>>>>>>> 8389d7b (Se agrego el controlador de Roles y se agrego la ruta)
=======
        $registro =Role::findOrFail($id);
=======
        $registro = Role::findOrFail($id);
>>>>>>> 2958d9e (Se actualizo el proyecto)
        $request->validate([
            'name' => 'required|unique:roles,name'.$registro->id,
            'permissions' => 'required|array',
        ]);
        $registro->update(['name' => $request->name]);
        $registro->syncPermissions($request->permissions);
<<<<<<< HEAD

>>>>>>> 5e79dd8 (Se agrego casi al 100% el CRUD de rol)
=======
>>>>>>> 2958d9e (Se actualizo el proyecto)
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $this->authorize('rol-delete');
        $registro = Role::findOrFail($id);
        $registro->delete();

        return redirect()->route('roles.index')->with('mensaje', $registro->name.' eliminado exitosamente.');
    }
}
=======
        //
=======
        $registro = Role::findOrFail($id);
        $registro->delete();

<<<<<<< HEAD
        return redirect()->route('roles.index')->with('mensaje', 'Rol eliminado correctamente');
>>>>>>> 5e79dd8 (Se agrego casi al 100% el CRUD de rol)
=======
        return redirect()->route('roles.index')->with('mensaje', $registro->name.' eliminado satisfactoriamente.');
>>>>>>> 2958d9e (Se actualizo el proyecto)
    }
}
>>>>>>> 8389d7b (Se agrego el controlador de Roles y se agrego la ruta)
