<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Response;
use App\Http\Requests;
use Session;
use Auth;
use DB;
use Redirect;
class ChatController extends CallApiController
{
	public function post(Requests $req){
	 return Response::json(array(
			'data' => "datatatata",
			
			));;
	}
}