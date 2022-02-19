<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ClientType extends BaseModel
{
	public function profile(): BelongsTo
	{
		return $this->belongsTo('App\Profile');
	}

	public function clients(): HasMany
	{
		return $this->hasMany('App\Client');
	}


}