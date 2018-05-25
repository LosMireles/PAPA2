<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SistemaOperativo extends Model
{
    protected $table = 'sistemas_operativos';
    protected $guarded = ['id'];

    //DEFINICION DE RELACIONES
    //un sistema operativo esta instalado en muchos equipos y los equipos
    //tienen instalados muchos sistemas operativos (muchos a muchos)
    public function equipos(){
        return $this->belongsToMany(Equipo::class);
    }
}

