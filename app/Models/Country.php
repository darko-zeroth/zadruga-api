<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends BaseModel
{
	public function profiles(): HasMany
	{
		return $this->hasMany(Profile::class);
	}

	public function genders(): HasMany
	{
		return $this->hasMany(Gender::class);
	}
}
