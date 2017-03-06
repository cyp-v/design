<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  protected $fillable= [
    'user_id',
    'priority',
    'title',
    'excerpt',
    'status',
    'published_at',
    'objective',
    'country',
    'population',
    'progression',
    'starting_date',
    'context',
    'brief',
    'methodology',
    'contributors',
    'conception',
    'thumbnail_link',
    'video_link',
    'project_link'
  ];

  public function users()
  {
	  return $this->belongsTo(User::class);
  }

  public function tags()
  {
  	return $this->belongsToMany(Tag::class);
  }

  public function pictures()
  {
  	return $this->morphToMany(Picture::class, 'picturable');
  }

  public function supports()
 	{
 		return $this->belongsToMany(Support::class);
 	}
}
