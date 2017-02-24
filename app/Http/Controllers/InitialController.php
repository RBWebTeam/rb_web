<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Response;
class InitialController extends Controller
{
	// public  $pro_code=function(){ return DB::table('product_master')
 //      ->select('Product_Id','Product_Name')      
 //      ->get();
	public static $pro_code;
	function __construct()
        {
	        $this->pro_code=DB::table('product_master')
	      ->select('Product_Id','Product_Name')      
	      ->get();
	      return $pro_code;
        }
       
}