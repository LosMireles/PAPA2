<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table = 'equipos';
    /// Serializar para poder meter un arreglo
    protected $casts = ['software'=>'array'];

    //DEFINICION DE RELACIONES
    //un equipo tiene muchos software
    public function softwares(){
        return $this->hasMany(Software::class, 'serial');
    }
}
