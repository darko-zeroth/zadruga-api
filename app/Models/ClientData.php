<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ClientData extends BaseModel
{
	public function agency(): BelongsTo
	{
		return $this->belongsTo(Agency::class);
	}

	public function clientType(): BelongsTo
	{
		return $this->belongsTo(ClientType::class);
	}

	public function client(): BelongsTo
	{
		return $this->belongsTo(Client::class);
	}
}
