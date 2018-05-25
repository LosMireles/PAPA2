<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sanitario extends Model
{
    protected $table = 'sanitarios';
    protected $guarded = ['id'];

    //cada sanitario tiene muchas imagenes y varias imagenes se pueden referir a la misma sanitario (muchos a muchos)
    public function imagenes(){
        return $this->belongsToMany(Imagen::class);
    }

}

