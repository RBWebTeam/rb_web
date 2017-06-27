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
          $turnover    = $req->fturnover;
          $profitbefore =$req->fprofitbefore;
          $depreciation =$req->fdepreciation;
          $financecost  =$req->financecost;
          $inventory    =$req->finventory;
          $debtors      =$req->fdebtors;
          $creditors    =$req->fcreditors;
          $existing     =$req->fexisting;


           $turnovertemp =0;
           $temp =0;
           $proposedlimit =0;

           if ($profitbefore > 0 || ($profitbefore - $financecost) > 0 ){
           $turnovertemp = ($turnover * (20/100));
           $temp = (((($inventory + $debtors) - $creditors) * (75/100)) - $existing);
            if($turnovertemp < $temp){
               $proposedlimit = $turnovertemp;
            }else{
               $proposedlimit = $temp;
            }
        
             
            }else{

              $status=0;

           }


		    $data = array(
		     
		    'proposedlimit' =>$proposedlimit,
		     
		);
	}catch(\Exception $ee){
           
           $err_code=$ee->getMessage();
	} 

     
return  json_encode(array('status' =>$status,'data'=>$data,"err_code"=>$err_code ));

       }

 
}
