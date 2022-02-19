<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Profile extends BaseModel
{
	public function country(): BelongsTo
	{
		return $this->belongsTo(Country::class);
	}

	public function agencies(): HasMany
	{
		return $this->hasMany(Agency::class);
	}

	public function workerCategories(): HasMany
	{
		return $this->hasMany(WorkerCategory::class);
	}

	public function clientTypes(): HasMany
	{
		return $this->hasMany(ClientType::class);
	}

	public function jobStatuses(): HasMany
	{
		return $this->hasMany(JobStatus::class);
	}
}
