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
        Schema::create('docteur_patient', function (Blueprint $table) {
            $table->unsignedBigInteger('docteur_id');
            $table->unsignedBigInteger('patient_id');
            $table->timestamps();
            $table->foreign('docteur_id')->references('id')->on('docteurs')->onDelete('cascade');
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docteur_patient');
    }
};
