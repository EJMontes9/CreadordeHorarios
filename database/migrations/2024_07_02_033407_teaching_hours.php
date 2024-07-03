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
        Schema::create('teaching_hours', function (Blueprint $table) {
            $table->id();
            $table->string('job_title')->nullable();
            $table->string('dedication_time')->nullable();
            $table->integer('minimum_hours')->nullable();
            $table->integer('maximum_hours')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teaching_hours');
    }
};
