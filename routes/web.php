<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
=======
>>>>>>> 3658b96 (Primer version del proyecto: Usuario, delete.)
=======
use  App\Http\Controllers\UserController;
>>>>>>> dba1577 (Se agrego la migracion de activo a users, se agrego paguinacion, y se eliminaron las rutas iniciales de prueba.)
=======
use App\Http\Controllers\UserController;
=======
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
>>>>>>> 1ac5a25 (Se agrego las rutas privadas, y se agrego el modulo de dashboard)

>>>>>>> 3f907fb (Se actualizo el proyecto para estar al dia)
=======
>>>>>>> f43cbde (Se actualizó el proyecto)

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
// // Route::get('/app', function () {
// //     return view('plantilla.app');

// // });

// Route::get('/app', function () {
//     return view('usuario.index');

// });

// Route::get('/action', function () {
//     return view('usuario.action');
// });

Route::middleware(['auth'])->group(function(){

Route::resource('usuarios',UserController::class);
Route::patch('usuarios/{usuario}/toggle', [UserController::class, 'toggleStatus'])->name('usuarios.toggle');
Route::get('dashboard', function(){
    return view('dashboard');
})->name('dashboard');

Route::post('logout', function(){
    Auth::logout();
    return redirect('/login');
})->name('logout');

});

Route::resource('roles', RoleController::class);


Route::middleware(['guest'])->group(function(){

Route::get('login', function(){
    return view('autenticacion.login');})->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.post');
});
=======
// Route::get('/app', function () {
//     return view('plantilla.app');
// });

// Route::get('/app', function () {
//     return view('usuario.index');
// });

// Route::get('/action', function () {
//     return view('usuario.action');
// });


<<<<<<< HEAD
>>>>>>> 3658b96 (Primer version del proyecto: Usuario, delete.)
=======
route::resource('usuario', UserController::class);
>>>>>>> dba1577 (Se agrego la migracion de activo a users, se agrego paguinacion, y se eliminaron las rutas iniciales de prueba.)
=======
Route::resource('usuarios', UserController::class);
>>>>>>> 3f907fb (Se actualizo el proyecto para estar al dia)
=======
Route::resource('usuarios', UserController::class);

Route::patch('usuarios/{usuario}/toggle', [UserController::class, 'toggleStatus'])->name('usuarios.toggle');
>>>>>>> f19c625 (Se agrego el boton para actualziar el estado de los usuarios)
=======
Route::middleware(['auth'])->group(function(){
=======
Route::middleware(['auth'])->group(function () {
>>>>>>> f43cbde (Se actualizó el proyecto)
    Route::resource('usuarios', UserController::class);
    Route::patch('usuarios/{usuario}/toggle', [UserController::class, 'toggleStatus'])->name('usuarios.toggle');
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    //segunda parte logout
    Route::post('logout', function () {
        Auth::logout();
        return redirect('/login');
    })->name('logout');
});

<<<<<<< HEAD
Route::middleware('guest')->group(function(){
    Route::get('login', function(){ return view('autenticacion.login');})->name('login');
    Route::post('login',[AuthController::class, 'login'])->name('login.post');
});
>>>>>>> 1ac5a25 (Se agrego las rutas privadas, y se agrego el modulo de dashboard)
=======
Route::middleware('guest')->group(function () {
    Route::get('login', function () {
        return view('autenticacion.login');
    })->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login.post');
});
<<<<<<< HEAD
>>>>>>> f43cbde (Se actualizó el proyecto)
=======
>>>>>>> 3197f29 (Se actualizó y arreglo rutas)
