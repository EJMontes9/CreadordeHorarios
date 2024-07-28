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
        Permission::create(['name' => 'GESTIÓN DE LA INFORMACIÓN GERENCIAL']);
        Permission::create(['name' => 'INGENIERÍA EN SISTEMAS ADMINISTRATIVOS COMPUTACIONALES (SEMESTRAL)']);
        Permission::create(['name' => 'COMERCIO EXTERIOR']);
        Permission::create(['name' => 'INGENIERÍA EN COMERCIO EXTERIOR (SEMESTRAL)']);
        Permission::create(['name' => 'ADMINISTRACIÓN DE EMPRESAS']);
        Permission::create(['name' => 'INGENIERÍA COMERCIAL (EDUCACIÓN A DISTANCIA Y VIRTUAL) (SEMESTRAL)']);
        Permission::create(['name' => 'INGENIERÍA COMERCIAL (SEMESTRAL)']);
        Permission::create(['name' => 'INGENIERÍA EN GESTIÓN EMPRESARIAL (SEMESTRAL)']);
        Permission::create(['name' => 'CONTABILIDAD Y AUDITORIA']);
        Permission::create(['name' => 'CONTADURIA PÚBLICA AUTORIZADO (SEMESTRAL)']);
        Permission::create(['name' => 'FINANZAS']);
        Permission::create(['name' => 'INGENIERÍA EN TRIBUTACION Y FINANZAS (SEMESTRAL)']);
        Permission::create(['name' => 'MERCADOTECNIA']);
        Permission::create(['name' => 'INGENIERÍA EN MARKETING Y NEGOCIACION (SEMESTRAL)']);
        Permission::create(['name' => 'NEGOCIOS INTERNACIONALES']);
        Permission::create(['name' => 'TURISMO']);
        Permission::create(['name' => 'CONTADOR PUBLICO AUTORIZADO (EDUC. A DISTANCIA Y VIRTUAL) (SEMESTRAL)']);
    }
}
