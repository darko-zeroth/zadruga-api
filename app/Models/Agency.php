<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Agency extends BaseModel
{
	public function language(): BelongsTo
	{
		return $this->belongsTo(Language::class);
	}

	public function profile(): BelongsTo
	{
		return $this->belongsTo(Profile::class);
	}

	public function users(): HasMany
	{
		return $this->hasMany(User::class);
	}

	public function workers(): HasMany
	{
		return $this->hasMany(Worker::class);
	}

	public function workerData(): HasMany
	{
		return $this->hasMany(WorkerData::class);
	}

	public function workerMemberships(): HasMany
	{
		return $this->hasMany(WorkerMembership::class);
	}

	public function clients(): HasMany
	{
		return $this->hasMany(Client::class);
	}

	public function clientData(): HasMany
	{
		return $this->hasMany(ClientData::class);
	}

	public function jobs(): HasMany {
		return  $this->hasMany(Jobs::class);
	}
}

