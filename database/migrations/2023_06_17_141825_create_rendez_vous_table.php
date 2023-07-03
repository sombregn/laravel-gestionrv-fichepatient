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
        Schema::create('rendez_vous', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date_et_heure')->nullable();
            $table->integer('duree')->default(60);
            $table->string('statut')->nullable();
            $table->string('motif');
            $table->text('commentaires')->nullable();
            $table->unsignedBigInteger('patient_id')->unsigned();
            $table->unsignedBigInteger('docteur_id')->unsigned();
            $table->timestamps();

            $table->foreign('patient_id')->references('id')->on('patients');
            $table->foreign('docteur_id')->references('id')->on('docteurs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rendez_vous');
    }
};
