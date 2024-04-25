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
        Schema::create('work_experiences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personal_information_id')->constrained('personal_information')->onDelete('cascade');
            $table->date('work_dateStart')->nullable();
            $table->date('work_dateEnd')->nullable();
            $table->string('work_positionTitle')->nullable();
            $table->string('work_Agency')->nullable();
            $table->string('work_monthlySalary')->nullable();
            $table->string('work_salaryStep')->nullable();
            $table->string('work_status')->nullable();
            $table->string('work_govService')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_experiences');
    }
};
