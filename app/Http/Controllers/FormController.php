<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\Http\Requests;

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
        $input = $req->all();
        // print "<pre>";
        // print_r($input);
        return Response::json(array(
                            'data' => true,
                        ));

    }

}
