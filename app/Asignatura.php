<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    protected $table = 'asignaturas';
    protected $guarded = ['id'];

    //un curso tiene una asignatura (1 a 1)
    public function curso(){
        return $this->belongsTo(Curso::class);
    }

    //una asignatura usa muchos software(muchos a muchos)
    public function softwares(){
        return $this->BelongsToMany(Software::class);
    }
}

