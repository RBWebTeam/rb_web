<?php

namespace App\Http\Middleware;
use Request;
use Closure;
use Response;
class API_Auth
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
        try {
            $user=Request::header('user');
            $pwd=Request::header('pwd');
            if($user=='landingkart' && $pwd=='landingkart@207'){
                return $next($request);
            }else{
                throw new \Exception("Invalid User", 1);
            }
        } catch (\Exception $e) {
            return response()->json(array('status' => 0,'data'=>'','err'=>'Invalid User'));
        }
        
        
    }
}
