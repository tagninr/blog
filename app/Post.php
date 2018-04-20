<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";

	public function category(){
		return $this->belongsTo('App\Category', 'category_id', 'id');
	}

	public function users(){
		return $this->belongsTo('App\User', 'users_id', 'id');
	}

	public function comments(){
		return $this->hasMany('App\Comment');
		// return $this->hasMany('App\Comments', 'posts_id', 'id');
	}

	public function tags(){
		return $this->belongsToMany('App\Tag');
	}

	public function setCreatedAtAttribute($date){
  	//format lại $date được gửi vào từ form
	//https://kungfuphp.com/laravel-framework-5/xu-ly-ngay-thang-trong-laravel-5.html		
  		$this->attributes['created_at'] = Carbon::createFromFormat('F d, y',$date);
	}
}
