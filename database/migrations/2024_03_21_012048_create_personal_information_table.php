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
        Schema::create('personal_information', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->enum('suffix',['Sr','Jr','III', 'IV'])->nullable(); 
            $table->string('date_birth');
            $table->string('place_birth');
            $table->enum('sex',['Male','Female']);
            $table->enum('civil_status', ['Single', 'Married', 'Widowed']);
            $table->string('height');
            $table->string('weight');
            $table->enum('blood_type',['O+', 'O-', 'A+', 'A-', 'B+', 'B-', 'AB+', 'AB-']);
            $table->string('gsis_id')->nullable();
            $table->string('pagibig_id')->nullable();
            $table->string('philhealth_id')->nullable();
            $table->string('sss_id')->nullable();
            $table->string('tin_id')->nullable();
            $table->string('agency_id')->nullable();
            $table->string('citizenship')->nullable();
            $table->string('dualCitizenshipMethod')->nullable();
            $table->string('citizenshipCountry')->nullable();
            $table->string('resi_house')->nullable();
            $table->string('resi_street')->nullable();
            $table->string('resi_subdivision')->nullable();
            $table->string('resi_barangay')->nullable();
            $table->string('resi_city')->nullable();
            $table->string('resi_province')->nullable();
            $table->integer('resi_zip')->nullable();
            $table->string('perma_house')->nullable();
            $table->string('perma_street')->nullable();
            $table->string('perma_subdivision')->nullable();
            $table->string('perma_barangay')->nullable();
            $table->string('perma_city')->nullable();
            $table->string('perma_province')->nullable();
            $table->integer('perma_zip')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_information');
    }
};
