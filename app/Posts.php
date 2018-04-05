<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
	protected $table = "posts"

	public function category(){
		return $this->belongsTo('App\Category', 'category_id', 'id');
	}

	public function users(){
		return $this->belongsTo('App\User', 'users_id', 'id');
	}

	public function comments(){
		return $this->hasMany('App\Comments');
		// return $this->hasMany('App\Comments', 'posts_id', 'id');
	}

	public function tags(){
		return $this->belongsToMany('App\Tags');
	}
}

