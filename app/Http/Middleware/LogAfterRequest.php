<?php
namespace App\Http\Middleware;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
class LogAfterRequest {

    public function handle($request, \Closure  $next)
    {
        return $next($request);
    }

    public function terminate($request, $response)
    {
        Log::useDailyFiles(storage_path().'/logs/req-res-log-for.log');

        $data=(['time'=>Carbon::now(),'request' => $request->all(), 'response' => $response]);
        Log::info('app.requests',$data);
    }

}