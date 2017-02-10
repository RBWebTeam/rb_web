<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Response;
use App\bank_quote_api_request;
class ApiController extends Controller
{
	
	public function compare(Request $req){
		//handling corner cases
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
				            ->where('ProductId',7)
				            ->orwhere('ProductId',12)
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

						$data=DB::select('call  usp_get_bank_quot ("'.$propcost.'","'.$LoanTenure.'","'.$LoanRequired.'","'.$ApplicantGender .'","'.$ApplicantIncome .'","'.$ApplicantObligations .'","'.$ApplicantDOB .'","'.$CoApplicantYes .'","'.$CoApplicantIncome .'","'.$CoApplicantObligations .'","'.$Turnover.'","'.$ProfitAfterTax .'","'.$Depreciation .'","'.$DirectorRemuneration .'","'.$CoApplicantTurnover .'","'.$CoApplicantProfitAfterTax .'","'.$CoApplicantDepreciation .'","'.$CoApplicantDirectorRemuneration .'","'.$ApplicantSource .'","'.$ProductId .'")');
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
					$data=DB::select('call  usp_get_bank_quot ("'.$req['PropertyCost'].'","'.$req['LoanTenure'].'","'.$req['LoanRequired'].'","'.$req['ApplicantGender'].'","'.$req['ApplicantIncome'].'","'.$req['ApplicantObligations'].'","'.$req['ApplicantDOB'].'","'.$req['CoApplicantYes'].'","'.$req['CoApplicantIncome'].'","'.$req['CoApplicantObligations'].'","'.$req['Turnover'].'","'.$req['ProfitAfterTax'].'","'.$req['Depreciation'].'","'.$req['DirectorRemuneration'].'","'.$req['CoApplicantTurnover'].'","'.$req['CoApplicantProfitAfterTax'].'","'.$req['CoApplicantDepreciation'].'","'.$req['CoApplicantDirectorRemuneration'].'","'.$req['ApplicantSource'].'","'.$req['ProductId'].'")');
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
				$emi= ceil($req['LoanRequired'] * $rate / (1 - (pow(1/(1 + $rate),$time))));
				$new_data[$j]->emi=$emi;
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

		
			$data=DB::select('call  usp_get_bank_quot ("'.$req['PropertyCost'].'","'.$req['LoanTenure'].'","'.$req['LoanRequired'].'","'.$req['ApplicantGender'].'","'.$req['ApplicantIncome'].'","'.$req['ApplicantObligations'].'","'.$req['ApplicantDOB'].'","'.$req['CoApplicantYes'].'","'.$req['CoApplicantIncome'].'","'.$req['CoApplicantObligations'].'","'.$req['Turnover'].'","'.$req['ProfitAfterTax'].'","'.$req['Depreciation'].'","'.$req['DirectorRemuneration'].'","'.$req['CoApplicantTurnover'].'","'.$req['CoApplicantProfitAfterTax'].'","'.$req['CoApplicantDepreciation'].'","'.$req['CoApplicantDirectorRemuneration'].'","'.$req['ApplicantSource'].'","'.$req['ProductId'].'")');
		
		
		if($data){
			$status="Success";

		}else{
			$status="Failure";
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
		 		$id=$save->store($req);
			}
		}catch (Exception $e) {

			echo 'Caught exception: '.  $e->getMessage(). "\n";
			die("exception");
		}
		

		if($data){
			$status="Success";

		}else{
			$status="Failure";
		}

		$log_update=DB::table('api_log')
		->where('id','=',$log)
		->update(['status'=>$status,'updated_at'=>date("Y-m-d H:i:s")]);

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
			$msg=" Something went wrong.";
			
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
		 $data=DB::table('bank_quote_api_request')
		 ->select('ID','ApplicantNme','LoanRequired','ApplicantIncome','Turnover','status','ProductId')
        ->where('BrokerId','=',$id)
        ->get();
        //calling Erp api
       
        		$post_data='{"brokerId":'.$id.'}';
        		//print_r($post_data);exit();
                 $url="http://beta.services.rupeeboss.com/LoginDtls.svc/xmlservice/dsplyHomePersonalLoanAppDtls";
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_VERBOSE, 1);
                curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_FAILONERROR, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                curl_setopt($ch, CURLOPT_POSTFIELDS,$post_data);
                $http_result = curl_exec($ch);
                $error = curl_error($ch);
                $http_code = curl_getinfo($ch ,CURLINFO_HTTP_CODE);
                $obj = json_decode($http_result);
                // statusId response 0 for success, 1 for failure
                curl_close($ch);
       			//print_r(sizeof($obj->result->lstHomeLoanDtls));exit();
       			//print_r($obj);exit();
                if(sizeof($obj->result->lstHomeLoanDtls)>0){
                	$application=$obj->result->lstHomeLoanDtls;
                }else{
                	$application=NULL;
                }
               
		        if($data!='[]' ){
					$new_data=$data;
					for($i=0;$i<sizeof($new_data);$i++){
						$new_data[$i]->url="http://beta.erp.rupeeboss.com/homeloan/home_loan_application_form.aspx?qoutid=".$new_data[$i]->ID;
					}
				}
				else{
					$new_data=NULL;
					
				}

				if(sizeof($obj->result->lstHomeLoanDtls)==0 && $data=='[]'){
					$status_Id=1;
					$msg="Something went wrong";
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
	
	public function getPersonalLoanQuoteByBrokerId(Request $req){
		//print_r($req['BrokerId']);exit();
		$id=$req['BrokerId'];
		 $data=DB::table('bank_quote_api_request')
		 ->select('ID','ApplicantNme','LoanRequired','ApplicantIncome','Turnover','status','ProductId')
        ->where('BrokerId','=',$id)
        ->get();
        //calling Erp api
       
        		$post_data='{"brokerId":'.$id.'}';
        		//print_r($post_data);exit();
                 $url="http://beta.services.rupeeboss.com/LoginDtls.svc/xmlservice/dsplyPersonalLoanAppDtls";
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_VERBOSE, 1);
                curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_FAILONERROR, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                curl_setopt($ch, CURLOPT_POSTFIELDS,$post_data);
                $http_result = curl_exec($ch);
                $error = curl_error($ch);
                $http_code = curl_getinfo($ch ,CURLINFO_HTTP_CODE);
                $obj = json_decode($http_result);
                // statusId response 0 for success, 1 for failure
                curl_close($ch);
       			//print_r(sizeof($obj->result->lstHomeLoanDtls));exit();
       			//print_r($obj);exit();
                if(sizeof($obj->result->lstHomeLoanDtls)>0){
                	$application=$obj->result->lstHomeLoanDtls;
                }else{
                	$application=NULL;
                }
               
		        if($data!='[]' ){
					$new_data=$data;
					for($i=0;$i<sizeof($new_data);$i++){
						$new_data[$i]->url="http://beta.erp.rupeeboss.com/homeloan/home_loan_application_form.aspx?qoutid=".$new_data[$i]->ID;
					}
				}
				else{
					$new_data=NULL;
					
				}

				if(sizeof($obj->result->lstHomeLoanDtls)==0 && $data=='[]'){
					$status_Id=1;
					$msg="Something went wrong";
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
	
}