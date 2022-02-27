<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class WorkerController extends Controller
{
	public function index(): Response
	{
		return response(Worker::with(['workerData', 'workerMembership'])->get());
	}

	public function store(Request $request): Response
	{
		//
	}

	public function show(int $id): Response
	{
		//
	}

	public function update(Request $request, int $id): Response
	{
		//
	}
}