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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->year('year');
            $table->boolean('you_have_a_project');
            $table->string('teacher_id'); // Cambiar a string para coincidir con el campo ci
            $table->foreign('teacher_id')->references('ci')->on('teachers')->onDelete('cascade'); // Definir clave foránea con ci
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
