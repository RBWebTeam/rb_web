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
class FormController extends Controller
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
        'brokerid'=>$req['brokerid']?$req['brokerid']:'',
        'empid'=>$req['empid']?$req['empid']:'',
        'form'    =>$req['form'] 
        );
    //put curl code here to save in DB
    $url = "http://erp.rupeeboss.com/CustomerWebRequest.aspx";
    //print "<pre>";
     // print_r($post_data);exit();    
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
      // print_r($error);exit();
    curl_close($ch);
    if($http_result==1){
        return 'true';
    }else
        return 'false';
        //return 'true';
    }

    public function p_loan_submit(Request $req){
        try{
        //call api to submit form data
        $input = $req->all();
       
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
         print_r($res_arr);exit();
            $url = "http://erp.rupeeboss.com/CustomerLaravelWebRequest.aspx";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_VERBOSE, 1);
            //curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_FAILONERROR, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_POSTFIELDS,$res_arr);
            $http_result = curl_exec($ch);
            $error = curl_error($ch);
            $http_code = curl_getinfo($ch ,CURLINFO_HTTP_CODE);
          // print_r("\n hiiiiiiiiii");
            //print_r($http_result);exit();
            if($http_result==1){
                if(isset($req['income'])){
                    $income=$req['income'];
                }else{
                    $income=$req['turnover'];
                }
            if($req['product_name']==9){
                $quote_data=DB::select('call  usp_get_personal_loan_quot ("'.$req['dob'].'","'.$req['emp_detail_id'].'","'.$income.'","'.$req['obligation'].'","'.$req['loan_tenure'].'","'.$req['loan_amount'].'")');
            }else if(($req['product_name']==12) || ($req['product_name']==7)){
                $product_id=$req['product_name'];

                $quote_data=DB::select('call  usp_get_bank_quot ("'.$req['property_cost'].'","'.$req['loan_tenure'].'","'.$req['loan_amount'].'","'.$req['gender'].'","'.$req['income'].'","'.$req['obligation'].'","'.$req['dob'].'","'.$req['have_co_applicant'].'","'.$req['CoApplicantIncome'].'","'.$req['co_applicant_obligation'].'","'.$req['Turnover'].'","'.$req['profit_after_tax'].'","'.$req['depreciation'].'","'.$req['remuneration'].'","'.$req['co_applicant_turnover'].'","'.$req['co_applicant_profit_after_tax'].'","'.$req['co_applicant_depreciation'].'","'.$req['co_applicant_remuneration'].'","'.$req['emp_detail_id'].'","'.$product_id.'")');
            }

             $save=new bank_quote_api_request();    
            $id=$save->save_liza($req);
            $data['quote_id']=$id;
            }
            else{
                $quote_data =$req['product_name'];
                return view("something-went-wrong");
                //return "no quotes";
            }
            if($req['product_name'] == 9){
                $data['product'] ="Personal Loan";
                $data['url'] ="apply-personal-loan";
            }elseif($req['product_name'] == 12){
                $data['product'] ="Home Loan";
                $data['url'] ="apply-home-loan";
            }elseif($req['product_name'] == 7){
                $data['product'] ="Loan Against Property";
                $data['url'] ="apply-loan-against-property";
            }
            
            $data['loan_amount'] =$req['loan_amount'];
            $data['quote_data'] =$quote_data;
            //print"<pre>";print_r($data);exit();
            return view('show-quotes')->with($data);
        }catch(\Exception $ee){
            return view('went-wrong');
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
            //print_r($input);exit(); 
            //sms curl to write here
            $otp = mt_rand(100000, 999999);
            //$otp=123456;
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
                // $url = "http://beta.services.rupeeboss.com/LoginDtls.svc/xmlservice/sendSMS";
                    $url = "http://services.rupeeboss.com/LoginDtls.svc/xmlservice/sendSMS";
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_VERBOSE, 1);
                curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_FAILONERROR, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                curl_setopt($ch, CURLOPT_POSTFIELDS,$post_data);
                $http_result = curl_exec($ch);
                $error = curl_error($ch);
                $http_code = curl_getinfo($ch ,CURLINFO_HTTP_CODE);
                $obj = json_decode($http_result);
                // statusId response 0 for success, 1 for failure
                curl_close($ch);
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
        //print_r($req->all());
        //insert into DB
        //$c_date=date("Y-m-d H:i:s");
        try{
        $phone = Session::get('contact');
        $query=DB::table('otp')
            ->where('otp', $req['otp'])
            ->where('contact',$phone)
            ->update(['status' => 1]);
        if($query){

            //p_loan_submit();
             Session::put('user_id',Session::get('verify_id'));
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
        }catch(\Exception $ee){
            return Response::json(array(
                            'data' => false,
                        ));
        }
    }


    function show_quotes(Request $req){
        //print_r($req->all());
       return view('show-quotes')->with($req);
    }

}
