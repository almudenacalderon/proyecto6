<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LugaresDefaultAndNullables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lugares', function (Blueprint $table) {
            $table->string('imagen')->nullable()->change();
            $table->string('tipo')->default('Gimnnasio o restaurante')->change();
            $table->string('ubicacion')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lugares', function (Blueprint $table) {
            $table->dropColumn('imagen');
            $table->dropColumn('tipo');
            $table->dropColumn('name');
            $table->dropColumn('ubicacion');
        });
    }
}
