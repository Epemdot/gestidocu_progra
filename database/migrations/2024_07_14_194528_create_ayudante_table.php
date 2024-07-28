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
        Schema::create('ayudante', function (Blueprint $table) {
            $table->id();

            $table->string('nombre_ayu');

            $table->unsignedBigInteger('id_abog');
            $table->foreign('id_abog')
                  ->references('id')
                  ->on ('abogado');
                  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ayudante');
    }
};
