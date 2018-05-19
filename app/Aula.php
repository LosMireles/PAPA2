<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    protected $table = 'aulas';
    protected $guarded = ['id'];

    //un espacio tiene un aula (1 a 1)
    public function espacio(){
        return $this->belongsTo(Espacio::class);
    }

}
