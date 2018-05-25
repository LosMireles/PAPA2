<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auditorio extends Model
{
    protected $table = 'auditorios';
    protected $guarded = ['id'];

    //DEFINICION DE RELACIONES
    //un auditorio tiene muchas actividades y una actividad sucede en muchos auditorios (muchos a muchos)
    public function actividades(){
        return $this->belongsToMany(Actividad::class);
    }

    //cada auditorio tiene muchas imagenes y varias imagenes se pueden referir a la misma auditorio (muchos a muchos)
    public function imagenes(){
        return $this->belongsToMany(Imagen::class);
    }

}

