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
            $table->date('date_of_birth')->nullable();
            $table->integer('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('nacionality')->nullable(); //Está mal escrito
            $table->string('num_cellphone')->nullable();
            $table->string('email')->nullable();
            $table->string('email_ug')->nullable();
            $table->string('dedication')->nullable();
            $table->string('contract_type')->nullable();
            $table->string('den_puesto')->nullable();
            $table->text('third_level_title')->nullable();
            $table->text('fourth_level_title')->nullable();
            $table->date('date_of_admission')->nullable();
            $table->string('career')->nullable();
            $table->string('rol')->nullable();
            $table->string('master_degree')->nullable();
            $table->string('doctorate')->nullable();
            $table->string('specialty')->nullable();
            $table->string('researcher')->nullable();
            $table->integer('contract_hours')->nullable();
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
