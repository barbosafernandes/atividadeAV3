<?php namespace App\Http\Middleware;

use Closure;

class AutorizacaoMiddleware {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
            if(!$request->is('login') and \Auth::guest()):
                return redirect('/login');
            endif;
		return $next($request);
	}

}
