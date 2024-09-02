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
        Schema::create('teacher_details', function (Blueprint $table) {
            $table->id();
            $table->string('teacher_ci');
            $table->foreign('teacher_ci')->references('ci')->on('teachers')->onDelete('cascade');
            $table->string('period');
            $table->integer('teacher_schedule_hours');
            $table->integer('class_preparation_hours');
            $table->integer('research_hours');
            $table->integer('management_hours');
            $table->integer('social_knowledge_management_hours');
            $table->integer('pre_professional_practice_tutoring_hours');
            $table->integer('academic_tutoring_hours');
            $table->integer('thesis_tutoring_hours');
            $table->integer('individual_tutoring_hours');
            $table->integer('group_tutoring_hours');
            $table->integer('complex_thesis_tutoring_hours');
            $table->integer('community_practice_tutoring_hours');
            $table->integer('distributive_hours');
            $table->integer('utah_hours');
            $table->integer('academic_hours');
            $table->text('managements');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher_details');
    }
};
