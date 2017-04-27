<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
class InitialController extends Controller
{
	//public static $pro_code = array('huii' =>213 );
	public static $url_static = "http://api.rupeeboss.com/";
	public static $service_url_static = "http://services.rupeeboss.com/";
  public static $erp_url_static = "http://beta.erp.rupeeboss.com/";
	//Setting session on the bases of reference
      function __construct(){
            $myString = isset($_GET['referrer']);
            if($myString){
                  $myArray = explode('@', $_GET['referrer']);
                  if(isset($myArray[0])){
                    Session::put('empid', $myArray[0]);
                    Session::put('brokerid', $myArray[1]);
                    Session::put('source', $myArray[2]);
                    Session::put('refid', '1');
                 }
            }
      }

	static final function prod(){
		$pro_code=DB::table('product_master')
      ->select('Product_Id','Product_Name')
      ->get();
      return $pro_code;
      //use as
      //$product_list=InitialController::prod();
	}
	public function FileToString($str,$req){
           // print_r($str);exit();
		$imageName = time().'.'.$req->$str->getClientOriginalExtension();
            $extension=$req->$str->getClientOriginalExtension();
            $filename = $req->$str->getpathName();//Image path
            $file =fopen($filename, "rb");
            $contents = fread($file, filesize($filename));
            $base64=base64_encode($contents);
            return $base64;
		}
}