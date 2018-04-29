<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    //Define explicitamente el nombre de la tabla
    protected $table = 'cursos';

    //DEFINICION DE RELACIONES
    //un espacio tiene muchos cursos
    public function espacio(){
        return $this->BelongsTo(Espacio::class, 'tipo', 'tipo');
    }
}
