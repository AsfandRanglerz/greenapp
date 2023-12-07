<?php

namespace App\Http\Middleware;

use Closure;
use GuzzleHttp\RedirectMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (auth::guard('admin')->check() || auth::guard('web')->check() ) {



                return $next($request);


        } else {

            return redirect('admin-login');
        }

    }
}
