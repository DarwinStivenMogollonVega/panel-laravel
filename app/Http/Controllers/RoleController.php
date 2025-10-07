<?php

namespace App\Http\Controllers;
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
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
>>>>>>> 8389d7b (Se agrego el controlador de Roles y se agrego la ruta)
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
<<<<<<< HEAD
        $this->authorize('rol-create');
        $permissions = Permission::all();

        return view('role.action', compact('permissions'));
=======
        //
>>>>>>> 8389d7b (Se agrego el controlador de Roles y se agrego la ruta)
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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
        $this->authorize('rol-edit');
        $registro = Role::findOrFail($id);
        $permissions = Permission::all();

        return view('role.action', compact('registro', 'permissions'));
=======
        //
>>>>>>> 8389d7b (Se agrego el controlador de Roles y se agrego la ruta)
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
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
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
<<<<<<< HEAD
        $this->authorize('rol-delete');
        $registro = Role::findOrFail($id);
        $registro->delete();

        return redirect()->route('roles.index')->with('mensaje', $registro->name.' eliminado exitosamente.');
    }
}
=======
        //
    }
}
>>>>>>> 8389d7b (Se agrego el controlador de Roles y se agrego la ruta)
