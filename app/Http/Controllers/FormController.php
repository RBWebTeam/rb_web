<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Response;
use App\Http\Requests;
use Session;
use Auth;
use DB;
use Redirect;
use App\registrationModel;
use App\bank_quote_api_request;
use App\Http\Controllers\EquifaxController;
class FormController extends CallApiController
{
function sidebar(Request $req){

        $input = $req->all();

        $post_data = array(
        'name'   => $req['name'],
        'contact'=> $req['contact']?$req['contact']:'',
        'email'    => $req['email']?$req['email']:'',
        'Principal_Amt'=>$req['Principal_Amt']?$req['Principal_Amt']:'',
        'Interest_Rate'=>$req['Interest_Rate']?$req['Interest_Rate']:'',
        'Remaining_Tenure'=>$req['Remaining_Tenure']?$req['Remaining_Tenure']:'',
        'brokerid'=>Session::get('brokerid')?Session::get('brokerid'):'',
        'empid'=>Session::get('empid')?Session::get('empid'):'',
        'source'=>Session::get('source')?Session::get('source'):'',
        'form'    =>$req['form'] 
        );
    //call API here to save in DB
        $post=json_encode($post_data);
        // print_r($post);exit();
       $url = $this::$url_static."BankAPIService.svc/GetCustomerWebRequest";
    $result=$this->call_json_data_api($url,$post);
    $http_result=$result['http_result'];
    $error=$result['error'];
    if($http_result==1){
        return 'true';
    }else
        return 'false';
      
    }

    public function p_loan(Request $req){
       // print_r($req->all());exit();
        $equifax=new EquifaxController();
        $score=$equifax->equifax_query_pl($req);
         
        $va=$score['score'];
        $scorarr = json_decode(json_encode($va), TRUE);
        $quotes=$this->p_loan_score($req,$scorarr[0]);
        return $quotes;
    }

    public function p_loan_submit(Request $req){
          
            
      Session::forget('quote_id');
        try{
        //call api to submit form data
            $inputquotes = $req->all();
            $input = $req->all();

            $new_array = array('customer_contact' => Session::get('contact'), 'customer_name' => Session::get('name'),'customer_email' => Session::get('email'));
            // print_r($new_array);exit();
           $update_id=Session::get('verify_id');
             $update_user=DB::table('user_registration')
             ->where('id',$update_id)
             ->update(['provider'=>'WEBSITE-VERIFIED']);
            //replacing city name with id
            if($req['city_name']){
                $city_id=DB::table('city_master')->select('city_id')
                ->where('city_name', 'LIKE', '%'.$req['city_name'].'%')
                ->get();
                $input['city_name']=(string)$city_id[0]->city_id;
                //adding city_id to post data
            } 
            $res_arr=array_merge($input,$new_array);
            // send empcode if its a refferal
            $res_arr['empid']=Session::get('empid')?Session::get('empid'):'';
             $res_arr['brokerid']=Session::get('brokerid')?Session::get('brokerid'):'';
            $json_data=json_encode($res_arr);
            $prod_id=$req['product_name'];

            // if($prod_id==7 || $prod_id==9 || $prod_id==12){
            //         $url="http://api.rupeeboss.com/BankAPIService.svc/GetCustomerLizaWebReqTest";
            // }else{
            //         $url="http://api.rupeeboss.com/BankAPIService.svc/GetCustomerLizaWebReqTest";
            // }
            // $result=$this->call_json_data_api($url,$json_data);
            // $http_result=$result['http_result'];
               
            // $error=$result['error'];
            // if($http_result==1){                
                $quote_data=$this::get_quotes($req);

                $save=new bank_quote_api_request();    
                $id=$save->save_liza($req);
                Session::put('quote_id',$id);
                $data['quote_id']=$id;

                // print_r($data['quote_id']);exit();
            // }else{
            //     $quote_data =$req['product_name'];
            //     return view("went-wrong");
            // }
            if($req['product_name'] == 9){
              // print_r($req['product_name']);exit();
                $data['product'] ="Personal Loan";
                $data['url'] ="apply-personal-loan";
            }elseif($req['product_name'] == 12){
                $data['product'] ="Home Loan";
                $data['url'] ="apply-home-loan";
            }elseif($req['product_name'] == 7){
                $data['product'] ="Loan Against Property";
                $data['url'] ="apply-loan-against-property";
            }elseif($req['product_name'] == 4){
                $data['product'] ="Car Loan";
                $data['url'] ="apply-car-loan";
            }elseif($req['product_name'] == 1){
               $data['product'] ="Used Car Loan";
               $data['url'] ="apply-used-car-loan";
            }elseif($req['product_name'] == 13){
               $data['product'] ="Business Loan";
               $data['url'] ="new-business-loan";
            }
            $data['loan_amount'] =$req['loan_amount'];

            $data['quote_data'] =$quote_data;
            // print_r($data['quote_data'] );exit();
           
            if ($quote_data) {
             
               $Bank_Id=$data['quote_data'][0]->Bank_Id;
               $loan_eligible=$data['quote_data'][0]->loan_eligible;
               $roi=$data['quote_data'][0]->roi;
               $LoanTenure=$data['quote_data'][0]->LoanTenure;
               $processingfee=$data['quote_data'][0]->processingfee;
           }
           else{
            $Bank_Id="";
               $loan_eligible="";
               $roi="";
               $LoanTenure="";
               $processingfee="";
           }
                  
                
                // $data['score']=$true_val;
            $returnHTML = view('show-quotes')->with($data)->render();
            return response()->json(array('success' => true,'quote_id'=>$id,'Bank_Id'=>$Bank_Id,'loan_eligible'=>$loan_eligible,'roi'=>$roi,'LoanTenure'=>$LoanTenure,'processingfee'=>$processingfee,'html'=>$returnHTML));
        
        }catch(\Exception $ee){
            return $ee;
        }
    }

    /*score loan*/
    public function p_loan_score(Request $req,$ar){
          
            
      Session::forget('quote_id');
        try{
        //call api to submit form data
            $inputquotes = $req->all();
            $input = $req->all();

            $new_array = array('customer_contact' => Session::get('contact'), 'customer_name' => Session::get('name'),'customer_email' => Session::get('email'));
            // print_r($new_array);exit();
           $update_id=Session::get('verify_id');
             $update_user=DB::table('user_registration')
             ->where('id',$update_id)
             ->update(['provider'=>'WEBSITE-VERIFIED']);
            //replacing city name with id
            if($req['city_name']){
                $city_id=DB::table('city_master')->select('city_id')
                ->where('city_name', 'LIKE', '%'.$req['city_name'].'%')
                ->get();
                $input['city_name']=(string)$city_id[0]->city_id;
                //adding city_id to post data
            } 
            $res_arr=array_merge($input,$new_array);
            // send empcode if its a refferal
            $res_arr['empid']=Session::get('empid')?Session::get('empid'):'';
             $res_arr['brokerid']=Session::get('brokerid')?Session::get('brokerid'):'';
            $json_data=json_encode($res_arr);
            $prod_id=$req['product_name'];

            // if($prod_id==7 || $prod_id==9 || $prod_id==12){
            //         $url="http://api.rupeeboss.com/BankAPIService.svc/GetCustomerLizaWebReqTest";
            // }else{
            //         $url="http://api.rupeeboss.com/BankAPIService.svc/GetCustomerLizaWebReqTest";
            // }
            // $result=$this->call_json_data_api($url,$json_data);
            // $http_result=$result['http_result'];
               
            // $error=$result['error'];
            // if($http_result==1){                
                $quote_data=$this::get_quotes($req);

                $save=new bank_quote_api_request();    
                $id=$save->save_liza($req);
                Session::put('quote_id',$id);
                $data['quote_id']=$id;

                // print_r($data['quote_id']);exit();
            // }else{
            //     $quote_data =$req['product_name'];
            //     return view("went-wrong");
            // }
            if($req['product_name'] == 9){
              // print_r($req['product_name']);exit();
                $data['product'] ="Personal Loan";
                $data['url'] ="apply-personal-loan";
            }elseif($req['product_name'] == 12){
                $data['product'] ="Home Loan";
                $data['url'] ="apply-home-loan";
            }elseif($req['product_name'] == 7){
                $data['product'] ="Loan Against Property";
                $data['url'] ="apply-loan-against-property";
            }elseif($req['product_name'] == 4){
                $data['product'] ="Car Loan";
                $data['url'] ="apply-car-loan";
            }elseif($req['product_name'] == 1){
               $data['product'] ="Used Car Loan";
               $data['url'] ="apply-used-car-loan";
            }elseif($req['product_name'] == 13){
               $data['product'] ="Business Loan";
               $data['url'] ="new-business-loan";
            }
            $data['loan_amount'] =$req['loan_amount'];

            $data['quote_data'] =$quote_data;
            // print_r($data['quote_data'] );exit();
           
            if ($quote_data) {
             
               $Bank_Id=$data['quote_data'][0]->Bank_Id;
               $loan_eligible=$data['quote_data'][0]->loan_eligible;
               $roi=$data['quote_data'][0]->roi;
               $LoanTenure=$data['quote_data'][0]->LoanTenure;
               $processingfee=$data['quote_data'][0]->processingfee;
           }
           else{
            $Bank_Id="";
               $loan_eligible="";
               $roi="";
               $LoanTenure="";
               $processingfee="";
           }
                  
                if(isset($ar)){
                    $data['score']=$ar;
                }else{
                   $data['score']=0;
                }
                // $data['score']=$true_val;
            $returnHTML = view('show-quotes')->with($data)->render();
            return response()->json(array('success' => true,'quote_id'=>$id,'Bank_Id'=>$Bank_Id,'loan_eligible'=>$loan_eligible,'roi'=>$roi,'LoanTenure'=>$LoanTenure,'processingfee'=>$processingfee,'html'=>$returnHTML));
        
        }catch(\Exception $ee){
            return $ee;
        }
    }

    
    
     public function otp(Request $req){
        try{
              $qu=new registrationModel();
              $emailcheck=$qu->where('email','=',$req->email)
              ->count();
           
              if($emailcheck!=0){
                 return Response::json(array(
                                'emailID' => true,
                                 ));
              }else{

            $input = $req->all();
            $otp = mt_rand(100000, 999999);
            //setting details to session to retrive at time of posting
            Session::put('contact', $req['contact']);
            Session::put('name', $req['name']);
            Session::put('email', $req['email']);
            // save user but not verified till now
            $qu=new registrationModel();
                      $qu->username=$req['name'];
                      $qu->email= $req['email'];
                      $qu->contact= $req['contact'];
                      $qu->password= md5($req['set_pwd']);
                      $qu->provider_user_id=0;
                      $qu->provider='WEBSITE-NOT-VERIFIED';
                      $qu->created_at=date("Y-m-d H:i:s");
            if($qu->save()) {
                   
           Session::put('verify_id',$qu->id);
           Session::put('user_id',$qu->id);
                 // $req->session()->put('is_login',1);
            DB::table('customer_details')->insert(['user_id' =>$qu->id]);
                     
            }
            // user entered 
            $value = Session::get('contact');
            //ends 
            //insert into DB
            $query=DB::table('otp')->insertGetId(
            ['name' => $req['name'],'contact'=>$req['contact'],'email'=>$req['email']
            ,'source'=>'web_user','product'=>$req['product'],'otp'=>$otp,'status'=>'0','created_at'=> date("Y-m-d H:i:s")]
            );
            Session::put('login_id',$query);
            if($query){
                //calling service to send sms 
                $post_data='{"mobNo":"'.$req['contact'].'","msgData":"your otp is '.$otp.' - RupeeBoss.com",
                    "source":"WEB"}';
                $url = $this::$service_url_static."LoginDtls.svc/xmlservice/sendSMS";
                $result=$this->call_json_data_api($url,$post_data);
                $http_result=$result['http_result'];
                $error=$result['error'];
                $obj = json_decode($http_result);
                if($obj->{'statusId'}==0){
                    return Response::json(array(
                                'data' => true,
                            ));
                }else{
                    return Response::json(array(
                                'data' => false,
                            ));
                }
            
            }else{
                 return Response::json(array(
                                'data' => false,
                            ));
            }

            }
        }catch(\Exception $ee){
            return Response::json(array(
                            'data' => false,
                        ));
        }

}
     public function otp_verify(Request $req){
        try{
        $phone = Session::get('contact');
        $query=DB::table('otp')
            ->where('otp', $req['otp'])
            ->where('contact',$phone)
            ->update(['status' => 1]);
        if($query){
            Session::put('user_id',Session::get('verify_id'));
            Session::put('is_login',1);
            return Response::json(array(
                            'data' => true,
                        ));
        }else{
            return Response::json(array(
                            'data' => false,
                        ));
        }
        }catch(\Exception $ee){
            return Response::json(array(
                            'data' => false,
                        ));
        }
    }
    function get_quotes($req){
        try{
          if(isset($req['income'])){
                            $income=$req['income'];
                }else{
                    $income=$req['turnover'];
                }
                if($req['co_emp_detail']=='salaried'){
                    $req['co_emp_detail']=1;
                }elseif($req['co_emp_detail']){
                    $req['co_emp_detail']=2;
                }
                      //  $req['co_dob']=($req['co_dob'])?$req['co_dob']:NULL;
                if($req['product_name']==9){
                    $quote_data=DB::select('call  usp_get_personal_loan_quot ("'.$req['dob'].'","'.$req['emp_detail_id'].'","'.$income.'","'.$req['obligation'].'","'.$req['loan_tenure'].'","'.$req['loan_amount'].'")');
                }else if($req['product_name']==4 || $req['product_name']==1){
                   $quote_data=DB::select('call  usp_get_car_loan_quot("'.$req['car_cost'].'","'.$req['loan_tenure'].'","'.$req['loan_amount'].'","'.$req['income'].'","'.$req['obligation'].'","'.$req['dob'].'","'.$req['turnover'].'","'.$req['profit_after_tax'].'","'.$req['depreciation'].'","'.$req['remuneration'].'","'.$req['emp_detail_id'].'","'.$req['product_name'].'")');
                }else if(($req['product_name']==12) || ($req['product_name']==7)){
                    $product_id=$req['product_name'];
                    $quote_data=DB::select('call  usp_get_bank_quot_test("'.$req['property_cost'].'","'.$req['loan_tenure'].'","'.$req['loan_amount'].'","'.$req['gender'].'","'.$req['income'].'","'.$req['obligation'].'","'.$req['dob'].'","'.$req['have_co_applicant'].'","'.$req['co_applicant_income'].'","'.$req['co_applicant_obligation'].'","'.$req['turnover'].'","'.$req['profit_after_tax'].'","'.$req['depreciation'].'","'.$req['remuneration'].'","'.$req['co_applicant_turnover'].'","'.$req['co_applicant_profit_after_tax'].'","'.$req['co_applicant_depreciation'].'","'.$req['co_applicant_remuneration'].'","'.$req['emp_detail_id'].'","'.$req['co_dob'].'","'.$req['co_emp_detail'].'","'.$product_id.'")');
                }else if($req['product_name']==13){
                  
                  $emi_arr=$req['emi'];
                  $max=0;
                 // print_r(sizeof($emi_arr));exit();
                  for($index=0;$index<sizeof($emi_arr);$index++){
                      if($emi_arr[$index]>$max)
                      { 
                        $max=$emi_arr[$index];
                        $max_key=$index;
                      }
                  }
                      if(isset($req->Bank_Id)){
                          $quote_data=DB::select(' call usp_get_bankwise_business_loan_quot ("'.$req['applicant_dob'].'","'.$req['emp_detail'].'","'.$req['turnover'].'","'.$req['profit_after_tax'].'","'.$req['depreciation'].'","'.$req['partner_remuneration'].'","'.$req['interest_paid'].'","'.$req['emi'][$max_key].'","'.$req['no_of_emi_paid'][$max_key].'","'.$req['loan_tenure'].'","'.$req['loan_amount'].'","'.$req['date'].'","'.$req->Bank_Id.'")');
        
                         
                                     
        
                      }else{
        
                      
                    $quote_data=DB::select('call  usp_get_business_loan_quot ("'.$req['applicant_dob'].'","'.$req['emp_detail'].'","'.$req['turnover'].'","'.$req['profit_after_tax'].'","'.$req['depreciation'].'","'.$req['partner_remuneration'].'","'.$req['interest_paid'].'","'.$req['emi'][$max_key].'","'.$req['no_of_emi_paid'][$max_key].'","'.$req['loan_tenure'].'","'.$req['loan_amount'].'","'.$req['date'].'")');
        
                  }
                }
                return $quote_data;
                }catch(\Exception $ee){
                  return $ee->getTraceAsString();
                }
    }
        function show_quotes(Request $req){
          // print_r($req->all());exit();
       return view('show-quotes')->with($req);
    }

    



       function quoteshead(Request $req){

 
                $input = $req->all();

              
              // print_r($input);
              //  exit;



              if (Session::has('email')){
            $new_array = array('customer_contact' => Session::get('contact'), 'customer_name' => Session::get('name'),'customer_email' => Session::get('email'));
           $update_id=Session::get('verify_id');
             $update_user=DB::table('user_registration')
             ->where('id',$update_id)
             ->update(['provider'=>'WEBSITE-VERIFIED']);
            //replacing city name with id
            if($req['city_name']){
                $city_id=DB::table('city_master')->select('city_id')
                ->where('city_name', 'LIKE', '%'.$req['city_name'].'%')
                ->get();
                $input['city_name']=(string)$city_id[0]->city_id;
                //adding city_id to post data
            } 
            $res_arr=array_merge($input,$new_array);
            // send empcode if its a refferal
            $res_arr['empid']=Session::get('empid')?Session::get('empid'):'';
             $res_arr['brokerid']=Session::get('brokerid')?Session::get('brokerid'):'';
             $res_arr['source']=Session::get('source')?Session::get('source'):'';
            $json_data=json_encode($res_arr);
             $quote_id=Session::get('quote_id');
            $prod_id=$req['product_name'];
            if($prod_id==7 || $prod_id==9 || $prod_id==12){
                    $url=$this::$url_static."BankAPIService.svc/GetCustLizaWebReq";
            }else{
                    $url=$this::$url_static."BankAPIService.svc/GetCustomerLizaWebReq";
            }
            $result=$this->call_json_data_api($url,$json_data);
            $http_result=$result['http_result'];
            $error=$result['error'];
 
            if($http_result==1){
                return Response::json(array(
                                'status'=>true,
                                'url' =>$input['url'].'&is_liza=1&qoutid='.$quote_id,
                                 
                            ));
                   
                   
            }else{

                     return Response::json(array(
                                'status'=>false,
                               
                                
                            ));
                  
            }

            }


             
          

       }

}
