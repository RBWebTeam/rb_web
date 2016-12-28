<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Response;
use App\Http\Requests;
use Session;
use Auth;
use DB;
use App\registrationModel;
use Validator;
use Redirect;
use URL;
class ProfileController extends Controller
{
    function my_profile(Request $req){


    	if(Session::get('is_login'))
    	{ 

    		$get_id=Session::get('user_id');
            $query=DB::table('user_registration')->where('id','=',$get_id)->first();
           $details=DB::table('customer_details')->where('user_id','=',$get_id)->first();

        	return view('my-profile',['query'=>$query,'details'=>$details]);
    	}else{
    		return redirect('/');
    	}
    }

    public function profileupdate(Request $req){

        if(Session::get('is_login'))
    	{ 
    		$get_id=Session::get('user_id');
      DB::table('user_registration')->where('id', $get_id)->update(array('contact' => $req->contact,'username'=>$req->username));
         }

    }


    public function extradetails(Request $req){

    	 

          if(Session::get('is_login')){ 

          	$get_id=Session::get('user_id');
      DB::table('customer_details')->where('user_id', $get_id)->update(array(
      	'address' => $req->address,
      	'dob'=>$req->dob,
      	'gender'=>$req->gender,

      	));

   //               $get_id=Session::get('user_id');
   //               $query=DB::table('customer_details')->where('user_id','=',$get_id)->first();

    		 
   //            $insert=DB::table('customer_details')
		 //           ->insertGetId(['user_id'=>$get_id,
			//                       'address'=>$req->address,
			//                       'dob'=>$req->dob,
			//                       'gender'=>$req->gender,
			//                       'credit_score'=>0,
 	
			// ]);

             
    	}


    }
  

}