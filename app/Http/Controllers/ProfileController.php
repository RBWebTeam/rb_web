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
        $email_id=Session::get('email');


        $query=DB::table('user_registration')->where('id','=',$get_id)->first();
        $cquery=DB::table('customer_details')->where('user_id','=',$get_id)->first();
      //  $loan_history=DB::table('bank_quote_api_request')->where('Email','=',$email_id)->get();
              $loan_history = DB::table('bank_quote_api_request')
            ->leftjoin('product_master', 'product_master.Product_Id', '=', 'bank_quote_api_request.ProductId')
            ->select('bank_quote_api_request.*','product_master.*')
            ->where('bank_quote_api_request.Email', $email_id)
            ->where('bank_quote_api_request.bank_id','!=','NULL')
            ->orderBy('bank_quote_api_request.ID', 'DESC')
            ->get();
          return view('my-profile',['query'=>$query,'cquery'=>$cquery,'loan_history'=>$loan_history]);
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




public function  change_password(Request $req){
       
 $val =Validator::make($req->all(), [
                
                'Current_password' => 'required',
                'password' => 'required|min:5',
                'confirm_password' => 'required|min:5|same:password',
                            ]);

           if ($val->fails()){

              return response()->json($val->messages(), 200);
           }else{

            
        
               $query=new registrationModel();

                 

               $value=$query->where('email','=',Session::get('email'))
              ->first();
             
              if($value->password==md5($req->currentpassword)){

                
                          $query->where('email',Session::get('email'))
                          ->update(array('password' =>md5($req->confirmpassword)));
            
                 $error="1";
                echo $error;
              }else{

                 $error="2";
                echo $error;
              }


             
              
           
            }
                
}
  public function applyonline(Request $req){
    $request = $req->all();
    //print_r($request);exit();
    $app = $request['appid'];
    $quote = $request['qoutid'];
    $bank = $request['BankId'];
    
    if(isset($request['brokerid'])){
      $brokerid = $request['brokerid'];
    }else{
      $brokerid = "";
    }
     if(isset($request['loanamount'])){
      $loanamount = $request['loanamount'];
    }else{
      $loanamount= "";
    }
     if(isset($request['loaninterest'])){
      $loaninterest = $request['loaninterest'];
    }else{
      $loaninterest = "";
    }
     if(isset($request['loanterm'])){
      $loanterm = $request['loanterm'];
    }else{
      $loanterm = "";
    }
    if(isset($request['product'])){
      $product = $request['product'];
    }else{
      $product = "";
    }
    //print_r($loanamount1);exit();

    $email=Session::get('email');
    $update = DB::table('bank_quote_api_request')->where('ID', $quote)->where('Email', $email)->update(array('bank_id' => $bank));
    if($update){
      if ($product == '9') {
       return redirect()->away('http://beta.erp.rupeeboss.com/personalloan/personalloan.aspx?appid=0&qoutid='.$quote.'&BankId='.$bank.'');
      } else {
        return redirect()->away('http://beta.erp.rupeeboss.com/homeloan/Home_Loan_Application_Form.aspx?appid=0&qoutid='.$quote.'&BankId='.$bank.'');
      }
      }else{
        if ($product == '9') {
        return redirect()->away('http://beta.erp.rupeeboss.com/personalloan/personalloan.aspx?appid=0&qoutid='.$quote.'&BankId='.$bank.'&brokerid='.$brokerid.'&loanamount='.$loanamount.'&loaninterest='.$loaninterest.'&loanterm='.$loanterm.'');
        } else {
          return redirect()->away('http://beta.erp.rupeeboss.com/homeloan/Home_Loan_Application_Form.aspx?appid=0&qoutid='.$quote.'&BankId='.$bank.'&brokerid='.$brokerid.'&loanamount='.$loanamount.'&loaninterest='.$loaninterest.'&loanterm='.$loanterm.'');
        }
        
      
    }
  }

}