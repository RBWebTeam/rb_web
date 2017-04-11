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
  print_r($req->all());exit();
  $post_data='{"company_type":"'.$req->proprietor.'"," exportimport":"'.$req->exchange.'","company_name":"'.$req->company.'","date_of_incorp ":"'.$req->date.'","loan_required ":"'.$req->loan_amount.'","total_current_asset":"'.$req->total_current_assest.'","total_current_liable":"'.$req->total_current_liability.'","total_noncurrent_liable":"'.$req->total_non_current_liability.'","inventory_oneyr_amt":"'.$req->inventory_1.'","inventory_twoyr_amt":"'.$req->inventory_2.'","inventory_threeyr_amt":"'.$req->inventory_3.'","debtor_oneyr_amt":"'.$req->debtors_1.'","debtor_twoyr_amt":"'.$req->debtors_2.'","debtor_threeyr_amt":"'.$req->debtors_3.'","creditor_oneyr_amt":"'.$req->creditors_1.'","creditor_twoyr_amt":"'.$req->creditors_2.'","creditor_threeyr_amt":"'.$req->creditors_3.'","sharecap_oneyr_amt":"'.$req->share_capital_1.'","sharecap_twoyr_amt":"'.$req->share_capital_2.'","sharecap_threeyr_amt":"'.$req->share_capital_3.'","reserve_oneyr_amt":"'.$req->reserve_surplus_1.'","reserve_twoyr_amt":"'.$req->reserve_surplus_2.'","reserve_threeyr_amt":"'.$req->reserve_surplus_3.'","turnover_oneyr_amt":"'.$req->turnover_1.'","turnover_twoyr_amt":"'.$req->turnover_2.'","turnover_threeyr_amt":"'.$req->turnover_3.'","ebit_oneyr_amt":"'.$req->ebit_1.'","ebit_twoyr_amt":"'.$req->ebit_2.'","ebit_threeyr_am":"'.$req->ebit_3.'","pbt_oneyr_amt":"'.$req->profit_before_tax_1.'"," pbt_twoyr_amt":"'.$req->profit_before_tax_2.'","pbt_threeyr_amt":"'.$req->profit_before_tax_3.'","pat_oneyr_amt":"'.$req->profit_after_tax_1.'","pat_twoyr_amt":"'.$req->profit_after_tax_2.'","pat_threeyr_amt":"'.$req->profit_after_tax_3.'","depre_oneyr_amt":"'.$req->depreciation_1.'","depre_twoyr_amt":"'.$req->depreciation_2.'","depre_threeyr_amt":"'.$req->depreciation_3.'","termloan_oneyr_amt":"'.$req->existing_term_1.'","termloan_twoyr_amt":"'.$req->existing_term_2.'","termloan_threeyr_amt":"'.$req->existing_term_3.'","odcc_oneyr_amt":"'.$req->existing_OD_1.'","odcc_twoyr_amt":"'.$req->existing_OD_2.'","odcc_threeyr_amt":"'.$req->existing_OD_3.'","interestpaid_oneyr_amt":"'.$req->interest_paid_1.'","interestpaid_twoyr_amt":"'.$req->interest_paid_2.'","interestpaid_threeyr_amt":"'.$req->interest_paid_3.'","currentroi_oneyr_amt":"'.$req->current_rate_1.'","currentroi_twoyr_amt":"'.$req->current_rate_2.'","currentroi_threeyr_amt":"'.$req->current_rate_3.'","nature_of_business":"'.$req->nature_of_business.'","industry_type":"'.$req->industry_name.'","residence_type":"'.$req->residence_type.'","office_type":"'.$req->office_type.'","customer_name ":"'.$req->customer_name .'","customer_contact":"'.$req->customer_contact.'","customer_email":"'.$req->customer_email.'"}';
  $post_data=json_encode($req->all());
  // print_r($post_data);

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
