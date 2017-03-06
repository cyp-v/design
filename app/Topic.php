<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
	protected $fillable = [
		'user_id',
		'priority',
		'title',
		'excerpt',
		'status',
		'published_at',
		'content',
		'thumbnail_link'
	];

    public function users()
    {
    	return $this->belongsTo(User::class);
    }

    public function pictures()
    {
    	return $this->morphToMany(Picture::class, 'picturable');
    }
}
