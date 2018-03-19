<?php namespace estoque\Http\Middleware;

use Closure;

class Autorizador {

	public function handle($request, Closure $next) {

		if(!$request->is('login') && \Auth::guest()){
			return view('/form_login');
		}

		return $next($request);
	}

}
