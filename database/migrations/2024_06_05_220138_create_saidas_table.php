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
        Schema::create('saidas', function (Blueprint $table) {
            $table->id('saida_id');
            $table->integer('quantidade');
            $table->foreignId('tipo_saida_id')->references('tipo_saida_id')->on('tipo_saidas');
            $table->foreignId('cliente_id')->references('cliente_id')->on('clientes');
            $table->foreignId('user_id')->references('user_id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saidas');
    }
};
