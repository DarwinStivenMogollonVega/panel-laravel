<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $texto = $request->input('texto'); //Variable del texto de búsqueda
        $registros=Role::with('permissions')->where('name', 'like', "%{$texto}")
                            ->orderBy('id', 'desc')
                            ->paginate(2);
        return view('role.index', compact('registros', 'texto'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('role.action', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $registro=new Role();
        $registro->name=$request->input('name');
        $registro->email=$request->input('email');
        $registro->password=bcrypt($request->input('password'));
        $registro->activo=$request->input('activo');
        $registro->save();
        return redirect()->route('usuarios.index')->with('mensaje', 'registro');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}