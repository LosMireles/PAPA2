<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Espacio extends Model
{
    protected $table = 'espacios';

    //DEFINICION DE RELACIONES
    //un espacio tiene muchos cursos
    public function cursos(){
        return $this->hasMany(Curso::class);
    }
}
