<?php

namespace App\Http\Middleware;

use Closure;
use Route;
use URL;
use Illuminate\Contracts\Auth\Guard;
class user_community
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    protected $auth;

     public function __construct(Guard $auth) {
         
    }

    public function handle($request, Closure $next)
    {

         $getid=$request->session()->get('email');
           
                 if($getid!=''){

                   
                     
                 }else{ 

                      return redirect()->intended('community/login');
                 }

        return $next($request);
    }
}
