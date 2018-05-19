<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asesoria extends Model
{
    protected $table = 'asesorias';
    protected $guarded = ['id'];

    //un espacio tiene una asesoria (1 a 1)
    public function espacio(){
        return $this->belongsTo(Espacio::class);
    }

}
