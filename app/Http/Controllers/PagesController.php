<?php

namespace App\Http\Controllers;

use App\Post;

/**
 * this is PagesControler.php class
 */
class PagesController extends Controller {
	
	public function getIndex() {
		$posts = Post::orderBy('created_at','desc')->limit(4)->get();
		return view('pages.welcome')->withPosts($posts);
	}

	public function getAbout() {
		$first	= "Raju";
		$last	= "Deb";

		$full	= $first.$last;
		$email = "rajurupok95@gmail.com";

		$data['fullname']	= $full;
		$data['email'] 		= $email;
		return view('pages.about')->withData($data);
	}

	public function getContact() {
		return view('pages.contact');
	}

	public function postContact() {

	}
}