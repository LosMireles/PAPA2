<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asesoria extends Model
{
    protected $table = 'asesorias';

    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
}
