<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f43cbde (Se actualizó el proyecto)
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

<<<<<<< HEAD
        $this->call(RolesAndPermissionSeeder::class);
=======
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
>>>>>>> 3658b96 (Primer version del proyecto: Usuario, delete.)
=======
        $this->call(RolesAndPermissionsSeeder::class);
>>>>>>> f43cbde (Se actualizó el proyecto)
    }
}
