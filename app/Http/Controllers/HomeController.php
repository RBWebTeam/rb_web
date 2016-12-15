<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class HomeController extends Controller
{
	public function index(){
		$data['city'] = DB::table('city_master')->select('City_Name','state_id','City_Id')->get();
		$data['loan'] = DB::table('Product_Master')->select('Product_Name','Product_Id')->get();
		//print "<pre>";
		//print_r($data);
		// $data['proc_city']=DB::select('call city_prm("DELHI")');
		// print "<pre>";
		// print_r($data['proc_city']);exit();
	    return view('index')->with($data);
	}
	public function footercontent($id){
		$data['bank_name'] = $id;
	    return view('bank-wise-product')->with($data);
	}
	public function logout(Request $req){
		$req->session()->flush();
	    return redirect('/');
	}
}