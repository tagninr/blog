<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
	protected $table = "posts"

	public function category(){
		return $this->belongTo('App\Category', 'category_id', 'id');
	}

	public function users(){
		return $this->belongTo('App\User', 'users_id', 'id');
	}

	public function comments(){
		return $this->hasMany('App\Comments');
		// return $this->hasMany('App\Comments', 'posts_id', 'id');
	}
}
