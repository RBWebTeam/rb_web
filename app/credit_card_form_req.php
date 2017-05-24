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
    protected $fillable = ['ApplicantFirstName', 'ApplicantMiddleName', 'ApplicantLastName', 'Gender', 'DateOfBirth','CustomerProfile','CompanyName','Income','ICICIBankRelationship','Total_Exp','ICICIRelationshipNumber','SalaryAccountWithOtherBank','ResidenceAddress1','ResidenceAddress2','ResidenceAddress3','City','ResidencePincode','ResidenceState','ApplicationNumber','SalaryAccountOpened','PanNo','ResidencePhoneNumber','ResidenceMobileNo','STDCode','created_at', 'updated_at','ApplicationId','no_of_dependents','preferred_address','supplementary_card','designation','work_email','work_STDCode','work_number','type_of_company','highest_education','type_current','per_res_type','have_credit_card','previous_bank','credit_date','credit_limit','credit_details','net_annual_income','credit_card_type','credit_card_name','cards','your_interests','type','NameOnCard','MotherName','marital_status','resident_status','PerResidenceAddress1','PerResidenceAddress2','PerResidenceAddress3','PerCity','PerResidenceState','PerResidencePincode','email_id',];
    public function store(Request $request)
    {
        
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
         // print_r( $input);exit();
         $id = $table::create($input)->id;

         return $id;
    }
    

}
