<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Pagination\Paginator;


=======
>>>>>>> 3658b96 (Primer version del proyecto: Usuario, delete.)
=======
use Illuminate\Pagination\Paginator;
>>>>>>> dba1577 (Se agrego la migracion de activo a users, se agrego paguinacion, y se eliminaron las rutas iniciales de prueba.)

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
        Paginator::useBootstrap();
=======
        //
>>>>>>> 3658b96 (Primer version del proyecto: Usuario, delete.)
=======
        Paginator::useBootstrap();
>>>>>>> dba1577 (Se agrego la migracion de activo a users, se agrego paguinacion, y se eliminaron las rutas iniciales de prueba.)
    }
}
