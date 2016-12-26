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
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
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

		             

		          	  $error="right";
          	     echo $error;
                }else{
               	      $error="email";
               	 echo $error;
               	 // Session::flush(); 
                }


       }


      public function register_form(Request $req){

      	          $sel=DB::table("user_registration")->where('email','=',$req->email)->get();
                  $count=$sel->count();
               if($count==0){
               if($req->password==$req->password_confirm){	
                  $query=new registrationModel();
                  $query->username=$req->name;
                  $query->email=$req->email;
                  $query->contact=$req->contact;
                  $query->password=md5($req->password);
                  $query->created_at=date('Y-m-d H:i:s');
               if($query->save()) {
               	  $req->session()->put('email',$query->email);
		          	  $req->session()->put('contact',$query->contact);
		              $req->session()->put('user_id',$query->id);
		              $req->session()->put('name',$query->username);
		              $req->session()->put('is_login',1);
		              $error="3";
		         echo $error;
    }

           }else{
          
                   $error="1";
              echo $error;

           }
               }else{

                    $error="2";
               	echo $error;
               }
             

      }
      //added by manish to logout
        public function logout(Request $req){
          $req->session()->flush();
            return redirect('/');
        }
}
