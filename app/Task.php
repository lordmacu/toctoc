<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function getAllTask(){
        return $this->with("statuses")->with("priorities")->with("privacies")->paginate(20);
    }
    public function statuses(){
        return $this->belongsTo("\App\Status","status_id","id");
    }
    
    public function privacies(){
        return $this->belongsTo("\App\Privacy","privacy_id","id");
    }
    
      public function priorities(){
        return $this->belongsTo("\App\Priority","priority","id");
    }
    
    public function getStartDateAttribute($value)
    {
        return date('m/d/Y', strtotime($value));
    }
    
       public function getEndDateAttribute($value)
    {
        return date('m/d/Y', strtotime($value));
    }
}
