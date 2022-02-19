<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Worker extends BaseModel
{
	public function agency(): BelongsTo
	{
		return $this->belongsTo(Agency::class);
	}

	public function workerData(): HasMany
	{
		return $this->hasMany(WorkerData::class);
	}

	public function workerMemberships(): HasMany
	{
		return $this->hasMany(WorkerMembership::class);
	}
}
