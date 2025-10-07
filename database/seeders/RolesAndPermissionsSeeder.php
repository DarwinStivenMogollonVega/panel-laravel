<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Cliente;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $clienteRole = Role::firstOrCreate(['name' => 'cliente']);

        //Definir permisos 
        $adminPermissions = [
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'user-activate',
            'rol-list',
            'rol-create',
            'rol-edit',
            'rol-delete',
            'product-list',
            'product-create',
            'product-edit',
            'product-delete',
            'pedido-anulate',
        ];
        $clientePermissions = [
            'pedido-view',
            'pedido-cancel',
            'perfil',
        ];

        foreach ($adminPermissions as $permiso) {
            $permission = Permission::firstOrCreate(['name' => $permiso]);
            $adminRole->givePermissionTo($permission);
        }
        foreach ($clientePermissions as $permiso) {
            $permission = Permission::firstOrCreate(['name' => $permiso]);
            $clienteRole->givePermissionTo($permission);
        }

        //crear usuario y asignar roles
        $adminUser = User::firstOrCreate(
            ['email' => 'admin@prueba.com'],
            ['name' => 'Admin', 'password' => bcrypt('admin123456')]
        );

        $adminUser ->assignRole($adminRole);

        $clienteUser = User::firstOrCreate(
            ['email' => 'cliente@prueba.com'],
            ['name' => 'cliente', 'password' => bcrypt('cliente123456')]
        );

        $clienteUser ->assignRole($clienteRole);
        
    }
}
