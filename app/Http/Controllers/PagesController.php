<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
	public function getIndex ()
	{
		return view("pages/welcome");
	}

	public function getAbout ()
	{
		$fullname = "Nously!";
		$email = "nouslynous@gmail.com";
		$data = ["fullname" => $fullname, "email" => $email];

		return view("pages/about", $data);
	}

	public function getContact ()
	{
		return view("pages/contact");
	}


}

?>