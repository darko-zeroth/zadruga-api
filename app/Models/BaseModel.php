<?php

namespace App\Models;

use App\Aux\AgencyInsertObserver;
use App\Aux\AgencyScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
	use HasFactory;

	protected static function boot()
	{
		parent::boot();
		static::addGlobalScope(new AgencyScope());
		static::observe(new AgencyInsertObserver());
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
