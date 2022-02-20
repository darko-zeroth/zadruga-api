<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
	public function info()
	{
		return response()->json(['serverDate' => date('Y-m-d')]);
	}
}
