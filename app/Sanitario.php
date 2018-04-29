<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sanitario extends Model
{
    protected $table = 'sanitarios';

    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
}
