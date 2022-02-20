<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthenticateOnceWithBasicAuth
{
	/**
	 * Handle an incoming request.
	 *
	 * @param Request $request
	 * @param Closure $next
	 * @return mixed
	 */
	public function handle(Request $request, Closure $next): mixed
	{
		$this->checkLoginFails($request);

		return Auth::onceBasic('email', ['status' => true]) ?: $next($request);
	}

	private function checkLoginFails($request)
	{
		$user = User::where('email', $request->getUser())->first();
		$password = $request->getPassword();

		if ($user) {
			if (Hash::check($password, $user->password)) {
				if ($user->login_fails !== 0 && $user->status) {
					$user->login_fails = 0;
					$user->save();
				}
			} else {
				$user->increment('login_fails');
				if ($user->login_fails >= config('auth.login_fail_limit')) {
					$user->status = false;
					$user->save();

					if ($user->login_fails === config('auth.login_fail_limit')) {
						//todo Mail::to($user->email)->send(new UserLockout());
					}
				};
			}
		}
	}
}
