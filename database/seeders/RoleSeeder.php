<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::create(['name' => 'Admin']);
        $role->syncPermissions(['Visualizar','Eliminar']);

        $role = Role::create(['name' => 'Gestor General']);
        $role->permissions()->attach([1, 2, 3, 4]);

        $role = Role::create(['name' => 'Gestor de Comercio Exterior']);
        $role->permissions()->attach([1]);
    }
}
