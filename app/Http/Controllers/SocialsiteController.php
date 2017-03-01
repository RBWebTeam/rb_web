<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Contracts\User as ProviderUser;
use Illuminate\Http\Request;

use App\Http\Requests;
//use App\Http\Controllers\Controller;
use Socialite;
use App\registrationModel;
use Validator;
use Redirect;
use Session;
use URL;
use DB;
use Response;
use Mail;
class SocialsiteController extends CallApiController{
     public function  facebook(){
       return Socialite::driver('facebook')->redirect();
     }

      public function  callback(){  

         $query=new registrationModel();
            try {
                  $user = Socialite::driver('facebook')->user();
                 }catch (Exception $e){
                  return redirect('facebook');
                 }
                  $authUser = $this->findOrCreateUser($user);
        
                  // $query->username($authUser, true);
                //  return Redirect::back();
                    
                     if($authUser){
                      
                      return Redirect::back();

                     }else{
                    return Redirect::back();

                     }

               //auth()->login($user);
             //  return redirect()->to('/home');
                    
     }

 
     public function  google(){     
                  return Socialite::driver('google')->redirect();
     }

      public function  Googlecallback(){
      try {
          $user = Socialite::driver('google')->user();
         
          }catch (Exception $e) {
                  return redirect('google');
          }
          $authUser = $this->findOrCreateUser($user);
                 // return Redirect::back();

               
                  if($authUser){
                      
                      return Redirect::back();

                     }else{
                    return Redirect::back();

                     }

          }



          private function findOrCreateUser($facebookUser){
             $query=new registrationModel();
             $authUser =$query->where('provider_user_id', $facebookUser->id)->first();
         if ($authUser){

                       Session::put('email', $authUser->email);
                       Session::put('user_id', $authUser->id);
                       Session::put('name', $authUser->username);
                       Session::put('is_login', 1);
               
             return $authUser->username;
        }else{
 
        //  $query->create([
        //     'username' => $facebookUser->name,
        //     'email' => $facebookUser->email,
        //     'contact' =>0,
        //     'password' =>0,
        //     'created_at'=>date('Y-m-d H:i:s'),
        //     'provider_user_id' => $facebookUser->id,
        //     'provider' => $facebookUser->avatar
        // ]);

   
                  $query->username=$facebookUser->name;
                  $query->email=$facebookUser->email;
                  $query->contact='';
                  $query->password='';
                  $query->provider_user_id=$facebookUser->id;
                  $query->provider=$facebookUser->avatar;
                  $query->created_at=date('Y-m-d H:i:s');

               if($query->save()) {
                  Session::put('email',$query->email);
                  Session::put('contact',$query->contact);
                  Session::put('user_id',$query->id);
                  Session::put('name',$query->username);
                  Session::put('is_login',1);
               
        }

      
}

return  $authUser;

          
    }



    public function facebooklogin(Request $res){
                      $vale=$res->response;


                   
             $query=new registrationModel();
             $authUser =$query->where('provider_user_id',$vale['id'])->first();

               if ($authUser){
                       Session::put('email', $authUser->email);
                       Session::put('user_id', $authUser->id);
                       Session::put('name', $authUser->username);
                       Session::put('is_login', 1);

                         if($authUser->contact!=''){
                           Session::put('contact',$authUser->contact);
                          $contact=11;
                         }else{
                          $contact=22;
                         }
               $arr = array('error' => 1,'contact'=>$contact,'user_id'=>$authUser->id);
               echo json_encode($arr);
    

        }else{
                  $pwd=$this->random_password();
                //  $this->mail_fn($vale['email'],$pwd);
                  $query->username=$vale['first_name'];
                  $query->email=$vale['email'];
                  $query->contact='';
                  $query->password=md5($pwd);
                  $query->provider_user_id=$vale['id'];
                  $query->provider=$vale['link'];
                  $query->created_at=date('Y-m-d H:i:s');
               if($query->save()) {
                  Session::put('email',$query->email);
                  Session::put('contact',$query->contact);
                  Session::put('user_id',$query->id);
                  Session::put('name',$query->username);
                  Session::put('is_login',1);
                  DB::table('customer_details')->insert(['user_id' =>$query->id]);
               
        }

                if(Session::get('contact')==''){
                          $contact=22;
                         }else{
                           $contact=0;
                         }
                $arr = array('error' => 2,'contact'=>$contact);
               echo json_encode($arr);


        }

    }




 public function googlelogin(Request $res){
                      $vale=$res->resp;
                      $str=$vale['image']['url'];
                      $email='';
                      $length=count($vale['emails']);

                for($i = 0; $i < $length; $i++){
                    if($vale['emails'][$i]['type'] == 'account')
                    {
                        $email = $vale['emails'][$i]['value'];

                    }
                }
      
             
             $query=new registrationModel();
             $authUser =$query->where('provider_user_id',$vale['id'])->first();

               if ($authUser){
                       Session::put('email', $authUser->email);
                       Session::put('user_id', $authUser->id);
                       Session::put('name', $authUser->username);
                       Session::put('is_login', 1);

                        if($authUser->contact!=''){
                           Session::put('contact',$authUser->contact);
                          $contact=11;
                         }else{
                          $contact=22;
                         }

               $arr = array('error' => 1,'contact'=>$contact);
               echo json_encode($arr);
        }else{    
                  $pwd=$this->random_password();
                 // $this->mail_fn($email,$pwd);
                  $query->username=$vale['displayName'];
                  $query->email=$email;
                  $query->contact='';
                  $query->password=md5($pwd);
                  $query->provider_user_id=$vale['id'];
                  $query->provider=$str;
                  $query->created_at=date('Y-m-d H:i:s');

               if($query->save()) {
                  Session::put('email',$query->email);
                  Session::put('contact',$query->contact);
                  Session::put('user_id',$query->id);
                  Session::put('name',$query->username);
                  Session::put('is_login',1);
                  DB::table('customer_details')->insert(['user_id' =>$query->id]);
               
        } 
                if(Session::get('contact')==''){
                          $contact=22;
                         }else{
                           $contact=0;
                         }  
                $arr = array('error' => 2,'contact'=>$contact);
                 echo json_encode($arr);


        }

    }


   public function random_password() {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $password = substr( str_shuffle( $chars ), 0,6);
    return $password;
}

public function mail_fn($email,$pwd){

                $headers='Content-Type: text/html; charset=ISO-8859-1';
                $mail = Mail::send('email_send_password',['data' => $pwd], function($message) use($email) {
                $message->from('software.support@rupeeboss.com', 'RupeeBoss');
                $message->to($email)->subject('Password generated');

                });
  }


function contactOTP(Request $req){
  $phone = Session::get('contact');
  $query=DB::table('otp')
            ->where('otp', $req['otp'])
            ->where('contact',$phone)
            ->update(['status' => 1]);
        if($query){
                  $query=DB::table('user_registration')
                              ->where('id',Session::get('user_id'))
                              ->update(['contact' =>$phone]);
            return Response::json(array(
                            'data' => true,
                        ));
        }else{
           return Response::json(array(
                                'data' => false,
                            ));
        }
}

     public function contact_us_otp(Request $req){
                $this->otp($req);
                Session::put('contact',$req->contact_name);
                $error=2;
                echo $error;
          // $query=DB::table('user_registration')
          //                     ->where('id',Session::get('user_id'))
          //                     ->update(['contact' =>$req->contact_name]);
          //                      Session::put('contact',$req->contact_name);
          //                    $error=2;
          //                   echo $error;
        }


        function otp($req){
               $otp = mt_rand(100000, 999999);
               $query=DB::table('otp')->insertGetId(
            ['name' => Session::get('user_id'),'contact'=>$req->contact_name,'email'=>Session::get('user_id')
            ,'source'=>'web_user','product'=>12,'otp'=>$otp,'status'=>'0','created_at'=> date("Y-m-d H:i:s")]
            );

           
            //calling service to send sms 
                $post_data='{"mobNo":"'.$req->contact_name.'","msgData":"your otp is '.$otp.' - RupeeBoss.com",
                    "source":"WEB"}';
                // $url = "http://beta.services.rupeeboss.com/LoginDtls.svc/xmlservice/sendSMS";
                $url ="http://services.rupeeboss.com/LoginDtls.svc/xmlservice/sendSMS";
                $result=$this->call_json_data_api($url,$post_data);
                $http_result=$result['http_result'];
                $error=$result['error'];
                $obj = json_decode($http_result);
                //print_r($obj);exit();
                // if($obj->{'statusId'}==0){
                //     return Response::json(array(
                //                 'data' => true,
                //             ));
                // }else{
                //     return Response::json(array(
                //                 'data' => false,
                //             ));
                // }
            

        }


}
