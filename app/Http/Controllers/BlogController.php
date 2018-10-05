<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    public function getSingle($slug){
    	// fetch from the database on slug
    	$post = Post::where('slug', '=', $slug)->get()->first();
    	// return the view and pass in the view object
    	return view('blog.single')->withPost($post);
    }

    public function getIndex(){
    	// fetch from the database on slug
    	$posts = Post::paginate(6);
    	// return the view and pass in the view object
    	return view('blog.index')->withPosts($posts);
    }


}
