<?php

namespace App\Http\Middleware\Admin;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!auth()->user()) {
            throw new \Exception('Nu esti logat');
        }
        if (auth()->user()->admin) {
            return $next($request);
        } else {
            throw new \Exception('Numa administratoru are access la ruta data.');
        }

    }
}
