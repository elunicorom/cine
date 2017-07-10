<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Cajero extends Model
{
  use SoftDeletes;
  protected $table   ="cajeros";
  protected $fillable=['hora_entrada','hora_salida','fondo','usuario_id'];

  public function usuarios(){
    return $this->hasMany(usuario::class);
  }
}
