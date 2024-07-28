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
        Schema::create('cliente', function (Blueprint $table) {
            $table->id();

            $table->string('nombre_cli');

            $table->unsignedBigInteger('id_ayu');
            $table->unsignedBigInteger('id_aboga');
            $table->unsignedBigInteger('id_empr');

            $table->foreign('id_ayu')
                  ->references('id')
                  ->on ('ayudante');

            $table->foreign('id_aboga')
                  ->references('id')
                  ->on ('abogado');

            $table->foreign('id_empr')
                  ->references('id')
                  ->on ('empresa');
                  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente');
    }
};
