<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table = 'equipos';
    protected $guarded = ['id'];

    /// Serializar para poder meter un arreglo
    //protected $casts = ['software'=>'array'];

    //protected $fillable = ['serial', 'manualUsuario', 'operable', 'localizacion', 'software'];

    //DEFINICION DE RELACIONES
    //muchos equipos estan en un aula, pero un equipo en particular esta en un aula en particular (1 aula n equipos)
    public function aula(){
        return $this->belongsTo(Aula::class);
    }

    //muchos equipos estan en un cubiculo, pero un equipo en particular esta en un cubiculo en particular (1 cubiculo n equipos)
    public function cubiculo(){
        return $this->belongsTo(Cubiculo::class);
    }

    //cada equipo tiene muchas imagenes y varias imagenes se pueden referir a la misma equipo (muchos a muchos)
    public function imagenes(){
        return $this->belongsToMany(Imagen::class);
    }

}

