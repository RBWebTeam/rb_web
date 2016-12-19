<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Response;
class ApiController extends Controller
{
	public function comman(Request $req){
		print "<pre>";
		print_r($req->all());
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
	public function compare(Request $req){
		//print "<pre>";
		//print_r($req->all());

		//return('call  usp_get_bank_quot ("'.$req['PropertyCost'].'","'.$req['LoanTenure'].'","'.$req['LoanRequired'].'","'.$req['ApplicantGender'].'","'.$req['ApplicantIncome'].'","'.$req['ApplicantObligations'].'","'.$req['ApplicantDOB'].'","'.$req['CoApplicantYes'].'","'.$req['CoApplicantIncome'].'","'.$req['CoApplicantObligations'].'","'.$req['Turnover'].'","'.$req['ProfitAfterTax'].'","'.$req['Depreciation'].'","'.$req['DirectorRemuneration'].'","'.$req['CoApplicantTurnover'].'","'.$req['CoApplicantProfitAfterTax'].'","'.$req['CoApplicantDepreciation'].'","'.$req['CoApplicantDirectorRemuneration'].'","'.$req['ApplicantSource'].'")');//exit();

		 $data=DB::select('call  usp_get_bank_quot ("'.$req['PropertyCost'].'","'.$req['LoanTenure'].'","'.$req['LoanRequired'].'","'.$req['ApplicantGender'].'","'.$req['ApplicantIncome'].'","'.$req['ApplicantObligations'].'","'.$req['ApplicantDOB'].'","'.$req['CoApplicantYes'].'","'.$req['CoApplicantIncome'].'","'.$req['CoApplicantObligations'].'","'.$req['Turnover'].'","'.$req['ProfitAfterTax'].'","'.$req['Depreciation'].'","'.$req['DirectorRemuneration'].'","'.$req['CoApplicantTurnover'].'","'.$req['CoApplicantProfitAfterTax'].'","'.$req['CoApplicantDepreciation'].'","'.$req['CoApplicantDirectorRemuneration'].'","'.$req['ApplicantSource'].'")'	);



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





    public function compareLoan($loan){
      
              $product_query=DB::table('product_master')->select('Product_Id','Product_Name')
                      ->where('Product_ID','=',$loan)
                      ->first();    
//     echo $product_query->Product_Name;
// exit;


 //      $getQuery=DB::table('bank_product_web_intrest')
 //    ->select('bank_product_web_intrest.bank_id','bank_product_web_intrest.product_id','amt_from','Bank_Name','amt_to','roi','roi_type')
 //    ->join('bank_master', 'bank_master.bank_id','=','bank_product_web_intrest.bank_id')
 //    // ->join('bank_product_web_pf', 'bank_product_web_pf.bank_id', '=', 'bank_product_web_pf.bank_id')
 //    ->where('bank_product_web_intrest.product_id','=',$product_query->Product_Id)
 //    ->orderBy('bank_product_web_intrest.roi', 'ASC')
	// ->take('4')
	// ->get();

      if($product_query){


      $getQuery= DB::table('bank_product_web_intrest')
    ->join('bank_master', 'bank_master.bank_id', '=', 'bank_product_web_intrest.bank_id')
    ->join('bank_product_web_pf', 'bank_product_web_pf.product_id', '=', 'bank_product_web_intrest.Product_Id')
    ->join('bank_product_web', 'bank_product_web.Product_Id', '=', 'bank_product_web_intrest.Product_Id')
    ->where('bank_product_web_intrest.Product_Id', '=',$loan)
    ->orderBy('bank_product_web_intrest.roi', 'DESC')
	->take('4')
	->get();
    
    

  return view('view-loan',['home_loan'=>$product_query->Product_Name,'getQuery'=>$getQuery]);
}else{
	echo "wrong";
}
           // return view('view-loan',['home_loan'=>"home-loan",'getQuery'=>$getQuery,'Product_Name'=>$product_query->Product_Name]);
    }
}