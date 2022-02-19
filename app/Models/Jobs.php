<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Jobs extends BaseModel
{
	public function agency(): BelongsTo
	{
		return $this->belongsTo(Agency::class);
	}

	public function jobStatus(): BelongsTo
	{
		return $this->belongsTo(JobStatus::class);
	}

	public function client(): BelongsTo
	{
		return $this->belongsTo(Client::class);
	}
}
