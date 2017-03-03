<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    public function users()
    {
    	return $this->belongsTo(User::class);
    }

    public function pictures()
    {
    	return $this->morphToMany(Picture::class, 'picturable');
    }
}
