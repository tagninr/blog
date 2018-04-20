<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagPost extends Model
{
    protected $table = 'tags_posts';

	public function posts(){
		return $this->belongsTo('App\Post', 'posts_id', 'id');
	}

	public function tags(){
		return $this->belongsTo('App\Tag', 'tags_id', 'id');
	}
}
