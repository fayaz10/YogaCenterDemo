<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentTaggable\Taggable;

use App\User;
use App\category;
use App\Tag;
use App\comment;

class posts extends Model
{
    use Taggable;
    
    public function User()
    {
    	return $this->belongsTo('App\User');
    }
     public function category()
    {
    	return $this->belongsTo('App\category');
    }

    public function tag()
    {
    	return $this->belongsToMany('App\Tag');
    }

    public function comments()
    {
        return $this->hasMany('App\comment');
    }
}
