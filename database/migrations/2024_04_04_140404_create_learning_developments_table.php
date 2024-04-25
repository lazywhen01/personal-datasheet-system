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
        Schema::create('learning_developments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personal_information_id')->constrained('personal_information')->onDelete('cascade');
            $table->string('lnd_title')->nullable();
            $table->date('lnd_start')->nullable();
            $table->date('lnd_end')->nullable();
            $table->integer('lnd_numHours')->nullable();
            $table->string('lnd_typeId')->nullable();
            $table->string('lnd_sponsor')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('learning_developments');
    }
};
