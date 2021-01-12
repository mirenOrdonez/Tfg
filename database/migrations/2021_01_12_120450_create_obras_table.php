<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obras', function (Blueprint $table) {
            $table->integer('idObra');
            $table->string('titulo', 1024);
            $table->string('artista', 1024);
            $table->integer('annoNac');
            $table->string('lugarNac', 1024);
            $table->integer('annoFal');
            $table->string('lugarFal', 1024);
            $table->integer('publicado_en');
            $table->string('periodo', 1024);
            $table->text('descripcion');
            $table->text('dato_curioso');
            $table->string('imagen', 1024);
            $table->string('codigoQR', 1024);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('obras');
    }
}
