<?php

namespace App;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use DB;
class bank_quote_api_request extends Model
{
    //
    protected $table='bank_quote_api_request';
    protected $fillable = ['PropertyID', 'PropertyCost', 'LoanTenure', 'LoanRequired', 'City','ApplicantNme','ApplicantGender','ApplicantSource','ApplicantIncome','ApplicantObligations','ApplicantDOB','CoApplicantYes','CoApplicantGender','CoApplicantSource','CoApplicantIncome','CoApplicantObligations','CoApplicantDOB','Turnover','ProfitAfterTax','Depreciation','DirectorRemuneration','CoApplicantTurnover','CoApplicantProfitAfterTax','CoApplicantDepreciation','CoApplicantDirectorRemuneration','BrokerId','ProductId','created_at', 'updated_at'];
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
    
    public function save_liza(Request $request)
    {
             $fillable = ['property_cost','loan_tenure','loan_amount','gender','income','obligation','dob','have_co_applicant','CoApplicantIncome','co_applicant_obligation','Turnover','profit_after_tax','depreciation','remuneration','co_applicant_turnover','co_applicant_profit_after_tax','co_applicant_depreciation','co_applicant_remuneration','emp_detail_id','product_id','created_at', 'updated_at'];
        $table = new bank_quote_api_request();
        //print_r($request->BrokerId);exit();   
        $table->PropertyID = $request->PropertyID;
        $table->PropertyCost = $request->property_cost;
         $table->LoanTenure = $request->loan_tenure;
         $table->LoanRequired = $request->loan_amount ;
         $table->City  = $request->city_name ;
         $table->ApplicantNme  = Session::get('name') ;
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
         $table->brokerID    = "Website_form";
         $table->ProductId    = $request->product_id   ;
         $table->Email    = Session::get('email');
         $table->Contact =Session::get('contact');
         // $input = $request->all();
         Array ( [_token] => sv3dEM9TkJnH60GCTJROCEYiDUIdPFzXPY90oyGm [product_name] => 12 [emp_detail] => salaried [emp_detail_id] => 1 [income] => 70000 [turnover] => [profit_after_tax] => [depreciation] => [remuneration] => [exst_loan_detail] => yes [obligation] => 20000 [loan_amount] => 500000 [property_cost] => 700000 [loan_tenure] => 5 [gender] => male [dob] => 1979-08-15 [city_name] => MUMBAI [have_co_applicant] => yes [co_emp_detail] => salaried [co_applicant_income] => 23213123 [co_applicant_turnover] => [co_applicant_profit_after_tax] => [co_applicant_depreciation] => [co_applicant_remuneration] => [co_obl_yes] => [co_applicant_obligation] => 3123123 )


         $table->save();
         $LastInsertId = $table->id;
         return $LastInsertId;
    }


    // public function update(Request $request)
    // {   
    //         if(isset($request->PropertyID)){
    //          $table->PropertyID = $request->PropertyID;
    //         }
    //         if(isset($request->PropertyCost)){
    //          $table->PropertyCost = $request->PropertyCost;
    //         }
    //         if(isset($request->LoanTenure)){
    //          $table->LoanTenure = $request->LoanTenure;
    //         }
    //         if(isset($request->LoanRequired)){
    //          $table->LoanRequired = $request->LoanRequired;
    //         }
    //         if(isset($request->City)){
    //          $table->City = $request->City;
    //         }
    //         if(isset($request->PropertyID)){
    //          $table->PropertyID = $request->PropertyID;
    //         }
    //         if(isset($request->PropertyID)){
    //          $table->PropertyID = $request->PropertyID;
    //         }
    //         if(isset($request->PropertyID)){
    //          $table->PropertyID = $request->PropertyID;
    //         }
    //         if(isset($request->PropertyID)){
    //          $table->PropertyID = $request->PropertyID;
    //         }
    //         if(isset($request->PropertyID)){
    //          $table->PropertyID = $request->PropertyID;
    //         }
    //         if(isset($request->PropertyID)){
    //          $table->PropertyID = $request->PropertyID;
    //         }
    //         if(isset($request->PropertyID)){
    //          $table->PropertyID = $request->PropertyID;
    //         }
    //         if(isset($request->PropertyID)){
    //          $table->PropertyID = $request->PropertyID;
    //         }
    //         if(isset($request->PropertyID)){
    //          $table->PropertyID = $request->PropertyID;
    //         }
    //         if(isset($request->PropertyID)){
    //          $table->PropertyID = $request->PropertyID;
    //         }
    //         if(isset($request->PropertyID)){
    //          $table->PropertyID = $request->PropertyID;
    //         }
    //         if(isset($request->PropertyID)){
    //          $table->PropertyID = $request->PropertyID;
    //         }
    //         if(isset($request->PropertyID)){
    //          $table->PropertyID = $request->PropertyID;
    //         }
    //         if(isset($request->PropertyID)){
    //          $table->PropertyID = $request->PropertyID;
    //         }
    //         if(isset($request->PropertyID)){
    //          $table->PropertyID = $request->PropertyID;
    //         }
    //         if(isset($request->PropertyID)){
    //          $table->PropertyID = $request->PropertyID;
    //         }
    //         if(isset($request->PropertyID)){
    //          $table->PropertyID = $request->PropertyID;
    //         }
    //         if(isset($request->PropertyID)){
    //          $table->PropertyID = $request->PropertyID;
    //         }
    //         if(isset($request->PropertyID)){
    //          $table->PropertyID = $request->PropertyID;
    //         }
    //         if(isset($request->PropertyID)){
    //          $table->PropertyID = $request->PropertyID;
    //         }
    //         if(isset($request->PropertyID)){
    //          $table->PropertyID = $request->PropertyID;
    //         }
    //         if(isset($request->PropertyID)){
    //          $table->PropertyID = $request->PropertyID;
    //         }

    //      $table->PropertyCost = $request->PropertyCost;
    //      $table->LoanTenure = $request->LoanTenure;
    //      $table->LoanRequired = $request->LoanRequired ;
    //      $table->City  = $request->City ;
    //      $table->ApplicantNme  = $request->ApplicantNme ;
    //      $table->ApplicantGender  = $request->ApplicantGender ;
    //      $table->ApplicantSource  = $request->ApplicantSource ;
    //      $table->ApplicantIncome  = $request->ApplicantIncome ;
    //      $table->ApplicantObligations  = $request->ApplicantObligations ;
    //      $table->ApplicantDOB   = $request->ApplicantDOB  ;
    //      $table->CoApplicantYes   = $request->CoApplicantYes  ;
    //      $table->CoApplicantGender   = $request->CoApplicantGender  ;
    //      $table->CoApplicantSource   = $request->CoApplicantSource  ;
    //      $table->CoApplicantIncome   = $request->CoApplicantIncome  ;
    //      $table->CoApplicantObligations   = $request->CoApplicantObligations  ;
    //      $table->CoApplicantDOB   = $request->CoApplicantDOB  ;
    //      $table->Turnover    = $request->Turnover   ;
    //      $table->ProfitAfterTax    = $request->ProfitAfterTax   ;
    //      $table->Depreciation    = $request->Depreciation   ;
    //      $table->DirectorRemuneration    = $request->DirectorRemuneration   ;
    //      $table->CoApplicantTurnover    = $request->CoApplicantTurnover   ;
    //      $table->CoApplicantProfitAfterTax    = $request->CoApplicantProfitAfterTax   ;
    //      $table->CoApplicantDepreciation    = $request->CoApplicantDepreciation   ;
    //      $table->CoApplicantDirectorRemuneration    = $request->CoApplicantDirectorRemuneration   ;
    //      $table->brokerID    = $request->brokerID   ;
    // }

}
