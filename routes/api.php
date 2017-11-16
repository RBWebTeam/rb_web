<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::post('comman-api','ApiController@comman');
Route::post('compare-personal-loan','ApiController@comapre_personal_loan');
Route::post('get-loans','ApiController@GetHomeLoanQuotes');
Route::post('test','ApiController@test');
Route::post('compare-api','ApiController@compare');
Route::post('compare-test','ApiController@compare_test');
//for mobile app
Route::post('mobile-api-compare','MobileApiController@mobile_api_compare');
Route::post('personal-loan-mobile','MobileApiController@personal_loan_mobile');

Route::post('getcustomer','ApiController@getCustomer');
Route::post('getcity','ApiController@getCity');
Route::post('getproduct','ApiController@getProduct');
Route::post('getproperty','ApiController@getPropertyType');
Route::post('get-broker-quote','ApiController@getQuoteByBrokerId');
Route::post('get-personal-loan-broker-quote','ApiController@getPersonalLoanQuoteByBrokerId');
Route::post('quote-selected','MobileApiController@quote_selected');
Route::get('show-error','ApiController@show_error');
Route::post('erp-user','ApiController@create_user_via_erp');

Route::post('save-profile-pic','MobileApiController@user_profile_picture');
Route::post('emi-calc-app','ApiController@emi_cal_app');
Route::post('productwise_emi_cal_app','ApiController@productwise_emi_cal_app');
Route::post('lendingkart-docs','ApiController@test_document_upload')
->middleware('api_auth');

// Route::get('get-profile-pic','MobileApiController@get_profile_pic');
//working capital-emi-calculator
Route::post('working-capital-emi-calculator-api','CalculatorController@working_calculator');
Route::post('revise-calculation','MobileApiController@revise_calculation');
Route::post('bussiness-loan-quote','ApiController@bussiness_loan_quote');

Route::post('calculation','MobileApiController@calculation');

/*WhatsApp*/
Route::get('wapp','WhatsAppController@wapp');
Route::post('balance-transfer','MobileApiController@balance_transfer');
Route::post('test','TribeController@test');
Route::post('equi-generate-pdf','EquifaxController@generate_pdf');