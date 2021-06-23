<?php

namespace App\Controllers;

use vendor\myth\auth\Controllers\AuthController;

class Home extends BaseController
{
	public function index()
	{
		// return view('welcome_message');
		return view('template/index');
		// return view('template/landing-page');
	}
}
