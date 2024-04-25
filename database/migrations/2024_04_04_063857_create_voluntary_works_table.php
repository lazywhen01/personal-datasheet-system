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
        Schema::create('voluntary_works', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personal_information_id')->constrained('personal_information')->onDelete('cascade');
            $table->string('voluntary_orgName')->nullable();
            $table->string('voluntary_orgAddress')->nullable();
            $table->date('voluntary_Start')->nullable();
            $table->date('voluntary_End')->nullable();
            $table->integer('voluntary_numHours')->nullable();
            $table->string('voluntary_positionWork')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voluntary_works');
    }
};
