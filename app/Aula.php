<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    protected $table = 'aulas';

    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
}
