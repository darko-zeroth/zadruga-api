<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('info', [UserController::class, 'info']);
Route::get('user', [UserController::class, 'show']);

Route::apiResource('language', LanguageController::class)->only(['index', 'show']);
Route::apiResource('worker', WorkerController::class)->only(['index', 'show']);
Route::apiResource('worker', WorkerController::class)->except(['destroy']);