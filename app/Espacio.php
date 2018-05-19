<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Espacio extends Model
{
    protected $table = 'espacios';
    protected $guarded = ['id'];

    //DEFINICION DE RELACIONES
    //un espacio pertenece a muchos cursos (muchos a muchos)
    public function cursos(){
        return $this->belongsToMany(Curso::class);
    }

    //un espacio tiene una asesoria (1 a 1)
    public function asesoria(){
        return $this->hasOne(Asesoria::class);
    }

    //un espacio tiene un auditorio (1 a 1)
    public function auditorio(){
        return $this->hasOne(Auditorio::class);
    }

    //un espacio tiene un aula (1 a 1)
    public function aula(){
        return $this->hasOne(Aula::class);
    }

    //un espacio tiene un cubiculo (1 a 1)
    public function cubiculo(){
        return $this->hasOne(Cubiculo::class);
    }

    //un espacio tiene un sanitario (1 a 1)
    public function sanitario(){
        return $this->hasOne(Sanitario::class);
    }
}

