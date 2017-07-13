<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Http\Requests;
use DB;
use App\SEOlibraries\Seo;
class CalculatorController extends CallApiController
{
    public function working_capital_emi_calculator(){
        return view('working-capital-emi-calculator');
    }



       public function working_calculator(Request $req){

       	     $status=1;
             $err_code=NULL;
             $data=NULL;
      try{   

          $turnover    = $req->turnover;
          $profitbefore =$req->profitbefore;
          $depreciation =$req->depreciation;
          $financecost  =$req->financecost;
          $inventory    =$req->inventory;
          $debtors      =$req->debtors;
          $creditors    =$req->creditors;
          $existing     =$req->existing;

          $pbdit=$profitbefore+ $financecost+$depreciation;
          $rule1 = ($turnover * (0.20));
          $rule2 = (((($inventory -$creditors) + $debtors) * (0.75)) - $existing);

         if ( $rule1 <  $rule2 ){          
          $proposed_limit= $rule1;
         }else{
          $proposed_limit=$rule2;
         } 


         if(($profitbefore+$depreciation) < 0 || ($pbdit- $financecost) < 0 ){

              $proposed_limit=0;
              $status=0;
          }else{

            $proposed_limit = $proposed_limit;

          }

         $data = array('proposedlimit'=>$proposed_limit,);


}catch(\Exception $ee){
           
           $err_code=$ee->getMessage();
  }

return  json_encode(array('statusid' =>$status,'data'=>$data,"err_code"=>$err_code ));

              
             
//  		 try{             
//           $turnover    = $req->turnover;
//           $profitbefore =$req->profitbefore;
//           $depreciation =$req->depreciation;
//           $financecost  =$req->financecost;
//           $inventory    =$req->inventory;
//           $debtors      =$req->debtors;
//           $creditors    =$req->creditors;
//           $existing     =$req->existing;


//            $turnovertemp =0;
//            $temp =0;
//            $proposedlimit =0;

          


//            if ($profitbefore > 0 || ($profitbefore - $financecost) > 0 ){
//            $turnovertemp = ($turnover * (20/100));
//            $temp = (((($inventory + $debtors) - $creditors) * (75/100)) - $existing);
//             if($turnovertemp < $temp){
//                $proposedlimit = $turnovertemp;
//             }else{
//                //$proposedlimit = $temp;
//             }
        
             
//             }else{

//               $status=0;

//            }


// 		    $data = array(
		     
// 		    'proposedlimit' =>$proposedlimit,
		     
// 		);
// 	}catch(\Exception $ee){
           
//            $err_code=$ee->getMessage();
// 	} 

     
// return  json_encode(array('statusid' =>$status,'data'=>$data,"err_code"=>$err_code ));

       }

       public function business_loan_calculator(){
        return view('business-loan-calculator');
       }

 
}
