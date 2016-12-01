<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/','HomeController@index');
Route::get('personal-loan','LoanController@personal_loan');
Route::get('home-loan','LoanController@home_loan');
Route::get('loan-against-property','LoanController@lap');
Route::get('sme-loan','LoanController@sme_loan');
Route::get('home-loan-transfer','LoanController@home_loan_transfer');
Route::get('car-loan','LoanController@car_loan');

Route::get('apply-personal-loan','LoanController@apply');
Route::get('compare','CompareController@compare');
Route::get('view-loan','CompareController@view_loan');
Route::get('emi','CompareController@emi');
Route::get('credit-report','CompareController@credit_report');
Route::get('contact-us','ContactController@contact_us'); //not linked to index page till now
//sidebar forms
Route::post('sidebar','FormController@sidebar');
Route::get('widget','LoanController@car_loan');

//Route::get('search/autocomplete', 'SearchController@autocomplete');
Route::get('autocomplete',array('as'=>'autocomplete','uses'=>'AutoCompleteController@index'));
Route::get('searchajax',array('as'=>'searchajax','uses'=>'AutoCompleteController@autoComplete'));	

Route::post('personal-loan-submit','FormController@p_loan_submit');

Route::get('apply_car_loan','LoanController@apply_car_loan');


Route::get('home-loans/{id}', 'HomeController@footercontent');
Route::get('personal-loans/{id}', 'HomeController@footercontent');
Route::get('sme-loans/{id}', 'HomeController@footercontent');
Route::get('business-loans/{id}', 'HomeController@footercontent');

Route::post('otp','FormController@otp');
Route::post('otp_verify','FormController@otp_verify');
Route::get('bank','BankController@index');
Route::get('logout','HomeController@logout');

