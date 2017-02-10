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
        'name', 'username','email', 'password','dob'
    ];

    public function posts(){
      return $this->hasMany('App\Post');
    }

    public function articles(){
      return $this->hasMany('App\Articles');
    }

//mutators
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucfirst($value);
    }

//mutators    
   public function setPasswordAttribute($value)
   {
    $this->attributes['password'] = bcrypt($value);
   }
//accessors
   public function getNameAttribute($value)
   {
    return $value;
   }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
