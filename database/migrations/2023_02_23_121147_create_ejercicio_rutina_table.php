<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEjercicioRutinaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ejercicio_rutina', function (Blueprint $table) {
            $table->unsignedBigInteger('ejercicio_id');
            $table->unsignedBigInteger('rutina_id');
            $table->timestamps();
            $table->foreign('ejercicio_id')->references('id')->on('ejercicios');
            $table->foreign('rutina_id')->references('id')->on('rutinas');
            $table->primary(['ejercicio_id', 'rutina_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ejercicio_rutina');
    }
}
