<<<<<<< HEAD
<!doctype html>
<html lang="es">
  <!--begin::Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Sistema | Login </title>
    <!--begin::Accessibility Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <meta name="color-scheme" content="light dark" />
    <meta name="theme-color" content="#007bff" media="(prefers-color-scheme: light)" />
    <meta name="theme-color" content="#1a1a1a" media="(prefers-color-scheme: dark)" />
    <!--end::Accessibility Meta Tags-->
    <!--begin::Primary Meta Tags-->
<<<<<<< HEAD
    <meta name="title" content="Sistema | Login" />
<<<<<<< HEAD
    <meta name="author" content="Darwin" />
    <meta
      name="description"
      content="Panel de control de el sistema Laravel"
    />
    <meta
      name="keywords"
      content="Sistema, Darwin, prismalauncher"
=======
    <meta name="author" content="Bryan Vergel" />
=======
    <meta name="title" content="Sistema | Login " />
    <meta name="author" content="Carlos ABS" />
>>>>>>> 2958d9e (Se actualizo el proyecto)
    <meta
      name="description"
      content="Panel de control de mi sistema en Laravel."
    />
    <meta
      name="keywords"
<<<<<<< HEAD
      content="Sistema, BrayanVega, codeart"
>>>>>>> 1ac5a25 (Se agrego las rutas privadas, y se agrego el modulo de dashboard)
=======
      content="sistema, carlosabs, codeart"
>>>>>>> 2958d9e (Se actualizo el proyecto)
    />
    <!--end::Primary Meta Tags-->
    <!--begin::Accessibility Features-->
    <!-- Skip links will be dynamically added by accessibility.js -->
    <meta name="supported-color-schemes" content="light dark" />
<<<<<<< HEAD
<<<<<<< HEAD
    <link rel="preload" href="{{ asset('css/adminlte.css') }}" as="style" />
=======
    <link rel="preload" href="{{asset('css/adminlte.css')}}" as="style" />
>>>>>>> 1ac5a25 (Se agrego las rutas privadas, y se agrego el modulo de dashboard)
=======
    <link rel="preload" href="{{ asset('css/adminlte.css') }}" as="style" />
>>>>>>> 2958d9e (Se actualizo el proyecto)
    <!--end::Accessibility Features-->
    <!--begin::Fonts-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
      integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
      crossorigin="anonymous"
      media="print"
      onload="this.media='all'"
    />
    <!--end::Fonts-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css"
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(OverlayScrollbars)-->
    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(Bootstrap Icons)-->
    <!--begin::Required Plugin(AdminLTE)-->
<<<<<<< HEAD
<<<<<<< HEAD
    <link rel="stylesheet" href="{{ asset('css/adminlte.css') }}" />
=======
    <link rel="stylesheet" href="{{asset('css/adminlte.css')}}" />
>>>>>>> 1ac5a25 (Se agrego las rutas privadas, y se agrego el modulo de dashboard)
=======
    <link rel="stylesheet" href="{{ asset('css/adminlte.css') }}" />
>>>>>>> 2958d9e (Se actualizo el proyecto)
    <!--end::Required Plugin(AdminLTE)-->
  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body class="login-page bg-body-secondary">
    <div class="login-box">
      <div class="card card-outline card-primary">
        <div class="card-header">
          <a
            href="../index2.html"
            class="link-dark text-center link-offset-2 link-opacity-100 link-opacity-50-hover"
          >
            <h1 class="mb-0"><b>Sistema</b>LTE</h1>
          </a>
        </div>
        <div class="card-body login-card-body">
          <p class="login-box-msg">Ingrese sus credenciales</p>
<<<<<<< HEAD
<<<<<<< HEAD
        @if (session('error'))
          <div class="alert alert-danger">
              {{ session('error') }}
          </div>
        @endif
          <form action="{{ route('login.post')}} " method="post">
            @csrf
            <div class="input-group mb-1">
              <div class="form-floating">
                <input id="loginEmail" type="email" name="email" class="form-control" value="" placeholder="" />
=======
          @if(session('error'))
=======
          @if (session('error'))
>>>>>>> 2958d9e (Se actualizo el proyecto)
=======


@extends('autenticacion.app')
@section('titulo', 'Login')
@section('contenido')
<div class="card card-outline card-primary">
    <div class="card-header">
        <a href="../index2.html" class="link-dark text-center link-offset-2 link-opacity-100 link-opacity-50-hover">
            <h1 class="mb-0"><b>Sistema</b>LTE</h1>
        </a>
    </div>
    <div class="card-body login-card-body">
        <p class="login-box-msg">Ingrese sus credenciales</p>
        @if (session('error'))
>>>>>>> e3e89d5 ( Se agrego la vista de registro y se agregaron validaciones para password)
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <form action="{{ route('login.post') }}" method="post">
            @csrf
            <div class="input-group mb-1">
<<<<<<< HEAD
              <div class="form-floating">
<<<<<<< HEAD
                <input id="loginEmail" type="email" name="email"class="form-control" value="" placeholder="" />
>>>>>>> 1ac5a25 (Se agrego las rutas privadas, y se agrego el modulo de dashboard)
=======
                <input id="loginEmail" type="email" name="email" class="form-control" value="" placeholder="" />
>>>>>>> 2958d9e (Se actualizo el proyecto)
                <label for="loginEmail">Email</label>
              </div>
              <div class="input-group-text"><span class="bi bi-envelope"></span></div>
            </div>
            <div class="input-group mb-1">
              <div class="form-floating">
<<<<<<< HEAD
<<<<<<< HEAD
                <input id="loginPassword" type="password" name="password" class="form-control" placeholder="" />
=======
                <input id="loginPassword" type="password" name="password"class="form-control" placeholder="" />
>>>>>>> 1ac5a25 (Se agrego las rutas privadas, y se agrego el modulo de dashboard)
=======
                <input id="loginPassword" type="password" name="password" class="form-control" placeholder="" />
>>>>>>> 2958d9e (Se actualizo el proyecto)
                <label for="loginPassword">Password</label>
              </div>
              <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
=======
                <div class="form-floating">
                    <input id="loginEmail" type="email" name="email" class="form-control" value=""
                        placeholder="" />
                    <label for="loginEmail">Email</label>
                </div>
                <div class="input-group-text"><span class="bi bi-envelope"></span></div>
            </div>
            <div class="input-group mb-1">
                <div class="form-floating">
                    <input id="loginPassword" type="password" name="password" class="form-control" placeholder="" />
                    <label for="loginPassword">Password</label>
                </div>
                <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
>>>>>>> e3e89d5 ( Se agrego la vista de registro y se agregaron validaciones para password)
            </div>
            <!--begin::Row-->
<<<<<<< HEAD
=======
            <div class="row">
<<<<<<< HEAD
>>>>>>> 1ac5a25 (Se agrego las rutas privadas, y se agrego el modulo de dashboard)
              <!-- /.col -->
              <div class="col-4">
                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-primary">Sign In</button>
=======
                <!-- /.col -->
                <div class="col-4">
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Sign In</button>
                    </div>
>>>>>>> e3e89d5 ( Se agrego la vista de registro y se agregaron validaciones para password)
                </div>
                <!-- /.col -->
            </div>
            <!--end::Row-->
<<<<<<< HEAD
          </form>
<<<<<<< HEAD
<<<<<<< HEAD
          
=======
          <!-- /.social-auth-links -->
=======
>>>>>>> 2958d9e (Se actualizo el proyecto)
        </div>
>>>>>>> 1ac5a25 (Se agrego las rutas privadas, y se agrego el modulo de dashboard)
        <!-- /.login-card-body -->
      </div>
=======
        </form>
>>>>>>> e3e89d5 ( Se agrego la vista de registro y se agregaron validaciones para password)
    </div>
    <!-- /.login-card-body -->
</div>

@endsection
