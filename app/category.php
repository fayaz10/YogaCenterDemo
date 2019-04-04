<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\posts;

class category extends Model
{
    public function posts()
    {
    	return $this->hasMany('App\posts');
    }
}
