<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsuariosTable extends Migration
{
  public function up()
    {
      Schema::create('users', function(Blueprint $table) {
          $table->increments('id');
          $table->string('username',45);
          $table->string('password',8);
          $table->string('cedula',20);
          $table->string('email');
          $table->string('nombre');
          $table->string('apellido');
          $table->timestamps();
          $table->SoftDeletes();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
