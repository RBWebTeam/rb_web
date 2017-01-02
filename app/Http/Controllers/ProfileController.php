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
            $cquery=DB::table('customer_details')->where('user_id','=',$get_id)->first();

          return view('my-profile',['query'=>$query,'cquery'=>$cquery]);
      }else{
        return redirect('/');
      }
    }

    public function profileupdate(Request $req){

 //'contact' => 'required|min:11|numeric',
         $val =Validator::make($req->all(), [
                          'contact' => 'required|regex:/^[0-9]{10}+$/',
                            ]);

           if ($val->fails()){

              return response()->json($val->messages(), 200);
           }else{
           $get_id=Session::get('user_id');
                   DB::table('user_registration')->where('id', $get_id)->update(array('contact' => $req->contact,'username'=>$req->username));

                 $error="1";
             echo $error;

  }
           


}


    public function extradetails(Request $req){
    if(Session::get('is_login')){ 
       $get_id=Session::get('user_id');
       $query=DB::table('customer_details')->where('user_id','=',$get_id)->first();
             
       if(isset($query)){
      // $get_id=Session::get('user_id');
       DB::table('customer_details')->where('user_id', $get_id)->update(array('address' => $req->address,'dob'=>$req->dob,'gender'=>$req->gender));

        $error="2";
    echo $error;

        }else{

              $insert=DB::table('customer_details')
               ->insertGetId(['user_id'=>$get_id,
                            'address'=>$req->address,
                            'dob'=>$req->dob,
                            'gender'=>$req->gender,
                            'credit_score'=>0,
  
      ]);

           $error="1";
           echo $error;

       }  

      }


    }



 public function check(Request $req){



      foreach ($req->bank_id as $key => $value) {
        
        echo $value;
         
      }



 }



}