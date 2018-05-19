<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auditorio extends Model
{
    protected $table = 'auditorios';
    protected $guarded = ['id'];

    //un espacio tiene un auditorio (1 a 1)
    public function espacio(){
        return $this->belongsTo(Espacio::class);
    }

}

