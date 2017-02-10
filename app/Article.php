<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
     
	public function user(){
	   return $this->belongsTo('App\User');
	}

     protected $fillable = [
        'content', 'live','user_id', 'post_on'
    ];
    
// make this to use the short cut way to save in the store function
    public function setLiveAttribute ($value)
    {
    	$this->attributes['live'] = (boolean)($value);
    }
}
