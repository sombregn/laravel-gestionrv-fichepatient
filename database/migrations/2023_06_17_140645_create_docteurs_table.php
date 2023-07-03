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
        Schema::create('docteurs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('horaires_de_consultation')->nullable();
            $table->unsignedBigInteger('departement_id');
            $table->string('specialite');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('departement_id')
                  ->references('id')
                  ->on('departements')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docteurs');
    }
};
