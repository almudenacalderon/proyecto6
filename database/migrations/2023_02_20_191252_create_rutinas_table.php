<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRutinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rutinas', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('Rutina de tren inferior');
            $table->text('descripcion')->default('Los ejercicios deben ejecutarse en series de tres, con 10 repeticiones cada una. A medida que se avance en el entrenamiento, se pueden agregar más series y más repeticiones.');
            $table->timestamps();
            $table->string('meta')->default('Hipertrofia');
            $table->unsignedBigInteger('entrenador_id');
            $table->foreign('entrenador_id')->references('id')->on('entrenadores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rutinas');
    }
}

