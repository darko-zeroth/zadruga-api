<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

	public function jobWorkerRecords(): HasMany
	{
		return $this->hasMany(JobWorkerRecord::class);
	}

	public function jobLedgers(): HasMany
	{
		return $this->hasMany(JobLedger::class);
	}
}
