<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Response;
class LoanQuatesController extends Controller
{
    

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


    public function GetPersonalLoanQuotes(){


    	
    }






}
