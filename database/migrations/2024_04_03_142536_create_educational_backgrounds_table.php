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
        Schema::create('educational_backgrounds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personal_information_id')->constrained('personal_information')->onDelete('cascade');
            $table->string('educ_level')->nullable();
            $table->string('educ_schoolName')->nullable();
            $table->string('educ_degreeCourse')->nullable();
            $table->date('educ_degreeStart')->nullable();
            $table->date('educ_degreeEnd')->nullable();
            $table->string('educ_highestLevel')->nullable();
            $table->date('educ_yearGraduated')->nullable();
            $table->string('educ_scholarship')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('educational_backgrounds');
    }
};
