<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Profile extends BaseModel
{
	public function country(): BelongsTo
	{
		return $this->belongsTo('App\Country');
	}

	public function agencies(): HasMany
	{
		return $this->hasMany('App\Agency');
	}

	public function workerCategories(): HasMany
	{
		return $this->hasMany('App\WorkerCategory');
	}

	public function clientTypes(): HasMany
	{
		return $this->hasMany('App\ClientType');
	}

	public function jobStatuses(): HasMany
	{
		return $this->hasMany('App\JobStatus');
	}
}
