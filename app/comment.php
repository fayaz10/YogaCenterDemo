<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\posts;
class comment extends Model
{
    public function posts()
    {
    	return $this->belongsTo('App\posts');
    } 

     public function event()
    {
    	return $this->belongsTo('App\event');
    }                 
}
