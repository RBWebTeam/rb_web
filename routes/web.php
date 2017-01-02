<?php
Route::get('/','HomeController@index');
Route::get('personal-loan','LoanController@personal_loan');
Route::get('home-loan','LoanController@home_loan');
Route::get('loan-against-property','LoanController@lap');
Route::get('sme-loan','LoanController@sme_loan');
Route::get('home-loan-transfer','LoanController@home_loan_transfer');
Route::get('car-loan','LoanController@car_loan');
Route::get('business-loan','LoanController@business_loan');


Route::get('apply-personal-loan','LoanController@apply_p_test');
Route::post('compare','CompareController@compare');
Route::get('view-loan','CompareController@view_loan');
// Route::get('emi1','CompareController@emi');
Route::get('credit-report','CompareController@credit_report');
Route::get('contact-us','ContactController@contact_us'); //not linked to index page till now
//sidebar forms
Route::post('sidebar','FormController@sidebar');
Route::get('widget','LoanController@car_loan');

//Route::get('search/autocomplete', 'SearchController@autocomplete');
Route::get('autocomplete',array('as'=>'autocomplete','uses'=>'AutoCompleteController@index'));
Route::get('searchajax',array('as'=>'searchajax','uses'=>'AutoCompleteController@autoComplete'));	

Route::post('loan-submit','FormController@p_loan_submit');

Route::get('apply-car-loan','LoanController@apply_car_loan');
Route::get('apply-business-loan','LoanController@apply_business_loan');

//Route::get('home-loans/{id}', 'HomeController@footercontent');
//Route::get('personal-loans/{id}', 'HomeController@footercontent');
//Route::get('sme-loans/{id}', 'HomeController@footercontent');
//Route::getallheaders(oid)t('business-loans/{id}', 'HomeController@footercontent');

Route::post('otp','FormController@otp');
Route::post('otp_verify','FormController@otp_verify');
Route::get('bank','BankController@index');
Route::get('logout','LoginController@logout');

/* by dp */
Route::get('apply-sme-loan','LoanController@smeLoan');
Route::get('apply-home-loan','LoanController@apply_h_test');
Route::get('apply-loan-against-property','LoanController@apply_h_test');
Route::post('login','LoginController@login');
Route::post('registration','LoginController@register_form');

Route::post('recording','recording\recordingController@recording');
Route::get('recording/show','recording\recordingController@show');

Route::get('facebook','SocialsiteController@facebook');
Route::get('callback','SocialsiteController@callback');

Route::get('google','SocialsiteController@google');
Route::get('google/callback','SocialsiteController@Googlecallback');
Route::post('profile/update','ProfileController@profileupdate');
Route::post('profile/extradetails','ProfileController@extradetails');



/* API routes to be written here */ 

Route::get('api','ApiController@GetLAPQuotes');
Route::get('get-loan/{loan}','BankController@compareLoan');

// Route::get('api','LoanQuatesController@GetHomeLoanQuotes');

/*emi test*/
Route::get('check_emi','CompareController@emi2');
Route::post('emi_cal','CompareController@emi_cal');
Route::get('loan-details/{product}/{bank}','BankController@home_loanBank');
Route::get('home-loan-transfer','CompareController@switchme');
Route::post('calculation','CompareController@calculation');
Route::get('profile','ProfileController@my_profile');
Route::get('about-us','HomeController@about_us');
Route::get('disclaimer-page','HomeController@disclaimer');
Route::get('privacy-policy-page','HomeController@privacy_policy');
Route::get('balance-transfer','CompareController@switchme_mobile');


// 



//new loans test

Route::get('test-personal-loan','LoanController@apply_p_test');
Route::get('test-home-loan','LoanController@apply_h_test');
Route::get('show-quotes','FormController@show_quotes');


//for dc
Route::post('calculationfordc','CompareController@calculationfordc');