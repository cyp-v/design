<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userdetail extends Model
{
    public function users()
    {
    	return $this->belongsTo(User::class);
    }
}
