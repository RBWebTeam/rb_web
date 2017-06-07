<?php

namespace App\Http\Controllers;
use Request;
use Response;
use Session;
use Auth;
use DB;
use Redirect;
class ChatController extends CallApiController
{
	public function post(Request $req){
	 return Response::json(array(
			'data' => "datatatata",
			
			));;
	}
}