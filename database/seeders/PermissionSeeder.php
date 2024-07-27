<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'Visualizar']);
        Permission::create(['name' => 'Editar']);
        Permission::create(['name' => 'Crear']);
        Permission::create(['name' => 'Eliminar']);
    }
}
