<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asesoria extends Model
{
    protected $table = 'asesorias';
    protected $guarded = ['id'];

    //muchas asesorias se dan en un aula y en muchas aulas se da una asesoria (muchos a muchos)
    public function aulas(){
        return $this->belongsToMany(Aula::class);
    }

    //cada asesoria tiene muchas imagenes y varias imagenes se pueden referir a la misma asesoria (muchos a muchos)
    public function imagenes(){
        return $this->belongsToMany(Imagen::class);
    }

}

