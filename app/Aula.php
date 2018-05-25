<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    protected $table = 'aulas';
    protected $guarded = ['id'];

    //DEFINICION DE RELACIONES
    //un aula pertenece a muchos cursos (muchos a muchos)
    public function cursos(){
        return $this->belongsToMany(Curso::class);
    }

    //muchas asesorias se dan en un aula y en muchas aulas se da una asesoria (muchos a muchos)
    public function asesorias(){
        return $this->belongsToMany(Asesoria::class);
    }

    //muchos equipos estan en un aula, pero un equipo en particular esta en un aula en particular (1 aula n equipos)
    public function equipos(){
        return $this->hasMany(Equipo::class);
    }

    //cada aula tiene muchas imagenes y varias imagenes se pueden referir a la misma aula (muchos a muchos)
    public function imagenes(){
        return $this->belongsToMany(Imagen::class);
    }

}

