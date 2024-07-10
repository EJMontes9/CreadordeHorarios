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
            $table->id();
            $table->string('ci')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('age');
            $table->string('gender');
            $table->string('num_cellphone');
            $table->string('email')->unique();
            $table->string('dedication');
            $table->string('contract_type');
            $table->string('third_level_title');
            $table->string('fourth_level_title');
            $table->string('date_of_admission');
            $table->string('career_assigned');
            $table->string('cycle');
            $table->string('career');
            $table->unsignedBigInteger('teaching_hours_id');
            $table->foreign('teaching_hours_id')->references('id')->on('teaching_hours');
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
