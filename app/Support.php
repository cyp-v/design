<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
	protected $fillable = [
		'name',
		'link',
		'thumbnail_link'
	];

    public function projects()
    {
    	return $this->belongsToMany(Project::class);
    }
}
