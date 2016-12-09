<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Response;
class ApiController extends Controller
{
	public function comman(Request $req){
		//print "<pre>";
		//print_r($req->all());
		if($req['req_for']=='product'){
			$data=DB::table('Product_Master')
			->select('Product_Id','Product_Name')
			->where('Is_Active','=','True')
			->get();
		}else if($req['req_for']=='bank'){
			$data=DB::table('Bank_Master')
			->select('Bank_Id','Bank_Name')
			->where('Is_Active','=','True')
			->get();
		}else if($req['req_for']=='city'){
			$data=DB::table('city_master')
			->select('City_Id','City_Name','state_id')
			->where('Is_Active','=','1')
			->get();
		}
		//print_r($data);
		return Response::json(array(
                            'data' => $data,
                        ));
	}
}