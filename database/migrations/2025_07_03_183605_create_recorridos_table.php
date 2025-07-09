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
        Schema::create('recorridos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_zona');
            $table->unsignedBigInteger('id_habitat');
            $table->unsignedBigInteger('id_especie');

            $table->foreign('id_zona')->references('id')->on('zonas')->onDelete('cascade');
            $table->foreign('id_habitat')->references('id')->on('habitats')->onDelete('cascade');
            $table->foreign('id_especie')->references('id')->on('especies')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recorridos');
    }
};
