<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auditorio extends Model
{
    protected $table = 'auditorios';

    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
}
