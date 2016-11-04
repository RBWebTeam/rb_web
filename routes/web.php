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

Route::get('/', function () {
    return view('index');
});
Route::get('personal_loan','PersonalLoanController@index');
Route::get('apply_personal_loan','PersonalLoanController@apply');
Route::get('compare','CompareController@compare');
Route::get('emi','CompareController@emi');
Route::get('credit-report','CompareController@credit_report');
Route::get('contact-us','ContactController@contact_us'); //not linked to index till now

