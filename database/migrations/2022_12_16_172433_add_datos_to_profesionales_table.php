<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDatosToProfesionalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profesionales', function (Blueprint $table) {

            $table->string('profesion')->default('Entrenador o nutricionista')->change();
            $table->string('imagen')->nullable();
            $table->string('pais', 40)->default('España');
            $table->string('ciudad', 40)->default('Cartagena');
            $table->string('genero')->nullable();
            $table->integer('telefono')->nullable();
           });
      }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profesionales', function (Blueprint $table) {
            $table->dropColumn('profesion');
            $table->dropColumn('imagen');
            $table->dropColumn('pais');
            $table->dropColumn('ciudad');
            $table->dropColumn('genero');
            $table->dropColumn('telefono');
        });
    }
}
