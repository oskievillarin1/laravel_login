<?php

namespace App\Http\Controllers;

class ContactController extends Controller
{
	public function contact()
	{
		$data = array('name' => 'Test Site');
		return view('contact', $data);
	}
}

