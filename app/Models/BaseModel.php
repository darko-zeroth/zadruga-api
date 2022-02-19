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
		'countryId',
		'marketId',
		'profileId',
		'agencyId',
		'createdAt',
		'updatedAt',
		'status',
		'password'
	];

	protected $hidden = [
		'countryId',
		'marketId',
		'profileId',
		'agencyId',
		'createdAt',
		'updatedAt',
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
