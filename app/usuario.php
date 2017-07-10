<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Usuario extends Model
{
  use SoftDeletes;
  protected $table   ="users";
  protected $fillable=['username','password','cedula','email','nombre','apellido'];

  public function cajero()
  {
    return $this->belongsTo(Cajero::class);
  }



  public function cursos()
  {
    return $this->belongsToMany(Curso::class,'alumno_id');
  }
}
