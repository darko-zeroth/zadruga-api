<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Language extends BaseModel
{
	public function agencies(): HasMany
	{
		return $this->hasMany('App\Agency');
	}
}
