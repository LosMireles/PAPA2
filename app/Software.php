<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'softwares'
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
}
