<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Response;
use App\bank_quote_api_request;
class ExperianController extends Controller
{

	public function call(Request $req){
        $post_data=$req->all();
        $data=json_encode($post_data);
      //  print "<pre>";
    // print_r($post_data);exit();
	$url = "http://api.rupeeboss.com/CreditAPI.svc/LandingPageSubmit";    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_VERBOSE, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FAILONERROR, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
     
    $http_result = curl_exec($ch);
    $error = curl_error($ch);
    $http_code = curl_getinfo($ch ,CURLINFO_HTTP_CODE);
     print_r($http_result);print_r($error);exit();
    curl_close($ch);
	}
}