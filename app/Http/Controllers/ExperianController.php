<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Response;
use App\experian_request_model;
class ExperianController extends Controller
{

	public function call(Request $req){
        $qs=0;
        $post_data=$req->all();

        //unsetting terms and condition as no need to save in DB
         unset($post_data['terms']);
         unset($post_data['authorize']);
        $data=json_encode($post_data);
      // print "<pre>";
        // print_r($post_data);exit();
        
        $save=new experian_request_model(); 
        $id=$save->store($req);
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
            if($x){
               // print_r($http_result);exit();
                return $this->gen_ques($new_data,0);

            }else{
             print_r('User can not be verified, First Api failed.');
            }
        }
	}

    public function gen_ques($new_data,$qs){
        //$str='"'..'"';
           // print_r($req->all());
        
            $arr = '{"stage1hitid":"'.$new_data[0].'","stage2hitid":"'.$new_data[1].'","stage2sessionid":"'.$new_data[3].'","answer":"","questionId":"'.$qs.'"}';
        
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
        $s=str_replace('"','', $http_result);
        $str=str_replace('\\', '', $s);
        $str2=explode(',', $str);
        //print_r($str2);exit();

        $res1=json_decode($http_result);
        $res=json_decode($res1);
           // print_r($res->questionToCustomer->question);exit();
            
        return view('experian-question',['result'=>$res,'stage1hitid'=>$new_data[0],'stage2hitid'=>$new_data[1],'stage2sessionid'=>$new_data[3],'qs'=>$qs]);
    }


    public function gen_ques2(Request $req){
       // print_r($req->qs1);exit();
        $arr = '{"stage1hitid":"'.$req->stage1hitid.'","stage2hitid":"'.$req->stage2hitid.'","stage2sessionid":"'.$req->stage2sessionid.'","answer":"'.$req->qs1.':'.$req->qs2.'","questionId":"'.$req->question_count.'"}';
        
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
        $s=str_replace('"','', $http_result);
        $str=str_replace('\\', '', $s);
        $str2=explode(',', $str);
        //print_r($str2);exit();

        $res1=json_decode($http_result);
        $res=json_decode($res1);
           // print_r($res->questionToCustomer->question);exit();
                //rendering view
        $returnHTML = view('experian-question2',['result'=>$res,'stage1hitid'=>$req->stage1hitid,'stage2hitid'=>$req->stage2hitid,'stage2sessionid'=>$req->stage2sessionid,'qs'=>$req->question_count])->render();
        return response()->json(array('success' => true,'html'=>$returnHTML));   
    }


}