<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCajerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('cajeros', function (Blueprint $table){
        $table->increments('id');
        $table->string('hora_entrada');
        $table->string('hora_salida');
        $table->integer('fondo');
        $table->integer('usuario_id')->unsigned();
        $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');
        $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cajeros');
    }
}
