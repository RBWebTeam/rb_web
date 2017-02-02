<?php

namespace App;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use DB;
use Session;
class credit_card_form_req extends Model
{
    //
    protected $table='credit_card_form_req';
    protected $fillable = ['ApplicantFirstName', 'ApplicantMiddleName', 'ApplicantLastName', 'Gender', 'DateOfBirth','CustomerProfile','CompanyName','Income','ICICIBankRelationship','SalaryAccountWithOtherBank','ResidenceAddress1','ResidenceAddress2','ResidenceAddress3','City','ResidencePincode','ResidenceState','ApplicationNumber','SalaryAcOpenDate','PanNo','ResidencePhoneNumber','ResidenceMobileNo','STDCode','created_at', 'updated_at','ApplicationId'];
    public function store(Request $request)
    {
        //print_r($request->all());exit();
        $table = new credit_card_form_req();
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
