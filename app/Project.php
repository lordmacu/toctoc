<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'projects';

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
    protected $fillable = ['title', 'start_end_project', 'budget', 'description'];
  
     public function providers(){
        return $this->belongsToMany("App\Provider");
    }
    
    public function getProjectById($id){
        return $this->with("providers")->where("id",$id)->first();
    }
    
    
}
