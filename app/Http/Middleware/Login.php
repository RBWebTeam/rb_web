<?php

namespace App\Http\Middleware;
use Illuminate\Http\Response;
use Closure;

class Login
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
        print_r("expression");
        print_r($next($request));exit();
        return new Response(view('emi'));
    }
}
