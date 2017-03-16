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
class ProfileController extends InitialController
{
    function my_profile(Request $req){


      if(Session::get('is_login'))
      { 

        $get_id=Session::get('user_id');
        $email_id=Session::get('email');


        $query=DB::table('user_registration')->where('id','=',$get_id)->first();
        $cquery=DB::table('customer_details')->where('user_id','=',$get_id)->first();
        if($get_id){
          $credit_report=DB::select('select html_report from experian_response where user_id ='.$get_id);
          if($credit_report)
            {
                      $res=$credit_report[0]->html_report;}
                      else{
                        $res=NULL;
                      }
        }else{
          $contact=$contact=Session::get('contact');
          $credit_report=DB::select('select html_report from experian_response where contact ='.$contact);
          if($credit_report)
            {
                      $res=$credit_report[0]->html_report;}
                      else{
                        $res=NULL;
            }
        }
      //  $loan_history=DB::table('bank_quote_api_request')->where('Email','=',$email_id)->get();
              $loan_history = DB::table('bank_quote_api_request')
            ->leftjoin('product_master', 'product_master.Product_Id', '=', 'bank_quote_api_request.ProductId')
            ->select('bank_quote_api_request.*','product_master.*')
            ->where('bank_quote_api_request.Email', $email_id)
            ->where('bank_quote_api_request.bank_id','!=','NULL')
            ->orderBy('bank_quote_api_request.ID', 'DESC')
            ->get();
          return view('my-profile',['query'=>$query,'cquery'=>$cquery,'loan_history'=>$loan_history,'credit_report'=>$res]);
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
public function directory()
    {
        return view('directory');
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
                
                'current_password' => 'required',
                'password' => 'required|min:6',
                'confirm_password' => 'required|min:5|same:password',
                            ]);

           if ($val->fails()){

              return response()->json($val->messages(), 200);
           }else{

            
        
               $query=new registrationModel();

                 

               $value=$query->where('email','=',Session::get('email'))
              ->first();
             
              if($value->password==md5($req->current_password)){

                
                          $query->where('email',Session::get('email'))
                          ->update(array('password' =>md5($req->confirm_password)));
            
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
     // print_r($request);exit();
    // $app = $request['appid'];
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

    if(isset($request['loan_eligible'])){
      $loan_eligible = $request['loan_eligible'];
    }else{
      $loan_eligible = "";
    }
    if(isset($request['roi_type'])){
      $roi_type = $request['roi_type'];
    }else{
      $roi_type = "";
    }
    if(isset($request['processingfee'])){
      $processing_fee = $request['processingfee'];
    }else{
      $processing_fee = "";
    }

     if(isset($request['empcode'])){
      $empcode = $request['empcode'];
    }else{
      $empcode = "";
    }
    // if(isset($request['pf_type'])){
    //   $idtype = $request['pf_type'];
    // }else{
    //   $idtype = "";
    // }
   // print_r($processing_fee);exit();
    // $loan_eligible=$request['loan_eligible'];
    // $roi_type=$request['roi_type'];
    // $processing_fee=$request['processingfee'];

    $email=Session::get('email');
    $update = DB::table('bank_quote_api_request')->where('ID', $quote)->where('Email', $email)->update(array('bank_id' => $bank,'roi_type'=>$roi_type,'loan_eligible'=>$loan_eligible,'processing_fee'=>$processing_fee));
    if($update){
      if ($product == '9') {
       return redirect()->away('http://beta.erp.rupeeboss.com/personalloan/personalloan.aspx?qoutid='.$quote.'&processingfee='.$processing_fee.'&bankid='.$bank.'&loanamout='.$loan_eligible.'&idtype='.$roi_type);

      } else  if ($product == '7') {
        return redirect()->away('http://beta.erp.rupeeboss.com/LAP/LAP_Form.aspx?qoutid='.$quote.'&processingfee='.$processing_fee.'&bankid='.$bank.'&loanamout='.$loan_eligible.'&idtype='.$roi_type);
      }else {

        return redirect()->away('http://beta.erp.rupeeboss.com/homeloan/Home_Loan_Application_Form.aspx?qoutid='.$quote.'&processingfee='.$processing_fee.'&bankid='.$bank.'&loanamout='.$loan_eligible.'&idtype='.$roi_type);
      }
      }else{
        if ($product == '9') {
        return redirect()->away('http://beta.erp.rupeeboss.com/BalanceTransfer/PL_BT_Form.aspx?qoutid='.$quote.'&brokerid='.$brokerid.'&loanamount='.$loanamount.'&loaninterest='.$loaninterest.'&loanterm='.$loanterm.'&bankid='.$bank.'&product='.$product.'&idtype='.$roi_type.'&processingfee='.$processing_fee.'&empcode='.$empcode.'&coapp=0');

        } else  if ($product == '7') {
       return redirect()->away('http://beta.erp.rupeeboss.com/BalanceTransfer/LAP_BT_Form.aspx?qoutid='.$quote.'&brokerid='.$brokerid.'&loanamount='.$loanamount.'&loaninterest='.$loaninterest.'&bankid='.$bank.'&product='.$product.'&idtype='.$roi_type.'&processingfee='.$processing_fee.'&empcode='.$empcode.'&coapp=0');
        }else {
          return redirect()->away('http://beta.erp.rupeeboss.com/BalanceTransfer/HL_BT_Form.aspx?qoutid='.$quote.'&brokerid='.$brokerid.'&loanamount='.$loanamount.'&loaninterest='.$loaninterest.'&loanterm='.$loanterm.'&bankid='.$bank.'&product='.$product.'&idtype='.$roi_type.'&processingfee='.$processing_fee.'&empcode='.$empcode.'&coapp=0');
        }
        
      
    }
  }

}