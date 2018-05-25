<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Mail;
use Session;
use Response;
use DateTime;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class EquifaxController extends CallApiController
{
  // public function generate_pdf(Request $req){
  //  $command="java -Xms256m -Xmx512m -jar MParser-6.2.0.jar".$req['file'];
  //  $x=system($command);
  //  print_r($x);
  // }


  // public function equifax()
  // {
  //   $inquiry=DB::select('select * from equifax_inquiry_purpose');
  //   $state=DB::select('select * from equifax_state_master');
  //   $phone=DB::select('select * from equifax_phone_type');
  //   //print "<pre>";
  //   //print_r($inquiry);
  //   //print_r($state);
  //   //print_r($phone);
  //   //exit();
  //   return view('equifax')->with(['inq'=>$inquiry,'state'=>$state,'phone'=>$phone]);
  // }


  public function equifax_query(Request $req){
// print_r($req->all());exit();

// echo system("echo %cd%");exit;

//file_put_contents(public_path("input/xxx.xml"),$http_result);
    $status=0;
    $name="";
    $err="";
    $score=0;

try{
     $AccountNumber=array();
     foreach ($req->AccountNumber as $key => $value) {
              $AccountNumber[]=[ "AccountNumber" =>$value,"seq" =>1];    }
              $AccountDetails = json_encode($AccountNumber);
              $DOB=$req->DOB?$req->DOB:'';
              $DriverLicense=$req->DriverLicense?$req->DriverLicense:'';   
              $FirstName=$req->FirstName?$req->FirstName:''; 
              $FullName=$req->FullName?$req->FullName:''; 
              $Gender=$req->Gender?$req->Gender:''; 
              $HomePhone=$req->HomePhone?$req->HomePhone:'';    
              $AddressLine1=array();
              if($req->AddressType){
              foreach ($req->AddressType as $key => $value) {
              $AddressLine1[]= array('InquiryAddresses' =>["AddressLine" =>$req->AddressLine[$key]?$req->AddressLine[$key]:" ",
              'AddressType'=>$req->AddressType[$key]?$req->AddressType[$key]:" ", 
              'City'=>$req->City[$key]?$req->City[$key]:" ",
              'Locality1'=>$req->Locality1[$key]?$req->Locality1[$key]:" ", 
              'Locality2'=>$req->Locality2[$key]?$req->Locality2[$key]:" ", 
              'State'=>$req->State[$key]?$req->State[$key]:" ",
              'Street'=>$req->Street[$key]?$req->Street[$key]:" ",  
              'Postal'=>$req->Postal[$key]?$req->Postal[$key]:" ",   
              "seq" =>1] ); 



          }
      }

             
          $InquiryAddresses=json_encode($AddressLine1);    
           
             $InquiryPurpose=$req->InquiryPurpose?$req->InquiryPurpose:'';
             $LastName=$req->LastName?$req->LastName:'';
             $MaritalStatus=$req->MaritalStatus?$req->MaritalStatus:'';
             $MiddleName=$req->MiddleName?$req->MiddleName:'';
             $MobilePhone=$req->MobilePhone?$req->MobilePhone:'';
             $NationalIdCard=$req->NationalIdCard?$req->NationalIdCard:'';
             $PANId=$req->PANId?$req->PANId:'';
             $PassportId=$req->PassportId?$req->PassportId:'';
             $Postal=$req->Postal?$req->Postal:'';
             $RationCard=$req->RationCard?$req->RationCard:'';
             $State=$req->State?$req->State:'';
             $TransactionAmount=$req->TransactionAmount?$req->TransactionAmount:0;
             $VoterId=$req->VoterId?$req->VoterId:'';
             $data['brokerid']=Session::get('brokerid')?Session::get('brokerid'):'MAA=';

             $data['empid']=Session::get('empid')?Session::get('empid'):'MAA=';

             $data['source']=Session::get('source')?Session::get('source'):'MAA=';
             // print_r($data['source']);exit();


 
                       
    
       



$post_data='{
    "InquiryCommonAccountDetails":'.$AccountDetails.',
    "RequestBody":{
        "brokerid":"'.$data['brokerid'].'",
         "empid":"'.$data['empid'].'",
         "source":"'. $data['source'].'",
        "AdditionalId1":"",
        "AdditionalId2":"",
        "AddrLine1":"'.$req->AddressLine[0].'",
        "DOB":"'.$DOB.'",
        "DriverLicense":"'.$DriverLicense.'",
        "FirstName":"'.$FirstName.'",
        "FullName":"'.$FullName.'",
        "Gender":"2",
        "HomePhone":{
            "PhoneNumber":"'.$HomePhone.'",
            "ReportedDate":"'. date("Y-m-d").'",
            "seq":1
        },
        "InquiryAddresses":'.$InquiryAddresses.',
        "InquiryPhones":[{
            "InquiryPhones":{
                "AreaCode":"",
                "CountryCode":"",
                "Number":"'.$MobilePhone.'",
                "PhoneNumberExtension":"",
                "PhoneType":"M",
                "seq":1
            }
        }],
        "InquiryPurpose":"'.$InquiryPurpose.'",
        "LastName":"'.$LastName.'",
        "MaritalStatus":"'.$MaritalStatus.'",
        "MiddleName":"'.$MiddleName.'",
        "MobilePhone":"'.$MobilePhone.'",
        "NationalIdCard":"'.$NationalIdCard.'",
        "PANId":"'.$PANId.'",
        "PassportId":"'.$PassportId.'",
        "Postal":"'.$Postal[0].'",
        "RationCard":"'.$RationCard.'",
        "State":"'.$State[0].'",
        "TransactionAmount":'.$TransactionAmount.',
        "VoterId":"'.$VoterId.'"  
    }
}';

 
 // print_r($post_data);exit();
        $result=$this->call_json_data_api("http://api.rupeeboss.com/EquifaxAPIService.svc/createCreditReportReq",$post_data);
        $http_result=$result['http_result'];
            // print_r($result);exit();
        

        $xml = simplexml_load_string($http_result);
        // $file="equifax-xml-response.xml";
        // //print_r(file_exists($file));exit();
        // if (file_exists($file)) {
        //   flush();
          
        //   $handle=fopen($file, "r");
        //   $xml=fread($handle, filesize($file));
        // }
        $xml_S=simplexml_load_string($xml);
       
        if($xml_S->ReportData->Error->ErrorMsg){
          $err=$xml_S->ReportData->Error->ErrorMsg;
          $status=1;
        }else{

          if(isset($xml_S->ReportData->Score->Value)){
            $score=$xml_S->ReportData->Score->Value;
          }
        $tt=file_put_contents(public_path("input/xxx.xml"),$xml);
        $process = new Process('java -Xms256m -Xmx512m -jar MParser-6.2.0.jar xxx.xml');
        $process->run();
        if (!$process->isSuccessful()) {
          
            throw new ProcessFailedException($process);
        }else{
          $status=1;
        }
        
          
        }




       $name="Hit_".strtoupper($PANId).".pdf";
       // print_r($name);exit();
        // $name=$x;
          
         }catch (\Exception $e) {
          $err=$e->getMessage();
          $status=0;
           
         }
     $arr=['name'=>$name,'error'=>$err,'score'=>$score,'status'=>$status];
    return response()->json($arr);
}

  



  public function equifax_verification(){
    $data['brokerid']=Session::get('brokerid')?Session::get('brokerid'):'MAA=';
    $data['empid']=Session::get('empid')?Session::get('empid'):'MAA=';
    $data['source']=Session::get('source')?Session::get('source'):'MAA=';
    return view('equifax-verification')->with($data);
  }

  public function equifax_send_otp(Request $req){
    // print_r($req->mobile);exit();
    // $otp=123456;
    $otp = mt_rand(100000, 999999);
    Session::put('temp_contact', $req['mobile']);
    $post_data='{"mobNo":"'.$req['mobile'].'","msgData":"your otp is '.$otp.' - RupeeBoss.com",
                "source":"WEB"}';
            // $url = "http://beta.services.rupeeboss.com/LoginDtls.svc/xmlservice/sendSMS";
               $url = $this::$service_url_static."LoginDtls.svc/xmlservice/sendSMS";
            $result=$this->call_json_data_api($url,$post_data);
            $http_result=$result['http_result'];
            // print_r($http_result);exit();
            $error=$result['error'];
            $obj = json_decode($http_result);
            // print_r($http_result);exit();
            // statusId response 0 for success, 1 for failure
            
            if($obj->{'statusId'}==0){
                return Response::json(array(
                            'data' => true,
                        ));
            }else{
                return Response::json(array(
                            'data' => false,
                        ));
            }
        
        }

    public function equifax_verify_otp(Request $req){
    $phone = Session::get('temp_contact');
    $express_otp=$req->verify_otp;
    //print_r($express_otp);
    //print_r($phone);
        
          Session::put('contact',$phone);
          if(Session::get('temp_contact'))
          {
          return Response::json(array(
                            'data' => "true",
                        ));
           }else{
          return Response::json(array(
                            'data' => "false",
                        ));
        }
 }


         public function rectifycredit(){
        return view('rectifycredit');
 }

       public function rectify_equi_score(Request $req){

       

     
         $score=$this->equifax_query_pl($req);
         $va=$score['score'];
         $scorarr = json_decode(json_encode($va), TRUE);
      

          $req['AddressLine']=$req['AddressLine'][0];
          $req['AddressType']=$req['AddressType'][0];
          $req['City']=$req['City'][0];
          $req['State']=$req['State'][0];
          $req['Postal']=$req['Postal'][0];
          $req['Locality1']=$req['Locality1'][0];
          $req['Locality2']=$req['Locality2'][0];
          $req['AccountNumber']=$req['AccountNumber'][0];
          // print_r($req->all());exit();
          // $scorarr[0]=799;
         $rectify=$this->rectify($req,$scorarr[0]);
       //  print_r($rectify);exit();
         return $rectify;
    } 


      

        public function rectify(Request $req,$ar){
          // print_r($req->all());exit();
        // print_r($ar);exit();
        // $req['datetime'] =date('d-m-Y');
        $data['score']=$ar;
        $data=$req->all();
        $data['brokerid']=Session::get('brokerid')?Session::get('brokerid'):'MAA=';
        $data['empid']=Session::get('empid')?Session::get('empid'):'MAA=';
        $data['source']=Session::get('source')?Session::get('source'):'MAA=';
        $data['CampaignName']=Session::get('CampaignName');
        $data['score']=$ar;
        $file=$req->file('attachment');
        $destinationPath = $_SERVER['DOCUMENT_ROOT'] .'/uploads/rectify/'.$req->Mobile_Num.'/';
        $filename=$file->getClientOriginalExtension();
        $file->move($destinationPath,$filename);
        // print_r($destinationPath.$filename);exit();
        $d=array_merge($data,['file_path'=>$destinationPath.$filename]);
        unset($d['attachment']);
        $post_data=json_encode($d);
        // print_r($post_data);exit();
        $url = $this::$url_static."/BankAPIService.svc/createRectifyCreditCustDetail";
        $result=$this->call_json_data_api($url,$post_data);
        $http_result=$result['http_result'];
        // print_r($http_result);exit();
        $error=$result['error'];
        $st=str_replace('"{', "{", $http_result);
        $s=str_replace('}"', "}", $st);
        $m=$s=str_replace('\\', "", $s);
        $obj = json_decode($m);
        $obj1=json_decode($ar);
         $obj_merged = (object) array_merge((array) $obj, (array) $obj1);
       // print_r( $obj_merged);exit();
       return response()->json($obj_merged);

 }

       public function rectify_credit(){
        return view('rectify-credit');
 }


 public function equifax(){
 $inquiry=DB::select('select * from equifax_inquiry_purpose');
    $state=DB::select('select * from equifax_state_master');
    $phone=DB::select('select * from equifax_phone_type');
    
    return view('equifax')->with(['inq'=>$inquiry,'state'=>$state,'phone'=>$phone]);
 }


 /*Equifax Score for PL*/
 public function equifax_query_pl(Request $req){

    $status=0;
    $name="";
    $err="";
    $score=0;

try{
     $AccountNumber=array();
     foreach ($req->AccountNumber as $key => $value) {
              $AccountNumber[]=[ "AccountNumber" =>$value,"seq" =>1];    }
              $AccountDetails = json_encode($AccountNumber);
              $DOB=$req->DOB?$req->DOB:'';
              $DriverLicense=$req->DriverLicense?$req->DriverLicense:'';   
              $FirstName=$req->FirstName?$req->FirstName:''; 
              $FullName=$req->FullName?$req->FullName:''; 
              $Gender=$req->Gender?$req->Gender:''; 
              $HomePhone=$req->HomePhone?$req->HomePhone:'';    
              $AddressLine1=array();
              if($req->AddressType){
              foreach ($req->AddressType as $key => $value) {
              $AddressLine1[]= array('InquiryAddresses' =>["AddressLine" =>$req->AddressLine[$key]?$req->AddressLine[$key]:" ",
              'AddressType'=>$req->AddressType[$key]?$req->AddressType[$key]:" ", 
              'City'=>$req->City[$key]?$req->City[$key]:" ",
              'Locality1'=>$req->Locality1[$key]?$req->Locality1[$key]:" ", 
              'Locality2'=>$req->Locality2[$key]?$req->Locality2[$key]:" ", 
              'State'=>$req->State[$key]?$req->State[$key]:" ",
              'Street'=>$req->Street[$key]?$req->Street[$key]:" ",  
              'Postal'=>$req->Postal[$key]?$req->Postal[$key]:" ",   
              "seq" =>1] ); 



          }
      }

             
          $InquiryAddresses=json_encode($AddressLine1);    
           
             $InquiryPurpose=$req->InquiryPurpose?$req->InquiryPurpose:'';
             $LastName=$req->LastName?$req->LastName:'';
             $MaritalStatus=$req->MaritalStatus?$req->MaritalStatus:'';
             $MiddleName=$req->MiddleName?$req->MiddleName:'';
             $MobilePhone=$req->MobilePhone?$req->MobilePhone:'';
             $NationalIdCard=$req->NationalIdCard?$req->NationalIdCard:'';
             $PANId=$req->PANId?$req->PANId:'';
             $PassportId=$req->PassportId?$req->PassportId:'';
             $Postal=$req->Postal?$req->Postal:'';
             $RationCard=$req->RationCard?$req->RationCard:'';
             $State=$req->State?$req->State:'';
             $TransactionAmount=$req->TransactionAmount?$req->TransactionAmount:0;
             $VoterId=$req->VoterId?$req->VoterId:'';
             $data['brokerid']=Session::get('brokerid')?Session::get('brokerid'):'MAA=';

             $data['empid']=Session::get('empid')?Session::get('empid'):'MAA=';

             $data['source']=Session::get('source')?Session::get('source'):'MAA=';
             // print_r($data['source']);exit();

$post_data='{
    "InquiryCommonAccountDetails":'.$AccountDetails.',
    "RequestBody":{
        "brokerid":"'.$data['brokerid'].'",
         "empid":"'.$data['empid'].'",
         "source":"'. $data['source'].'",
        "AdditionalId1":"",
        "AdditionalId2":"",
        "AddrLine1":"'.$req->AddressLine[0].'",
        "DOB":"'.$DOB.'",
        "DriverLicense":"'.$DriverLicense.'",
        "FirstName":"'.$FirstName.'",
        "FullName":"'.$FullName.'",
        "Gender":"2",
        "HomePhone":{
            "PhoneNumber":"'.$HomePhone.'",
            "ReportedDate":"'. date("Y-m-d").'",
            "seq":1
        },
        "InquiryAddresses":'.$InquiryAddresses.',
        "InquiryPhones":[{
            "InquiryPhones":{
                "AreaCode":"",
                "CountryCode":"",
                "Number":"'.$MobilePhone.'",
                "PhoneNumberExtension":"",
                "PhoneType":"M",
                "seq":1
            }
        }],
        "InquiryPurpose":"'.$InquiryPurpose.'",
        "LastName":"'.$LastName.'",
        "MaritalStatus":"'.$MaritalStatus.'",
        "MiddleName":"'.$MiddleName.'",
        "MobilePhone":"'.$MobilePhone.'",
        "NationalIdCard":"'.$NationalIdCard.'",
        "PANId":"'.$PANId.'",
        "PassportId":"'.$PassportId.'",
        "Postal":"'.$Postal[0].'",
        "RationCard":"'.$RationCard.'",
        "State":"'.$State[0].'",
        "TransactionAmount":'.$TransactionAmount.',
        "VoterId":"'.$VoterId.'"  
    }
}';

        $result=$this->call_json_data_api("http://api.rupeeboss.com/EquifaxAPIService.svc/createCreditReportReq",$post_data);
        $http_result=$result['http_result'];
           
        

        $xml = simplexml_load_string($http_result);
        
        $xml_S=simplexml_load_string($xml);
       
        if($xml_S->ReportData->Error->ErrorMsg){
          $err=$xml_S->ReportData->Error->ErrorMsg;
          $status=1;
        }else{

          if(isset($xml_S->ReportData->Score->Value)){
            $score=$xml_S->ReportData->Score->Value;
          }
        $tt=file_put_contents(public_path("input/xxx.xml"),$xml);
        $process = new Process('java -Xms256m -Xmx512m -jar MParser-6.2.0.jar xxx.xml');
        $process->run();
        if (!$process->isSuccessful()) {
          
            throw new ProcessFailedException($process);
        }else{
          $status=1;
        }
        
        }
        $name="Hit_".strtoupper($PANId).".pdf";
        }catch (\Exception $e) {
          $err=$e->getMessage();
          $status=0;
           
         }
  
        $arr=['name'=>$name,'error'=>$err,'score'=>$score,'status'=>$status];
    return  $arr ;
  
  }
 
}