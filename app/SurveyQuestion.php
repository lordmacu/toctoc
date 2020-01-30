<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurveyQuestion extends Model
{
    protected $table = 'survey_question';

    public function getSurveyQuestionByIds($survey,$text){
        return $this->where("survey_id",$survey)->where("text",$text)->first();
    }
}
