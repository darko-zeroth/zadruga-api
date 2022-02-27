<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Worker extends BaseModel
{
	public function agency(): BelongsTo
	{
		return $this->belongsTo(Agency::class);
	}

	public function workerData(): HasOne
	{
		return $this->hasOne(WorkerData::class)->from('worker_data')->whereValidFrom(function ($q2) {
			$q2->selectRaw('max(t2.valid_from)')
				->from('worker_data as t2')
				->whereRaw('worker_data.worker_id = t2.worker_id');
		});
	}

	public function workerDataHistory(): HasMany
	{
		return $this->hasMany(WorkerData::class);
	}

	public function workerMembership(): HasOne
	{
		return $this->hasOne(WorkerMembership::class)->from('worker_memberships')->whereValidFrom(function ($q2) {
			$q2->selectRaw('max(t2.valid_from)')
				->from('worker_memberships as t2')
				->whereRaw('worker_memberships.worker_id = t2.worker_id');
		});
	}

	public function workerMembershipsHistory(): HasMany
	{
		return $this->hasMany(WorkerMembership::class);
	}

	public function jobWorkerRecords(): HasMany
	{
		return $this->hasMany(JobWorkerRecord::class);
	}
}
