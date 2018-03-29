<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
	protected $table = "comments"

	public function posts(){
		return $this->belongTo('App\Posts', 'posts_id', 'id');
	}

	public function users(){
		return $this->belongTo('App\Users', 'users_id', 'id');
	}
}
