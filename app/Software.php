<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    protected $table = 'softwares';
    protected $guarded = array();

    //DEFINICION DE RELACIONES
    //un software pertenece a muchos equipos (muchos a muchos)
    public function equipo(){
        return $this->BelongsToMany(Equipo::class);

    }
}
