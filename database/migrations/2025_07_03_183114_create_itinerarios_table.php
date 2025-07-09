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
        Schema::create('itinerarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_horario_guia');
            $table->unsignedBigInteger('id_guia');
            $table->date('fecha');
            $table->integer('duracion');
            $table->unsignedDouble('longitud');
            $table->unsignedTinyInteger('cantidad_personas');
            $table->unsignedTinyInteger('cantidad_especies');

            $table->foreign('id_horario_guia')->references('id')->on('horario_guias')->onDelete('cascade');
            $table->foreign('id_guia')->references('id')->on('guias')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itinerarios');
    }
};
