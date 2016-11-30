<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\Http\Requests;
use Session;
use Auth;
use DB;
class FormController extends Controller
{
	function sidebar(Request $req){

		$input = $req->all();
		$post_data = array(
	    'name'   => $req['name'],
	    'contact'=> $req['contact']?$req['contact']:'',
	    'email'    => $req['email']?$req['email']:'',
		'form'	  =>$req['form'] 
	    );

		//put curl code here to save in DB
    $url = "http://beta.erp.rupeeboss.com/CustomerWebRequest.aspx";
    //print "<pre>";
    // print_r($post_data);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_VERBOSE, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FAILONERROR, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
     
    $http_result = curl_exec($ch);
    $error = curl_error($ch);
    $http_code = curl_getinfo($ch ,CURLINFO_HTTP_CODE);
     //print_r($http_result);exit();
    curl_close($ch);
	if($http_result==1){
		return 'true';
	}else
		return 'false';
		//return 'true';
	}

    public function p_loan_submit(Request $req){
        $input = $req->all();
        print "<pre>";
        print_r($input);
        return "test success";
    }
    
     public function otp(Request $req){
        //print_r("expression");exit();
        $input = $req->all();
        //sms curl to write here
        //$otp = mt_rand(100000, 999999);
        $otp=123456;
        //CommanDataLoad.Send_SMS_Save_Data('mobileno', 'SMSBody', 'ip', 'RBERP');
    //$input->session()->put('contact', $input['contact']);
        Session::put('contact', $req['contact']);
        $value = Session::get('contact');
        //ends 
        //insert into DB
        $query=DB::table('otp')->insertGetId(
        ['name' => $req['name'],'contact'=>$req['contact'],'email'=>$req['email']
        ,'source'=>'web_user','product'=>$req['product'],'otp'=>$otp,'status'=>'0','created_at'=> date("Y-m-d H:i:s")]
        );
        Session::put('login_id',$query);
        if($query){
            return Response::json(array(
                            'data' => true,
                        ));
        }else{
            return Response::json(array(
                            'data' => false,
                        ));
        }
    }
     public function otp_verify(Request $req){
        //print_r($req->all());
        //insert into DB
        //$c_date=date("Y-m-d H:i:s");
        $phone = Session::get('contact');
        $query=DB::table('otp')
            ->where('otp', $req['otp'])
            ->where('contact',$phone)
            ->update(['status' => 1]);
        if($query){

            //p_loan_submit();
             Session::put('user_id',Session::get('login_id'));
             Session::put('is_login',1);
             //print_r(Session::get('user_id'));
            return Response::json(array(
                            'data' => true,
                        ));
        }else{
            return Response::json(array(
                            'data' => false,
                        ));
        }
    }

}
