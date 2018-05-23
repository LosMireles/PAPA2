<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    protected $table = 'softwares';
    protected $guarded = ['id'];

    //DEFINICION DE RELACIONES
    //un software pertenece a muchos equipos (muchos a muchos)
    public function equipos(){
        return $this->BelongsToMany(Equipo::class);
    }

    //un software es usado en muchas asignaturas (muchos a muchos)
    public function asignaturas(){
        return $this->BelongsToMany(Asignatura::class);
    }
}

