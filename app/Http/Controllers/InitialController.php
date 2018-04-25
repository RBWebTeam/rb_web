<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
class InitialController extends Controller
{
  public static $current_domain_static="http://www.rupeeboss.com/";
	public static $url_static = "http://uat.api.rupeeboss.com/";
	public static $service_url_static = "http://services.rupeeboss.com/";
  public static $erp_url_static = "http://erp.rupeeboss.com/";
	//Setting session on the bases of reference
      function __construct(){
            $myString = isset($_GET['referrer']);
            if($myString){
                  $myArray = explode('@', $_GET['referrer']);
                  if(isset($myArray[0])){
                    Session::put('empid', $myArray[0]);
                    Session::put('brokerid', $myArray[1]);
                    Session::put('source', $myArray[2]);
                    Session::put('refapp', '1');
                 }
            }
            $campaign = isset($_GET['CampaignName']);

            if($campaign){
              Session::put('CampaignName', $_GET['CampaignName']);
            }else{
             Session::put('CampaignName', 'Rupeeboss Online');
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
  //for file upload ,file to base 64 conversion
	public function FileToString($str,$req){
             // print_r($req);exit();
		$imageName = time().'.'.$req->$str->getClientOriginalExtension();
            $extension=$req->$str->getClientOriginalExtension();
            $filename = $req->$str->getpathName();//Image path
            $file =fopen($filename, "rb");
            $contents = fread($file, filesize($filename));
            $base64=base64_encode($contents);
            return $base64;
		}
    //for custom error message 
    public function getErrorMsg($error_code){
        if($error_code==2002){
          $err="DB Connection Problem";
        }else if($error_code==22007){
          $err="Invalid values Passed/Essential parameter missing";
        }else{
          $err="Something went wrong";
        }
        return $err;
    }
}