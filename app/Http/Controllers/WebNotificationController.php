<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Response;
use DB;
class WebNotificationController extends CallApiController
{
	public function save(Request $req){

		//print_r($req->all());
		
			date_default_timezone_set('Asia/Kolkata');
			$date = date('m/d/Y h:i:s', time());
			$data=json_decode($req->data);
			print_r($data);
			$id=DB::table('web_notification')->insertGetId(['data' => $req->data,'auth_key'=>$data->keys->auth,'endpoint'=>$data->endpoint,'p256dh_key'=>$data->keys->p256dh,'expirationTime'=>$data->expirationTime]);
			$status=$id?1:0;
			return 1;
		
	}
}