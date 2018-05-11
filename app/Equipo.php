<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table = 'equipos';
    protected $guarded = array();

    /// Serializar para poder meter un arreglo
    //protected $casts = ['software'=>'array'];

    //protected $fillable = ['serial', 'manualUsuario', 'operable', 'localizacion', 'software'];

    //DEFINICION DE RELACIONES
    //un equipo pertenece a muchos software (muchos a muchos)
    public function softwares(){
        return $this->BelongsToMany(Software::class);
    }
}
