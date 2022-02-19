<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JobWorkerRecord extends BaseModel
{
	public function agency(): BelongsTo
	{
		return $this->belongsTo(Agency::class);
	}

	public function worker(): BelongsTo
	{
		return $this->belongsTo(Worker::class);
	}

	public function job(): BelongsTo
	{
		return $this->belongsTo(Jobs::class);
	}
}
