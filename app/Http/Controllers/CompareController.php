<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use DB;
use Response;
class CompareController extends Controller
{
    //
    public function compare(){
    	return view('compare');
    }
    public function view_loan(){
        // if(Session::get('is_login')){
    	   return view('view-loan');
       //}else{
         //   return redirect('/');
       // }
        
    }
 	// public function emi(){
  //       //print_r("hiiiiiiiiiii");
  //   	return view('emi');
  //   }
    public function emi2(){
        return view('emi/emi');
    }
     public function emi_cal(Request $req){
        $data=$req->all();
        return view('emi/emi_cal')->with($data);
    }
    public function credit_report(){
    	return view('free-credit-report');
    }

    public function switchme(){
      return view('emi/switch_me');
    }

    public function calculation(Request $req){

      $getQuery=DB::table('bank_product_web_intrest')
      ->join('bank_master', 'bank_product_web_intrest.bank_id', '=', 'bank_master.Bank_id')
      ->select('bank_product_web_intrest.bank_id AS bank_id','bank_product_web_intrest.roi AS roi','bank_master.Bank_Name AS Bank_Name')
      ->where('bank_product_web_intrest.product_id','=',12)
      ->where('bank_product_web_intrest.roi','<',$req['loaninterest'])
      ->orderBy('bank_product_web_intrest.roi', 'DESC')
      ->take(10)
      ->get();
     // print_r();exit();

      if(isset($req))
{
$loanamount=$req['loanamount'];
$loaninterest=$req['loaninterest']/12/100;
$loanterm=$req['loanterm'];
//getting minimum roi from db
//divide by 0 problem
// if($getQuery[0]->roi==0){
//   $getQuery[0]->roi=1;
// } //remove when you have real data not containg 0.00 % roi in db
// $new_rate=$getQuery[0]->roi;

// print_r($new_rate);exit();

$amount = $loanamount * $loaninterest * (pow(1 + $loaninterest, $loanterm) / (pow(1 + $loaninterest, $loanterm) - 1));
$total =(($amount*$loanterm)-$loanamount);

$ttl_payment = $loanamount+$total;

//savings//
if($getQuery[0]->roi==0){
  $getQuery[0]->roi=1;


} //remove when you have real data not containg 0.00 % roi in db
$new_rate=$getQuery[0]->roi/12/100;




$new_amount = $loanamount * $new_rate * (pow(1 + $new_rate, $loanterm) / (pow(1 + $new_rate, $loanterm) - 1));
//print_r($new_amount);exit();
$new_total =(($new_amount*$loanterm)-$loanamount);
$new_ttl_payment = $loanamount+$new_total;
$drop_emi= $amount-$new_amount;
$drop_in_int=(($loaninterest*12*100)-($new_rate*12*100));
$savings=$total-$new_total;
//echo round($amount);
//print"<pre>";
//print_r($getQuery);exit();
$test =json_decode(json_encode($getQuery),true);
//print"<pre>";
//print_r($test);exit();
//json_encode($arrayName = array('query'=>($test)));

   //return view('emi/switch_cal')->with($arrayName);  

  $returnHTML = view('emi/switch_cal')->with('data', $test)->render();
return response()->json(array('success' => true, 'html'=>$returnHTML));                            
                                    }

      
    }
 

 
}
