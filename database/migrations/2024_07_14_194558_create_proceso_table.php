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
        Schema::create('Proceso', function (Blueprint $table) {
            $table->id();

            $table->string('nombre_proc');
            $table->string('descripcion');

            $table->unsignedBigInteger('id_cli');
            $table->foreign('id_cli')
                  ->references('id')
                  ->on ('cliente');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proceso');
    }
};
