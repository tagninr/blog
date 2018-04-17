<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Posts;

class HomeController extends Controller
{
    public function index(){
    	$post = Posts::where('status', 0) -> paginate(4);
    	$cat_parent = Category::where('status', '=', 0)->get();
    	$cat_child = Category::where('status', '=', 0)->get();
    	return view('frontend.home.index', compact('post', 'cat_parent', 'cat_child'));
    }

    public function postDetails(Request $req){
    	$post = Posts::where('id', $req-> id)->first();    	
    	return view('frontend.post.details', compact('post'));
    }

    public function getCategory(){
    	$cat_parent = Category::where('status', '=', 0)->get();
    	$cat_child = Category::where('status', '=', 0)->get();
    	// $cat_child = DB::table('categories')->where('categories.id', '=', 'categories.parent_id')->get();
    	// $cat_child = DB::table('users')->join('orders', function($join){ $join->on('users.id', '=', 'orders.user_id')->orOn(...);})->get();
    	return view('frontend.layouts.header', compact('cat_parent', 'cat_child'));
    }
}
