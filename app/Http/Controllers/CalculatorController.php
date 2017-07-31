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
              
          }else{

            $proposed_limit = $proposed_limit;

          }

         


         if($proposed_limit>0){
 
            $data = array('proposedlimit'=>$proposed_limit,);
            $err_code='success.';
            $status=0;
         }else{

            $err_code='Proposed limit reject.';
            $status=1;
         }


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
       
       public function business_loan_calculation(Request $req){
          $data=$req->all();
          $post_data=json_encode($data);
          //print_r($post_data);
          $url = $this::$current_domain_static."/api/productwise_emi_cal_app";
          $result=$this->call_json_data_api($url,$post_data);
          $http_result=$result['http_result'];
          $error=$result['error'];
          $st=str_replace('"{', "{", $http_result);
          $s=str_replace('}"', "}", $st);
          $m=$s=str_replace('\\', "", $s);
          // print_r($http_result);exit();


          $obj = json_decode($m);
          return response()->json( $obj);
       }

       public function personal_loan_calculator(){
        return view('personal-loan-calculator');
       }

       public function personal_loan_calculation(Request $req){
          $data=$req->all();
          $post_data=json_encode($data);
          //print_r($post_data);
          $url = $this::$current_domain_static."/api/productwise_emi_cal_app";
          $result=$this->call_json_data_api($url,$post_data);
          $http_result=$result['http_result'];
          $error=$result['error'];
          $st=str_replace('"{', "{", $http_result);
          $s=str_replace('}"', "}", $st);
          $m=$s=str_replace('\\', "", $s);
          // print_r($http_result);exit();


          $obj = json_decode($m);
          return response()->json( $obj);
       }

       public function home_loan_calculator(){
        return view('home-loan-calculator');
       }

       public function home_loan_calculation(Request $req){
          $data=$req->all();
          $post_data=json_encode($data);
          // print_r($post_data);
          $url = $this::$current_domain_static."/api/productwise_emi_cal_app";
          $result=$this->call_json_data_api($url,$post_data);
          $http_result=$result['http_result'];
          $error=$result['error'];
          $st=str_replace('"{', "{", $http_result);
          $s=str_replace('}"', "}", $st);
          $m=$s=str_replace('\\', "", $s);
          // print_r($http_result);exit();


          $obj = json_decode($m);
          return response()->json( $obj);
       }


       public function fire_calculator(){
        return view('fire-calculator');
       }
 
}
