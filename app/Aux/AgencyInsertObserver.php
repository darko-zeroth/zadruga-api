<?php
namespace App\Aux;

use Illuminate\Support\Facades\Auth;

class AgencyInsertObserver
{
	public function saving($model)
	{
		$model->agency_id = Auth::user()->agency_id;
	}
}
