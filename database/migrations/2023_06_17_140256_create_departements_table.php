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
        Schema::create('departements', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->unique();
            $table->text('description');
            $table->string('telephone')->unique();
            $table->string('mail')->unique();
            $table->string('heures_de_visite');
            $table->string('services_offerts')->unique();
            $table->boolean('etat')->default(true);
            $table->unsignedBigInteger('service_id');
            $table->unsignedBigInteger('batiment_id');
            $table->timestamps();
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
            $table->foreign('batiment_id')->references('id')->on('batiments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departements');
    }
};
