<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSalasTable extends Migration
{
  public function up()
  {
    Schema::create('salas', function(Blueprint $table) {
      $table->increments('id');
      $table->integer('numero');
      $table->integer('capacidad');
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
      Schema::dropIfExists('salas');
  }
}
