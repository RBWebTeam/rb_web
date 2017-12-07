<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Mail;
use Session;
use Illuminate\Http\Response;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class EquifaxController extends CallApiController
{
	// public function generate_pdf(Request $req){
	// 	$command="java -Xms256m -Xmx512m -jar MParser-6.2.0.jar".$req['file'];
	// 	$x=system($command);
	// 	print_r($x);
	// }


	public function equifax()
	{
		$inquiry=DB::select('select * from equifax_inquiry_purpose');
		$state=DB::select('select * from equifax_state_master');
		$phone=DB::select('select * from equifax_phone_type');
		//print "<pre>";
		//print_r($inquiry);
		//print_r($state);
		//print_r($phone);
		//exit();
		return view('equifax')->with(['inq'=>$inquiry,'state'=>$state,'phone'=>$phone]);
	}


	public function equifax_query(Request $req){


// echo system("echo %cd%");exit;

//file_put_contents(public_path("input/xxx.xml"),$http_result);
    $Status=array();

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
                       $TransactionAmount=$req->TransactionAmount?$req->TransactionAmount:'';
                       $VoterId=$req->VoterId?$req->VoterId:'';
 
 
 
                       
	  
		   



$post_dataa='{
    "InquiryCommonAccountDetails":'.$AccountDetails.',
    "RequestBody":{
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

 
 
		    $result=$this->call_json_data_api("http://api.rupeeboss.com/EquifaxAPIService.svc/createCreditReportReq",$post_dataa);
		    $http_result=$result['http_result'];
        

        $xml = simplexml_load_string($http_result);
        $xml_S=simplexml_load_string($xml);
       
        if($xml_S->ReportData->Error->ErrorMsg){
          $err=$xml_S->ReportData->Error->ErrorMsg;
          $status=1;
        }else{

        file_put_contents(public_path("input/xxx.xml"),$xml);
        $command="java -Xms256m -Xmx512m -jar MParser-6.2.0.jar xxx.xml";
        $x=system($command);
        //$x=system("MParser");
       // $y=system("echo %cd%");
        
          $status=0;
        }




       $NAME="Hit_".$PANId.".pdf";

          
         }catch (\Exception $e) {
          $err="Ohh !! Something is broken inside";
            $status=1;
           
         }
	
if($status)
  return view('equifaxmail',['NAME'=>$NAME,'error'=>$err]);
else
  return view('equifaxmail',['NAME'=>$NAME ,'error'=>0]);

		  
	}
}