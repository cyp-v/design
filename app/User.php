<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role', 
        'name', 
        'email', 
        'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function userdetails()
    {
        return $this->hasOne(Userdetail::class);
    }

    public function topics()
    {
        return $this->hasMany(Topic::class);
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function isAdmin()
    {
        return $this->role === 'administrator';
    }

    public function isAuthor()
    {
        return $this->role === 'author';
    }
}
