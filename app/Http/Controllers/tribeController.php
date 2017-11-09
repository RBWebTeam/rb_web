<?php

namespace App\Http\Controllers;
use Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Session;
class TribeController extends CallApiController
{
	public static $secret="i1fndpWYkU9fgBhqWmKU1Uwt7ogk9q";
	//public static $name="SampleTribe";
    public function tribe(){
    	try{
    		Session::forget('loan_id');
    		        	Session::forget('transaction_id');
    		        	Session::forget('tribe_id');
    		        	Session::forget('company_name');
    		        	Session::forget('loan_id');
    		        	Session::forget('submission_status');
    		        	Session::forget('tribe_abandon');
    		        	  	
    		        	//print_r("dsfsdf". Session::get('loan_id'));exit();
    		    		$post='';
    		    	    $url = $this::$url_static."BankAPIService.svc/GetTribeLoan";
    		    	    //print_r($url);exit();
    		    	    $result=$this->call_json_data_get_api($url,$post);
    		    	    $http_result=$result['http_result'];
    		    	    $error=$result['error'];
    		    	    if($error){
    		    	    	return view('went-wrong');
    		    	    }else{
    		    	    $temp_data=json_decode(json_decode($http_result))->response;
    		    	    $temp=json_decode(json_encode($temp_data));
    		    	   //	print "<pre>";
    		    	   	// print_r($temp);exit();
    		    	    foreach ($temp as $key => $value) {
    		    
    		    	    	$sata[$key]=$value;
    		    	    	$length=sizeof($sata[$key]);
    		    	    	//sorting array according to key value
    		    	    	if($length>1){
    		        		    	//print_r($sata[$key]);exit();
    		        		    	for($i=0;$i<$length;$i++){
    		        		    		//print_r($length);
    		        		    		$temp=(array)($sata[$key][$i]->mapping);
    		        		    		ksort($temp);
    		        		    		$test[$sata[$key][$i]->key]=(object)$temp;
    		        		    		
    		        		    		//print_r($test[$sata[$key][$i]->key]);
    		        		    	}
    		    	    	}else{
    		    	    		//print_r($sata[$key]->key);
    		    	    		$temp=(array)($sata[$key]->mapping);
    		        		    ksort($temp);
    		    	    		$test[$sata[$key]->key]=(object)$temp;
    		    	    		   
    		    	    	}
    		    	    	
    		    	    }
    		    	     Session::put('tribe_abandon',$test['status']->abandoned); 
    		    	     Session::put('submission_status',$test['status']->submitted); 
    		    	     
    		    	    //exit();
    		    	   //   $data=$test;
    		    	   //  print_r($data);exit();
    		    }
    		}catch(\Exception $ee){
    		    	return view('contact');
    		    }	
    		    return view('tribe')->with('data',$test);		
	    }
	    
	
	public function save_tribe_form(Request $req){
	$data=$req->all();			
	// $data["name"]="SampleTribe";

	//print_r($req->all());exit();
	//remove above hard coded parameter later
	Session::put('company_name',$data['company_name']);
	
	$business_run_by_pan=isset($data['business_run_by_pan'])?$data['business_run_by_pan']:"";
	$business_pan=(isset($data['company_pan_card'])&&$data['company_pan_card'])?$data['company_pan_card']:$business_run_by_pan;
	$data['online_sale_channel']=isset($data['online_sale_channel'])?$data['online_sale_channel']:"";
	$x=$data['online_ids'];
	$data['online_credential']=(json_encode($data['online_ids_array'][$x]));
	//print_r(json_encode($data['online_ids_array'][$x]));exit();
	$data['middle_name']=isset($data['middle_name'])?$data['middle_name']:'""';
	$data['ownership']=isset($data['ownership'])?$data['ownership']:0;
	$data['agent_name']=isset($data['agent_name'])?$data['agent_name']:'""';
	$data['social']=isset($data['social'])?$data['social']:'""';
	$data['partners_count']=isset($data['partners_count'])?$data['partners_count']:'""';
	$data['directors_count']=isset($data['directors_count'])?$data['directors_count']:'""';
	
	$data['taxation_details']=isset($data['taxation_details'])?$data['taxation_details']:'';
	$data['online_sale_channel']=isset($data['online_sale_channel'])?$data['online_sale_channel']:'""';
	$data['business_run_by']=isset($data['business_run_by'])?$data['business_run_by']:'""';
	
	//print_r($data);exit();
	$post_data='{"agentname":"'.$data['agent_name'].'",
		"business_details":{
			"address":{
				"work":"'.$data['work_address'].'"
			},
			"director_count":'.$data['directors_count'].',
			"employess_count":"'.$data['employee_count'].'",
			"is_offline_sales":'.$data['offline_sale'].',
			"is_online_sales":'.$data['online_sale'].',
			"know_about_us":"'.$data['reached_us_via'].'",
			"loan_purpose":'.$data['loan_purpose'].',
			"nature_of_business":'.$data['business_type'].',
			"online_sales_channels":['.$data['online_sale_channel'].'],
			"ownership":'.$data['business_premises'].',
			"pan_number":"'.$business_pan.'",
			"partner_count":'.$data['partners_count'].',
			"product_sell":['.$data['selling_product'].'],
			"proprietorship_type":'.$data['business_run_by'].',
			"registration_details":'.$data['registration_detail'].',
			"taxation_details":{'.$data['taxation_details'].'},
			"turnover":'.$data['turnover'].'
		},
		"is_loan_distributor":'.$data['is_loan_distributor'].',
		"loan_amount":"'.$data['loan_amount'].'",
		"loan_tenure":'.$data['loan_tenure'].',
		"loan_type":'.$data['loan_type'].',
		"loandistributorid":"'.$data['agent_name'].'",
		"name":"'.$data['company_name'].'",
		"online_ids":[{
			"aggregated_type":'.$data['online_ids'].',
			"credential":'.$data['online_credential'].'
		}],
		"owner_details":[{
			"email":"'.$data['owner_email'].'",
			"name":"'.$data['owner_name'].'"
		}],
		"personal_details":{
			"DOB":"'.$data['dob'].'",
			"aadhaar_number":"'.$data['aadhar_no'].'",
			"address":{
				"work":"'.$data['address'].'"
			},
			"education":'.$data['education'].',
			"email":"'.$data['owner_email'].'",
			"family_details":'.$data['family_detail'].',
			"first_name":"'.$data['first_name'].'",
			"income_details":"'.$data['annual_income'].'",
			"last_name":"'.$data['last_name'].'",
			"mobile_number":'.$data['mobile'].'
		},
		"reference_details":{
			"email":"'.$data['ref_email'].'",
			"first_name":"'.$data['ref_first_name'].'",
			"last_name":"'.$data['ref_last_name'].'",
			"middle_name":"'.$data['ref_middle_name'].'",
			"mobile_number":'.$data['ref_mobile'].'
		},
		"repayment_frequency":'.$data['repayment_frequency'].',
		"secret":"'.$this::$secret.'"}';
		
		    $url = $this::$url_static."BankAPIService.svc/createTribeLoan";
		    $result=$this->call_json_data_api($url,$post_data);
		    $http_result=$result['http_result'];
		    $error=$result['error'];
		   //print_r(json_decode(($http_result)));exit();

		    if($http_result){

		        $data=json_decode(($http_result));

		      // print_r( $http_result);exit();
		        if(json_decode($data)->error ==1){
		        	return Response::json(array(
		        		'status'=>false
		        	));
		        }
		        $tribe_id=json_decode($data)->response->tribe;
		        $loan_application_id=json_decode($data)->response->loan_application_id;
		        Session::put('loan_id',$loan_application_id);
		        Session::put('tribe_id',$tribe_id);
		     	return Response::json(array(
		     					'status'=>true,
                                'tribe' => $tribe_id,
                                'loan_id'=>$loan_application_id
                            ));
		    }else{
		        return Response::json(array(
		        		'status'=>false
		        	));
		    }

	      
	    }

	   public function UploadTribeDocuments(Request $req){
	    	$tribe_id=Session::get('tribe_id');
	    	$loan_id=Session::get('loan_id');
	    	//print_r(Session::all());exit();
	      	$documents_name_array = array('Pan Card','Aadhar Card','Driving License','Passport','Voter ID','Electricity_bill','Leave and License Agreement','Registration Certificate','Tax Registration','Comapny IT Returns','Company Pan Card','Vat Return','IT Returns','Other');
	    	
	        $id=$req['uplaoding_doc_name'];
            $str='document_itself';         
            $base64=$this->FileToString($str,$req);
            //if document is Personal/Company IT Return
            if($id==6 || $id==7){
            	$post_data='{"document_category": '.$id.',"year":"'.$req['document_year'].'","type":"'.$req['document_type'].'", "title": "'.$req['document_title'].'", "document":"data:application/pdf;base64,'.$base64.'", "tribe": '.$tribe_id.'}';
            }else if($id==9){
            $post_data='{"document_category": '.$id.',"tribe": '.$tribe_id.',"input_from":'.$req['input_from'].',"input_to":'.$req['input_to'].', "title": "'.$req['document_title'].'", "document":"data:application/pdf;base64,'.$base64.'"}';
            }
            else{
            $post_data='{"document_category": '.$id.', "title": "'.$req['document_title'].'", "document":"data:application/pdf;base64,'.$base64.'", "tribe": '.$tribe_id.'}';
        	}
			//print_r($post_data);exit();

				$url = $this::$url_static."BankAPIService.svc/uploadDocumentsTribeLoan";
				$result=$this->call_json_data_api($url,$post_data);
			    $http_result=$result['http_result'];
			    $error=$result['error'];
			    $data=json_decode( json_decode($http_result));
			    
			
		    if(($data->error!=1)){
		    	 return Response::json(array(
	     					'status'=>true,
                            'document_id' => $data->response->document_id,
                            'message'=>$data->response->message
                    ));
		    }else{
		    	return Response::json(array(
	     					'status'=>false,
                           	'error'=>$data->error
                        ));
		    }
	    }

	    public function UploadBankStatement(Request $req){
	    	$tribe_id=Session::get('tribe_id');
	    	$loan_id=Session::get('loan_id');
	    	$str='upload_statement';
	    	$pdf_pwd=$req['pdf_password']?'"'.$req['pdf_password'].'"':'null';
	    	$base64=$this->FileToString($str,$req);
	    	//if transaction is already opened
	    	if(isset($req->transaction_id) && $req->transaction_id){
	    		$transaction_id=Session::get('transaction_id');
				$post_data='{"secret":"'.TribeController::$secret.'","document_password":'.$pdf_pwd.',"loan_application_id":'.$loan_id.',"statement_file":"data:application/pdf;base64,'.$base64.'","transaction_id": "'.$transaction_id.'","institution":"'.$req['institution'].'" }';
				//print_r($post_data);exit();
				//upload next bank statement
				$url = $this::$url_static."BankAPIService.svc/uploadnextStatmentTribeLoan";
				$result=$this->call_json_data_api($url,$post_data);
			    $http_result=$result['http_result'];
			    $error=$result['error'];
			    $data=json_decode($http_result);

			    //print_r($http_result);exit();
			    $data=json_decode( json_decode($http_result));
			    goto result;

	    	}else
	    		{

	            $post_data='{"secret":"'.TribeController::$secret.'","document_password":'.$pdf_pwd.',"loan_application_id":'.$req['loan_id'].',"from_date": "'.$req['start_date'].'","to_date":"'.$req['end_date'].'","statement_file":"data:application/pdf;base64,'.$base64.'","institution":"'.$req['institution'].'" }';
		    
					//print_r($post_data);exit();
				$url = $this::$url_static."BankAPIService.svc/uploadStatmentTribeLoan";
				$result=$this->call_json_data_api($url,$post_data);
			    $http_result=$result['http_result'];
			    $error=$result['error'];
			    $data=json_decode( json_decode($http_result));
			    //print_r($data->response->loan_application_id);exit();
			}
	result:    if(($data->error!=1)){

		    	 Session::put('loan_id',$data->response->loan_application_id);
		    	 Session::put('transaction_id',$data->response->transaction_id);
		    	 return Response::json(array(
	     					'status'=>true,
                            'transaction_id' => $data->response->transaction_id,
                            'loan_id'=>$data->response->loan_application_id
                    ));
		    	
		        
		    }else{
		    	return Response::json(array(
	     					'status'=>false,
                           	'error'=>$data->error
                        ));
		    }
		}

	public function CloseTransaction(Request $req){
		//print_r($req->all());exit();
		$abandon_status=Session::get('tribe_abandon');
		$transaction_id=Session::get('transaction_id');
		$loan_id=Session::get('loan_id');
		$post_data='{"secret":"'.TribeController::$secret.'","loan_application_id":"'.$loan_id.'","transaction_id": "'.$transaction_id.'"}';
		
		//print_r($post_data);exit();
		$url = $this::$url_static."BankAPIService.svc/completeTransctionTribeLoan";
		$result=$this->call_json_data_api($url,$post_data);
	    $http_result=$result['http_result'];
	    $error=$result['error'];
	    $data=json_decode(json_decode($http_result));
	    //print_r($data);exit();
	    if(($data->error!=1)){
	    	 return Response::json(array(
	     					'status'=>true,
                            'message'=>$data->response->message
                    ));
	    }else{
	    	return Response::json(array(
	     					'status'=>false,
                           	'error'=>$data->error
                        ));
	    }

	}	
	public function AbandonTransaction(Request $req){
		$abandon_status=Session::get('tribe_abandon');
		$loan_id=Session::get('loan_id');
		$name=Session::get('company_name');
		$post_data='{"secret":"'.TribeController::$secret.'","name":"'.$name.'","loan_application_id":"'.$loan_id.'","status":'.$abandon_status.'}';
		 //print_r($post_data);exit();
		$url = $this::$url_static."BankAPIService.svc/abandonTribeLoan";
		$result=$this->call_json_data_api($url,$post_data);
	    $http_result=$result['http_result'];
	    $error=$result['error'];
	    //$data=json_decode($http_result);
	   	$data=json_decode(json_decode($http_result));
	    //print_r($data);exit();
	    if(($data->error!=1)){
	    	 return Response::json(array(
	     					'status'=>true,
                            'loan_application_id' => $data->response->loan_application_id,
                            'message'=>$data->response->message
                    ));
	    }else{
	    	return Response::json(array(
	     					'status'=>false,
                           	'error'=>$data->error
                        ));
	    }
	}

	public function FinalSubmission(Request $req){
		$submission_status=Session::get('submission_status');
		$loan_id=Session::get('loan_id');
		$name=Session::get('company_name');
		$post_data='{"secret":"'.TribeController::$secret.'","name":"'.$name.'","loan_application_id":"'.$loan_id.'","status":'.$submission_status.'}';
		 //print_r($post_data);exit();

		$url = $this::$url_static."BankAPIService.svc/submitTribeLoan";
		$result=$this->call_json_data_api($url,$post_data);
	    $http_result=$result['http_result'];
	    $error=$result['error'];
	     $data=json_decode(json_decode($http_result));
	    //print_r($data);exit();
	    if(($data->error!=1)){
	    	 return Response::json(array(
	     					'status'=>true,
                            'message'=>$data->response->message
                    ));
	    }else{
	    	return Response::json(array(
	     					'status'=>false,
                           	'error'=>$data->error
                        ));
	    }
	}
	public function get_tribe_doc(Request $req){
		//print_r($req->all());exit();
		$tribe_id=Session::get('tribe_id');
		$post_data='';
		$doc_id=$req['id'];
		$url = $this::$url_static."BankAPIService.svc/getDocumentsTribeLoan?tribe_id=".$tribe_id."&secret=".$this::$secret."";

		$result=$this->call_json_data_get_api($url,$post_data);
	    $http_result=$result['http_result'];
	    $error=$result['error'];
	    $data=json_decode(json_decode($http_result));

	    foreach ($data->response->data as $key => $value) {
	    	//print_r($value[0]->id . " == ".$doc_id);
	    	if($value[0]->id==$doc_id){
	    		$url=$value[0]->document_url;
	    		$title=$value[0]->title;
	    		break;
	    	}
	    	
	    }
	  // print_r($doc_id);exit();
	    if(($data->error!=1)){
	    	 return Response::json(array(
	     					'status'=>true,
                            'url' => $url,
                            'message'=>$title
                    ));
	    }else{
	    	return Response::json(array(
	     					'status'=>false,
                           	'error'=>$data->error
                        ));
	    }	
	}
	public function delete_tribe_doc(Request $req){
		$post_data='{"document_id": '.$req['id'].', "secret": "'.$this::$secret.'"}';
		$url = $this::$url_static."BankAPIService.svc/deleteDocumentsTribeLoan";
		$result=$this->call_json_data_api($url,$post_data);
	    $http_result=$result['http_result'];
	    $error=$result['error'];
	     $data=json_decode(json_decode($http_result));
	    //print_r($data);exit();
	    if(($data->error!=1)){
	    	 return Response::json(array(
	     					'status'=>true,
                            'document_id' => $data->response->document_id,
                            'message'=>$data->response->message
                    ));
	    }else{
	    	return Response::json(array(
	     					'status'=>false,
                           	'error'=>$data->error
                        ));
	    }
	}
<<<<<<< HEAD
	 public function test(){
	  	
    	Session::forget('loan_id');
    	Session::forget('transaction_id');
    	Session::forget('tribe_id');
    	Session::forget('company_name');
    	Session::forget('loan_id');
    	Session::forget('submission_status');
    	Session::forget('tribe_abandon');
    	  	
    	//print_r("dsfsdf". Session::get('loan_id'));exit();
		$post='';
	    $url = $this::$url_static."BankAPIService.svc/GetTribeLoan";
	    //print_r($url);exit();
	    $result=$this->call_json_data_get_api($url,$post);
	    $http_result=$result['http_result'];
	    $error=$result['error'];
	    if($error){
	    	return view('went-wrong');
	    }else{
	    $temp_data=json_decode(json_decode($http_result))->response;
	    $temp=json_decode(json_encode($temp_data));
	   	//print "<pre>";
	   	// print_r($temp);exit();
	    foreach ($temp as $key => $value) {

	    	$sata[$key]=$value;
	    	$length=sizeof($sata[$key]);
	    	
	    	if($length>1){
    		    	//print_r($sata[$key]);exit();
    		    	for($i=0;$i<$length;$i++){
    		    		//print_r($length);
    		    		$test[$sata[$key][$i]->key]=$sata[$key][$i]->mapping;

    		    	}
	    	}else{
	    		//print_r($sata[$key]->key);
	    		$test[$sata[$key]->key]=$sata[$key]->mapping;
	    		   
	    	}
	    	
	    }
	     Session::put('tribe_abandon',$test['status']->abandoned); 
	     Session::put('submission_status',$test['status']->submitted); 
	     
	    //exit();
	   //   $data=$test;
	   //  print_r($data);exit();
	   		
	     return view('test_parse')->with('data',$test);
	  }
=======
	 public function test(Request $req){
	 	$xml='<?xml version="1.0"?>
<catalog>
   <book id="bk101">
      <author>Gambardella, Matthew</author>
      <title>XML Developer s Guide</title>
      <genre>Computer</genre>
      <price>44.95</price>
      <publish_date>2000-10-01</publish_date>
      <description>An in-depth look at creating applications 
      with XML.</description>
   </book>
   <book id="bk102">
      <author>Ralls, Kim</author>
      <title>Midnight Rain</title>
      <genre>Fantasy</genre>
      <price>5.95</price>
      <publish_date>2000-12-16</publish_date>
      <description>A former architect battles corporate zombies, 
      an evil sorceress, and her own childhood to become queen 
      of the world.</description>
   </book>
   <book id="bk103">
      <author>Corets, Eva</author>
      <title>Maeve Ascendant</title>
      <genre>Fantasy</genre>
      <price>5.95</price>
      <publish_date>2000-11-17</publish_date>
      <description>After the collapse of a nanotechnology 
      society in England, the young survivors lay the 
      foundation for a new society.</description>
   </book>
   <book id="bk104">
      <author>Corets, Eva</author>
      <title>Oberon s Legacy</title>
      <genre>Fantasy</genre>
      <price>5.95</price>
      <publish_date>2001-03-10</publish_date>
      <description>In post-apocalypse England, the mysterious 
      agent known only as Oberon helps to create a new life 
      for the inhabitants of London. Sequel to Maeve 
      Ascendant.</description>
   </book>
   <book id="bk105">
      <author>Corets, Eva</author>
      <title>The Sundered Grail</title>
      <genre>Fantasy</genre>
      <price>5.95</price>
      <publish_date>2001-09-10</publish_date>
      <description>The two daughters of Maeve, half-sisters, 
      battle one another for control of England. Sequel to 
      Oberon s Legacy.</description>
   </book>
   <book id="bk106">
      <author>Randall, Cynthia</author>
      <title>Lover Birds</title>
      <genre>Romance</genre>
      <price>4.95</price>
      <publish_date>2000-09-02</publish_date>
      <description>When Carla meets Paul at an ornithology 
      conference, tempers fly as feathers get ruffled.</description>
   </book>
   <book id="bk107">
      <author>Thurman, Paula</author>
      <title>Splish Splash</title>
      <genre>Romance</genre>
      <price>4.95</price>
      <publish_date>2000-11-02</publish_date>
      <description>A deep sea diver finds true love twenty 
      thousand leagues beneath the sea.</description>
   </book>
   <book id="bk108">
      <author>Knorr, Stefan</author>
      <title>Creepy Crawlies</title>
      <genre>Horror</genre>
      <price>4.95</price>
      <publish_date>2000-12-06</publish_date>
      <description>An anthology of horror stories about roaches,
      centipedes, scorpions  and other insects.</description>
   </book>
   <book id="bk109">
      <author>Kress, Peter</author>
      <title>Paradox Lost</title>
      <genre>Science Fiction</genre>
      <price>6.95</price>
      <publish_date>2000-11-02</publish_date>
      <description>After an inadvertant trip through a Heisenberg
      Uncertainty Device, James Salway discovers the problems 
      of being quantum.</description>
   </book>
   <book id="bk110">
      <author>O Brien, Tim</author>
      <title>Microsoft .NET: The Programming Bible</title>
      <genre>Computer</genre>
      <price>36.95</price>
      <publish_date>2000-12-09</publish_date>
      <description>Microsoft s .NET initiative is explored in 
      detail in this deep programmer s reference.</description>
   </book>
   <book id="bk111">
      <author>O Brien, Tim</author>
      <title>MSXML3: A Comprehensive Guide</title>
      <genre>Computer</genre>
      <price>36.95</price>
      <publish_date>2000-12-01</publish_date>
      <description>The Microsoft MSXML3 parser is covered in 
      detail, with attention to XML DOM interfaces, XSLT processing, 
      SAX and more.</description>
   </book>
   <book id="bk112">
      <author>Galos, Mike</author>
      <title>Visual Studio 7: A Comprehensive Guide</title>
      <genre>Computer</genre>
      <price>49.95</price>
      <publish_date>2001-04-16</publish_date>
      <description>Microsoft Visual Studio 7 is explored in depth,
      looking at how Visual Basic, Visual C++, C#, and ASP+ are 
      integrated into a comprehensive development 
      environment.</description>
   </book>
</catalog>';
	 	
    	return json_decode(json_encode(simplexml_load_string($this::removeNamespaceFromXML($xml))), true);










	  	
  //   	Session::forget('loan_id');
  //   	Session::forget('transaction_id');
  //   	Session::forget('tribe_id');
  //   	Session::forget('company_name');
  //   	Session::forget('loan_id');
  //   	Session::forget('submission_status');
  //   	Session::forget('tribe_abandon');
    	  	
  //   	//print_r("dsfsdf". Session::get('loan_id'));exit();
		// $post='';
	 //    $url = $this::$url_static."BankAPIService.svc/GetTribeLoan";
	 //    //print_r($url);exit();
	 //    $result=$this->call_json_data_get_api($url,$post);
	 //    $http_result=$result['http_result'];
	 //    $error=$result['error'];
	 //    if($error){
	 //    	return view('went-wrong');
	 //    }else{
	 //    $temp_data=json_decode(json_decode($http_result))->response;
	 //    $temp=json_decode(json_encode($temp_data));
	 //   	//print "<pre>";
	 //   	// print_r($temp);exit();
	 //    foreach ($temp as $key => $value) {

	 //    	$sata[$key]=$value;
	 //    	$length=sizeof($sata[$key]);
	    	
	 //    	if($length>1){
  //   		    	//print_r($sata[$key]);exit();
  //   		    	for($i=0;$i<$length;$i++){
  //   		    		//print_r($length);
  //   		    		$test[$sata[$key][$i]->key]=$sata[$key][$i]->mapping;

  //   		    	}
	 //    	}else{
	 //    		//print_r($sata[$key]->key);
	 //    		$test[$sata[$key]->key]=$sata[$key]->mapping;
	    		   
	 //    	}
	    	
	 //    }
	 //     Session::put('tribe_abandon',$test['status']->abandoned); 
	 //     Session::put('submission_status',$test['status']->submitted); 
	     
	 //    //exit();
	 //   //   $data=$test;
	 //   //  print_r($data);exit();
	   		
	 //     return view('test_parse')->with('data',$test);
	  
}
public function removeNamespaceFromXML( $xml )
{
    // Because I know all of the the namespaces that will possibly appear in 
    // in the XML string I can just hard code them and check for 
    // them to remove them
    $toRemove = ['rap', 'turss', 'crim', 'cred', 'j', 'rap-code', 'evic'];
    // This is part of a regex I will use to remove the namespace declaration from string
    $nameSpaceDefRegEx = '(\S+)=["\']?((?:.(?!["\']?\s+(?:\S+)=|[>"\']))+.)["\']?';

    // Cycle through each namespace and remove it from the XML string
   foreach( $toRemove as $remove ) {
        // First remove the namespace from the opening of the tag
        $xml = str_replace('<' . $remove . ':', '<', $xml);
        // Now remove the namespace from the closing of the tag
        $xml = str_replace('</' . $remove . ':', '</', $xml);
        // This XML uses the name space with CommentText, so remove that too
        $xml = str_replace($remove . ':commentText', 'commentText', $xml);
        // Complete the pattern for RegEx to remove this namespace declaration
        $pattern = "/xmlns:{$remove}{$nameSpaceDefRegEx}/";
        // Remove the actual namespace declaration using the Pattern
        $xml = preg_replace($pattern, '', $xml, 1);
    }

    // Return sanitized and cleaned up XML with no namespaces
    return $xml;
>>>>>>> 7dd5d678ef98737afe94bceabf005bfc977ba924
}

}
