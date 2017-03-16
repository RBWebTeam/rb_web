<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use DB;
use Response;
class WorkingCapitalController extends Controller
{
      public function WorkingCapital(){

         return view('WorkingCapital');

      }

      public function calculate(Request $req){
         $paid=$req->paid;
         $loanamount=$req->loanAmount_id;
         $loaninterest=$req->interest/12/100;
         $loanterm=$req->loanTenur;
         $afterTransfer=$paid/12/100;
         
    

     if($req->ID==1){
            $getvalue=$this->currentStatus($loanamount,$loaninterest,$loanterm,$req->interest);
            $getvalue1=$this->currentStatus($loanamount,$afterTransfer,$loanterm,$paid);
		    $totalcurrent=$getvalue['total'];
		    $totalafter=$getvalue1['total'];
		   
		    $totleMonthlysaving=($totalcurrent-$totalafter)/$loanterm;
		    $totalYearSaving=$totleMonthlysaving * 12;
            $arra= array('success' =>true,'totalYearSaving'=>$totalYearSaving,'totleMonthlysaving'=>$totleMonthlysaving );
    }

    if($req->ID==0){
             // $loanamount=$req->loanAmount_id;
             // $loaninterest=$req->interest/12/100;
             // $loanterm=$req->loanTenur;
             // $afterTransfer=10/12/100;

            $getvalue=$this->currentStatus($loanamount,$loaninterest,$loanterm,$paid);
            $getvalue1=$this->currentStatus($loanamount,$afterTransfer,$loanterm,$paid);
		    $totalcurrent=$getvalue['total'];
		    $totalafter=$getvalue1['total'];
		   
		    $totleMonthlysaving=($totalcurrent-$totalafter)/$loanterm;
		    $totalYearSaving=$totleMonthlysaving * 12;

        $arra= array('success0' =>true,'totalYearSaving'=>$totalYearSaving,'totleMonthlysaving'=>$totleMonthlysaving );
    }   
            return response()->json(array_merge($getvalue,$arra));
         
           
           

               

      }


      public function currentStatus($loanamount,$loaninterest,$loanterm,$interest){
	
          $amount = $loanamount * $loaninterest * (pow(1 + $loaninterest, $loanterm) / (pow(1 + $loaninterest, $loanterm) - 1));
          $total =(($amount*$loanterm)-$loanamount);
           if($interest-10>0){
           	$drop_interest=$interest-10;
           	$monthlyinterest=   $total/ $loanterm;
           	
           }else{
           	$drop_interest= 0;
           	$monthlyinterest = 0;
          
           }

           $array=array('drop_interest'=>$drop_interest,'monthlyinterest'=>$monthlyinterest,'total'=>$total);
           return $array;
           
           


}


public  function termcalculate(Request $req){

            if(10<$req->interest){
            $loanamount=$req->loanAmount;
            $loaninterest=$req->interest/12/100;
            $loanterm=$req->loanTenure;
            $afterTransfer=10/12/100;

            $termCurrnet=$this->termloanFN($loanamount,$loaninterest, $loanterm);
            $termofter=$this->termloanFN($loanamount,$afterTransfer,$loanterm);
            $LoanEMI=$termCurrnet['amount'];
            $LoanEMIafter=$termofter['amount'];
            
              $totalSaving=$termCurrnet['total'];
              $totalSavingafter=$termofter['total'];

            if($req->interest-10>0){
            $drop_interest=$req->interest-10;
          
           }else{
            $drop_interest= 0;
           

           }
 
             $totalYearSaving=($totalSaving-$totalSavingafter);
           
          
          
            $array= array('successterm' =>true,'LoanEMI'=>$LoanEMI,'Drop_EMI'=>$LoanEMI-$LoanEMIafter,'NewLoanEMI'=>$LoanEMIafter,'drop_interest'=>$drop_interest,'totalYearSaving'=>$totalYearSaving );
            return $array;

          }else{

                  $array= array('successterm' =>true,'LoanEMI'=>0,'Drop_EMI'=>0,'NewLoanEMI'=>0,'drop_interest'=>0,'totalYearSaving'=>0 );
            return $array;
          }
}



public function termloanFN($loanamount,$loaninterest,$loanterm){

   $amount = $loanamount * $loaninterest * (pow(1 + $loaninterest, $loanterm) / (pow(1 + $loaninterest, $loanterm) - 1));
             $total =(($amount*$loanterm)-$loanamount);
             $ttl_payment = $loanamount+$total;

              // echo $ttl_payment;
              // echo "<br>";
              // echo $total;
              // echo "<br>";
             // echo $amount;

               $array=array('amount'=>$amount,'total'=>$total);
               return $array;

}



}
