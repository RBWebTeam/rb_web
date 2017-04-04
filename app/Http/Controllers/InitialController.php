<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Response;
class InitialController extends Controller
{
	//public static $pro_code = array('huii' =>213 );
	public static $url_static = "http://api.rupeeboss.com/";
	static final function prod(){
		$pro_code=DB::table('product_master')
      ->select('Product_Id','Product_Name')
      ->get();
      return $pro_code;
      //use as
      //$product_list=InitialController::prod();
	}
}