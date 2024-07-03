<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeachingHoursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('teaching_hours')->insert([
            [
                'job_title' => 'Docente Titular',
                'dedication_time' => 'TC principal',
                'minimum_hours' => 14,
                'maximum_hours' => 16,
            ],
            [
                'job_title' => 'Docente Titular',
                'dedication_time' => 'TC agregado',
                'minimum_hours' => 16,
                'maximum_hours' => 18,
            ],
            [
                'job_title' => 'Docente Titular',
                'dedication_time' => 'TC auxiliar',
                'minimum_hours' => 16,
                'maximum_hours' => 20,
            ],
            [
                'job_title' => 'Docente Titular',
                'dedication_time' => 'MT',
                'minimum_hours' => 6,
                'maximum_hours' => 12,
            ],
            [
                'job_title' => 'Docente Titular',
                'dedication_time' => 'TP',
                'minimum_hours' => 2,
                'maximum_hours' => 11,
            ],
            [
                'job_title' => 'Docente Ocasional',
                'dedication_time' => 'TC',
                'minimum_hours' => 18,
                'maximum_hours' => 22,
            ],
            [
                'job_title' => 'Docente Ocasional',
                'dedication_time' => 'MT',
                'minimum_hours' => 8,
                'maximum_hours' => 12,
            ],
            [
                'job_title' => 'Docente Ocasional',
                'dedication_time' => 'TP',
                'minimum_hours' => 8,
                'maximum_hours' => 11,
            ],
        ]);
    }
}
