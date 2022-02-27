<?php

namespace App\Aux;

use Str;

class MultiTool
{
	public static function replaceKeys(array $input, $type): array
	{
		$return = [];

		foreach ($input as $key => $value) {
			if ($type === 'camel') {
				$key = Str::camel($key);
			}

			if ($type === 'snake') {
				$key = Str::snake($key);
			}

			if (is_array($value))
				$value = self::replaceKeys($value, $type);

			$return[$key] = $value;
		}

		return $return;
	}
}
