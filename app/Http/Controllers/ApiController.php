<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Response;
class ApiController extends Controller
{
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
			$data=DB::table('city_master')
			->select('City_Id','City_Name','state_id')
			->where('Is_Active','=','1')
			->get();
		}
		//print_r($data);
		return Response::json(array(
                            'data' => $data,
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
}