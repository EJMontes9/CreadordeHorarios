<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Document;

class DocumentsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('documents')->insert([
            [
                'id' => 1,
                'parent_id' => null,
                'name' => 'LEGAL Y FORMATOS',
                'created_at' => Carbon::parse('2024-07-28 21:36:30'),
                'updated_at' => Carbon::parse('2024-07-28 21:36:30'),
            ],
            [
                'id' => 2,
                'parent_id' => 1,
                'name' => 'ACREDITACIÓN',
                'created_at' => Carbon::parse('2024-07-28 21:36:52'),
                'updated_at' => Carbon::parse('2024-07-28 21:36:52'),
            ],
            [
                'id' => 3,
                'parent_id' => 1,
                'name' => 'ACTA DE REUNIÓN',
                'created_at' => Carbon::parse('2024-07-28 21:40:37'),
                'updated_at' => Carbon::parse('2024-07-28 21:40:37'),
            ],
            [
                'id' => 4,
                'parent_id' => 1,
                'name' => 'CAPACITACIÓN DOCENTE',
                'created_at' => Carbon::parse('2024-07-28 21:42:03'),
                'updated_at' => Carbon::parse('2024-07-28 21:42:03'),
            ],
            [
                'id' => 5,
                'parent_id' => 1,
                'name' => 'EVALUACIÓN DOCENTE',
                'created_at' => Carbon::parse('2024-07-28 21:43:21'),
                'updated_at' => Carbon::parse('2024-07-28 21:43:21'),
            ],
            [
                'id' => 6,
                'parent_id' => 1,
                'name' => 'PAP - POA',
                'created_at' => Carbon::parse('2024-07-28 21:44:11'),
                'updated_at' => Carbon::parse('2024-07-28 21:44:11'),
            ],
            [
                'id' => 7,
                'parent_id' => 1,
                'name' => 'PLANIFICACIÓN ACADEMICA',
                'created_at' => Carbon::parse('2024-07-28 21:51:18'),
                'updated_at' => Carbon::parse('2024-07-28 21:51:19'),
            ],
            [
                'id' => 8,
                'parent_id' => 1,
                'name' => 'VISITAS AULICAS',
                'created_at' => Carbon::parse('2024-07-28 21:54:56'),
                'updated_at' => Carbon::parse('2024-07-28 21:54:56'),
            ],
            [
                'id' => 9,
                'parent_id' => 1,
                'name' => 'RESOLUCIONES',
                'created_at' => Carbon::parse('2024-07-28 22:01:04'),
                'updated_at' => Carbon::parse('2024-07-28 22:01:05'),
            ],
            [
                'id' => 10,
                'parent_id' => null,
                'name' => 'ESTRUCTURA ORGANIZACIONAL',
                'created_at' => Carbon::parse('2024-07-28 22:01:54'),
                'updated_at' => Carbon::parse('2024-07-28 22:01:54'),
            ],
            [
                'id' => 11,
                'parent_id' => 10,
                'name' => 'ADMINISTRACIÓN DE EMPRESAS',
                'created_at' => Carbon::parse('2024-07-28 22:02:40'),
                'updated_at' => Carbon::parse('2024-07-28 22:02:40'),
            ],
            [
                'id' => 12,
                'parent_id' => 10,
                'name' => 'CONTABILIDAD Y AUDITORIA',
                'created_at' => Carbon::parse('2024-07-28 22:03:22'),
                'updated_at' => Carbon::parse('2024-07-28 22:03:23'),
            ],
            [
                'id' => 13,
                'parent_id' => 10,
                'name' => 'COMERCIO EXTERIOR',
                'created_at' => Carbon::parse('2024-07-28 22:03:38'),
                'updated_at' => Carbon::parse('2024-07-28 22:03:38'),
            ],
            [
                'id' => 14,
                'parent_id' => 10,
                'name' => 'GIG',
                'created_at' => Carbon::parse('2024-07-28 22:04:01'),
                'updated_at' => Carbon::parse('2024-07-28 22:04:01'),
            ],
            [
                'id' => 15,
                'parent_id' => 10,
                'name' => 'LICENCIATURA EN FINANZAS',
                'created_at' => Carbon::parse('2024-07-28 22:04:21'),
                'updated_at' => Carbon::parse('2024-07-28 22:04:22'),
            ],
            [
                'id' => 16,
                'parent_id' => 10,
                'name' => 'MERCADOTECNIA',
                'created_at' => Carbon::parse('2024-07-28 22:04:33'),
                'updated_at' => Carbon::parse('2024-07-28 22:04:34'),
            ],
            [
                'id' => 17,
                'parent_id' => 10,
                'name' => 'NEGOCIOS INTERNACIONALES',
                'created_at' => Carbon::parse('2024-07-28 22:05:56'),
                'updated_at' => Carbon::parse('2024-07-28 22:05:56'),
            ],
            [
                'id' => 18,
                'parent_id' => 10,
                'name' => 'TURISMO',
                'created_at' => Carbon::parse('2024-07-28 22:05:54'),
                'updated_at' => Carbon::parse('2024-07-28 22:05:54'),
            ],
        ]);
    }
}