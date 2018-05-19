<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sanitario extends Model
{
    protected $table = 'sanitarios';
    protected $guarded = ['id'];

    //un espacio tiene un sanitario (1 a 1)
    public function espacio(){
        return $this->belongsTo(Espacio::class);
    }

}
