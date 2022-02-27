<?php

namespace App\Models;

use App\Traits\AgencyScopeTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
	use HasFactory;
	use AgencyScopeTrait;

	protected $guarded = [
		'id',
		'asuid',
		'country_id',
		'market_id',
		'profile_id',
		'agency_id',
		'created_at',
		'updated_at',
		'created_by',
		'updated_by',
		'status',
		'password'
	];

	protected $hidden = [
		'country_id',
		'market_id',
		'profile_id',
		'agency_id',
		'created_at',
		'updated_at',
		'created_by',
		'updated_by',
		'password'
	];

	protected $casts = [
		'id' => 'integer',
		'worker_category_id' => 'integer',
		'client_type_id' => 'integer',
		'gender_id' => 'integer',
		'status' => 'integer',
	];
}
