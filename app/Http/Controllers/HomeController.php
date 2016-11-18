<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class HomeController extends Controller
{
	public function index(){
		$data['city'] = DB::table('city_master1')->select('City_Name','state_id','City_Id')->get();
		$data['loan'] = DB::table('fpi_bankproddtl')->select('prod_name','prod_id')->get();
		//print_r($data);
	    return view('index')->with($data);
	}
}