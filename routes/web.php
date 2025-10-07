<?php

use Illuminate\Support\Facades\Route;
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

>>>>>>> 3f907fb (Se actualizo el proyecto para estar al dia)

Route::get('/', function () {
    return view('welcome');
});

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
