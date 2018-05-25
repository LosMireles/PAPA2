<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cubiculo extends Model
{
    protected $table = 'cubiculos';
    protected $guarded = ['id'];

    //muchos equipos estan en un cubiculo, pero un equipo en particular esta en un cubiculo en particular (1 cubiculo n equipos)
    public function equipos(){
        return $this->belongsTo(Equipo::class);
    }

    //cada cubiculo tiene muchas imagenes y varias imagenes se pueden referir a la misma cubiculo (muchos a muchos)
    public function imagenes(){
        return $this->belongsToMany(Imagen::class);
    }

}

