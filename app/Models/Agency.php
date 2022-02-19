<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Agency extends BaseModel
{
	public function language(): BelongsTo
	{
		return $this->belongsTo('App\Language');
	}

	public function profile(): BelongsTo
	{
		return $this->belongsTo('App\Profile');
	}

	public function users(): HasMany
	{
		return $this->hasMany('App\User');
	}

	public function workers(): HasMany
	{
		return $this->hasMany('App\Worker');
	}

	public function workerData(): HasMany
	{
		return $this->hasMany('App\WorkerData');
	}

	public function workerMemberships(): HasMany
	{
		return $this->hasMany('App\WorkerMembership');
	}

	public function clients(): HasMany
	{
		return $this->hasMany('App\Client');
	}

	public function clientData(): HasMany
	{
		return $this->hasMany('App\ClientData');
	}

	public function jobs(): HasMany {
		return  $this->hasMany('App\Jobs');
	}
}

