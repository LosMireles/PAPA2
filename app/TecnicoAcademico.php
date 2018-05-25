<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TecnicoAcademico extends Model
{
    protected $table = 'tecnicoacademico';
    protected $guarded = ['id'];

    //cada tecnico academico tiene muchas imagenes y varias imagenes se pueden referir a la misma tecnico academico (muchos a muchos)
    public function imagenes(){
        return $this->belongsToMany(Imagen::class);
    }

}

