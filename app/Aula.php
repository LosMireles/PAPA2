<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    protected $table = 'aulas';
    protected $guarded = ['id'];

    //DEFINICION DE RELACIONES
    //un aula pertenece a muchos cursos (muchos a muchos)
    public function cursos(){
        return $this->belongsToMany(Curso::class);
    }

}

