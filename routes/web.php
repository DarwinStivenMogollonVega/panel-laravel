<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
<<<<<<< HEAD
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
=======
use App\Http\Controllers\Auth\PerfilController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\ResetPasswordController;
>>>>>>> 99b4c79 (hicimos el recordar contraseña y el formulario de reseteo de contraseña con su verificacion)

Route::get('/', function () {
    return view('welcome');
});

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


<<<<<<< HEAD
Route::middleware(['guest'])->group(function(){

Route::get('login', function(){
    return view('autenticacion.login');})->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.post');

Route::get('/registro', [RegisterController::class, 'showRegisterForm'])->name('registro');
Route::post('/registro', [RegisterController::class, 'registration'])->name('registro.store');
});
=======
    Route::get('/registro', [RegisterController::class, 'showRegistrationForm'])->name('registro');
    Route::post('/registro', [RegisterController::class, 'registration'])->name('registro.store');

    Route::get('password/reset', [ResetPasswordController::class, 'showRequestForm'])->name('password.request');
    Route::post('password/email', [ResetPasswordController::class, 'sendResetLinkEmail'])->name('password.send-link');
    Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('password/reset', [ResetPasswordController::class, 'resetPassword'])->name('password.update');
});
>>>>>>> 99b4c79 (hicimos el recordar contraseña y el formulario de reseteo de contraseña con su verificacion)
