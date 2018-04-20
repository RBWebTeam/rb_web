<?php

namespace App\Http\Middleware;

use Closure;
use URL;
use Session;
class OtpVerification
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
         // print_r($request);exit();
        Session::forget('url_session');
       

        if (!$request->session()->exists('temp_mob')){
             Session::put('url_session', URL::full());

          
                  return redirect('otp-verification');
            
        }else{
          return $next($request);

        } 
        
    }
}
