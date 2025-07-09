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
        Schema::create('especies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_horario_cuidador');
            $table->unsignedBigInteger('id_cuidador');
            $table->string('nombre');
            $table->string('nombre_cientifico');
            $table->text('descripcion');

            $table->foreign('id_horario_cuidador')->references('id')->on('horario_cuidadors')->onDelete('cascade');
            $table->foreign('id_cuidador')->references('id')->on('cuidadors')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('especies');
    }
};
