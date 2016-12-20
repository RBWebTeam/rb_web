<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use DB;
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

    $query=DB::table('bank_product_web_intrest')
            ->leftJoin('bank_master', 'bank_product_web_intrest.bank_id', '=', 'bank_master.Bank_Id')
            ->where('bank_product_web_intrest.product_id','=',12)
             ->orderBy('bank_product_web_intrest.roi', 'DESC')
            ->get();

         // foreach ($query as $key => $value) {
         //  print "<pre>";
         //   print_r($value);
         //     echo "<br>";
         // }
   
      return view('emi/switch_me');
    }

    public function switch_cal(Request $req){
      //print_r($req);exit();
      $data=$req->all();
      return view('emi/switch_cal')->with($data);
    }
 

 
}
