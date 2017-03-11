<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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
    'progression_details',
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

  public function user()
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

  public function getPublishedAtAttribute($date)
  {
      return Carbon::parse($date)->format('d/m/Y');
  }

  public function setPublishedAtAttribute($value)
  {
    ($value == 'on') ? 
      $this->attributes['published_at'] = Carbon::now() : 
      $this->attributes['published_at'] = null;
  }
}
