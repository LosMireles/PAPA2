<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected $table = 'imagenes';
    protected $guarded = ['id'];

    //DEFINICION DE RELACIONES
    //cada aula tiene muchas imagenes y varias imagenes se pueden referir a la misma aula (muchos a muchos)
    public function aulas(){
        return $this->belongsToMany(Aula::class);
    }

    //cada cubiculo tiene muchas imagenes y varias imagenes se pueden referir a la misma cubiculo (muchos a muchos)
    public function cubiculos(){
        return $this->belongsToMany(Cubiculo::class);
    }

    //cada asesoria tiene muchas imagenes y varias imagenes se pueden referir a la misma asesoria (muchos a muchos)
    public function asesorias(){
        return $this->belongsToMany(Asesoria::class);
    }

    //cada auditorio tiene muchas imagenes y varias imagenes se pueden referir a la misma auditorio (muchos a muchos)
    public function auditorios(){
        return $this->belongsToMany(Auditorio::class);
    }

    //cada sanitario tiene muchas imagenes y varias imagenes se pueden referir a la misma sanitario (muchos a muchos)
    public function sanitarios(){
        return $this->belongsToMany(Sanitario::class);
    }

    //cada equipo tiene muchas imagenes y varias imagenes se pueden referir a la misma equipo (muchos a muchos)
    public function equipos(){
        return $this->belongsToMany(Equipo::class);
    }

    //cada tecnico academico tiene muchas imagenes y varias imagenes se pueden referir a la misma tecnico academico (muchos a muchos)
    public function tecnicos_academicos(){
        return $this->belongsToMany(TecnicoAcademico::class);
    }

}

