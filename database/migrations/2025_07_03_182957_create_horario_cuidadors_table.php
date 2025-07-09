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
        Schema::create('horario_cuidadors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_cuidador');
            $table->date('fecha');
            $table->time('hora_entrada');
            $table->time('hora_salida');
            $table->unique(['id_cuidador', 'fecha'], 'cuidador_fecha_unique');

            $table->foreign('id_cuidador')->references('id')->on('cuidadors')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horario_cuidadors');
    }
};
