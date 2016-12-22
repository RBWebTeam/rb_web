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


           $data='';
        // $request=' ';
           $query=new registrationModel();
 
          $value=$query->where('email','=',$request->emails)->first();
         
          if($value!=''){     
          if (Hash::check($request->login_pass, $value->password)) {

          	    $data="right";
               
                }else{
               	 $data="your email or password is incorrect. please try again";
                }


           }else{

            	$data="your email or password is incorrect. please try again";
           }



     
return Response::json(array(
                            'data' =>$data,
                            
                        ));

      }


      public function register_form(Request $req){

	//	print_r($req->all());

      	 $sel=DB::table("user_registration")->where('email','=',$req->email)->get();
         $count=$sel->count();
               if($count<0){
               if($req->password==$req->password_confirm){	
               $query->password=bcrypt($request->password);
               $query=new registrationModel();
               $query->username=$req->name;
               $query->email=$req->email;
               $query->contact=$req->contact;
               $query->password=bcrypt($req->password);
               $query->created_at=1; 	
               $query->save();
           }else{
          
              $error="password and confirm password does not match";
              echo $error;

           }
               }else{

               	$error="Email already exist in our database";
               	echo $error;
               }
             

      }
}
