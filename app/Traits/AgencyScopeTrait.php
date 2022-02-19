<?php

namespace App\Traits;

use App\Observers\AgencyInsertObserver;
use App\Scopes\AgencyScope;

trait AgencyScopeTrait
{
	protected static function boot()
	{
		parent::boot();
		static::addGlobalScope(new AgencyScope());
		static::observe(new AgencyInsertObserver());
	}
}
