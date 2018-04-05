<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagsPosts extends Model
{
	protected $table = 'tags_posts'

	public function posts(){
		return $this->belongsTo('App\Posts', 'posts_id', 'id');
	}

	public function tags(){
		return $this->belongsTo('App\Tags', 'tags_id', 'id');
	}
}
