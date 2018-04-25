<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use DB;
use Response;
use File;
use Excel;
class OtpController extends CallApiController
{
    public function otp_verification(){
    
    

    $data['brokerid']=Session::get('brokerid')?Session::get('brokerid'):'MAA=';
    $data['empid']=Session::get('empid')?Session::get('empid'):'MAA=';
    $data['source']=Session::get('source')?Session::get('source'):'MAA=';
    return view('otp-verification')->with($data);
  }

  public function express_loan_send_otp(Request $req){
    // print_r($req->mobile);exit();
    // $otp=123456;
    $otp = mt_rand(100000, 999999);
    Session::put('temp_contact', $req['mobile']);
    $post_data='{"mobNo":"'.$req['mobile'].'","msgData":"your otp is '.$otp.' - RupeeBoss.com",
                "source":"WEB"}';
                // print_r($post_data);exit();
            // $url = "http://beta.services.rupeeboss.com/LoginDtls.svc/xmlservice/sendSMS";
            $url = $this::$service_url_static."LoginDtls.svc/xmlservice/sendSMS";
            $result=$this->call_json_data_api($url,$post_data);
            $http_result=$result['http_result'];
            // print_r($http_result);exit();
            $error=$result['error'];
            $obj = json_decode($http_result);
            // print_r($http_result);exit();
            // statusId response 0 for success, 1 for failure
            
            if($obj->{'statusId'}==0){
            Session::put('temp_mob', $req['mobile']);

                return Response::json(array(
                            'data' => true,
                        ));
            }else{
                return Response::json(array(
                            'data' => false,
                        ));
            }
        
        }

    public function express_loan_verify_otp(Request $req){
      $phone = Session::get('temp_contact');
    $express_otp=$req->verify_otp;
    Session::put('contact',$phone);
    if(Session::get('temp_contact'))
    {
     return Response::json(array(
     'data' => "true",
     ));
     }else{
    return Response::json(array(
     'data' => "false",
     ));
        }
 }
}
