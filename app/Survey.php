<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'surveys';

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
    protected $fillable = ['title', 'start_end_question', 'question', 'type_question'];

    public function getSurveyByID($id){
        return $this->where("id",$id)->first();
    }
    
    public function questions(){
        return $this->hasMany("App\SurveyQuestion","survey_id","id");
    }
    
    public function getSurveyByIds($id){
        return $this->where("id",$id)->with("questions")->first();
    }
}
