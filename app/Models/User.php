<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
	protected $hidden = [
		'password',
		'status',
		'login_fails',
		'agency_id',
		'created_at',
		'updated_at'
	];

	public function agency(): BelongsTo
	{
		return $this->belongsTo(Agency::class);
	}
}
