<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WorkerData extends BaseModel
{
	public function agency(): BelongsTo
	{
		return $this->belongsTo(Agency::class);
	}

	public function gender(): BelongsTo
	{
		return $this->belongsTo(Gender::class);
	}

	public function workerCategory(): BelongsTo
	{
		return $this->belongsTo(WorkerCategory::class);
	}

	public function worker(): BelongsTo
	{
		return $this->belongsTo(Worker::class);
	}
}
