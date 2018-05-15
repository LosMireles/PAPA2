<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    protected $table = 'asignaturas';

    //un curso tiene una asignatura (1 a 1)
    public function curso(){
        return $this->belongsTo(Curso::class);
    }
}

