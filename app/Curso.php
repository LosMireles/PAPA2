<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    //Define explicitamente el nombre de la tabla
    protected $table = 'cursos';

    //DEFINICION DE RELACIONES
    //un curso pertenece a muchos espacios (muchos a muchos)
    public function espacios(){
        return $this->belongsToMany(Espacio::class);
    }

    //un curso tiene una asignatura (1 a 1)
    public function asignatura(){
        return $this->hasOne(Asignatura::class);
    }
}

