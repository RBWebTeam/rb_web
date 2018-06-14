<?php
Route::get('logsi', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
Route::get('/','HomeController@index');
Route::get('switch','HomeController@switch');
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
Route::post('nri-loan-submit','FormController@nri_p_loan_submit');

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

Route::post('apply-iifl-loan-otp','LoanController@state');
Route::post('apply-iifl-loan-dropdown','LoanController@dropdown');
Route::post('apply-iifl-loan-applicant1','LoanController@applicant');
Route::post('iifl-coapplicant','LoanController@co_applicant');
Route::post('iifl-eligibility','LoanController@iifl_eligibility');
Route::post('iifl-token','LoanController@iifl_token');
Route::post('iifl-lead-save','LoanController@iifl_lead_save');
Route::post('iifl-instant-eligibility','LoanController@iifl_instant_eligibility');
Route::post('iifl-aadhar-otp','LoanController@iifl_adhar_otp');
Route::post('iifl-aadhar-confirm-otp','LoanController@iifl_adhar_confirm_otp');
Route::post('iifl-offer-status','LoanController@offer_status');
Route::post('iifl-doc-upload','LoanController@iifl_doc_upload');
Route::post('iifl-finanacial-doc-upload','LoanController@iifl_financial_doc_upload');
Route::post('iifl-pincode-status','LoanController@iifl_pincode_status');
Route::post('iifl-permanent-pincode-status','LoanController@iifl_permanent_pincode_status');
Route::post('iifl-co-pincode-status','LoanController@iifl_co_pincode_status');
Route::post('iifl-company-pincode-status','LoanController@iifl_company_pincode_status');
Route::get('business-loan-calculator','CalculatorController@business_loan_calculator');
Route::post('business-loan-calculation','CalculatorController@business_loan_calculation');
Route::get('personal-loan-calculator','CalculatorController@personal_loan_calculator');
Route::post('personal-loan-calculation','CalculatorController@personal_loan_calculation');
Route::get('home-loan-calculator','CalculatorController@home_loan_calculator');
Route::post('home-loan-calculation','CalculatorController@home_loan_calculation');
Route::get('fire-calculator','CalculatorController@fire_calculator');

Route::post('lendingkart-details','LoanController@lendingkart_details');
Route::post('lendingkart-doc-upload','LoanController@lendingkart_doc');
Route::get('test_doc','LoanController@test_doc');
Route::post('test_doc_upload','LoanController@test_doc_upload');
Route::get('early-salary','LoanController@early_salary');
Route::post('early-salary-submit','LoanController@early_salary_submit');
Route::get('application-form','NewProcessController@application_form');
Route::post('application-submit','NewProcessController@application_submit');
Route::get('tata-capital-business-loan','TataCapitalLoanController@tata_capital_business_loan');
Route::post('tata-capital-business-submit','TataCapitalLoanController@tata_capital_business_submit');
Route::get('searchtatacityajax',array('as'=>'searchtatacityajax','uses'=>'AutoCompleteController@autoComplete_tata_bl_city'));
Route::get('searchtatastateajax',array('as'=>'searchtatastateajax','uses'=>'AutoCompleteController@autoComplete_tata_bl_state'));





Route::get('team','TeamController@team');
// Creditcardform
Route::get('credit-card-form','CreditcardController@credit_card_form');
Route::post('credit-submit','CreditcardController@credit_form_submit');
Route::get('icici-state','CreditcardController@icici_state');
Route::post('icici-city','CreditcardController@icici_city');
Route::get('icici-credit-card-form','CreditcardController@icici_credit_card_form');
Route::post('icici-credit-submit','CreditcardController@credit_form_submit');
Route::post('to-view-on-browser-url','CreditcardController@to_view_on_browser_url');
Route::get('icici','CreditcardController@icici_form');
Route::get('magic-link','ContactController@magic_link');





//new loans test

Route::get('test-personal-loan','LoanController@apply_p_test');
Route::get('test-home-loan','LoanController@apply_h_test');
Route::get('show-quotes','FormController@show_quotes');
Route::get('nri-show-quotes','FormController@nri_show_quotes');
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
Route::get('loan-links',function (){return view('loans-repository');});


Route::get('no-record-found',function (){return view('no-record-found');});
//Route::get('test',function (){return view('test_parse');});

Route::get('test','TribeController@test');

// Route::post('test','TribeController@test');
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
Route::get('survey','TrackapplicationController@survey');
Route::post('survey_form','TrackapplicationController@survey_sub');



Route::get('icici-dc','CreditcardController@icici_dc');

//working capital-emi-calculator
Route::post('working-capital-emi-calculator-api','CalculatorController@working_calculator');

 
Route::get('coming-soon',function (){return view('comingsoon');});



// // Tata Capital  
// Route::post('tatacapitalemi','TataCapitalLoanController@emicalculatorapi');
// Route::get('tatacapitalsearchajax',array('as'=>'tatacapitalsearchajax','uses'=>'TataCapitalLoanController@tatacapitalsearchajax'));
// Route::get('tatacapitalbankname',array('as'=>'tatacapitalbankname','uses'=>'TataCapitalLoanController@tatacapitalbankname'));
// Route::get('tatacapitalstate',array('as'=>'tatacapitalstate','uses'=>'TataCapitalLoanController@tatacapitalstate'));
// Route::get('tatacapitalcity',array('as'=>'tatacapitalcity','uses'=>'TataCapitalLoanController@tatacapitalcity'));
// Route::post('tatacapitalsubmitform','TataCapitalLoanController@tatacapitalsubmitform');


Route::get('credit-card-rbl','CreditcardController@credit_card_rbl');
Route::post('rbl-cc-submit','CreditcardController@rbl_cc_post');
Route::get('credit-card-rbl-dc','CreditcardController@credit_card_rbl_dc');
Route::post('rbl-credit-submit','CreditcardController@rbl_cc_post');
Route::get('rbl-dc','CreditcardController@rbl_dc');


// demo
Route::get('demo','TeamController@demo');
Route::post('demo-submit','TeamController@demo_submit');
Route::post('demo-delete','TeamController@demo_delete');
Route::post('demo-edit','TeamController@demo_edit');
Route::post('xml','tribeController@xml');

Route::post('rbl-personal-loan-submit','LoanController@rbl_personal_loan_submit');
Route::get('rbl-off-city-master','LoanController@rbl_off_city_master');
Route::get('rbl-city-master','LoanController@rbl_city_master');
Route::get('pay-online','BankController@pay_online');

// Kotak AutoComplete
Route::get('kotak-city-master','LoanController@kotak_city_master');
Route::post('kotak-city-area-master','LoanController@kotak_city_area_master');
Route::post('kotak-home-loan-submit','LoanController@kotak_home_loan_submit');
Route::post('kotak-home-loan-status','LoanController@kotak_home_loan_status');

Route::get('kotak-pl-city-master','LoanController@kotak_pl_city_master');
Route::post('kotak-pl-submit','LoanController@kotak_pl_submit');
Route::get('searchkotak_plcompanyajax',array('as'=>'searchkotak_plcompanyajax','uses'=>'AutoCompleteController@autoComplete_kotak_plcompany')); 
Route::post('kotak-pl-proceed','LoanController@kotak_pl_proceed');
Route::post('kotak-personal-loan-status','LoanController@kotak_personal_loan_status');


/*Yes Bank*/
Route::get('yesbank-home-loan','LoanController@yesbank_home_loan');
Route::post('yes-bank-home-loan-submit','LoanController@yes_bank_home_loan_submit');
Route::get('yesbank-hl-city-master','LoanController@yesbank_hl_city_master');

/*For Datacomp- Kotak Home Loan*/
Route::get('kotak-home-loan-dc','LoanController@kotak_home_loan_dc');
Route::get('kotak-city-master-dc','LoanController@kotak_city_master_dc');
Route::post('kotak-city-area-master-dc','LoanController@kotak_city_area_master_dc');
Route::post('kotak-home-loan-dc-submit','LoanController@kotak_home_loan_submit');
Route::post('kotak-home-loan-status-dc','LoanController@kotak_home_loan_status');

/*Add Lead*/
Route::get('other-loans','LoanController@other_loans');

Route::post('other-loans-submit','LoanController@other_loans_submit');
Route::get('product-master','LoanController@product_master');




Route::get('searchkotakcityajax',array('as'=>'searchkotakcityajax','uses'=>'AutoCompleteController@autoComplete_kotak_city'));


//equifax
Route::get('test-equifax','TestController@test');
Route::get('equifax-verification','EquifaxController@equifax_verification');
Route::post('equifax-send-otp','EquifaxController@equifax_send_otp');
Route::post('equifax-verify','EquifaxController@equifax_verify_otp');
Route::get('equifax1','EquifaxController@equifax');
Route::post('equifax-query','EquifaxController@equifax_query');
Route::get('equifax-test','EquifaxController@equifax_test');




/*Excel Upload*/
Route::get('excel-upload','LoanController@excel_upload');
Route::post('excel-upload-submit','LoanController@excel_upload_submit');


/*Capital Float*/
Route::get('capitalfloat','LoanController@capitalfloat');
Route::post('capital-submit','LoanController@capital_float_form');

// express loan
Route::get('hdfc-personal-loan','LoanController@hdfc_personal_loan');
Route::post('hdfc-personal-loan-submit','LoanController@hdfc_personal_loan_submit');
Route::get('hdfc-business-loan','LoanController@hdfc_business_loan');
Route::post('hdfc-business-loan-submit','LoanController@hdfc_business_loan_submit');


/*Rectify Creditm*/
Route::get('rectifycredit','EquifaxController@rectifycredit');
Route::post('rectify-submit','EquifaxController@rectify_equi_score');
// Route::post('rectify-registration','EquifaxController@rectify_registration');

/*Tata Capital PL*/
Route::get('tata-capital-city','TataCapitalLoanController@tatacapital_city');
Route::get('tata-capital-state','TataCapitalLoanController@tatacapital_state');
Route::post('tata-capital-personal-submit','TataCapitalLoanController@tata_capital_personal_submit');
// Route::post('tata-capital-doc-upload','TataCapitalLoanController@tata_capital_doc_upload');
Route::post('tata-capital-company-master','TataCapitalLoanController@tata_capital_company_master');
Route::post('tata-capital-roi','TataCapitalLoanController@tata_capital_roi');
// Route::get('tata-capital-doc-upload','TataCapitalLoanController@tata_capital_doc');
Route::post('tata-capital-documents','TataCapitalLoanController@tata_capital_doc_upload');
Route::get('tata-capital-status','TataCapitalLoanController@tatacapital_status');
Route::post('tatacapital','TataCapitalLoanController@tatacapital');
Route::post('tatacapitalstate','TataCapitalLoanController@tatacapitalstate');

/*Flexi*/
Route::get('flexi-loans','LoanController@flexi');
Route::post('flexi-loans-token','LoanController@flexi_loans_token');
Route::get('flexi-loans-partner-list','LoanController@flexi_loans_partner_list');
Route::post('flexi-loans-appln','LoanController@flexi_loans_appln');
Route::post('flexi-loans-appln-update','LoanController@flexi_loans_appln_update');
Route::post('flexi-business','LoanController@flexi_business_dtls');
Route::post('flexi-financial','LoanController@flexi_financial_dtls');
Route::post('flexi-personal','LoanController@flexi_personal_dtls');
Route::post('flexi-doc-kyc','LoanController@flexi_doc_kyc');



// /*Demo*/
// Route::get('equifax1','EquifaxController@equifax');
// Route::post('equifax-query','EquifaxController@equifax_query');
// Route::get('equifax-test','EquifaxController@equifax_test');


/*Express Loan OTP */
Route::get('otp-verification','OtpController@otp_verification');
Route::post('express-send-otp','OtpController@express_loan_send_otp');
Route::post('express-verify','OtpController@express_loan_verify_otp');

Route::get('express-loan','HomeController@express_loan');
Route::get('apply-tatacapital-loan','TataCapitalLoanController@apply_tatacapital_loan');
Route::get('kotak-home-loan','LoanController@kotak_home_loan');
Route::get('kotak-personal-loan','LoanController@kotak_personal_loan');
Route::get('lendingkart','LoanController@lendingkart');
Route::get('lendingkart-state','LoanController@lendingkart_state');
Route::post('lendingkart-city','LoanController@lendingkart_city');
Route::post('lendingkart-business-city','LoanController@lendingkart_business_city');

Route::get('rbl-personal-loan','LoanController@rbl_personal_loan');
Route::get('apply-iifl-loan','LoanController@apply_iifl_loan');
/*To Secure*/
Route::group(['middleware'=>'OtpVerification'], function(){


});

/*Emailer purpose*/
Route::get('rbl-personal-loan-dc','LoanController@rbl_personal_loan_dc');
Route::post('rbl-personal-loan-submit-dc','LoanController@rbl_personal_loan_submit');
Route::get('kotak-personal-loan-dc','LoanController@kotak_personal_loan_dc');
Route::post('kotak-pl-submit-dc','LoanController@kotak_pl_submit');
Route::get('apply-iifl-loan-dc','LoanController@apply_iifl_loan_dc');
Route::get('tatacapital-personal-loan-dc','TataCapitalLoanController@tatacapitalpl');
Route::post('tata-capital-roi-dc','TataCapitalLoanController@tata_capital_roi');
Route::post('tata-capital-personal-submit-dc','TataCapitalLoanController@tata_capital_personal_submit');
Route::post('tata-capital-documents-dc','TataCapitalLoanController@tata_capital_doc_upload');

Route::get('medsave','LoanController@medsave');

/*Loans*/
Route::get('personal-loan-demo','NewProcessController@personal_loan_demo');
Route::get('state','NewProcessController@state');
Route::post('p_loansubmit','FormController@p_loan');
// Route::post('pl-city-master','NewProcessController@pl_city_master');


/*Lenden*/
Route::get('lenden','LoanController@lenden');
Route::post('lenden-get-otp','LoanController@get_otp');
Route::post('lenden-verify','LoanController@verify_otp');
Route::post('lenden-sign-up','LoanController@sign_up');
Route::post('lenden-taskid','LoanController@task_id');



