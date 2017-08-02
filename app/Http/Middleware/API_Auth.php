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
            //print_r(Request::header());exit();
            $user=Request::header('user');
            $pwd=Request::header('pwd');
            if($user=='lendingkart' && $pwd=='lendingkart@207'){
                return $next($request);
            }else{
                throw new \Exception("Invalid User", 1);
            }
        } catch (\Exception $e) {
            return response()->json(array('status' => 0,'data'=>'','err'=>'Invalid User'));
        }
        
        
    }
}
