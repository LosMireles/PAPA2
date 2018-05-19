<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cubiculo extends Model
{
    protected $table = 'cubiculos';
    protected $guarded = ['id'];

    //un espacio tiene un cubiculo (1 a 1)
    public function espacio(){
        return $this->belongsTo(Espacio::class);
    }

}

