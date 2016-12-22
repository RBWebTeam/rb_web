<?php

namespace App;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use DB;
class bank_quote_api_request extends Model
{
    //
    protected $table='bank_quote_api_request';
    protected $fillable = ['PropertyID', 'PropertyCost', 'LoanTenure', 'LoanRequired', 'City','ApplicantNme','ApplicantGender','ApplicantSource','ApplicantIncome','ApplicantObligations','ApplicantDOB','CoApplicantYes','CoApplicantGender','CoApplicantSource','CoApplicantIncome','CoApplicantObligations','CoApplicantDOB','Turnover','ProfitAfterTax','Depreciation','DirectorRemuneration','CoApplicantTurnover','CoApplicantProfitAfterTax','CoApplicantDepreciation','CoApplicantDirectorRemuneration','BrokerId','created_at', 'updated_at'];
    public function store(Request $request)
    {
        $table = new bank_quote_api_request();
        //print_r($request->BrokerId);exit();   
        // $table->PropertyID = $request->PropertyID;
        // $table->PropertyCost = $request->PropertyCost;
        //  $table->LoanTenure = $request->LoanTenure;
        //  $table->LoanRequired = $request->LoanRequired ;
        //  $table->City  = $request->City ;
        //  $table->ApplicantNme  = $request->ApplicantNme ;
        //  $table->ApplicantGender  = $request->ApplicantGender ;
        //  $table->ApplicantSource  = $request->ApplicantSource ;
        //  $table->ApplicantIncome  = $request->ApplicantIncome ;
        //  $table->ApplicantObligations  = $request->ApplicantObligations ;
        //  $table->ApplicantDOB   = $request->ApplicantDOB  ;
        //  $table->CoApplicantYes   = $request->CoApplicantYes  ;
        //  $table->CoApplicantGender   = $request->CoApplicantGender  ;
        //  $table->CoApplicantSource   = $request->CoApplicantSource  ;
        //  $table->CoApplicantIncome   = $request->CoApplicantIncome  ;
        //  $table->CoApplicantObligations   = $request->CoApplicantObligations  ;
        //  $table->CoApplicantDOB   = $request->CoApplicantDOB  ;
        //  $table->Turnover    = $request->Turnover   ;
        //  $table->ProfitAfterTax    = $request->ProfitAfterTax   ;
        //  $table->Depreciation    = $request->Depreciation   ;
        //  $table->DirectorRemuneration    = $request->DirectorRemuneration   ;
        //  $table->CoApplicantTurnover    = $request->CoApplicantTurnover   ;
        //  $table->CoApplicantProfitAfterTax    = $request->CoApplicantProfitAfterTax   ;
        //  $table->CoApplicantDepreciation    = $request->CoApplicantDepreciation   ;
        //  $table->CoApplicantDirectorRemuneration    = $request->CoApplicantDirectorRemuneration   ;
        //  $table->brokerID    = $request->brokerID   ;

         $input = $request->all();
   		 $id = $table::create($input)->id;

   		 return $id;
    }
}
