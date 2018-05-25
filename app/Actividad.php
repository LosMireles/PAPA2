<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $table = 'actividades';
    protected $guarded = ['id'];

    //DEFINICION DE RELACIONES
    //un auditorio tiene muchas actividades y una actividad sucede en muchos auditorios (muchos a muchos)
    public function auditorios(){
        return $this->belongsToMany(Auditorio::class);
    }
}

