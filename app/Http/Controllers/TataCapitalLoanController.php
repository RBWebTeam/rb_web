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


// public function tatacapitalstate(Request $request){
//         $term = $request->term;
//         $products=DB::table('tata_capital_state_master')->select('state_name','los_state_id')
//         ->where('state_name', 'LIKE', '%'.$term.'%')
//         ->take(5)->get();
//         $data=array();
//         foreach ($products as $product) {
//                 $data[]=array('value'=>$product->state_name,'los_state_id'=>$product->los_state_id);
//         }
//         if(count($data)){
//              return $data;
//          }
//         else
//             return ['value'=>'No Result Found'];
     
// }
    


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

    public function tatacapital_city(){

          $query = DB::table('tata_capital_city_master')->select('id', 'city_name', 'los_city_id')->get();
          // print_r($query);exit();

          echo json_encode($query);
  
    }  


          public function tatacapital_state(){

          $query = DB::table('tata_capital_state_master')->select('id', 'state_name', 'los_state_id')->get();
          echo json_encode($query);
  
    }  

    public function tata_capital_personal_submit(Request $req){
          $data=$req->all();
          $post_data =json_encode($data);
          // print_r($post_data);exit();
          $url = $this::$url_static."/BankAPIService.svc/createTataCapitalPLAppln";
          $result=$this->call_json_data_api($url,$post_data);
          $http_result=$result['http_result'];
          // print_r($http_result);exit();
          $error=$result['error'];
          $st=str_replace('"{', "{", $http_result);
          $s=str_replace('}"', "}", $st);
          $m=$s=str_replace('\\', "", $s);
          $obj = json_decode($m);
          // print_r($obj);exit();
          return response()->json( $obj);
    }


    public function tata_capital_company_master(Request $req){
     // print_r($req->all());exit();
          $data=$req->all();
          $post_data =json_encode($data);
          // print_r($post_data);exit();
          $url = $this::$url_static."/BankAPIService.svc/GetTataCapitalPLCompanyList";
          $result=$this->call_json_data_api($url,$post_data);
          $http_result=$result['http_result'];
          // print_r($http_result);exit();
          $error=$result['error'];
          $st=str_replace('"{', "{", $http_result);
          $s=str_replace('}"', "}", $st);
          $m=$s=str_replace('\\', "", $s);
          $obj = json_decode($m);
       // print_r($obj);exit();
           foreach ($obj->aComp as $product) {
                $company_list[]=array('value'=>$product->cName,'datavalue'=>$product->nComp);
        }
        if(count($company_list)){
           //    print_r($data);
             return $company_list;
         }
        else{
            return ['value'=>'Others'];
    }
    }

    

  public function tata_capital_doc(){
    return view('tata-capital-doc-upload');
  }

  public function tata_capital_doc_upload(Request $req){

  $arrpush=array();
  $destinationPath = public_path(). '/upload/policy_documents/';
   $arr=array();
   $doc_upload=array();
  
   $fi = $req->file('docUploadName');
   $docUploadType=$req['docUploadType'];
   $webtopNo=$req['webtopNo'];

    $post_data[]='';
   foreach ($fi as $key=> $file) {

  
     
   $imagedata = file_get_contents($file);
   $base64 = base64_encode($imagedata);
   $doc=$fileName = rand(1, 999) . $file->getClientOriginalName();
   $doc_upload=$docUploadType[$key];

  $extension=strtolower(pathinfo($doc,PATHINFO_EXTENSION));
  $filename=$docUploadType[$key].".".$extension;

  $post_data=json_encode($arr[]=array('webtopNo'=>$webtopNo,'docUploadType' =>$doc_upload,'docUploadName'=> $filename,'base64'=>$base64));
 

    $url = $this::$url_static."/BankAPIService.svc/uploadTataCapitalPLDoc";
    $result=$this->call_json_data_api($url,$post_data);
    $http_result=$result['http_result'];
    
    $error=$result['error'];
    $st=str_replace('"{', "{", $http_result);
    $s=str_replace('}"', "}", $st);
    $m=$s=str_replace('\\', "", $s);
    $obj = json_encode($m);

  
  } 

   return response()->json( $obj);

  }

   /*Tata Capital Roi*/
         public function tata_capital_roi(Request $req){
          // print_r($req->all());exit();
          $data=$req->all();
          $post_data =json_encode($data);
          // print_r($post_data);exit();
          $url = $this::$url_static."/BankAPIService.svc/GetTataCapitalPLRate";
          $result=$this->call_json_data_api($url,$post_data);
          $http_result=$result['http_result'];
          // print_r($http_result);exit();
          $error=$result['error'];
          $st=str_replace('"{', "{", $http_result);
          $s=str_replace('}"', "}", $st);
          $m=$s=str_replace('\\', "", $s);
          $obj = json_decode($m);
          // print_r($obj);exit();
          return response()->json( $obj);
   }
  
    public function tatacapital_status(Request $req){
      // print_r($req->all());
        $data=$req->lead_id;
        $url = $this::$url_static."/BankAPIService.svc/geTataPLStatusReq?Lead_Id=$data";
        $result=$this->call_json_data_get_api($url,null);
        $http_result=$result['http_result'];
        // print_r($http_result);exit();
        $error=$result['error'];
        $st=str_replace('"{', "{", $http_result);
        $s=str_replace('}"', "}", $st);
        $m=$s=str_replace('\\', "", $s);
        $obj=json_decode($m);
        // print_r($obj);exit();
        return response()->json( $obj);

    }

    public function tatacapital(Request $req){
     $quote_data=DB::select('call usp_load_tata_city_master ("'.$req['losState'].'")');
       // print_r($quote_data);exit();
      return $quote_data;
    }

    public function tatacapitalstate(Request $req){
      $quote_data=DB::select('call usp_load_tata_state_master ("'.$req['losState'].'")');
       return $quote_data;
    }


    /*Medsave related*/
    
    public function tatacapitalpl(){
      return view('tatacapital-personal-loan-dc');
    }
}
   
 

