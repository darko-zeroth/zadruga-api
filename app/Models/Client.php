<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends BaseModel
{
	public function agency(): BelongsTo
	{
		return $this->belongsTo(Agency::class);
	}

	public function clientData(): HasMany
	{
		return $this->hasMany(ClientData::class);
	}

	public function jobs(): HasMany
	{
		return $this->hasMany(Jobs::class);
	}
}
