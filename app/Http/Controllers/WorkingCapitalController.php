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
  $post_data='{"company_type":"'.$req->proprietor.'"," exportimport":"'.$req->exchange.'","company_name":"'.$req->company.'","date_of_incorp ":"'.$req->date.'","loan_required ":"'.$req->loan_amount.'","total_current_asset":"'.$req->total_current_assest.'","total_current_liable":"'.$req->total_current_liability.'","total_noncurrent_liable":"'.$req->total_non_current_liability.'","inventory_oneyr_amt":"'.$req->inventory_1.'","inventory_twoyr_amt":"'.$req->inventory_2.'","inventory_threeyr_amt":"'.$req->inventory_3.'","debtor_oneyr_amt":"'.$req->debtors_1.'","debtor_twoyr_amt":"'.$req->debtors_2.'","debtor_threeyr_amt":"'.$req->debtors_3.'","creditor_oneyr_amt":"'.$req->creditors_1.'","creditor_twoyr_amt":"'.$req->creditors_2.'","creditor_threeyr_amt":"'.$req->creditors_3.'","sharecap_oneyr_amt":"'.$req->share_capital_1.'","sharecap_twoyr_amt":"'.$req->share_capital_2.'","sharecap_threeyr_amt":"'.$req->share_capital_3.'","reserve_oneyr_amt":"'.$req->reserve_surplus_1.'","reserve_twoyr_amt":"'.$req->reserve_surplus_2.'","reserve_threeyr_amt":"'.$req->reserve_surplus_3.'","turnover_oneyr_amt":"'.$req->turnover_1.'","turnover_twoyr_amt":"'.$req->turnover_2.'","turnover_threeyr_amt":"'.$req->turnover_3.'","ebit_oneyr_amt":"'.$req->ebit_1.'","ebit_twoyr_amt":"'.$req->ebit_2.'","ebit_threeyr_am":"'.$req->ebit_3.'","pbt_oneyr_amt":"'.$req->profit_before_tax_1.'"," pbt_twoyr_amt":"'.$req->profit_before_tax_2.'","pbt_threeyr_amt":"'.$req->profit_before_tax_3.'","net_profit_applicant":"'.$req->net_profit_applicant.'","company":"'.$req->company.'","bussiness_pan":"'.$req->bussiness_pan.'","date_formation":"'.$req->date_formation.'","ofc_landline":"'.$req->ofc_landline.'","ofc_add1":"'.$req->ofc_add1.'","ofc_add2":"'.$req->ofc_add2.'","ofc_add3":"'.$req->ofc_add3.'","city_applicant_entity":"'.$req->city_applicant_entity.'","state_applicant_entity":"'.$req->state_applicant_entity.'","pincode_applicant_entity":"'.$req->pincode_applicant_entity.'","office_type_applicant_entity":"'.$req->office_type_applicant_entity.'","name_co_app":"'.$req->name_co_app.'","middle_name_co_app":"'.$req->middle_name_co_app.'","last_name_co_app":"'.$req->last_name_co_app.'","gender_co_app":"'.$req->gender_co_app.'","dob_co_app":"'.$req->dob_co_app.'","occupation_co_app":"'.$req->occupation_co_app.'","income_co_app":"'.$req->income_co_app.'","relation":"'.$req->relation.'","pan_no_co_app":"'.$req->pan_no_co_app.'","mob_co_app":"'.$req->mob_co_app.'","residence_co_app":"'.$req->residence_co_app.'","aadhar_card_co_app":"'.$req->aadhar_card_co_app.'","address1_co_app":"'.$req->address1_co_app.'","address2_co_app":"'.$req->address2_co_app.'"}';
  $post_data=json_encode($req->all());
  print_r($post_data);

}

}
