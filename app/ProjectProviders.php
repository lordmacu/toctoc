<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectProviders extends Model
{
    protected $table = 'project_provider';

    public function getProjectProviderByIds($project,$provider){
        return $this->where("project_id",$project)->where("provider_id",$provider)->first();
    }
}
