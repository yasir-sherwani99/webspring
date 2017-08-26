<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function getIndex(){
    	return view('pages.index');
    }

    

  /*  public function getAbout() {
		$first = "Alex";
 		$last = "John";
		$full = $first . " " . $last;
		return view('pages.about')->withFullname("$full");


	} */

	public function getAbout(){

			$first = "Alex";
			$last = "Doe";
			$full = $first . " " . $last;
			$email = "alex.doe@gmail.com";
			$data = [];  // empty array 
			$data['email'] = $email;
			$data['fullname'] = $full;

			return view('pages.about')->withData($data);

	}


}
