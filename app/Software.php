<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    protected $table = 'softwares';

    //DEFINICION DE RELACIONES
    //un equipo tiene muchos software
    public function equipo(){
        return $this->BelongsTo(Equipo::class);

    }
}
