<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Response;
use App\registrationModel;
use Validator;
use Redirect;
use Session;
use URL;
use Mail;
use Illuminate\Support\Facades\Hash;
class LoginController extends CallApiController
{
      public function login(Request $request){
         
  
          $query=new registrationModel();
          $value=$query->where('email','=',$request->email_login)
          ->where('password','=',md5($request->login_pass))
          ->first();
          	if($value!=''){ 
		          	  $request->session()->put('email',$value->email);
		          	  $request->session()->put('contact',$value->contact);
		              $request->session()->put('user_id',$value->id);
		              $request->session()->put('name',$value->username);
		              $request->session()->put('is_login',1);

		             

		          	  return   array('username' =>$value->username,'error'=>0);
                  
                }else{
                     
                     return   array('error'=>1);
                 // Session::flush(); 
                }


       }


      public function register_form(Request $req){


 $val =Validator::make($req->all(), [
                'name' => 'required|min:5',
                'contact' => 'required|regex:/^[0-9]{10}+$/',
                'email' => 'required|email|unique:user_registration',
                'password' =>'required|min:6',
                'confirm_password' => 'required|min:6|same:password',
                            ]);

           if ($val->fails()){

              return response()->json($val->messages(), 200);
           }else{


             $query=new registrationModel();
                  $query->username=$req->name;
                  $query->email=$req->email;
                  $query->contact=$req->contact;
                  $query->password=md5($req->password);
                  $query->provider_user_id=0;
                  $query->provider=0;
                  $query->created_at=date('Y-m-d H:i:s');

               if($query->save()) {
                  $req->session()->put('email',$query->email);
                  $req->session()->put('contact',$query->contact);
                  $req->session()->put('user_id',$query->id);
                  $req->session()->put('name',$query->username);
                  $req->session()->put('is_login',1);
                  DB::table('customer_details')->insert(['user_id' =>$query->id]);

                  $error="1";
                  echo $error;
        }
     }
 }
      //added by manish to logout
        public function logout(Request $req){
          $req->session()->flush();

   // google logout function 
    
          return redirect('/');
        }



        public function forgot_password(Request $req){
             $query=new registrationModel();
              $val =Validator::make($req->all(), [
                'email' => 'required|email',
                            ]);
           if ($val->fails()){
              return response()->json($val->messages(), 200);
           }else{
              $value=$query->where('email','=',$req->email)
              ->first();
              if($value!=''){
                           
                    $password = mt_rand(100000, 999999);
                $data ="Please use ".$password." as password to login for ur email ".$req->email."";
                $email = $req->email;
                $mail = Mail::send('email_view',['data' => $data], function($message) use($email) {
                $message->from('wecare@rupeeboss.com', 'RupeeBoss');
                $message->to($email)
                ->subject('Your New Password');
                });
                    print_r($mail);
                    if(Mail::failures()){
                            $error=3;
                            echo $error;
                    }else{

                    $query=DB::table('user_registration')
                              ->where('email', $req->email)
                              ->update(['password' => md5($password)]);
                            $error=2;
                            echo $error;
                    }
                       
                       // $error=2;
                       //       echo $error;
                 }else{
                  
                    $error=1;
                    echo $error;
                 }

                }
        }

    public function emp_login(Request $req){
      // print_r($req->all());exit();
      $url='http://api.rupeeboss.com/BankAPIService.svc/LoginERP';
      $reqs=json_encode($req->all());
      $result=$this->call_json_data_api($url,$reqs);
      $http_result=$result['http_result'];
      $error=$result['error'];
      //print_r($http_result);exit();
      $str1=str_replace('"', '', $http_result);
      $str=explode('@',$str1);
      //print_r($http_result);exit();
      if(strlen($http_result)>5){
        $redirect_url='http://erp.rupeeboss.com/home.aspx?UserId='.$str[0].'&UserName='.$str[1].'&EmpCode='.$str[2].'&BrokerId='.$str[3].'';



       // print_r($redirect_url);exit();


       return Response::json(array('url' => $redirect_url));
      }else{
      return Response::json(array(
                                'url' => false,
                            ));
       }
    }

}
