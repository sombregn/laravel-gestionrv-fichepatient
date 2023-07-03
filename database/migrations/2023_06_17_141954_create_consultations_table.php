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
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->text('symptomes')->nullable();
            $table->text('diagnostic')->nullable();
            $table->text('traitements')->nullable();
            $table->text('suivi')->nullable();
            $table->unsignedBigInteger('rendez_vous_id')->unsigned();
            $table->timestamps();

            $table->foreign('rendez_vous_id')->references('id')->on('rendez_vous');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultations');
    }
};
