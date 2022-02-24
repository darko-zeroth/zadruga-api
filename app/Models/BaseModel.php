<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    use HasFactory;

	protected $guarded = [
		'id',
		'asuid',
		'country_id',
		'market_id',
		'profile_id',
		'agency_id',
		'created_at',
		'updated_at',
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
