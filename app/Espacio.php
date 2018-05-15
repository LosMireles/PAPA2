<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Espacio extends Model
{
    protected $table = 'espacios';

    //DEFINICION DE RELACIONES
    //un espacio pertenece a muchos cursos (muchos a muchos)
    public function cursos(){
        return $this->belongsToMany(Curso::class);
    }
}

