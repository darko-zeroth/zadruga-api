<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;

class UserController extends Controller
{
	public function info()
	{
		return response()->json(['serverDate' => date('Y-m-d')]);
	}

	public function show()
	{
		return User::with([
			'agency',
			'agency.language',
			'agency.profile',
			'agency.profile.country',
			'agency.profile.country.genders',
			'agency.profile.clientTypes',
			'agency.profile.jobStatuses',
			'agency.profile.workerCategories'
		])->find(Auth::user()->id);
	}
}