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
  
    public function credit_report(){
      $keywords='credit report free,credit score,free credit report and score,how to get free credit report ';
      $data['title']='Check your Credit Score online on Rupeeboss.com';
      $data['description']='Check Your Free Credit Score, Report and Insights. Get the info you need to take control of your credit from Rupeeboss.com';

      $voucher=DB::table('experian_vouchers')
      ->select('voucher')
      ->orderBy('last_used', 'ASC')
      ->limit(1)
      ->get();
      $data['voucher']=$voucher[0]->voucher;
     // print_r($data['voucher']);exit();

      $data['telephone']=DB::table('experian_telephonetype')
      ->select('Telephone_Name','Telephone_Value')
      ->get();
      $data['city'] = DB::table('city_master')
      ->select('City_Name','state_id','City_Id')
      ->get();
      $data['state'] = DB::table('experian_state_master')
      ->select('State_Id','State_Code','State_Name')
      ->orderBy('State_Name', 'asc')
      ->get();
      $contact=Session::get('contact');
      $login=Session::get('is_login');
       if($login){
          //if already login then remove contact from old seessions
          Session::forget('contact');
          }

      if($contact || $login){
          return view('credit-report')->with($data)->with('keywords',$keywords);
        }else{
           return view('credit-report-otp');
        }
     
     //  print "<pre>";
      //print_r($data['state']);exit();
     
    }
	public function call(Request $req){
        try{
            $qs=0;
            $post_data=$req->all();
            //print_r($post_data);exit();
            $voucher=$post_data['voucherCode'];
            $update_voucher=DB::select(" call usp_update_experian_voucher ('".$voucher."',1)");
            // $post_data['voucherCode']=$update_voucher;
            // $req['voucherCode']=$update_voucher;
            
            // print "<pre>";
            // print_r($update_voucher);exit();
            //unsetting terms and condition as no need to save in DB
            Session::put('f_name_cScore', $req['firstName']." ".$req['middleName']);
            Session::put('l_name_cScore',$req['surName']);
            Session::put('pan_cScore',$req['panNo']);
            Session::put('email_cScore',$req['email']);
             Session::put('contact_cScore',$req['mobileNo']);
             unset($post_data['terms']);
             unset($post_data['authorize']);
             $today=date("Y-m-d H:i:s");
            $data=json_encode($post_data);
            // print "<pre>";
            
             $quote_data=DB::select("SELECT credit_score,html_report FROM experian_response  WHERE (pan='".$req['panNo']."' and ( contact='".$req['mobileNo']."' or email ='".$req['email']."') 
                    and expiry_date >= '".$today."');");
              
             if($quote_data){
               
                $stored_score=$quote_data[0]->credit_score;
                $html=$quote_data[0]->html_report;
                return $this->show_stored_record($stored_score,$htm);
             }
            
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

              $log=DB::table('experian_response_failed_case')->insert(['contact'=>Session::get('contact_cScore'), 'email'=>Session::get('email_cScore'), 'pan'=>Session::get('pan_cScore'),'response'=>$error, 'created_at'=>date("Y-m-d H:i:s")]);
              //return $error;
                return view('went-wrong');
            }else{
                $x=str_replace('"','',$http_result);
                $new_data=explode('~', $x);
                //print_r($new_data);exit();
                if($new_data[0]){

                  //$new_data=["empty","3412","eqweqwe","wrweriweruoi"];
                  
                  $saved_req=$this->update_req_with_hitId($new_data,$id);
                }else{
                   $log=DB::table('experian_response_failed_case')->insert(['contact'=>Session::get('contact_cScore'), 'email'=>Session::get('email_cScore'), 'pan'=>Session::get('pan_cScore'),'response'=>"Null Response", 'created_at'=>date("Y-m-d H:i:s")]);

                   return view('no-record-found');
                }
                
                if($x){
                    //return ($http_result);exit();

                    Session::put('Lead_Id',$new_data[6]);
                    return $this->gen_ques($new_data,0);


                }else{
                  $log=DB::table('experian_response_failed_case')->insert(['contact'=>Session::get('contact_cScore'), 'email'=>Session::get('email_cScore'), 'pan'=>Session::get('pan_cScore'),'response'=>$http_result, 'created_at'=>date("Y-m-d H:i:s")]);


                 return view('no-record-found');
                }
            }
        }catch(\Exception $e){
            //return $e;
            return view('went-wrong');
            //return view('went-wrong');
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
              // print_r($res);exit();

            //if record already in buero of experian
            if( $res->responseJson=='passedReport'){

             $result=$res->showHtmlReportForCreditReport;
            $returnHTML = ['result'=>$res,'stage1hitid'=>$new_data[0],'stage2hitid'=>$new_data[1],'stage2sessionid'=>$new_data[3],'qs'=>$qs,'raw'=>$http_result];
            return view('experian-question-bypassed')->with($returnHTML);
//             return response()->json(array('success' => true,'html'=>$returnHTML)); 

            }
            else{
              return view('experian-question',['result'=>$res,'stage1hitid'=>$new_data[0],'stage2hitid'=>$new_data[1],'stage2sessionid'=>$new_data[3],'qs'=>$qs]);
            }

        }catch(\Exception $e){
          $log=DB::table('experian_response_failed_case')->insert(['contact'=>Session::get('contact_cScore'), 'email'=>Session::get('email_cScore'), 'pan'=>Session::get('pan_cScore'),'response'=>$http_result, 'created_at'=>date("Y-m-d H:i:s")]);
            return view('went-wrong');
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
                $log=DB::table('experian_response_failed_case')->insert(['contact'=>Session::get('contact_cScore'), 'email'=>Session::get('email_cScore'), 'pan'=>Session::get('pan_cScore'),'response'=>$res->responseJson, 'created_at'=>date("Y-m-d H:i:s")]);
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



  public function show_stored_record($data,$html){
    return view('stored-score')->with('data',$data)->with('html',$htm);
    
  }   
    
  public function update_req_with_hitId($parse,$id){
   
             $save=DB::table('experian_request')
              ->where('id',$id)
              ->update(['stage1hitid' => $parse[0],'stage2hitid' => $parse[1],'stage2sessionid' => $parse[3]]);  
       
  }   


}