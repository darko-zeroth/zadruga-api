<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WorkerMembership extends BaseModel
{
	public function agency(): BelongsTo
	{
		return $this->belongsTo(Agency::class);
	}

	public function worker(): BelongsTo
	{
		return $this->belongsTo(Worker::class);
	}
}
