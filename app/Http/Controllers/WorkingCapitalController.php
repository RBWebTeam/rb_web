<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use DB;
use Response;
class WorkingCapitalController extends CallApiController
{
      public function WorkingCapital(){

         return view('WorkingCapital');

      }

      public function calculate(Request $req){

                  $loanTenur=$req->loanTenur;
                  $paid=$req->paid;
                  $loanamount=$req->loanAmount_id;
        if($req->ID=="tlf"){

              if(9.5<=$req->interest){

            $totalinterest=($loanamount*$req->interest)/100;
            $MonthlyInterest=$totalinterest/12;
            $Dropinterest=$req->interest-$paid;
            $totalpaid=($loanamount*$paid)/100;
            $PaidInterest=$totalpaid/12;
            $MonthlySaving=$MonthlyInterest - $PaidInterest;
            $YearlySaving=$MonthlySaving*12;


                  $array=array('success' =>true,'drop_interest'=>$Dropinterest,'monthlyinterest'=>$MonthlyInterest,'totleMonthlysaving'=>$MonthlySaving,'totalYearSaving'=>$YearlySaving,);
           return $array;
         
           
   }else{

      $array=array('success' =>true,'drop_interest'=>0,'monthlyinterest'=>0,'totleMonthlysaving'=>0,'totalYearSaving'=>0,);
           return $array;
   }
 
     }else if($req->ID=="pcd"){


    if(7<$req->interest){

 
 
            $totalinterest=($loanamount*$req->interest)/100;
            $MonthlyInterest=$totalinterest/$loanTenur;
            $Dropinterest=$req->interest-$paid;
            $totalpaid=($loanamount*$paid)/100;
            $PaidInterest=$totalpaid/$loanTenur;
            $MonthlySaving=$MonthlyInterest - $PaidInterest;
            $YearlySaving=$MonthlySaving*$loanTenur;


                  $array=array('success0' =>true,'drop_interest'=>$Dropinterest,'monthlyinterest'=>$MonthlyInterest,'totleMonthlysaving'=>$MonthlySaving,'totalYearSaving'=>$YearlySaving,);
           return $array;
         
           
   }else{

      $array=array('success0' =>true,'drop_interest'=>0,'monthlyinterest'=>0,'totleMonthlysaving'=>0,'totalYearSaving'=>0,);
           return $array;
   }


     }else if($req->ID=="pcfc"){


    if(5<$req->interest){



            $totalinterest=($loanamount*$req->interest)/100;
            $MonthlyInterest=$totalinterest/$loanTenur;
            $Dropinterest=$req->interest-$paid;
            $totalpaid=($loanamount*$paid)/100;
            $PaidInterest=$totalpaid/$loanTenur;
            $MonthlySaving=$MonthlyInterest - $PaidInterest;
            $YearlySaving=$MonthlySaving*$loanTenur;


                  $array=array('success1' =>true,'drop_interest'=>$Dropinterest,'monthlyinterest'=>$MonthlyInterest,'totleMonthlysaving'=>$MonthlySaving,'totalYearSaving'=>$YearlySaving,);
           return $array;
         
           
   }else{

      $array=array('success1' =>true,'drop_interest'=>0,'monthlyinterest'=>0,'totleMonthlysaving'=>0,'totalYearSaving'=>0,);
           return $array;
   }


     }  

       
         // $loaninterest=$req->interest/12/100;
         // $loanterm=$req->loanTenur;
         // $afterTransfer=$paid/12/100;
         

          
exit;
    

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



public function NewWorkingCapital(){


         return view('new-working-capital');
}

public function working_capital_submit(Request $req){
   // print_r($req->all());exit();
  $post_data='{"company_type":"'.$req->company_type.'"," exportimport":"'.$req->exchange.'","company_name":"'.$req->company_name.'","date_of_incorp ":"'.$req->date_of_incorp.'","loan_required ":"'.$req->loan_required.'","total_current_asset":"'.$req->total_current_asset.'","total_current_liable":"'.$req->total_current_liable.'","total_noncurrent_liable":"'.$req->total_noncurrent_liable.'","inventory_oneyr_amt":"'.$req->inventory_oneyr_amt.'","inventory_twoyr_amt":"'.$req->inventory_twoyr_amt.'","inventory_threeyr_amt":"'.$req->inventory_threeyr_amt.'","debtor_oneyr_amt":"'.$req->debtor_oneyr_amt.'","debtor_twoyr_amt":"'.$req->debtor_twoyr_amt.'","debtor_threeyr_amt":"'.$req->debtor_threeyr_amt.'","creditor_oneyr_amt":"'.$req->creditor_oneyr_amt.'","creditor_twoyr_amt":"'.$req->creditor_twoyr_amt.'","creditor_threeyr_amt":"'.$req->creditor_threeyr_amt.'","sharecap_oneyr_amt":"'.$req->sharecap_oneyr_amt.'","sharecap_twoyr_amt":"'.$req->sharecap_twoyr_amt.'","sharecap_threeyr_amt":"'.$req->sharecap_threeyr_amt.'","reserve_oneyr_amt":"'.$req->reserve_oneyr_amt.'","reserve_twoyr_amt":"'.$req->reserve_twoyr_amt.'","reserve_threeyr_amt":"'.$req->reserve_threeyr_amt.'","turnover_oneyr_amt":"'.$req->turnover_oneyr_amt.'","turnover_twoyr_amt":"'.$req->turnover_twoyr_amt.'","turnover_threeyr_amt":"'.$req->turnover_threeyr_amt.'","ebit_oneyr_amt":"'.$req->ebit_oneyr_amt.'","ebit_twoyr_amt":"'.$req->ebit_twoyr_amt.'","ebit_threeyr_am":"'.$req->ebit_threeyr_am.'","pbt_oneyr_amt":"'.$req->pbt_oneyr_amt.'"," pbt_twoyr_amt":"'.$req->pbt_twoyr_amt.'","pbt_threeyr_amt":"'.$req->pbt_threeyr_amt.'","pat_oneyr_amt":"'.$req->pat_oneyr_amt.'","pat_twoyr_amt":"'.$req->pat_twoyr_amt.'","pat_threeyr_amt":"'.$req->pat_threeyr_amt.'","depre_oneyr_amt":"'.$req->depre_oneyr_amt.'","depre_twoyr_amt":"'.$req->depre_twoyr_amt.'","depre_threeyr_amt":"'.$req->depre_threeyr_amt.'","termloan_oneyr_amt":"'.$req->termloan_oneyr_amt.'","termloan_twoyr_amt":"'.$req->termloan_twoyr_amt.'","termloan_threeyr_amt":"'.$req->termloan_threeyr_amt.'","odcc_oneyr_amt":"'.$req->odcc_oneyr_amt.'","odcc_twoyr_amt":"'.$req->odcc_twoyr_amt.'","odcc_threeyr_amt":"'.$req->odcc_threeyr_amt.'","interestpaid_oneyr_amt":"'.$req->interestpaid_oneyr_amt.'","interestpaid_twoyr_amt":"'.$req->interestpaid_twoyr_amt.'","interestpaid_threeyr_amt":"'.$req->interestpaid_threeyr_amt.'","currentroi_oneyr_amt":"'.$req->currentroi_oneyr_amt.'","currentroi_twoyr_amt":"'.$req->currentroi_twoyr_amt.'","currentroi_threeyr_amt":"'.$req->currentroi_threeyr_amt.'","nature_of_business":"'.$req->nature_of_business.'","industry_type":"'.$req->industry_type.'","residence_type":"'.$req->residence_type.'","office_type":"'.$req->office_type.'","customer_name ":"'.$req->customer_name .'","customer_contact":"'.$req->customer_contact.'","customer_email":"'.$req->customer_email.'","ratio_liability":"'.$req->ratio_liability.'"}';
  $post_data=json_encode($req->all());
  // print_r($post_data);exit();
  
  $url = "http://api.rupeeboss.com/BankAPIService.svc/GetCustomerWorkingCapitalReq";
      $result=$this->call_json_data_api($url,$post_data);
      $http_result=json_decode($result['http_result']);
      $error=$result['error'];
      //print_r("err"+$error);
      // print_r("hiii"+$http_result);exit();

      if($http_result=='1'){
                return Response::json(array(
                            'data' => true,
                        ));
            }else{
                return Response::json(array(
                            'data' => false,
                        ));
            }

}

}
