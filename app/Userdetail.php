<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userdetail extends Model
{
	protected $fillable = [
		'user_id',
		'thumbnail_link',
		'tel',
		'position',
		'approach',
		'show_email',
		'link',
		'show_tel'
	];

    public function users()
    {
    	return $this->belongsTo(User::class);
    }
}
