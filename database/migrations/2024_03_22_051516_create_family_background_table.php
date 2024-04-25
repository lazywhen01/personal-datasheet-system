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
        Schema::create('family_background', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personal_information_id')->constrained('personal_information')->onDelete('cascade');
            $table->string('spouse_surname')->nullable();
            $table->string('spouse_firstname')->nullable();
            $table->string('spouse_middlename')->nullable();
            $table->enum('spouse_suffix', ['Sr', 'Jr', 'III', 'IV'])->nullable();
            $table->string('spouse_occupation')->nullable();
            $table->string('spouse_employer')->nullable();
            $table->string('spouse_businessadd')->nullable();
            $table->string('spouse_phone')->nullable();
            $table->string('fathers_surname')->nullable();
            $table->string('fathers_firstname')->nullable();
            $table->string('fathers_middlename')->nullable();
            $table->enum('fathers_suffix', ['Sr', 'Jr', 'III', 'IV'])->nullable();
            $table->string('mothers_surname')->nullable();
            $table->string('mothers_firstname')->nullable();
            $table->string('mothers_middlename')->nullable();
            $table->enum('mothers_suffix', ['Sr', 'Jr', 'III', 'IV'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('family_background');
    }
};
