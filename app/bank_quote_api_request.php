<?php

namespace App;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use DB;
use Session;
class bank_quote_api_request extends Model
{
    //
    protected $table='bank_quote_api_request';
    protected $fillable = ['PropertyID', 'PropertyCost', 'LoanTenure', 'LoanRequired', 'City','ApplicantNme','ApplicantGender','ApplicantSource','ApplicantIncome','ApplicantObligations','ApplicantDOB','CoApplicantYes','CoApplicantGender','CoApplicantSource','CoApplicantIncome','CoApplicantObligations','CoApplicantDOB','Turnover','ProfitAfterTax','Depreciation','DirectorRemuneration','CoApplicantTurnover','CoApplicantProfitAfterTax','CoApplicantDepreciation','CoApplicantDirectorRemuneration','BrokerId','ProductId','created_at', 'updated_at'];
    public function store(Request $request)
    {
        $table = new bank_quote_api_request();
        $input = $request->all();
   		$id = $table::create($input)->id;

   		 return $id;
    }
    
    public function save_liza(Request $request)
    {
             $fillable = ['property_cost','loan_tenure','loan_amount','gender','income','obligation','dob','have_co_applicant','CoApplicantIncome','co_applicant_obligation','Turnover','profit_after_tax','depreciation','remuneration','co_applicant_turnover','co_applicant_profit_after_tax','co_applicant_depreciation','co_applicant_remuneration','emp_detail_id','product_id','created_at', 'updated_at'];
        $name=Session::get('name')?Session::get('name'):"";


        $table = new bank_quote_api_request();
        //print_r($request->BrokerId);exit();   
        $table->PropertyID = $request->PropertyID;
        $table->PropertyCost = $request->property_cost;
         $table->LoanTenure = $request->loan_tenure;
         $table->LoanRequired = $request->loan_amount ;
         $table->City  = $request->city_name ;
         $table->ApplicantNme  = $name ;
         $table->ApplicantGender  = $request->gender ;
         $table->ApplicantSource  = $request->emp_detail_id ;
         $table->ApplicantIncome  = $request->income ;
         $table->ApplicantObligations  = $request->obligation ;
         $table->ApplicantDOB   = $request->dob  ;
         $table->CoApplicantYes   = $request->have_co_applicant  ;
         $table->CoApplicantGender   = $request->CoApplicantGender  ;
         $table->CoApplicantSource   = $request->CoApplicantSource  ;
         $table->CoApplicantIncome   = $request->CoApplicantIncome  ;
         $table->CoApplicantObligations   = $request->co_applicant_obligation  ;
         $table->CoApplicantDOB   = $request->CoApplicantDOB  ;
         $table->Turnover    = $request->Turnover   ;
         $table->ProfitAfterTax    = $request->profit_after_tax   ;
         $table->Depreciation    = $request->depreciation   ;
         $table->DirectorRemuneration    = $request->remuneration   ;
         $table->CoApplicantTurnover    = $request->co_applicant_turnover   ;
         $table->CoApplicantProfitAfterTax    = $request->co_applicant_profit_after_tax   ;
         $table->CoApplicantDepreciation    = $request->co_applicant_depreciation   ;
         $table->CoApplicantDirectorRemuneration    = $request->co_applicant_remuneration;
         $table->brokerID    = 0;
         $table->ProductId    = $request->product_name   ;
         $table->Email    = Session::get('email')?Session::get('email'):"";
         $table->Contact =Session::get('contact')?Session::get('contact'):"";
         $table->save();
         $LastInsertId = $table->id;
         return $LastInsertId;
    }
}
