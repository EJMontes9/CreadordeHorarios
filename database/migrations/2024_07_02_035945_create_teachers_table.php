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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('ci')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->date('date_of_birth');
            $table->integer('age');
            $table->string('gender');
            $table->string('nacionality'); //Está mal escrito
            $table->string('num_cellphone');
            $table->string('email');
            $table->string('email_ug');
            $table->string('dedication');
            $table->string('contract_type');
            $table->string('den_puesto');
            $table->text('third_level_title');
            $table->text('fourth_level_title');
            $table->date('date_of_admission');
            $table->string('career');
            $table->string('rol');
            $table->string('master_degree');
            $table->string('doctorate');
            $table->string('specialty');
            $table->string('researcher');
            $table->integer('contract_hours');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }

};
