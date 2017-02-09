<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Response;
use Session;
use App\experian_request_model;
use App\experian_responseModel;
class ExperianController extends Controller
{

	public function call(Request $req){
        try{
            $qs=0;
            $post_data=$req->all();
            // print "<pre>";
            // print_r($post_data);exit();
            //unsetting terms and condition as no need to save in DB
            Session::put('f_name_cScore', $req['firstName']." ".$req['middleName']);
            Session::put('l_name_cScore',$req['surName']);
            Session::put('pan_cScore',$req['panNo']);
            Session::put('email_cScore',$req['email']);
             Session::put('contact_cScore',$req['mobileNo']);
             unset($post_data['terms']);
             unset($post_data['authorize']);
            $data=json_encode($post_data);
            // print "<pre>";
             print_r("call usp_get_credit_score ('".$req['panNo']."','".$req['mobileNo']."','".$req['email']."')");exit();
             $quote_data=DB::select("call usp_get_credit_score ('".$req['panNo']."','".$req['mobileNo']."','".$req['email']."')");
            // print_r($quote_data[0]->credit_score);exit();
             if($quote_data[0]->credit_score >0){
               // print_r($quote_data[0]->credit_score);exit();
                $stored_score=$quote_data[0]->credit_score;
                return $this->show_stored_record($stored_score);
             }
             print_r("hiii".$quote_data[0]->credit_score);exit();
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
           // print_r($error);exit();
            if($error){
                return "something went wrong";
            }else{
                $x=str_replace('"','',$http_result);
                $new_data=explode('~', $x);
                
                
                if($x){
                   // print_r($http_result);exit();
                    Session::put('Lead_Id',$new_data[6]);
                    return $this->gen_ques($new_data,0);


                }else{
                 return view('went-wrong');
                }
            }
        }catch(\Exception $e){
            return ($e);
            return view('went-wrong');
        }
	}

    public function gen_ques($new_data,$qs){
        //$str='"'..'"';
           // print_r($req->all());
        try{
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
        }catch(\Exception $e){
            return $e;
        }
    }


    public function gen_ques2(Request $req){
       
        try{
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
            

            $res1=json_decode($http_result);
            $res=json_decode($res1);
            if($res->questionToCustomer!=null || $res->responseJson=='passedReport'){
             $returnHTML = view('experian-question2',['result'=>$res,'stage1hitid'=>$req->stage1hitid,'stage2hitid'=>$req->stage2hitid,'stage2sessionid'=>$req->stage2sessionid,'qs'=>$req->question_count,'raw'=>$http_result])->render();
            }else{
                 $returnHTML = view('went-wrong');
                 return response()->json(array('success' => false,'html'=>$returnHTML));
            }

            //getting score and saving response from experian
           


            return response()->json(array('success' => true,'html'=>$returnHTML)); 
        }catch(\Exception $e){
            return $e;
           $returnHTML = view('went-wrong');
            return response()->json(array('success' => false,'html'=>$returnHTML));
        }  
    }
public function show_stored_record($data){
    return view('stored-score')->with('data',$data);
    
}   
    


}