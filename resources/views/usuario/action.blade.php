@extends('plantilla.app')

@section('contenido')

<<<<<<< HEAD
    <div class="app-content">

        <div class="container-fluid">

            <div class="row">

                <div class="col-md-12"> 

                    <div class="card mb-4">  

                        <div class="card-header ">

                            <h3 class="card-title"> Usuarios </h3>

                               

                                

                        </div>

                         <div class="card-body">

                                <form action="{{ isset($registro)?route('usuarios.update', $registro->id) : route('usuarios.store') }}" method="POST" id="formRegistroUsuario">
                                    @csrf
                                    @if (isset($registro))
                                        @method('PUT')
                                    @endif
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="nombre" class="form-label">Nombre</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $registro->name ?? '') }}" required>
                                        @error('name')
                                            <small class="text-danger"> {{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $registro->email ?? '') }}" required>
                                        @error('email')
                                            <small class="text-danger"> {{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="text" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                                        @error('password')
                                            <small class="text-danger"> {{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="estado" class="form-label">Estado</label>
                                        <select class="form-select" name="activo" id="activo">
                                            <option value="1" {{ old('activo', $registro->activo ?? '1') == '1' ? 'selected' : '' }}>Activo</option>
                                            <option value="0" {{ old('activo', $registro->activo ?? '0') == '0' ? 'selected' : '' }} >Inactivo</option>
                                        </select>
                                        @error('activo')
                                            <small class="text-danger"> {{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="roles" class="form-label">Rol</label>
                                        <select name="role" id="role" class="form-control">
                                            @foreach($roles as $role)
                                            <option value="{{ $role->name }}"
                                                {{ (isset($registro) && $registro->hasRole($role->name)) ? 'selected' : '' }}>
                                                {{ ($role->name) }}
                                            </option>
                                        @endforeach
                                        </select>
                                    </div>

                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button type="button" class="btn btn-secondary me-md-2"
                                                                                onclick="window.location.href='{{ route('usuarios.index') }}'">Cancelar</button>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </form>

                                </div>

                            <div class="card-footer clear-fix"></div>
                    </div>

                </div>
            </div>
=======
<div class="app-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <h3 class="card-title">Usuarios</h3>

                    </div>
                    <div class="card-body">
                        <form action="" method="POST" id="formRegistroUsuario">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="text" class="form-control" id="password" name="password" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="estado" class="form-label">Estado</label>
                                    <select class="form-select" name="activo" id="activo">
                                        <option value="1">Activo</option>
                                        <option value="0">Inactivo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="button" class="btn btn-secondary me-md-2"
                                    onclick="window.location.href=''">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

>>>>>>> 3658b96 (Primer version del proyecto: Usuario, delete.)
        </div>

    </div>

<<<<<<< HEAD
@endsection
@push('scripts')
<script>
  document.getElementById('menuSeguridad').classList.add('menu-open');
  document.getElementById('itemRole').classList.add('active');
</script>
@endpush
=======
</div>

<<<<<<< HEAD

@endsection
>>>>>>> 3658b96 (Primer version del proyecto: Usuario, delete.)
=======
@endsection
>>>>>>> dba1577 (Se agrego la migracion de activo a users, se agrego paguinacion, y se eliminaron las rutas iniciales de prueba.)
