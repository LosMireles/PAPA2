<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cubiculo extends Model
{
    protected $table = 'cubiculos';

    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
}
