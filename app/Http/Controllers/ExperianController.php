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
        $qs=0;
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
     
    curl_close($ch);
    if($error){
        return "something went wrong";
    }else{
        $x=str_replace('"','',$http_result);
        $new_data=explode('~', $x);
        //print_r($new_data);exit();
        $result=$this->gen_quest($new_data,$qs);
        $qs++;
        print_r($result);
    }
	}

    public function gen_quest($new_data,$qs){
    //$str='"'..'"';
    $arr = '{"stage1hitid":"'.$new_data[0].'","stage2hitid":"'.(string)$new_data[1].'","stage2sessionid":"'.$new_data[3].'","answer":"","questionId":"'.$qs.'"}';
    //generate question api
    $url = "http://api.rupeeboss.com/CreditAPI.svc/generateQuestionForConsumer";    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_VERBOSE, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FAILONERROR, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $arr);
     
    $http_result = curl_exec($ch);
    $error = curl_error($ch);
    $http_code = curl_getinfo($ch ,CURLINFO_HTTP_CODE);
    curl_close($ch);
    return $http_result;
    }
}