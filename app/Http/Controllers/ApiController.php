<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Response;
use App\bank_quote_api_request;
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
			return $e;
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
	  				  $data=DB::select(' call usp_get_bankwise_business_loan_quot ("'.$req['applicant_dob'].'","'.$req['emp_detail'].'","'.$req['turnover'].'","'.$req['profit_after_tax'].'","'.$req['depreciation'].'","'.$req['partner_remuneration'].'","'.$req['interest_paid'].'","'.$req['emi'].'","'.$req['no_of_emi_paid'].'","'.$req['loan_tenure'].'","'.$req['loan_amount'].'","'.$req['date'].'","'.$req->Bank_Id.'")');
        
	  			}
	  	    	if($data){

	  	    		$return_data=$data[0];
	  	    		$return_data->processingfee=round($return_data->processingfee);
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
      
}