<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Response;
use App\bank_quote_api_request;
use File;
use Storage;
use Session;
class ApiController extends CallApiController
{
	
	public function compare(Request $req){
		//handling corner cases
		//print_r($req->all());exit();
		try{
			if(!isset($req['quote_id']) && $req['quote_id']==0 && !$req['LoanTenure'] ){
					return Response::json(array(
				'error' => "Insufficient/wrong information Passed"
				
			));

			}else{
		//API to get bank quote
		$request=$req;
		$req_all= implode(',',$req->all());
		$log=DB::table('api_log')
		->insertGetId(['api_name'=>'GetHomeLoanQuotes',
			'status'=>'Pending',
			'request'=>$req_all,			 		   
			'error'=>'0',
			'created_at'=>date("Y-m-d H:i:s"),
			'updated_at'=>date("Y-m-d H:i:s")

			]);
		
		
			

				if(isset($req['quote_id']) ){
					$quote=DB::table('bank_quote_api_request')
					->where('ID','=',$req['quote_id'])
					->get();
					$quote_req=json_decode(json_encode($quote));
					//print_r($quote);exit();
				if(count($quote_req)>0){

					$PropertyID=$req['PropertyID'] ? $req['PropertyID'] : $quote_req[0]->PropertyID;
					$propcost=$req['PropertyCost'] ? $req['PropertyCost'] : $quote_req[0]->PropertyCost;
					$Turnover=$req['Turnover'] ? $req['Turnover'] : $quote_req[0]->Turnover;
					$City=$req['City'] ? $req['City'] : $quote_req[0]->City;
					$ApplicantNme=$req['ApplicantNme'] ? $req['ApplicantNme'] : $quote_req[0]->ApplicantNme;
					
					$LoanTenure=$req['LoanTenure'] ? $req['LoanTenure'] : $quote_req[0]->LoanTenure;
					$LoanRequired=$req['LoanRequired'] ? $req['LoanRequired'] : $quote_req[0]->LoanRequired;
					$ApplicantGender=$req['ApplicantGender'] ? $req['ApplicantGender'] : $quote_req[0]->ApplicantGender;
					$ApplicantIncome=$req['ApplicantIncome'] ? $req['ApplicantIncome'] : $quote_req[0]->ApplicantIncome;
					$ApplicantObligations=$req['ApplicantObligations'] ? $req['ApplicantObligations'] : $quote_req[0]->ApplicantObligations;
					$ApplicantDOB=$req['ApplicantDOB'] ? $req['ApplicantDOB'] : $quote_req[0]->ApplicantDOB;
					$CoApplicantYes=$req['CoApplicantYes'] ? $req['CoApplicantYes'] : $quote_req[0]->CoApplicantYes;
					$CoApplicantIncome=$req['CoApplicantIncome'] ? $req['CoApplicantIncome'] : $quote_req[0]->CoApplicantIncome;
					$CoApplicantObligations=$req['CoApplicantObligations'] ? $req['CoApplicantObligations'] : $quote_req[0]->CoApplicantObligations;
					$CoApplicantDOB=$req['CoApplicantDOB'] ? $req['CoApplicantDOB'] : $quote_req[0]->CoApplicantDOB;
					$CoApplicantGender=$req['CoApplicantGender'] ? $req['CoApplicantGender'] : $quote_req[0]->CoApplicantGender;
					$CoApplicantSource=$req['CoApplicantSource'] ? $req['CoApplicantSource'] : $quote_req[0]->CoApplicantSource;
					
					$ProfitAfterTax=$req['ProfitAfterTax'] ? $req['ProfitAfterTax'] : $quote_req[0]->ProfitAfterTax;
					$Depreciation=$req['Depreciation'] ? $req['Depreciation'] : $quote_req[0]->Depreciation;
					$DirectorRemuneration=$req['DirectorRemuneration'] ? $req['DirectorRemuneration'] : $quote_req[0]->DirectorRemuneration;
					$CoApplicantTurnover=$req['CoApplicantTurnover'] ? $req['CoApplicantTurnover'] : $quote_req[0]->CoApplicantTurnover;
					$CoApplicantProfitAfterTax=$req['CoApplicantProfitAfterTax'] ? $req['CoApplicantProfitAfterTax'] : $quote_req[0]->CoApplicantProfitAfterTax;
					$CoApplicantDepreciation=$req['CoApplicantDepreciation'] ? $req['CoApplicantDepreciation'] : $quote_req[0]->CoApplicantDepreciation;
					$CoApplicantDirectorRemuneration=$req['CoApplicantDirectorRemuneration'] ? $req['CoApplicantDirectorRemuneration'] : $quote_req[0]->CoApplicantDirectorRemuneration;
					$ApplicantSource=$req['ApplicantSource'] ? $req['ApplicantSource'] : $quote_req[0]->ApplicantSource;
					$ProductId=$req['ProductId'] ? $req['ProductId'] : $quote_req[0]->ProductId;
					$BrokerId=$req['BrokerId'] ? $req['BrokerId'] : $quote_req[0]->BrokerId;

					$updated_at=date("Y-m-d H:i:s");
					
					$update=DB::table('bank_quote_api_request')
				            ->where('id', $req['quote_id'])
				            ->where('ProductId',$ProductId)
				            ->update(['PropertyID' =>$PropertyID,
				            		 'ApplicantNme'=>$ApplicantNme,
				            		  'City'=>$City,
				            		 'PropertyCost' =>$propcost,
				            		 'LoanTenure' =>$LoanTenure,
				            		 'LoanRequired' =>$LoanRequired,	
				            		 'ApplicantGender' =>$ApplicantGender,
				            		 'ApplicantIncome' =>$ApplicantIncome,
				            		 'ApplicantObligations' =>$ApplicantObligations,
				            		 'ApplicantDOB' =>$ApplicantDOB,
				            		 'CoApplicantYes' =>$CoApplicantYes,
				            		 'CoApplicantIncome' =>$CoApplicantIncome,
				            		 'CoApplicantObligations' =>$CoApplicantObligations,
				            		 'CoApplicantDOB'=>$CoApplicantDOB,
				            		 'CoApplicantGender'=>$CoApplicantGender,
				            		 'CoApplicantSource'=>$CoApplicantSource,
				            		 'Turnover' =>$Turnover,
				            		 'ProfitAfterTax' =>$ProfitAfterTax,
				            		 'Depreciation' =>$Depreciation,
				            		 'DirectorRemuneration' =>$DirectorRemuneration,
				            		 'CoApplicantTurnover' =>$CoApplicantTurnover,
				            		 'CoApplicantProfitAfterTax' =>$CoApplicantProfitAfterTax,
				            		 'CoApplicantDepreciation' =>$CoApplicantDepreciation,
				            		 'CoApplicantDirectorRemuneration' =>$CoApplicantDirectorRemuneration,
				            		 'ApplicantSource' =>$ApplicantSource,
				            		 'ProductId' =>$ProductId,
				            		 'BrokerId'=>$BrokerId,
				            		 'updated_at' =>$updated_at,
				            	]);
				            //print_r($update);exit();	

						$data=DB::select('call  usp_get_bank_quot_test("'.$propcost.'","'.$LoanTenure.'","'.$LoanRequired.'","'.$ApplicantGender .'","'.$ApplicantIncome .'","'.$ApplicantObligations .'","'.$ApplicantDOB .'","'.$CoApplicantYes .'","'.$CoApplicantIncome .'","'.$CoApplicantObligations .'","'.$Turnover.'","'.$ProfitAfterTax .'","'.$Depreciation .'","'.$DirectorRemuneration .'","'.$CoApplicantTurnover .'","'.$CoApplicantProfitAfterTax .'","'.$CoApplicantDepreciation .'","'.$CoApplicantDirectorRemuneration .'","'.$ApplicantSource .'","'.$CoApplicantDOB .'","'.$CoApplicantSource .'","'.$ProductId .'")');
						//print_r($data);exit();	
					}else{
						//quote dont exist in db
						if(!(isset($req['PropertyCost']) && isset($req['LoanTenure']) && isset($req['LoanRequired']) && isset($req['ApplicantGender']) && isset($req['ApplicantIncome']) && isset($req['ApplicantObligations']) && isset($req['ApplicantDOB']) && isset($req['CoApplicantYes']) && isset($req['CoApplicantIncome']) && isset($req['CoApplicantObligations']) && isset($req['Turnover']) && isset($req['ProfitAfterTax']) && isset($req['Depreciation']) && isset($req['DirectorRemuneration']) && isset($req['CoApplicantTurnover']) && isset($req['CoApplicantProfitAfterTax']) && isset($req['CoApplicantDepreciation']) && isset($req['CoApplicantDirectorRemuneration']) && isset($req['ApplicantSource']) && isset($req['ProductId']) )){
								return Response::json(array(
								'Error' => " !!! quote id not in DB. Please send all parameters to get new quote.!!!"
								));
							}
						goto run;
					}
					$id=$req['quote_id'];

				}else{
		run:
					//print_r('call  usp_get_bank_quot_test("'.$req['PropertyCost'].'","'.$req['LoanTenure'].'","'.$req['LoanRequired'].'","'.$req['ApplicantGender'].'","'.$req['ApplicantIncome'].'","'.$req['ApplicantObligations'].'","'.$req['ApplicantDOB'].'","'.$req['CoApplicantYes'].'","'.$req['CoApplicantIncome'].'","'.$req['CoApplicantObligations'].'","'.$req['Turnover'].'","'.$req['ProfitAfterTax'].'","'.$req['Depreciation'].'","'.$req['DirectorRemuneration'].'","'.$req['CoApplicantTurnover'].'","'.$req['CoApplicantProfitAfterTax'].'","'.$req['CoApplicantDepreciation'].'","'.$req['CoApplicantDirectorRemuneration'].'","'.$req['ApplicantSource'].'","'.$req['CoApplicantDOB'].'","'.$req['CoApplicantSource'].'","'.$req['ProductId'].'")');exit();
					$data=DB::select('call  usp_get_bank_quot_test("'.$req['PropertyCost'].'","'.$req['LoanTenure'].'","'.$req['LoanRequired'].'","'.$req['ApplicantGender'].'","'.$req['ApplicantIncome'].'","'.$req['ApplicantObligations'].'","'.$req['ApplicantDOB'].'","'.$req['CoApplicantYes'].'","'.$req['CoApplicantIncome'].'","'.$req['CoApplicantObligations'].'","'.$req['Turnover'].'","'.$req['ProfitAfterTax'].'","'.$req['Depreciation'].'","'.$req['DirectorRemuneration'].'","'.$req['CoApplicantTurnover'].'","'.$req['CoApplicantProfitAfterTax'].'","'.$req['CoApplicantDepreciation'].'","'.$req['CoApplicantDirectorRemuneration'].'","'.$req['ApplicantSource'].'","'.$req['CoApplicantDOB'].'","'.$req['CoApplicantSource'].'","'.$req['ProductId'].'")');
					//print_r($data);exit();
					$req['empcode']=isset($req['empcode'])?$req['empcode']:0;
					$save=new bank_quote_api_request();	
		 			$id=$save->store($request);
				}
			
		
		if($data){
			$status="Success";

		}else{
			$status="Failure";
		}

		$log_update=DB::table('api_log')
		->where('id','=',$log)
		->update(['status'=>$status,'updated_at'=>date("Y-m-d H:i:s")]);

		$status_update=DB::table('bank_quote_api_request')
		->where('ID','=',$id)
		->update(['status'=>$status]);
		//pushing fixed roi details
		for($i=0;$i<sizeof($data);$i++){
			$bank=$data[$i]->Bank_Id;
			$product=$data[$i]->Product_Id;
			$profession=$data[$i]->Profession;
			$new_data=DB::select('call  get_fixed_roi("'.$bank.'","'.$product.'","'.$profession.'")');

			unset($data[$i]->foir);
			unset($data[$i]->ltv);
			unset($data[$i]->ltvamt);
			unset($data[$i]->pf);
			unset($data[$i]->pf_type);
			for($j=0;$j<(sizeof($new_data));$j++){
				$time=$new_data[$j]->years_to*12;
				$rate=$new_data[$j]->roi/12/100;
				//print_r("time->".$time	." amount->".$req['LoanRequired']. " rate->".$rate ." ->");
				//$emi= ceil($req['LoanRequired'] * $rate / (1 - (pow(1/(1 + $rate),$time))));
				$new_data[$j]->emi=$data[$i]->emi;
			}
			$data[$i]->fixed_roi=$new_data;

			}

				//exit();
		return Response::json(array(
			'data' => $data,
			'quote_id'=>$id
			));
		}
		}catch (\Exception $e) {
			$error="Failure occured";
			return $error;
		}
	}
	
	public function comman(Request $req){
		//print "<pre>";
		//print_r($req->all());
		if($req['req_for']=='product'){
			$data=DB::table('Product_Master')
			->select('Product_Id','Product_Name')
			->where('Is_Active','=','True')
			->get();
		}else if($req['req_for']=='bank'){
			$data=DB::table('Bank_Master')
			->select('Bank_Id','Bank_Name')
			->where('Is_Active','=','True')
			->get();
		}else if($req['req_for']=='city'){
			$data=DB::table('City_Master')
			->select('City_Id','City_Name','state_id')
			->where('Is_Active','=','1')
			->get();
		}
		//print_r($data);
		return Response::json(array(
			'data' => $data,
			));
	}
	public function compare_test(Request $req){
		//API to get bank quote
		try{
		$req_all= implode(',',$req->all());
		$log=DB::table('api_log')
		->insertGetId(['api_name'=>'GetHomeLoanQuotes_test',
			'status'=>'Pending',
			'request'=>$req_all,			 		   
			'error'=>'0',
			'created_at'=>date("Y-m-d H:i:s"),
			'updated_at'=>date("Y-m-d H:i:s")

			]);

		
			$data=DB::select("call  usp_get_bank_quot ('".$req["PropertyCost"]."','".$req["LoanTenure"]."','".$req["LoanRequired"]."','".$req["ApplicantGender"]."','".$req["ApplicantIncome"]."','".$req["ApplicantObligations"]."','".$req["ApplicantDOB"]."','".$req["CoApplicantYes"]."','".$req["CoApplicantIncome"]."','".$req["CoApplicantObligations"]."','".$req["Turnover"]."','".$req["ProfitAfterTax"]."','".$req["Depreciation"]."','".$req["DirectorRemuneration"]."','".$req["CoApplicantTurnover"]."','".$req["CoApplicantProfitAfterTax"]."','".$req["CoApplicantDepreciation"]."','".$req["CoApplicantDirectorRemuneration"]."','".$req["ApplicantSource"]."','".$req["ProductId"]."')");
		
		
		if($data==[] || !($data)){
			$status="Failure";

		}else{
			$status="Success";
		}

		$log_update=DB::table('api_log')
		->where('id','=',$log)
		->update(['status'=>$status,'updated_at'=>date("Y-m-d H:i:s")]);

		for($i=0;$i<sizeof($data);$i++){
			$bank=$data[$i]->Bank_Id;
			$product=$data[$i]->Product_Id;
			$profession=$data[$i]->Profession;
			
			$new_data=DB::select('call  get_fixed_roi("'.$bank.'","'.$product.'","'.$profession.'")');
			$data[$i]->fixed_roi=$new_data;
		}		
		return Response::json(array(
			'data' => $data,
			));

		}catch (\Exception $e) {
			return Response::json(array(
			'error' => $e,
			));
		}
	}
	//quote of personal loan API
	public function comapre_personal_loan(Request $req){
		//API to get bank quote
		$req_all= implode(',',$req->all());
		$log=DB::table('api_log')
		->insertGetId(['api_name'=>'GetPersonalLoanQuotes',
			'status'=>'Pending',
			'request'=>$req_all,			 		   
			'error'=>'0',
			'created_at'=>date("Y-m-d H:i:s"),
			'updated_at'=>date("Y-m-d H:i:s")

			]);

		try{
			if(isset($req['quote_id'])){
					$quote=DB::table('bank_quote_api_request')
					->where('ID','=',$req['quote_id'])
					->get();
					$quote_req=json_decode(json_encode($quote));
					//print_r($quote_req);exit();
					

					if(count($quote_req)>0){
						$ApplicantDOB=$req['ApplicantDOB'] ? $req['ApplicantDOB'] : $quote_req[0]->ApplicantDOB;
					$ApplicantSource=$req['ApplicantSource'] ? $req['ApplicantSource'] : $quote_req[0]->ApplicantSource;
					$ApplicantIncome=$req['ApplicantIncome'] ? $req['ApplicantIncome'] : $quote_req[0]->ApplicantIncome;
					$ApplicantObligations=$req['ApplicantObligations'] ? $req['ApplicantObligations'] : $quote_req[0]->ApplicantObligations;
					$LoanTenure=$req['LoanTenure'] ? $req['LoanTenure'] : $quote_req[0]->LoanTenure;
					$LoanRequired=$req['LoanRequired'] ? $req['LoanRequired'] : $quote_req[0]->LoanRequired;
					$update=DB::table('bank_quote_api_request')
				            ->where('id', $req['quote_id'])
				            ->where('ProductId',9)
				            ->update(['ApplicantDOB' =>$ApplicantDOB,
				            		   'ApplicantSource' =>$ApplicantSource,
				            		   'ApplicantIncome' =>$ApplicantIncome,
				            		   'ApplicantObligations' =>$ApplicantObligations,
				            		   'LoanTenure' =>$LoanTenure,
				            		   'LoanRequired' =>$LoanRequired,
				            		   'updated_at'=>date("Y-m-d H:i:s")
				            	]);
				            
						$data=DB::select('call  usp_get_personal_loan_quot ("'. $ApplicantDOB .'","'. $ApplicantSource .'","'. $ApplicantIncome .'","'. $ApplicantObligations .'","'. $LoanTenure .'","'. $LoanRequired .'")');
					}
					else{
						if(!(isset($req['ApplicantDOB']) && isset($req['ApplicantSource']) && isset($req['ApplicantIncome']) && isset($req['ApplicantObligations']) && isset($req['LoanTenure']) && isset($req['LoanRequired'])))
						{
							return Response::json(array(
								'Error' => " !!! quote id not in DB. Please send all parameters to get new quote.!!!"
								));
						}
						goto run_else;
					}
			$id=$req['quote_id'];
			}else{
run_else:			
			$data=DB::select('call  usp_get_personal_loan_quot ("'.$req['ApplicantDOB'].'","'.$req['ApplicantSource'].'","'.$req['ApplicantIncome'].'","'.$req['ApplicantObligations'].'","'.$req['LoanTenure'].'","'.$req['LoanRequired'].'")');
				//		print_r($data);exit();
				$save=new bank_quote_api_request();	
				$req['ProductId']=9;//personal lona product id
				$req['empcode']=isset($req['empcode'])?$req['empcode']:0;
		 		$id=$save->store($req);
			}
		}catch (Exception $e) {

			echo 'Caught exception: '.  $e->getMessage(). "\n";
			die("exception");
		}
		

		if($data==[] || !($data)){
			$status="Failure";

		}else{
			$status="Success";
		}

		$log_update=DB::table('api_log')
		->where('id','=',$log)
		->update(['status'=>$status,'updated_at'=>date("Y-m-d H:i:s")]);
		$status_update=DB::table('bank_quote_api_request')
		->where('ID','=',$id)
		->update(['status'=>$status]);
		return Response::json(array(
			'data' => $data,
			'quote_id'=>$id
			));
	
}

	//by DP
	public function GetHomeLoanQuotes(Request $req){
		$data=DB::table('bank_product')
		->where('Product_Id','=',$req['PropertyID'])
								//->where('PropertyCost','=',$req['PropertyCost'])
		->where('Max_Tenure','=',$req['LoanTenure'])
		->where('guarantor_required','=',$req['LoanRequired'])
							//	->where('City','=',$req['City'])
		->orWhere('Min_Income_Salary','=',$req['ApplicantSource'])
								//->where('ApplicantIncome','=',$req['ApplicantIncome'])
							//	->where('ApplicantObligations','=',$req['ApplicantObligations'])
							//	->where('CoApplicantIncome','=',$req['CoApplicantIncome'])
							//	->where('CoApplicantObligations','=',$req['CoApplicantObligations'])
		->get();
		return Response::json(array(
			'data' => $data,
			));
	}
	public function test(Request $req){
		$a = $req->all();
		$jsonText = $a;
		$myArray = json_decode($jsonText, true);
		print_r($myArray);
       // return Response::json(array(
       //                      'data' => $data,
       //                  ));
	}

// Api to retrieve data by mobile app
	public function getCustomer(Request $req){
		//$a = $req->all();
		//echo $quote =$req->ID;

        $data=DB::table('bank_quote_api_request')
		->where('ID','=',$req->ID)->first();
		//print_r($data);exit;
         if($data){
			$status_Id=0;
			$msg="data delievered";
			$new_data=$data;
		}
		else{
			
			$status_Id=1;
			$msg=" Something went wrong.";
			$new_data=NULL;
		}

         return Response::json(array(
			'data' => $new_data,
			'status_Id'=>$status_Id,
			'msg'=>$msg
			));

	}
	public function getCity(Request $req){
		//$a = $req->all();
		//echo $quote =$req->ID;

        $data=DB::table('city_master')
        ->select('City_Id','City_Name','state_id')
        ->where('Is_Active','=','True')
		->get();
          if($data){
			$status_Id=0;
			$msg="data delievered";
			$new_data=$data;
		}
		else{
			
			$status_Id=1;
			$msg=" Something went wrong.";
			$new_data=NULL;
		}

         return Response::json(array(
			'data' => $new_data,
			'status_Id'=>$status_Id,
			'msg'=>$msg
			));
         

	}
	public function getProduct(Request $req){
		//$a = $req->all();
		//echo $quote =$req->ID;

        $data=DB::table('product_master')
        ->select('Product_Id','Product_Name')
        ->where('Is_Active','=','True')
		->get();
         if($data){
			$status_Id=0;
			$msg="data delievered";
			$new_data=$data;
		}
		else{
			$new_data=NULL;
			$status_Id=1;
			$msg=" Something went wrong.";
			
		}

         return Response::json(array(
			'data' => $new_data,
			'status_Id'=>$status_Id,
			'msg'=>$msg
			));

	}

	public function getPropertyType(Request $req){
		//$a = $req->all();
		//echo $quote =$req->ID;

        $data=DB::table('property_type_master')
        ->select('Property_Id','Property_Type')
        ->get();
         if($data){
			$status_Id=0;
			$msg="data delievered";
			$new_data=$data;
		}
		else{
			$new_data=NULL;
			$status_Id=1;
			$msg=" No Record Found.";
			
		}

         return Response::json(array(
			'data' => $new_data,
			'status_Id'=>$status_Id,
			'msg'=>$msg
			));

	}
	public function getQuoteByBrokerId(Request $req){
		//print_r($req['BrokerId']);exit();
		$id=$req['BrokerId'];
		$ProductId=$req['ProductId'];
		$flag=$req['flag'];
		if($id > 0){
			 $data=DB::table('bank_quote_api_request')
			 ->select('ID','ApplicantNme','LoanRequired','ApplicantIncome','Turnover','status','ProductId')
	        ->where('BrokerId','=',$id)
	        ->where('ProductId','=',$ProductId)
	        ->where('status','<>','Failure')
	        ->get();
    	}else{
    		$data=DB::table('bank_quote_api_request')
			 ->select('ID','ApplicantNme','LoanRequired','ApplicantIncome','Turnover','status','ProductId')
	        ->where('empcode','=',$req['empcode'])
	        ->where('ProductId','=',$ProductId)
	        ->where('BrokerId','=',0)
	        ->where('status','<>','Failure')
	        ->get();
    	}
        //calling Erp api
       			$emp_code=$req['empcode'];
        		$post_data='{"brokerId":'.$id.',"empCode":"'.$emp_code.'","flag":"'.$flag.'","ProductId":"'.$ProductId.'"}';
        		//print_r($post_data);exit();
                 // $url="http://beta.services.rupeeboss.com/LoginDtls.svc/xmlservice/dsplyHomePersonalLoanAppDtls";
        		$url=$this::$service_url_static."LoginDtls.svc/xmlservice/dsplyHomePersonalLoanAppDtls";
                $result=$this->call_json_data_api($url,$post_data);
                $http_result=$result['http_result'];
                $error=$result['error'];
                $obj = json_decode($http_result);
                // statusId response 0 for success, 1 for failure
                //print_r(sizeof($obj->result->lstHomeLoanDtls));exit();
                $application=NULL;
                $new_data=NULL;
                $status_Id=1;
                $msg="No Record Found";
       			if(!$obj){
       				goto failed;
       			}
                if($obj->statusId==0){
                	$application=$obj->result->lstHomeLoanDtls;
                }else{
       				$application=NULL;
                }
               
		        if($data!='[]' ){
					$new_data=$data;
					for($i=0;$i<sizeof($new_data);$i++){
						$new_data[$i]->url=$this::$erp_url_static."homeloan/home_loan_application_form.aspx?qoutid=".$new_data[$i]->ID;
					}
				}
				else{
					$new_data=NULL;
					
				}

				if($obj->statusId==1 && $data=='[]'){
					$status_Id=1;
					$msg="No Record Found";
				}else{
					$status_Id=0;
					$msg="Data delievered";
				}
	failed:	return Response::json(array(
			'data' => $new_data,
			'application'=>$application,
			'status_Id'=>$status_Id,
			'msg'=>$msg,

			));
	}
	
	public function getPersonalLoanQuoteByBrokerId(Request $req){
		//print_r($req['BrokerId']);exit();
		$id=$req['BrokerId'];
		$ProductId=$req['ProductId'];
		if($id > 0){
			 $data=DB::table('bank_quote_api_request')
			 ->select('ID','ApplicantNme','LoanRequired','ApplicantIncome','Turnover','status','ProductId')
	        ->where('BrokerId','=',$id)
	        ->where('ProductId','=',$ProductId)
	        ->where('status','<>','Failure')
	        ->get();
    	}else{
    		$data=DB::table('bank_quote_api_request')
			 ->select('ID','ApplicantNme','LoanRequired','ApplicantIncome','Turnover','status','ProductId')
	        ->where('empcode','=',$req['empcode'])
	        ->where('ProductId','=',$ProductId)
	        ->where('BrokerId','=',0)
	        ->where('status','<>','Failure')
	        ->get();
    	}
        //calling Erp api
       			$flag=$req['flag'];
        		$emp_code=$req['empcode'];

        		$post_data='{"brokerId":'.$id.',"empCode":"'.$emp_code.'","flag":"'.$flag.'","ProductId":"'.$ProductId.'"}';
        		//print_r($post_data);exit();
                 // $url="http://beta.services.rupeeboss.com/LoginDtls.svc/xmlservice/dsplyPersonalLoanAppDtls";
        		$url=$this::$service_url_static."LoginDtls.svc/xmlservice/dsplyPersonalLoanAppDtls";
               // statusId response 0 for success, 1 for failure
              
                $result=$this->call_json_data_api($url,$post_data);
                $http_result=$result['http_result'];
                $error=$result['error'];
                $obj = json_decode($http_result);
       			//print_r(sizeof($obj->result->lstHomeLoanDtls));exit();
       			//print_r($obj);exit();
                if($obj->statusId !=1){
                	$application=$obj->result->lstHomeLoanDtls;
                }else{
                	$application=NULL;
                }
               
		        if($data!='[]' ){
					$new_data=$data;
					for($i=0;$i<sizeof($new_data);$i++){
						$new_data[$i]->url=$this::$erp_url_static."homeloan/home_loan_application_form.aspx?qoutid=".$new_data[$i]->ID;
					}
				}
				else{
					$new_data=NULL;
					
				}
				//print_r($obj->statusId."--------------".$data);exit();
				if($obj->statusId ==1 && $data=='[]'){
					$status_Id=1;
					$msg="No Record Found";
				}else{
					$status_Id=0;
					$msg="Data delievered";
				}
		return Response::json(array(
			'data' => $new_data,
			'application'=>$application,
			'status_Id'=>$status_Id,
			'msg'=>$msg,

			));
	}
	public function show_error(Request $req){
		$data=DB::Select('SELECT * FROM error_log ORDER BY 1 DESC LIMIT 100');
		print "<pre>";
		print_r($data);
		//return $data;
		 
	}
	public function create_user_via_erp(Request $req){
		//return ($req);exit();

		$status=0;
		$pwd = mt_rand(100000, 999999);
		$data=DB::table('user_registration')
		->select('id')
		->where('email','=',$req['email'])
		->where('contact','=',$req['contact'])
		->limit('1')
		->get();

		if($data!='[]'){
			$update=DB::table('user_registration')
				     ->where('email','=',$req['email'])
		              ->where('contact','=',$req['contact'])
				     ->update([
				     	'password'=>md5($pwd),
				     	'contact'=>$req['contact']]);
			$status=2;
			
			$data_new=str_replace('[{"id":','',$data);
			$data_new=str_replace('}]','',$data_new);
			//return($data_new);exit();
			$id=$data_new;
		}else{
				$id=DB::table('user_registration')
				->insertGetId([
					'username'=>$req['name'],
					'email'=>$req['email'],
					'contact'=>$req['contact'],			 		   
					'password'=>md5($pwd),
					'provider_user_id'=>0,
					'provider'=>'ERP',
					'created_at'=>date("Y-m-d H:i:s")
					]);

				if($id){
					$cstmr_detail_id=DB::table('customer_details')
				      ->insertGetId(['user_id'=>$id]);
					$status=1;
				}else{
					$pwd=NULL;
				}
		}
		return Response::json(array(
                      'user_id' => $id,
                      'password'=>$pwd,
                      'status'=>$status
                ));
	}
	  public function emi_cal_app(Request $req){
	  	try{
	  	          $loanamount=$req['loanamount'];
	  	          $loaninterest=$req['loaninterest']/12/100;
	  	          $loanterm=$req['loanterm']; 

	  	          $data['amount'] = ($loanamount * $loaninterest * (pow(1 + $loaninterest, $loanterm) / (pow(1 + $loaninterest, $loanterm) - 1)));
	  	          $data['total'] =(($data['amount']*$loanterm)-$loanamount);
	  	          $data['ttl_payment'] = round($loanamount+$data['total']);
	  	          //rounding afterward so calc will not be affected
	  			$data['amount']=round($data['amount']);
	  			$data['total']=round($data['total']);

	  	          return response()->json(array('status' => 1,'data'=>$data,'err'=>''));
	  	}catch (\Exception $e) {
			return response()->json(array('status' => 0,'data'=>'','err'=>$e->getMessage()));
		}
      }
      public function productwise_emi_cal_app(Request $req){
	  	try{
	  		$return_data=NULL;
	  		$err="";
	  		$status=0;
	  		//return $req->all();

	  		if($req['ProductId']==12){	
			  	 $data=DB::select('call  usp_get_bank_quot_test("'.$req['PropertyCost'].'","'.$req['LoanTenure'].'","'.$req['LoanRequired'].'","'.$req['ApplicantGender'].'","'.$req['ApplicantIncome'].'","'.$req['ApplicantObligations'].'","1985-12-12","N","","","'.$req['Turnover'].'","'.$req['ProfitAfterTax'].'","'.$req['Depreciation'].'","'.$req['DirectorRemuneration'].'","","","","","'.$req['ApplicantSource'].'","","","'.$req['ProductId'].'")');
	  			}else if($req['ProductId']==9){
	  			 $data=DB::select('call  usp_get_personal_loan_quot ("1985-12-12","'.$req['ApplicantSource'].'","'.$req['ApplicantIncome'].'","'.$req['ApplicantObligations'].'","'.$req['LoanTenure'].'","'.$req['LoanRequired'].'")');
	  			}else if($req['ProductId']==13){
	  				  $data=DB::select('call  usp_get_business_loan_quot ("'.$req['applicant_dob'].'","'.$req['emp_detail'].'","'.$req['turnover'].'","'.$req['profit_after_tax'].'","'.$req['depreciation'].'","'.$req['partner_remuneration'].'","'.$req['interest_paid'].'","'.$req['emi'].'","'.$req['no_of_emi_paid'].'","'.$req['loan_tenure'].'","'.$req['loan_amount'].'","'.$req['date'].'")');
        
	  			}
	  	    	if($data){
	  	    		$return_data=$data[0];
	  	    		$status=1;
	  	    	}else{
	  	    		$err="You are not eligible for loan";
	  	    	}
	  	}catch (\Exception $e) {
	  		//print_r($e->getMessage());exit();
	  			$error=$e->getCode();
	  			$err=$this->getErrorMsg($error);
		}
		return response()->json(array('status' => $status,'data'=>$return_data,'err_code'=>$err));
      }

      public function test_document_upload(Request $req){
      	$id=$req['id'];
      	$filename=$req['filename'];
      	$path=public_path().'/uploads/'.$id.'/'.$filename.'.pdf';
      	
      	try{
      		if(File::exists($path)){
      			$content=File::get($path);
      			 $data=base64_encode($content);
      			}else{
      				 throw new \Exception("No such File found", 0);
      			}
        	return response()->json(array('status' => 1,'data'=>$data,'err'=>''));
    }
    catch (\Exception $e) {
			return response()->json(array('status' => 0,'data'=>'','err'=>$e->getMessage()));
		}
      }
      
      public function bussiness_loan_quote(Request $req){
      		$error='';
      		$data=[];
      		$status=0;
      	 try{
      	 	$data=DB::select('call  usp_get_business_loan_quot ("'.$req['applicant_dob'].'","'.$req['emp_detail'].'","'.$req['turnover'].'","'.$req['profit_after_tax'].'","'.$req['depreciation'].'","'.$req['partner_remuneration'].'","'.$req['interest_paid'].'","'.$req['emi'].'","'.$req['no_of_emi_paid'].'","'.$req['loan_tenure'].'","'.$req['loan_amount'].'","'.$req['date'].'")');
      	 		$status=1;
      		}
      	 catch(\Exception $ee){
      	 	$error=$ee->getMessage();
      	 }
      	 return response()->json(array('statusId' => $status,'data'=>$data,'message'=>$error));
      }
      public function save_file(Request $request){
       
		$result = array("success" => $_FILES["video"]["name"]);
		$file_path = basename( $_FILES['video']['name']);
		if(move_uploaded_file($_FILES['video']['tmp_name'], $file_path)) {
		    $result = array("success" => "File successfully uploaded");
		} else{
		    $result = array("success" => "error uploading file");
		}
		echo json_encode($result, JSON_PRETTY_PRINT);


      }

      public function vehicle_registration(Request $req){
      	
try {
	    date_default_timezone_set('Asia/Kolkata');
        $time=date('Hi'); 
        if (($time >= "0900") && ($time <= "1900")) {
         // echo "Good Morning";
         $mobile_number = $req['mobile_number'];
      	$vehicle_no=$req['vehicle_no'];
      	Session::put('vehicle_no',$vehicle_no);
      	// print_r($vehicle_no);
      	// $pattern="/^[A-Z]{2}\s[0-9]{2}\s[A-Z]{2}\s[0-9]{4}$/";

      	// preg_match($pattern, $vehicle_no, $matches, PREG_OFFSET_CAPTURE, 3);
      	// print_r($matches);exit();
      	// if ($matches	)
      	//  {
      	//  	echo ('Vehicle Number is valid');
      	 	
      	//  }
      	//  else
      	//  {
       //      echo ('Enter Correct Vehicle Number');
           
      	//  }
      	 $lattitude=$req['lattitude'];
      	 $longitude=$req['longitude'];
      	 $device_token=$req['device_token'];
      	 $query=DB::table('vehicle_registration')

        ->insertGetId(['vehicle_no'=>$req->vehicle_no,
              'mobile_number'=>$req->mobile_number,
              'lattitude'=>$req->lattitude,
              'longitude'=>$req->longitude,
              'device_token'=>$req->device_token,
              'created_at'=>date("Y-m-d H:i:s"),
              'updated_at'=>date("Y-m-d H:i:s")]);
        if($query){
              
        	 $result=json_decode(json_encode(["mobile_number"=>$mobile_number,"vehicle_no"=>$vehicle_no,"vehicle_id"=>$query]));
         return response()->json(array('status' =>0,'message'=>"success",'result'=>$result));
        }
         }else{
         	echo "Unable to run API";
         } 
        
        
       

         } catch (Exception $e) {
      	return response()->json(array('status' => 1,'err'=>$e->getMessage()));
      }
  }

    public function vehicle_documents(Request $req){
    	$res['status']=0;
        $res['msg']="success";

    	$document_name=$req['document_name'];
    	$vehicle_no=$req['vehicle_no'];
    	
    
    try
    {
       $file=$req->file('doc');
      
       if($file == null){
            throw new \Exception("Upload Document ", 1);
          }
          $destinationPath = 'uploads/app/'.$vehicle_no.'/images/';;
          
          $filename=$document_name.".".$file->getClientOriginalExtension();

          
           
          $file->move($destinationPath,$filename);
         $query=DB::table('vehicle_documents')
            ->insertGetId(['vehicle_no'=>$req->vehicle_no,
              'document_name'=>$req->document_name,
              'doc_path'=>$destinationPath.$filename,
               'type'=>'image',
              'created_at'=>date("Y-m-d H:i:s"),
              'updated_at'=>date("Y-m-d H:i:s")]);
            if ( $query) {
            	return response()->json(array('status' =>0,'message'=>"success"));
            }
    }catch(\Exception $ee){


     return response()->json(array('status' =>1,'message'=>$ee->getMessage()));
    }
 }



   public function vehicle_video_documents(Request $req){
   	$res['status']=0;
    $res['msg']="success";
    $document_name=$req['document_name'];
    
    $vehicle_no=$req['vehicle_no'];
    

    try
    {

       $file=$req->file('video');
        // print_r($file);exit();
       if($file == null){
            throw new \Exception("Upload Video ", 1);
          }
          $destinationPath = 'uploads/app/'.$vehicle_no.'/videos/';
          
          $filename=$document_name.".".$file->getClientOriginalExtension();
         

          
           
          $file->move($destinationPath,$filename);
          $query=DB::table('vehicle_documents')
            ->insertGetId(['vehicle_no'=>$req->vehicle_no,
              'document_name'=>$req->document_name,
              'doc_path'=>$destinationPath.$filename,
              'type'=>'video',
              'created_at'=>date("Y-m-d H:i:s"),
              'updated_at'=>date("Y-m-d H:i:s")]);

    if ( $query) {
            	return response()->json(array('status' =>0,'message'=>"success"));
            }
    }catch(\Exception $ee){


     return response()->json(array('status' =>1,'message'=>$ee->getMessage()));
    }
 }


  // public function vehicle_inspection_details(Request $req){
  //   $status=0;
  //   $msg="success";
  //   $vehicle_no=$req['vehicle_no'];
  //   $vehicle_condition=$req['vehicle_condition'];
  //   $vehicle_id=$req['vehicle_id'];
  //   $document_name=$req['document_name'];
    
  //    try {
  //    	if ($file=$req->file('doc')) {
     		
  //         $destinationPath = 'uploads/app/'.$vehicle_no.'/images/';;
          
  //         $filename=$document_name.".".$file->getClientOriginalExtension();

          
           
  //         $file->move($destinationPath,$filename);
  //    	  $query=DB::table('inspection_details_front_rear')
  //           ->insertGetId(['vehicle_no'=>$req->vehicle_no,
  //             'document_name'=>$req->document_name,
  //              'doc_path'=>$destinationPath.$filename,
  //             'vehicle_id'=>$req->vehicle_id,
  //             'front_bumper'=>$req->front_bumper,
  //             'grill'=>$req->grill,
  //             'head_lamp_lt'=>$req->head_lamp_lt,
  //             'head_lamp_rt'=>$req->head_lamp_rt,
  //             'indicator_light_lt'=>$req->indicator_light_lt,
  //             'indicator_light_rt'=>$req->indicator_light_rt,
  //             'fog_light_lt'=>$req->fog_light_lt,
  //             'fog_light_rt'=>$req->fog_light_rt,
  //             'front_panel'=>$req->front_panel,
  //             'bonnet'=>$req->bonnet,
  //             'left_apron'=>$req->left_apron,
  //             'right_apron'=>$req->right_apron,
  //             'dicky'=>$req->dicky,
  //             'rear_bumper'=>$req->rear_bumper,
  //             'tail_lamp_lt'=>$req->tail_lamp_lt,
  //             'tail_lamp_rt'=>$req->tail_lamp_rt,
  //             'vehicle_condition'=>$req->vehicle_condition,
  //             'created_at'=>date("Y-m-d H:i:s"),
  //             'updated_at'=>date("Y-m-d H:i:s")]);

  //           $query1=DB::table('inspection_details_glass')
  //           ->insertGetId(['vehicle_no'=>$req->vehicle_no,
  //           	'vehicle_id'=>$req->vehicle_id,
  //           	 'doc_path'=>$destinationPath.$filename,
  //           	'document_name'=>$req->document_name,
  //             'back_glass'=>$req->back_glass,
  //             'glass_laminated'=>$req->glass_laminated,
  //             'rf_door_glass'=>$req->rf_door_glass,
  //             'rr_door_glass'=>$req->rr_door_glass,
  //             'lf_door_glass'=>$req->lf_door_glass,
  //             'lr_door_glass'=>$req->lr_door_glass,
  //             'rim'=>$req->rim,
  //             'under_carriage'=>$req->under_carriage,
  //             'vehicle_condition'=>$req->vehicle_condition,
  //             'created_at'=>date("Y-m-d H:i:s"),
  //             'updated_at'=>date("Y-m-d H:i:s")]);

  //           $query2=DB::table('inspection_details_left')
  //           ->insertGetId(['vehicle_no'=>$req->vehicle_no,
  //           	'vehicle_id'=>$req->vehicle_id,
  //           	'document_name'=>$req->document_name,
  //           	 'doc_path'=>$destinationPath.$filename,
  //             'lt_front_fender'=>$req->lt_front_fender,
  //             'lt_front_door'=>$req->lt_front_door,
  //             'lt_rear_door'=>$req->lt_rear_door,
  //             'lt_running_board'=>$req->lt_running_board,
  //             'lt_pillar_door'=>$req->lt_pillar_door,
  //             'lt_pillar_center'=>$req->lt_pillar_center,
  //             'lt_pillar_rear'=>$req->lt_pillar_rear,
  //             'lt_qtr_panel'=>$req->lt_qtr_panel,
  //             'vehicle_condition'=>$req->vehicle_condition,
  //             'created_at'=>date("Y-m-d H:i:s"),
  //             'updated_at'=>date("Y-m-d H:i:s")]);

  //           $query3=DB::table('inspection_details_right')
  //           ->insertGetId(['vehicle_no'=>$req->vehicle_no,
  //           	'vehicle_id'=>$req->vehicle_id,
  //           	'document_name'=>$req->document_name,

  //             'rt_qtr_panel'=>$req->rt_qtr_panel,
  //              'doc_path'=>$destinationPath.$filename,
  //             'rt_rear_door'=>$req->rt_rear_door,
  //             'rt_front_door'=>$req->rt_front_door,
  //             'rt_front_pillar_A'=>$req->rt_front_pillar_A,
  //             'rt_center_pillar_B'=>$req->rt_center_pillar_B,
  //             'rt_rear_pillar_C'=>$req->rt_rear_pillar_C,
  //             'rt_running_board'=>$req->rt_running_board,
  //             'rt_front_fender'=>$req->rt_front_fender,
  //             'floor'=>$req->floor,
  //             'rear_view_mirror_lt'=>$req->rear_view_mirror_lt,
  //             'rear_view_mirror_rt'=>$req->rear_view_mirror_rt,
  //             'tyres'=>$req->tyres,
  //             'vehicle_condition'=>$req->vehicle_condition,
  //             'created_at'=>date("Y-m-d H:i:s"),
  //             'updated_at'=>date("Y-m-d H:i:s")]);

  //            $query4=DB::table('tyre_make_and dot_num')
  //           ->insertGetId(['vehicle_no'=>$req->vehicle_no,
  //             'document_name'=>$req->document_name,
  //             'vehicle_id'=>$req->vehicle_id,
  //             'doc_path'=>$destinationPath.$filename,
  //             'lt_rear_tyre'=>$req->lt_rear_tyre,
  //             'lt_front_tyre'=>$req->lt_front_tyre,
  //             'rt_rear_tyre'=>$req->rt_rear_tyre,
  //             'rt_front_tyre'=>$req->rt_front_tyre,
  //             'vehicle_condition'=>$req->vehicle_condition,
  //             'created_at'=>date("Y-m-d H:i:s"),
  //             'updated_at'=>date("Y-m-d H:i:s")]);

  //           if (!$query) {
  //           	$msg+="\n Note:data is not inserted in inspection_details_front_rear";
  //           }
  //           if (!$query1) {
  //           	$msg+="\n Note:data is not inserted in inspection_details_glass";
  //           } 
  //           if (!$query2) {
  //           	$msg+="\n Note:data is not inserted in inspection_details_left";
  //           }if (!$query3) {
  //           	$msg+="\n Note:data is not inserted in inspection_details_right";
  //           }if (!$query4) {
  //           	$msg+="\n Note:data is not inserted in tyre_make_and dot_num";
  //           }

  //           $query5=DB::table('vehicle_part_master')
  //           ->insertGetId([
  //             'vehicle_id'=>$req->vehicle_id,
  //             'front_rear_id'=>$query,
  //             'left_id'=>$query1,
  //             'right_id'=>$query2,
  //             'tyre_id'=>$query3,
  //             'glass_id'=>$query4,
  //             'created_at'=>date("Y-m-d H:i:s"),
  //             'updated_at'=>date("Y-m-d H:i:s")]);
  //    	} else if($file=$req->file('video')) {
     		
  //         $destinationPath = 'uploads/app/'.$vehicle_no.'/videos/';;
          
  //         $filename=$document_name.".".$file->getClientOriginalExtension();

          
           
  //         $file->move($destinationPath,$filename);
  //    	  $query=DB::table('inspection_details_front_rear')
  //           ->insertGetId(['vehicle_no'=>$req->vehicle_no,
  //             'document_name'=>$req->document_name,
  //              'doc_path'=>$destinationPath.$filename,
  //             'vehicle_id'=>$req->vehicle_id,
  //             'front_bumper'=>$req->front_bumper,
  //             'grill'=>$req->grill,
  //             'head_lamp_lt'=>$req->head_lamp_lt,
  //             'head_lamp_rt'=>$req->head_lamp_rt,
  //             'indicator_light_lt'=>$req->indicator_light_lt,
  //             'indicator_light_rt'=>$req->indicator_light_rt,
  //             'fog_light_lt'=>$req->fog_light_lt,
  //             'fog_light_rt'=>$req->fog_light_rt,
  //             'front_panel'=>$req->front_panel,
  //             'bonnet'=>$req->bonnet,
  //             'left_apron'=>$req->left_apron,
  //             'right_apron'=>$req->right_apron,
  //             'dicky'=>$req->dicky,
  //             'rear_bumper'=>$req->rear_bumper,
  //             'tail_lamp_lt'=>$req->tail_lamp_lt,
  //             'tail_lamp_rt'=>$req->tail_lamp_rt,
  //             'vehicle_condition'=>$req->vehicle_condition,
  //             'created_at'=>date("Y-m-d H:i:s"),
  //             'updated_at'=>date("Y-m-d H:i:s")]);

  //           $query1=DB::table('inspection_details_glass')
  //           ->insertGetId(['vehicle_no'=>$req->vehicle_no,
  //           	'vehicle_id'=>$req->vehicle_id,
  //           	 'doc_path'=>$destinationPath.$filename,
  //           	'document_name'=>$req->document_name,
  //             'back_glass'=>$req->back_glass,
  //             'glass_laminated'=>$req->glass_laminated,
  //             'rf_door_glass'=>$req->rf_door_glass,
  //             'rr_door_glass'=>$req->rr_door_glass,
  //             'lf_door_glass'=>$req->lf_door_glass,
  //             'lr_door_glass'=>$req->lr_door_glass,
  //             'rim'=>$req->rim,
  //             'under_carriage'=>$req->under_carriage,
  //             'vehicle_condition'=>$req->vehicle_condition,
  //             'created_at'=>date("Y-m-d H:i:s"),
  //             'updated_at'=>date("Y-m-d H:i:s")]);

  //           $query2=DB::table('inspection_details_left')
  //           ->insertGetId(['vehicle_no'=>$req->vehicle_no,
  //           	'vehicle_id'=>$req->vehicle_id,
  //           	'document_name'=>$req->document_name,
  //           	 'doc_path'=>$destinationPath.$filename,
  //             'lt_front_fender'=>$req->lt_front_fender,
  //             'lt_front_door'=>$req->lt_front_door,
  //             'lt_rear_door'=>$req->lt_rear_door,
  //             'lt_running_board'=>$req->lt_running_board,
  //             'lt_pillar_door'=>$req->lt_pillar_door,
  //             'lt_pillar_center'=>$req->lt_pillar_center,
  //             'lt_pillar_rear'=>$req->lt_pillar_rear,
  //             'lt_qtr_panel'=>$req->lt_qtr_panel,
  //             'vehicle_condition'=>$req->vehicle_condition,
  //             'created_at'=>date("Y-m-d H:i:s"),
  //             'updated_at'=>date("Y-m-d H:i:s")]);

  //           $query3=DB::table('inspection_details_right')
  //           ->insertGetId(['vehicle_no'=>$req->vehicle_no,
  //           	'vehicle_id'=>$req->vehicle_id,
  //           	'document_name'=>$req->document_name,

  //             'rt_qtr_panel'=>$req->rt_qtr_panel,
  //              'doc_path'=>$destinationPath.$filename,
  //             'rt_rear_door'=>$req->rt_rear_door,
  //             'rt_front_door'=>$req->rt_front_door,
  //             'rt_front_pillar_A'=>$req->rt_front_pillar_A,
  //             'rt_center_pillar_B'=>$req->rt_center_pillar_B,
  //             'rt_rear_pillar_C'=>$req->rt_rear_pillar_C,
  //             'rt_running_board'=>$req->rt_running_board,
  //             'rt_front_fender'=>$req->rt_front_fender,
  //             'floor'=>$req->floor,
  //             'rear_view_mirror_lt'=>$req->rear_view_mirror_lt,
  //             'rear_view_mirror_rt'=>$req->rear_view_mirror_rt,
  //             'tyres'=>$req->tyres,
  //             'vehicle_condition'=>$req->vehicle_condition,
  //             'created_at'=>date("Y-m-d H:i:s"),
  //             'updated_at'=>date("Y-m-d H:i:s")]);

  //            $query4=DB::table('tyre_make_and dot_num')
  //           ->insertGetId(['vehicle_no'=>$req->vehicle_no,
  //             'document_name'=>$req->document_name,
  //             'vehicle_id'=>$req->vehicle_id,
  //             'doc_path'=>$destinationPath.$filename,
  //             'lt_rear_tyre'=>$req->lt_rear_tyre,
  //             'lt_front_tyre'=>$req->lt_front_tyre,
  //             'rt_rear_tyre'=>$req->rt_rear_tyre,
  //             'rt_front_tyre'=>$req->rt_front_tyre,
  //             'vehicle_condition'=>$req->vehicle_condition,
  //             'created_at'=>date("Y-m-d H:i:s"),
  //             'updated_at'=>date("Y-m-d H:i:s")]);

  //           if (!$query) {
  //           	$msg+="\n Note:data is not inserted in inspection_details_front_rear";
  //           }
  //           if (!$query1) {
  //           	$msg+="\n Note:data is not inserted in inspection_details_glass";
  //           } 
  //           if (!$query2) {
  //           	$msg+="\n Note:data is not inserted in inspection_details_left";
  //           }if (!$query3) {
  //           	$msg+="\n Note:data is not inserted in inspection_details_right";
  //           }if (!$query4) {
  //           	$msg+="\n Note:data is not inserted in tyre_make_and dot_num";
  //           }

  //           $query5=DB::table('vehicle_part_master')
  //           ->insertGetId([
  //             'vehicle_id'=>$req->vehicle_id,
  //             'front_rear_id'=>$query,
  //             'left_id'=>$query1,
  //             'right_id'=>$query2,
  //             'tyre_id'=>$query3,
  //             'glass_id'=>$query4,
  //             'created_at'=>date("Y-m-d H:i:s"),
  //             'updated_at'=>date("Y-m-d H:i:s")]);
  //    	}
     

           
  //    } catch (Exception $e) {
  //    	$msg=$ee->getMessage();
  //    }
  //    return response()->json(array('status' =>$status,'message'=>$msg));
  //  }

 public function vehicle_inspection_details(Request $req){
    $status=0;
    $msg="success";
    $vehicle_no=$req['vehicle_no'];
    $vehicle_condition=$req['vehicle_condition'];
    $vehicle_id=$req['vehicle_id'];
    
     try {
     	$query=DB::table('inspection_details_front_rear')
            ->insertGetId(['vehicle_no'=>$req->vehicle_no,
               'vehicle_id'=>$req->vehicle_id,
              'front_bumper'=>$req->front_bumper,
              'grill'=>$req->grill,
              'head_lamp_lt'=>$req->head_lamp_lt,
              'head_lamp_rt'=>$req->head_lamp_rt,
              'indicator_light_lt'=>$req->indicator_light_lt,
              'indicator_light_rt'=>$req->indicator_light_rt,
              'fog_light_lt'=>$req->fog_light_lt,
              'fog_light_rt'=>$req->fog_light_rt,
              'front_panel'=>$req->front_panel,
              'bonnet'=>$req->bonnet,
              'left_apron'=>$req->left_apron,
              'right_apron'=>$req->right_apron,
              'dicky'=>$req->dicky,
              'rear_bumper'=>$req->rear_bumper,
              'tail_lamp_lt'=>$req->tail_lamp_lt,
              'tail_lamp_rt'=>$req->tail_lamp_rt,
              'vehicle_condition'=>$req->vehicle_condition,
              'created_at'=>date("Y-m-d H:i:s"),
              'updated_at'=>date("Y-m-d H:i:s")]);

            $query1=DB::table('inspection_details_glass')
            ->insertGetId(['vehicle_no'=>$req->vehicle_no,
            	'vehicle_id'=>$req->vehicle_id,
              'back_glass'=>$req->back_glass,
              'glass_laminated'=>$req->glass_laminated,
              'rf_door_glass'=>$req->rf_door_glass,
              'rr_door_glass'=>$req->rr_door_glass,
              'lf_door_glass'=>$req->lf_door_glass,
              'lr_door_glass'=>$req->lr_door_glass,
              'rim'=>$req->rim,
              'under_carriage'=>$req->under_carriage,
              'vehicle_condition'=>$req->vehicle_condition,
              'created_at'=>date("Y-m-d H:i:s"),
              'updated_at'=>date("Y-m-d H:i:s")]);

            $query2=DB::table('inspection_details_left')
            ->insertGetId(['vehicle_no'=>$req->vehicle_no,
            	'vehicle_id'=>$req->vehicle_id,
              'lt_front_fender'=>$req->lt_front_fender,
              'lt_front_door'=>$req->lt_front_door,
              'lt_rear_door'=>$req->lt_rear_door,
              'lt_running_board'=>$req->lt_running_board,
              'lt_pillar_door'=>$req->lt_pillar_door,
              'lt_pillar_center'=>$req->lt_pillar_center,
              'lt_pillar_rear'=>$req->lt_pillar_rear,
              'lt_qtr_panel'=>$req->lt_qtr_panel,
              'vehicle_condition'=>$req->vehicle_condition,
              'created_at'=>date("Y-m-d H:i:s"),
              'updated_at'=>date("Y-m-d H:i:s")]);

            $query3=DB::table('inspection_details_right')
            ->insertGetId(['vehicle_no'=>$req->vehicle_no,
            	'vehicle_id'=>$req->vehicle_id,
              'rt_qtr_panel'=>$req->rt_qtr_panel,
              'rt_rear_door'=>$req->rt_rear_door,
              'rt_front_door'=>$req->rt_front_door,
              'rt_front_pillar_A'=>$req->rt_front_pillar_A,
              'rt_center_pillar_B'=>$req->rt_center_pillar_B,
              'rt_rear_pillar_C'=>$req->rt_rear_pillar_C,
              'rt_running_board'=>$req->rt_running_board,
              'rt_front_fender'=>$req->rt_front_fender,
              'floor'=>$req->floor,
              'rear_view_mirror_lt'=>$req->rear_view_mirror_lt,
              'rear_view_mirror_rt'=>$req->rear_view_mirror_rt,
              'tyres'=>$req->tyres,
              'vehicle_condition'=>$req->vehicle_condition,
              'created_at'=>date("Y-m-d H:i:s"),
              'updated_at'=>date("Y-m-d H:i:s")]);

             $query4=DB::table('tyre_make_and dot_num')
            ->insertGetId(['vehicle_no'=>$req->vehicle_no,
            	'vehicle_id'=>$req->vehicle_id,
              'lt_rear_tyre'=>$req->lt_rear_tyre,
              'lt_front_tyre'=>$req->lt_front_tyre,
              'rt_rear_tyre'=>$req->rt_rear_tyre,
              'rt_front_tyre'=>$req->rt_front_tyre,
              'vehicle_condition'=>$req->vehicle_condition,
              'created_at'=>date("Y-m-d H:i:s"),
              'updated_at'=>date("Y-m-d H:i:s")]);

            if (!$query) {
            	$msg+="\n Note:data is not inserted in inspection_details_front_rear";
            }
            if (!$query1) {
            	$msg+="\n Note:data is not inserted in inspection_details_glass";
            } 
            if (!$query2) {
            	$msg+="\n Note:data is not inserted in inspection_details_left";
            }if (!$query3) {
            	$msg+="\n Note:data is not inserted in inspection_details_right";
            }if (!$query4) {
            	$msg+="\n Note:data is not inserted in tyre_make_and dot_num";
            }

            $query5=DB::table('vehicle_part_master')
            ->insertGetId([
              'vehicle_id'=>$req->vehicle_id,
              'front_rear_id'=>$query,
              'left_id'=>$query1,
              'right_id'=>$query2,
              'tyre_id'=>$query3,
              'glass_id'=>$query4,
              'created_at'=>date("Y-m-d H:i:s"),
              'updated_at'=>date("Y-m-d H:i:s")]);
           
     } catch (Exception $e) {
     	$msg=$ee->getMessage();
     }
     return response()->json(array('status' =>$status,'message'=>$msg,"front_rear_id"=>$query,"left_id"=>$query1,"right_id"=>$query2,"tyre_id"=>$query3,"glass_id"=>$query4,));
   }

    public function integrate_test(Request $req){
    
    try {
	$curl = curl_init();

	curl_setopt_array($curl, array(
		  CURLOPT_SSLKEY => "/var/www/ssl/rb.key.pem",
		  CURLOPT_SSLCERT => "/var/www/ssl/rb.crt.pem",
		  CURLOPT_PORT => "444",
		  CURLOPT_URL => "https://uatsky.yesbank.in:444/app/uat/rsProductLeadService/createLead",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => "{\r\n\t\"CreateLeadReq\":\r\n        {\r\n        \"ReqHdr\":\r\n                {\r\n                \"ConsumerContext\":\r\n                        {\r\n                        \"RequesterID\":\"RPB\"\r\n                        }\r\n                ,\r\n                \"ServiceContext\":\r\n                        {\r\n                        \"ServiceName\":\"ProductsLeadManagement\",\r\n                        \"ReqRefNum\":\"1000000000000000\",\r\n                        \"ReqRefTimeStamp\":\"2014-10-12T16:30:15\",\r\n                       \"ServiceVersionNo\":\"1.0\"\r\n                        }\r\n                \r\n                }\r\n        ,\r\n        \"ReqBody\":\r\n                {\r\n\t\"FirstName\":\"Kishor\", \r\n\"LastName\":\"Sagar\", \r\n\"Telephone1\":\"9930968796\",\r\n\"BranchCode\":\"55555\",\r\n\"Source\":\"Alternate Banking Channel\",\r\n\"Channel\":\"RupeeBoss\",\r\n\"SourceReferenceId\":\"Home Loan Retail Banking Assets\",\r\n\"Remark\":\"RupeeBoss lead\",\r\n\"ProductName\":\"Home Loan\"               \r\n               \r\n                }\r\n        \r\n        }\r\n}\r\n",
		  CURLOPT_HTTPHEADER => array(
		    "authorization: Basic dGVzdGNsaWVudDp0ZXN0QDEyMw==",
		    "cache-control: no-cache",
		    "postman-token: 96c8ad8c-1c14-fa3b-b06c-07d0f57f0158",
		    "x-ibm-client-id: 8f124e30-3c37-4f8c-9ad4-e267b06b0628",
		    "x-ibm-client-secret: yR7uM6mC6tD8dB1pB1eC5mR6aF3cO0dK4tA3bP1sX6gE1hB2pV"
  ),
));

	$response = curl_exec($curl);
	$err = curl_error($curl);
	curl_close($curl);
	if ($err) {
	  echo "cURL Error #:" . $err;
	} else {
	  echo $response;
	}

    	} catch (\Exception $e) {
    		return $e->getMessage();
    	}

	}
}