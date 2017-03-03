<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    public function topics()
    {
    	return $this->morphedByMany(Topic::class, 'picturable');
    }

    public function projects()
    {
    	return $this->morphedByMany(Project::class, 'picturable');
    }
}
