<?php

namespace App\Http\Middleware;

use Closure;

class checkAdmin
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
//        if (auth()->check() && auth()->user()->is_admin)
//            return $next($request);

        if (! $request->user()->is_admin) {
            redirect('reporte1');
        }

        return redirect('/home');
    }
}
