<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Http\Requests;
use DB;
use App\SEOlibraries\Seo;
class TataCapitalLoanController extends CallApiController
{
   public function apply_tatacapital_loan(){

   
    return view('apply-tatacapital-loan');
   }


public function emicalculatorapi(){


$loanamount=$_POST['loanAmount'];    
$loaninterest=$_POST['loaninterest']/12/100;
$loanterm=$_POST['loanTerm']*12; 

 
$amount = $loanamount * $loaninterest * (pow(1 + $loaninterest, $loanterm) / (pow(1 + $loaninterest, $loanterm) - 1));
$total =(($amount*$loanterm)-$loanamount);
$ttl_payment = $loanamount+$total;

 

///echo round($amount);
echo json_encode($arrayName = array('amount' => ($amount),
									'ttl_pay'=>($total),
									'ttl_payment'=>($ttl_payment)));
 
}


public  function tatacapitalsearchajax(Request $request){

     	
		$post="cSource=CVIDYA&cKey=CVIDYAUAT&cFilter=".$request->term."&nMaker=1&nMaxRec=10";
     //$post=json_encode($request->all());
    $type="Content-Type: application/x-www-form-urlencoded";
    $url ="https://apps50.tatacapital.com/CDA-API-UAT/api_CDA_CM_GetComp.asp";
    $result=$this->call_other_data_api($url,$post,$type);
    $http_result=$result['http_result'];
    $error=$result['error'];
  
   $objLead = json_decode($http_result);
   $data=array();

   foreach ($objLead->aComp as $key => $value) {

        //$data[]=$value->nComp;
        $data[]= array('value'=>$value->cName,'nComp'=>$value->nComp);
   	 
   }

    if(count($data)){
             return $data;
         }else{
         return ['value'=>'No Result Found'];
     }


}


public function tatacapitalbankname(Request $request){

   
         $term = $request->term;
         $products=DB::table('tata_capital_bank_master')->select('bank_name')
        ->where('bank_name', 'LIKE', '%'.$term.'%')
        ->take(5)->get();
        $data=array();
        foreach ($products as $product) {
                $data[]=array('value'=>$product->bank_name);
        }
        if(count($data)){
             return $data;
         }
        else
            return ['value'=>'No Result Found'];

}


public function tatacapitalstate(Request $request){
        $term = $request->term;
        $products=DB::table('tata_capital_state_master')->select('state_name','los_state_id')
        ->where('state_name', 'LIKE', '%'.$term.'%')
        ->take(5)->get();
        $data=array();
        foreach ($products as $product) {
                $data[]=array('value'=>$product->state_name,'los_state_id'=>$product->los_state_id);
        }
        if(count($data)){
             return $data;
         }
        else
            return ['value'=>'No Result Found'];
     
}
    


public function tatacapitalcity(Request $request){
 
         $term = $request->term;
        $products=DB::table('tata_capital_city_master')->select('city_name','los_city_id')
        ->where('los_state_id',$term)
        ->take(5)->get();
        $data=array();
        foreach ($products as $product) {
                $data[]=array('value'=>$product->city_name,'los_city_id'=>$product->los_city_id);
        }
        if(count($data)){
             return $data;
         }
        else
            return ['value'=>'No Result Found'];
  
	
}

public function tatacapitalsubmitform(Request $req){
    $reques=$req->all();
    $post_data=json_encode($reques);
    $url ="http://api.rupeeboss.com/BankAPIService.svc/createTataCapitalPLAppln";
    $result=$this->call_json_data_api($url,$post_data);
    $http_result=$result['http_result'];
    $error=$result['error'];
    $responce= json_decode($http_result);

     return response()->json($responce);

}

public function tata_capital_business_loan(){
    return view('tata-capital-business-loan');
    
    } 

    public function tata_capital_business_submit(Request $req){
      // print_r($req->all());exit();
     $data=$req->all();
    
    $data['brokerid']=Session::get('brokerid')?Session::get('brokerid'):'MAA=';
    $data['empid']=Session::get('empid')?Session::get('empid'):'MAA=';
    $data['source']=Session::get('source')?Session::get('source'):'MAA=';
    $data['CampaignName']=Session::get('CampaignName');
    
    $post_data=json_encode($data);

    // print_r($post_data);exit();
    $url = $this::$url_static."/BankAPIService.svc/createTataCapitalBLAppln";
      $result=$this->call_json_data_api($url,$post_data);
        $http_result=$result['http_result'];
        $error=$result['error'];
        $st=str_replace('"{', "{", $http_result);
        $s=str_replace('}"', "}", $st);
        $m=$s=str_replace('\\', "", $s);
        $obj=json_decode($m);

        return response()->json( $obj);

    
    }  


}
   
 

