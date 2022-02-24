<?php

namespace App\Http\Middleware;

use App\Helpers\Helpers;
use Closure;
use Illuminate\Http\Request;

class CamelCaseResponse
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
		$response = $next($request);
		$content = $response->getContent();
		$json = json_decode($content, true);

		if(is_array($json)) {
			$replaced = Helpers::replaceKeys($json, 'camel');
			$response->setContent(json_encode($replaced));
		}

		return $response;
    }
}
