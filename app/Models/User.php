<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
<<<<<<< HEAD
<<<<<<< HEAD
use Spatie\Permission\Traits\HasRoles;
=======
>>>>>>> 3658b96 (Primer version del proyecto: Usuario, delete.)
=======
use Spatie\Permission\Traits\HasRoles;
>>>>>>> f43cbde (Se actualizó el proyecto)

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
<<<<<<< HEAD
<<<<<<< HEAD
    use HasFactory, Notifiable, HasRoles;
=======
    use HasFactory, Notifiable;
>>>>>>> 3658b96 (Primer version del proyecto: Usuario, delete.)
=======
    use HasFactory, Notifiable, HasRoles;
>>>>>>> f43cbde (Se actualizó el proyecto)

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'activo',
=======
>>>>>>> 3658b96 (Primer version del proyecto: Usuario, delete.)
=======
        'activo',
>>>>>>> dba1577 (Se agrego la migracion de activo a users, se agrego paguinacion, y se eliminaron las rutas iniciales de prueba.)
=======
        'activo'
>>>>>>> 3f907fb (Se actualizo el proyecto para estar al dia)
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
