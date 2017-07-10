<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_entrada extends Model
{
  protected $table   ="tipo_entradas";
  protected $fillable=['tipo','precio'];
}
