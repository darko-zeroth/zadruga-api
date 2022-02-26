<?php

namespace App\Models;

use App\Scopes\AgencyScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    use HasFactory;

	/**
	 * The "booted" method of the model.
	 *
	 * @return void
	 */
	protected static function booted()
	{
		static::addGlobalScope(new AgencyScope());
	}

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
