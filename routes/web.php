<?php
Route::get('/','HomeController@index');
// Route::get('personal-loan','LoanController@personal_loan');
// Route::get('home-loan','LoanController@home_loan');
// Route::get('loan-against-property','LoanController@lap');
Route::get('sme-loan','LoanController@sme_loan');
// Route::get('car-loan','LoanController@car_loan');
// Route::get('business-loan','LoanController@business_loan');


Route::get('apply-personal-loan','LoanController@apply_p_test');
Route::post('compare','CompareController@compare');
Route::get('view-loan','CompareController@view_loan');
// Route::get('emi1','CompareController@emi');
Route::get('credit-report','ExperianController@credit_report');
Route::get('contact-us','ContactController@contact_us'); //not linked to index page till now
//sidebar forms
Route::post('sidebar','FormController@sidebar');
Route::get('widget','LoanController@car_loan');

//Route::get('search/autocomplete', 'SearchController@autocomplete');
Route::get('autocomplete',array('as'=>'autocomplete','uses'=>'AutoCompleteController@index'));
Route::get('searchajax',array('as'=>'searchajax','uses'=>'AutoCompleteController@autoComplete'));
Route::get('searchstateajax',array('as'=>'searchstateajax','uses'=>'AutoCompleteController@autoComplete_state'));
Route::get('searchcompanyajax',array('as'=>'searchcompanyajax','uses'=>'AutoCompleteController@autoComplete_company'));	
Route::get('searchiiflcompanyajax',array('as'=>'searchiiflcompanyajax','uses'=>'AutoCompleteController@autoComplete_iiflcompany')); 


Route::post('loan-submit','FormController@p_loan_submit');

Route::get('apply-car-loan','LoanController@apply_car_loan');
Route::get('apply-business-loan','LoanController@apply_business_loan');
Route::post('otp','FormController@otp');
Route::post('otp_verify','FormController@otp_verify');
Route::get('bank','BankController@index');
Route::get('logout','LoginController@logout');

/* by dp */
Route::get('apply-sme-loan','LoanController@smeLoan');
Route::get('apply-home-loan','LoanController@apply_h_test');
Route::get('apply-loan-against-property','LoanController@apply_lap_test');
Route::post('login','LoginController@login');
Route::post('registration','LoginController@register_form');
Route::get('credit-card-compare/{id}','HomeController@credit_card_compare');
Route::post('recording','recording\recordingController@recording');
Route::get('recording/show','recording\recordingController@show');

Route::get('facebook','SocialsiteController@facebook');
Route::get('callback','SocialsiteController@callback');

Route::get('google','SocialsiteController@google');
Route::get('google/callback','SocialsiteController@Googlecallback');
Route::post('profile/update','ProfileController@profileupdate');
Route::post('profile/extradetails','ProfileController@extradetails');
Route::post('forgot-password','LoginController@forgot_password');

Route::post('change-password','ProfileController@change_password');

Route::post('facebook/login','SocialsiteController@facebooklogin');
Route::post('google/login','SocialsiteController@googlelogin');
/* API routes to be written here */ 

Route::get('api','ApiController@GetLAPQuotes');
Route::get('get-loan/{loan}','BankController@compareLoan');
Route::post('contact_us','SocialsiteController@contact_us_otp');
Route::post('contact_otp','SocialsiteController@contactOTP');
Route::get('working-capital-emi-calculator','CalculatorController@working_capital_emi_calculator');

/* Working Capital */

Route::get('balance-transfer/working-capital','WorkingCapitalController@WorkingCapital');
Route::post('Working-Capital/calculate','WorkingCapitalController@calculate');
Route::post('term-loan/calculate','WorkingCapitalController@termcalculate');


Route::post('working-capital-submit','WorkingCapitalController@working_capital_submit');


Route::get('refresh-csrf', function(){
    return csrf_token();
});

// Route::get('api','LoanQuatesController@GetHomeLoanQuotes');

// joel jangam
/*emi test*/
Route::get('check-emi','CompareController@emi2');
Route::post('emi_cal','CompareController@emi_cal');
Route::get('loan-details/{product}/{bank}','BankController@home_loanBank');
Route::get('balance-transfer/{loan}','CompareController@switchme');
Route::post('calculation','CompareController@calculation');
Route::post('after-transfer-calculation','CompareController@after_transfer_calculation');

Route::get('profile','ProfileController@my_profile');
Route::get('about-us','HomeController@about_us');
Route::get('disclaimer-page','HomeController@disclaimer');
Route::get('privacy-policy-page','HomeController@privacy_policy');
Route::get('balance-transfer','CompareController@switchme_mobile');
Route::get('comfy-sales','ComfyController@comfy_sales');
Route::get('express-loan','HomeController@express_loan');
Route::get('calculators','HomeController@calculators');
Route::get('credit-card','HomeController@credit_card');
Route::get('savings-account','HomeController@savings_account');
Route::get('rba-login','HomeController@RBA_login');
Route::post('RBA-login','HomeController@RBA_register');
// Route::post('RBA-login','HomeController@RBA_employee');
Route::get('lead-status','HomeController@lead_status');
Route::get('apply-lead-online','ProfileController@applyonline');
Route::get('apply-express-loan','LoanController@apply_express_loan');
Route::post('express-loan-send-otp','LoanController@express_send_otp');
Route::post('express-loan-verify','LoanController@express_verify_otp');
Route::post('aditya-express-loan','LoanController@express_form');
Route::get('apply-iifl-loan','LoanController@apply_iifl_loan');
Route::post('apply-iifl-loan-otp','LoanController@state');
Route::post('apply-iifl-loan-dropdown','LoanController@dropdown');
Route::post('apply-iifl-loan-applicant1','LoanController@applicant');
Route::post('iifl-coapplicant','LoanController@co_applicant');
Route::post('iifl-eligibility','LoanController@iifl_eligibility');
Route::post('iifl-instant-eligibility','LoanController@iifl_instant_eligibility');
Route::post('iifl-aadhar-otp','LoanController@iifl_adhar_otp');
Route::post('iifl-aadhar-confirm-otp','LoanController@iifl_adhar_confirm_otp');
Route::post('iifl-offer-status','LoanController@offer_status');
Route::post('iifl-doc-upload','LoanController@iifl_doc_upload');
Route::post('iifl-finanacial-doc-upload','LoanController@iifl_financial_doc_upload');
// Creditcardform
Route::get('credit-card-form','CreditcardController@credit_card_form');
Route::post('credit-submit','CreditcardController@credit_form_submit');
Route::get('icici-credit-card-form','CreditcardController@icici_credit_card_form');
Route::post('icici-credit-submit','CreditcardController@credit_form_submit');
Route::get('icici','CreditcardController@icici_form');




Route::get('magic-link','ContactController@magic_link');





//new loans test

Route::get('test-personal-loan','LoanController@apply_p_test');
Route::get('test-home-loan','LoanController@apply_h_test');
Route::get('show-quotes','FormController@show_quotes');
Route::get('directory','ProfileController@directory');


//for dc
Route::post('calculationfordc','CompareController@calculationfordc');
// Experian'
Route::post('show-credit-report','ExperianController@call');
Route::post('gen-qstn','ExperianController@gen_ques2');
Route::get('credit-report-otp','ExperianController@otp_page');
Route::post('credit-report-send-otp','ExperianController@send_otp');
Route::post('credit-report-verify','ExperianController@verify_otp');


//doc upload
Route::get('doc-upload','UploadController@Upload');
Route::post('doc-upload','UploadController@UploadPost');

 
//something went wrong page
Route::get('went-wrong','ErrorController@went_wrong');

Route::get('thank-you',function (){return view('thank-you');});



Route::get('no-record-found',function (){return view('no-record-found');});
//Route::get('test',function (){return view('test_parse');});
Route::get('test','TribeController@test');
Route::get('test-push',function (){return view('test');});




/*      ...................................................................................................
     |Durga Pratap
     |Start Community forum 
*/

Route::group(['namespace' => 'Controller_community'], function() {
Route::get('community','controller_index@index');
Route::post('community/search','controller_index@search');
Route::get('community/top_answer','controller_index@top_answer');

Route::get('community/question_tags','controller_index@question_tags');


// ................login
Route::get('community/registration','Login_and_Reg_Controller@registration');
Route::post('community/store_registration','Login_and_Reg_Controller@store_registration');
Route::get('community/login/{id}','Login_and_Reg_Controller@login_regi');
Route::post('community/getlogin','Login_and_Reg_Controller@getlogin');


/*  middleware*/
Route::group(['middleware'=>'user_community'], function(){

    Route::get('community/question','controller_index@question');
    Route::post('community/stor_answers','controller_index@stor_answers');
    Route::get('community/answers/{id}','controller_index@answers');
    Route::post('community/stor_question','controller_index@stor_question');
    Route::get('community/details/{id}','controller_index@details');
    Route::post('community/multi_answer','controller_index@multi_answer');
    Route::post('community/comment','controller_index@comment');
 
    Route::get('community/logout',function(){
    	Session::flush();
    	 return redirect('community');
    });
  

 // Route::get('autocomplete',array('as'=>'autocomplete','uses'=>'AutoCompleteController@index'));
Route::get('searchajaxqu',array('as'=>'searchajaxqu','uses'=>'Login_and_Reg_Controller@autoCompletetags'));	

});




  });   

/**
     |Durga Pratap
     |End Community forum
      ..............................................................................................
**/

// emp_login routes

Route::post('emp-login','LoginController@emp_login');

/**  comfy */
Route::get('comfy','ComfyController@comfy');

/**  idfc */
Route::get('idfc','IdfcController@idfc');

/**  tribe */
Route::get('tribe','TribeController@tribe');
Route::post('save-tribe-form','TribeController@save_tribe_form');
Route::post('upload-tribe-doc','TribeController@UploadTribeDocuments');
Route::post('upload-tribe-bank-statement','TribeController@UploadBankStatement');
Route::post('tribe-close-transaction','TribeController@CloseTransaction');
Route::post('abandon-tribe-application','TribeController@AbandonTransaction');
Route::post('tribe-final-submission','TribeController@FinalSubmission');
Route::post('get-tribe-doc','TribeController@get_tribe_doc');
Route::post('del-tribe-doc','TribeController@delete_tribe_doc');


//  new loan process 
Route::get('new-sme-loan','NewProcessController@newSmeLoan');
Route::get('loan-against-property','NewProcessController@newLoanAgainstProperty');
Route::get('home-loan','NewProcessController@newHomeLoan');
Route::get('smart-home-loan','NewProcessController@newSmartHomeLoan');
Route::get('car-loan','NewProcessController@newCarLoan');
Route::get('business-loan','NewProcessController@newBusinessLoan');
Route::get('sme-working-capital','WorkingCapitalController@NewWorkingCapital');
Route::get('personal-loan','ContactController@new_personal_loan');
// Route::post('new-personal-loan','ContactController@new_personal_loan_register');
Route::get('edelweiss','NewProcessController@edelweiss');
Route::get('used-car-loan','NewProcessController@usedCarLoan');

Route::post('quotes-head','FormController@quoteshead');
Route::post('chatPost','ChatController@post');

//sme
Route::get('sme','UploadController@smemailersender');
Route::post('smemailer','UploadController@smemailer');
Route::get('sme-thank-you','UploadController@sme_thank_you');
//sme


//pratik route 
Route::get('track-application','TrackapplicationController@tracking');
Route::post('view-your-application','TrackapplicationController@tracking_sub');
// Route::get('view-your-application','TrackapplicationController@tracking_view');



Route::get('icici-dc','CreditcardController@icici_dc');
