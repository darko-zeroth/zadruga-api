<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JobStatus extends BaseModel
{
	public function profile(): BelongsTo
	{
		return $this->belongsTo(Profile::class);
	}

	public function jobs(): HasMany
	{
		return $this->hasMany(Jobs::class);
	}
}