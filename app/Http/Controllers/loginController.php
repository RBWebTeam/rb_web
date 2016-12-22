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
class loginController extends Controller
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

	//	print_r($req->all());

      	 $sel=DB::table("user_registration")->where('email','=',$req->email)->get();
         $count=$sel->count();
               if($count==0){
               if($req->password==$req->password_confirm){	
               $query=new registrationModel();
               // $query->password=bcrypt($req->password);
               $query->username=$req->name;
               $query->email=$req->email;
               $query->contact=$req->contact;
               $query->password=md5($req->password);
               $query->created_at=1; 	
               $query->save();
           }else{
          
              $error="1";
              echo $error;

           }
               }else{

               	$error="2";
               	echo $error;
               }
             

      }
}
