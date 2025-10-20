@extends('autenticacion.app')
@section('titulo', 'Login')

@section('contenido')
<div class="card card-outline card-primary">
    <div class="card-header">
        <a href="#" class="link-dark text-center link-offset-2 link-opacity-100 link-opacity-50-hover">
            <h1 class="mb-0"><b>Sistema</b>LTE</h1>
        </a>
    </div>

    <div class="card-body login-card-body">
        <p class="login-box-msg">Ingrese sus credenciales</p>

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('login.post') }}" method="POST">
            @csrf

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input id="loginEmail" type="email" name="email"
                           class="form-control @error('email') is-invalid @enderror"
                           value="{{ old('email') }}" required autofocus>
                    <label for="loginEmail">Email</label>
                </div>
                <div class="input-group-text">
                    <span class="bi bi-envelope"></span>
                </div>
                @error('email')
                    <small class="text-danger w-100">{{ $message }}</small>
                @enderror
            </div>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input id="loginPassword" type="password" name="password"
                           class="form-control @error('password') is-invalid @enderror"
                           required>
                    <label for="loginPassword">Password</label>
                </div>
                <div class="input-group-text">
                    <span class="bi bi-lock-fill"></span>
                </div>
                @error('password')
                    <small class="text-danger w-100">{{ $message }}</small>
                @enderror
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            </div>
        </form>
    </div>
</div>
@endsection