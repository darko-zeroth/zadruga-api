<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class WorkerCategory extends BaseModel
{
	public function profile(): BelongsTo
	{
		return $this->belongsTo('App\Profile');
	}

	public function workerData(): HasMany
	{
		return $this->hasMany('App\WorkerData');
	}
}


