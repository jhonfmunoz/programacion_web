<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero_identificacion');
            $table->text('nombre');
            $table->text('apellido');
            $table->integer('fk_municipio')->unsigned();
            $table->integer('fk_td')->unsigned();
            $table->timestamps();
            $table->foreign('fk_municipio')->references('id')->on('municipios');
            $table->foreign('fk_td')->references('id_tipo_documento')->on('tipo_documentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('personas');
    }
}
