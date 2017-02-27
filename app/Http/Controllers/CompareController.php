<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use DB;
use Response;
class CompareController extends ExperianController
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
      $keywords='Check emi card status,Check emi for home loan,Check emi for Personal Loan,Check emi for business loan,Check emi for car loan,Check emi for SME loan,Check emi online,Check emi calculator';
      $data['title']='EMI Calculator for All Kinds of Loans';
      $data['description']='EMI Calculator - Calculate Equated Monthly Installment (EMI) for Home Loan / Housing Loan, Car Loan, Business Loan, Personal Loan withRupeeboss.com';
        return view('emi/emi')->with($data)->with('keywords',$keywords);
    }
     public function emi_cal(Request $req){
        $data=$req->all();
        return view('emi/emi_cal')->with($data);
    }
    

    

    public function switchme($loan){
        // print"<pre>";print_r($loan);exit();
      if ($loan=="home-loan") {
        $data['title']='Transfer Home Loan Balance Online on Rupeeboss.com';
        $keywords='Home loan balance transfer,How to transfer home loan,Home loan transfer,Home loan refinance,Home Loan Balance Transfer Process ,Online Balance Transfer,Transferring Home Loan,Home Loan Balance Transfer Calculator';
        $data['description']='Lets Find Out How Much You Can Save. Compare home loan transfer rate from onebank to another & apply at low rate for Home Loan Balance Transfer on Rupeeboss.com';
        $alert_rate=DB::select("SELECT MIN(roi) as roi FROM bank_product_web_intrest where product_id=12 and roi_type='Floating'");
      }elseif ($loan=="personal-loan") {
         $data['title']='Transfer Personal Loan Balance Online on Rupeeboss.com';
        $keywords='How to Transfer Personal Loan Balance Online,Personal Loan Balance Transfer,Personal Loan Balance Transfer Eligibility Criteria,Personal Loan Balance Transfer Interest rates,Personal Loan Balance Transfer Calculator,Personal Loan Balance Transfer Process ';
        $data['description']='Lets Find Out How Much You Can Save. Compare and Apply to multiple banks for theBest offers on personal loan balance transfer On Rupeeboss.com';
        $alert_rate=DB::select("SELECT MIN(roi) as roi FROM bank_product_web_intrest where product_id=9 " );
      }else{
         $data['title']='Transfer Loan Against Property Online on Rupeeboss.com';
        $keywords='Loan Against Property Transfer,Loan Against Property EMI Calculator,Loan Against Property Balance Transfer Process,Loan Against Property Balance Transfer Interest rates,Compare Loan Against Property Balance Transfer';
        $data['description']='Lets Find Out How Much You Can Save.Transfer your Loan Against Property at lowest interestRate. Compare and Switch for balance Transfer on Rupeeboss.com';
        $alert_rate=DB::select("SELECT MIN(roi) as roi FROM bank_product_web_intrest where product_id=7 and roi_type='Floating'");
      }
      $data['loan'] =$loan;
      
      $data['alert_rate']=$alert_rate[0]->roi;
      //print_r($data['alert_rate']);exit();
      //->get();
      //print_r();exit();
      return view('emi/switch_me')->with($data)->with('keywords',$keywords);
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
            // print_r($new_rate);exit();
            $new_amount = $loanamount * $new_rate * (pow(1 + $new_rate, $loanterm) / (pow(1 + $new_rate, $loanterm) - 1));

            $new_total =(($new_amount*$loanterm)-$loanamount);
            $new_ttl_payment = $loanamount+$new_total;
            $drop_emi= $amount-$new_amount;
            $drop_in_int=(($loaninterest*12*100)-($new_rate*12*100));
            $savings=$total-$new_total;
            $per_lacs=100000 * $new_rate * (pow(1 + $new_rate, $loanterm) / (pow(1 + $new_rate, $loanterm) - 1));

            $borrow=$drop_emi/$per_lacs;

            // $aaa= $loanamount/100000;
            // $emiperlacs=($drop_emi/$aaa);

      $test =json_decode(json_encode($getQuery),true);

      $user =array('loanamount' => $loanamount, 'loaninterest' => $loaninterest , 'loanterm'=> $loanterm,
            'product_id'=>$req['product_id'],'brokerid'=>$brokerid);
            $returnHTML = view('emi/switch_cal')->with('data', $test)->with('sata', $user)->render();
            return response()->json(array('success' => true, 'amount'=>$amount, 'new_amount'=>$new_amount, 'drop_emi'=>$drop_emi,'drop_in_int'=>$drop_in_int, 'savings'=>$savings,'borrow'=>$borrow,  'html'=>$returnHTML));                            
            }
              else{
   
              return response()->json(array('success' => false));

                 }



      
                 }


      public function after_transfer_calculation(Request $req){
                $loanamount=$req['loanamount'];

                $loaninterest=$req['loaninterest']/12/100;
                $loanterm=$req['loanterm']*12;
                $old_loaninterest=$req['old_loaninterest']/12/100;
                $old_drop_emi=$req['old_drop_emi'];
                 // print_r($loanamount."".$loaninterest."".$loanterm."".$old_drop_emi);exit();
         

                $emi = $loanamount * $loaninterest * (pow(1 + $loaninterest, $loanterm) / (pow(1 + $loaninterest, $loanterm) - 1));

                $old_emi = $loanamount * $old_loaninterest * (pow(1 + $old_loaninterest, $loanterm) / (pow(1 + $old_loaninterest, $loanterm) - 1));

                $old_total=(($old_emi*$loanterm)-$loanamount);

                $total_payable_interest=(($emi*$loanterm)-$loanamount);

                $after_savings=$old_total- $total_payable_interest;

                $per_lacs=100000 * $loaninterest * (pow(1 + $loaninterest, $loanterm) / (pow(1 + $loaninterest, $loanterm) - 1));

                $borrow=$old_drop_emi/$per_lacs;

                 $drop_emi_new=$old_emi-$emi;

                 $drop_in_int_new=(($old_loaninterest*12*100)-($loaninterest*12*100));
                  //print_r($drop_in_int_new);exit();
       
                return response()->json(array('success' => true,'emi' => $emi,
                                          'after_savings'=>$after_savings,'loaninterest'=>$loaninterest*12*100,'borrow'=>$borrow,'drop_emi_new'=>$drop_emi_new,'drop_in_int_new'=>$drop_in_int_new));
             
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
