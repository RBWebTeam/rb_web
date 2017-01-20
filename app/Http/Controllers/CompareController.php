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
    public function compare(Request $req){


            return view('compare');
           exit;

         if(count($req->bank_id)==3){
          
            $val=$req->bank_id[0];
            $val1=$req->bank_id[1];
            $val2=$req->bank_id[2];
                
 $getQuery= DB::table('bank_master')
    ->join('bank_product_web_intrest','bank_product_web_intrest.Bank_Id',
     '=', 'bank_master.Bank_Id')
    ->select(   
       'bank_master.Bank_Name')
    ->where('bank_product_web_intrest.Product_Id', '=',9)
    ->whereIn('bank_master.Bank_Id', array($val,$val1,$val2))
    ->get();
    

  //     $getQuery= DB::table('bank_master')
  // ->whereIn('Bank_Id', array($val,$val1,$val2))
  // ->get();
  
  foreach ($getQuery as $key => $value) {
    echo $value->Bank_Name;
    echo " <br>";
  }

               return view('compare');


         }else{

             echo "error";
         }

     
    
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
      $data['telephone']=DB::table('experian_telephonetype')
      ->select('Telephone_Name','Telephone_Value')
      ->get();
      $data['city'] = DB::table('city_master')
      ->select('City_Name','state_id','City_Id')
      ->get();
      $data['state'] = DB::table('experian_state_master')
      ->select('State_Id','State_Code','State_Name')
      ->get();
     //  print "<pre>";
      //print_r($data['state']);exit();
     	return view('credit-report')->with($data);
    }

    public function switchme($loan){
      //print"<pre>";print_r($loan);exit();
      $data['loan'] =$loan;
      return view('emi/switch_me')->with($data);
    }

    public function calculation(Request $req){
      // print_r($req->all());exit();

     $getQuery=DB::select('call usp_get_balance_transfer_quot("'.$req['loanamount'].'","'.$req['loaninterest'].'","'.$req['product_id'].'")');

    $resultArray = json_decode(json_encode($getQuery), true);
     
        if (!empty($resultArray)) {
            $loanamount=$req['loanamount'];
            $loaninterest=$req['loaninterest']/12/100;
            $loanterm=$req['loanterm'];
            $brokerid = $req['brokerid'];

            $amount = $loanamount * $loaninterest * (pow(1 + $loaninterest, $loanterm) / (pow(1 + $loaninterest, $loanterm) - 1));
              $total =(($amount*$loanterm)-$loanamount);

              $ttl_payment = $loanamount+$total;

         //savings//
        if($getQuery[0]->roi==0){
            $getQuery[0]->roi=1;
          }
            $new_rate=$getQuery[0]->roi/12/100;
            $new_amount = $loanamount * $new_rate * (pow(1 + $new_rate, $loanterm) / (pow(1 + $new_rate, $loanterm) - 1));

            $new_total =(($new_amount*$loanterm)-$loanamount);
            $new_ttl_payment = $loanamount+$new_total;
            $drop_emi= $amount-$new_amount;
            $drop_in_int=(($loaninterest*12*100)-($new_rate*12*100));
            $savings=$total-$new_total;

      $test =json_decode(json_encode($getQuery),true);

      $user =array('loanamount' => $loanamount, 'loaninterest' => $loaninterest , 'loanterm'=> $loanterm,
        'product_id'=>$req['product_id'],'brokerid'=>$brokerid);
              $returnHTML = view('emi/switch_cal')->with('data', $test)->with('sata', $user)->render();
              return response()->json(array('success' => true, 'amount'=>$amount, 'new_amount'=>$new_amount, 'drop_emi'=>$drop_emi,'drop_in_int'=>$drop_in_int, 'savings'=>$savings,  'html'=>$returnHTML));                            
            }
              else{
   
              return response()->json(array('success' => false));

                 }



      
                 }






      public function switchme_mobile(){
                 return view('emi/balance_transfer');
      }
      public function calculationfordc(Request $req){



      $getQuery=DB::select('call usp_get_balance_transfer_quot("'.$req['loanamount'].'","'.$req['loaninterest'].'","12")');
     // print_r($getQuery);exit();
    $resultArray = json_decode(json_encode($getQuery), true);

     
        if (!empty($resultArray)) {
            $loanamount=$req['loanamount'];
            $loaninterest=$req['loaninterest']/12/100;
            $loanterm=$req['loanterm'];


            $amount = $loanamount * $loaninterest * (pow(1 + $loaninterest, $loanterm) / (pow(1 + $loaninterest, $loanterm) - 1));
              $total =(($amount*$loanterm)-$loanamount);

              $ttl_payment = $loanamount+$total;

         //savings//
        if($getQuery[0]->roi==0){
            $getQuery[0]->roi=1;
          }
            $new_rate=$getQuery[0]->roi/12/100;
            $new_amount = $loanamount * $new_rate * (pow(1 + $new_rate, $loanterm) / (pow(1 + $new_rate, $loanterm) - 1));

            $new_total =(($new_amount*$loanterm)-$loanamount);
            $new_ttl_payment = $loanamount+$new_total;
            $drop_emi= $amount-$new_amount;
            $drop_in_int=(($loaninterest*12*100)-($new_rate*12*100));
            $savings=$total-$new_total;
            $emiperlacs=($new_amount/100000);

      $test =json_decode(json_encode($getQuery),true);

      $user =array('loanamount' => $loanamount, 'loaninterest' => $loaninterest , 'loanterm'=> $loanterm );
              $returnHTML = view('emi/switch_cal2')->with('data', $test)->with('sata', $user)->render();
              return response()->json(array('success' => true, 'amount'=>$amount, 'new_amount'=>$new_amount, 'drop_emi'=>$drop_emi,'drop_in_int'=>$drop_in_int, 'savings'=>$savings, 'emiperlacs'=> $emiperlacs, 'html'=>$returnHTML));                            
            }
              else{
   
              return response()->json(array('success' => false));

                 }



      
                 }

 

 
                 }
?>
