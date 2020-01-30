<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anounce extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'anounces';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description', 'status_id', 'start_end_anounce'];

    
}
