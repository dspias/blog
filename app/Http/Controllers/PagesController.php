<?php

namespace App\Http\Controllers;

/**
 * this is PagesControler.php class
 */
class PagesController extends Controller {
	
	public function getIndex() {
		return view('pages.welcome');
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