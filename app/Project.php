<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	  public function users()
	  {
		  return $this->belongsTo(User::class);
	  }

    public function tags()
    {
    	return $this->hasMany(Tag::class);
    }

    public function pictures()
    {
    	return $this->morphToMany(Picture::class, 'picturable');
    }

    public function supports()
   	{
   		return $this->hasMany(Support::class);
   	}
}
