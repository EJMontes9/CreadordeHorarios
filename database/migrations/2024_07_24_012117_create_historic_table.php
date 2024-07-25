<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('historic', function (Blueprint $table) {
            $table->id();
            $table->string('COD_PLECTIVO');
            $table->string('PERIODO');
            $table->string('FACULTAD');
            $table->string('CARRERA');
            $table->string('NIVEL');
            $table->string('MATERIA');
            $table->string('GRUPO');
            $table->string('AULA')->nullable();
            $table->string('MODALIDAD');
            $table->string('MODALIDAD_MALLA');
            $table->string('CON_MOVILIDAD');
            $table->string('IDENTIFICACION');
            $table->string('DOCENTE');
            $table->string('JORNADA');
            $table->double('HORAS');
            $table->string('LUNES')->nullable();
            $table->string('MARTES')->nullable();
            $table->string('MIERCOLES')->nullable();
            $table->string('JUEVES')->nullable();
            $table->string('VIERNES')->nullable();
            $table->string('SABADO')->nullable();
            $table->string('DOMINGO')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historic');
    }
};
