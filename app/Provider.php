<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'providers';

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
    protected $fillable = ['name', 'nit', 'description', 'phone', 'email', 'web', 'image'];

    
    
    public function getAllProviders($search){
        return $this->select("id","name as text")->where("name","LIKE","%$search%")->get();
    }
}
