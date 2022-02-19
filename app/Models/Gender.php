<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Gender extends BaseModel
{
	public function country(): BelongsTo
	{
		return $this->belongsTo(Country::class);
	}

	public function workerData(): HasMany
	{
		return $this->hasMany('App\WorkerData');
	}
}
