<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Response;

class LanguageController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return response(Language::get());
	}


	/**
	 * Display the specified resource.
	 *
	 * @param int $id
	 * @return Response
	 */
	public function show(int $id)
	{
		return response(Language::find($id));
	}

}
