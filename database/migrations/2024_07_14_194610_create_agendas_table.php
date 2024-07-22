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
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();

            $table->string('nombre_agenda');
            $table->datetime('fechas');

            $table->unsignedBigInteger('abo_id');
            $table->foreign('abo_id')
                  ->references('id')
                  ->on ('abogados');


            $table->unsignedBigInteger('ayu_id');
            $table->foreign('ayu_id')
                  ->references('id')
                  ->on ('ayudantes');

               

            $table->unsignedBigInteger('cli_id');
            $table->foreign('cli_id')
                  ->references('id')
                  ->on ('clientes');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendas');
    }
};
