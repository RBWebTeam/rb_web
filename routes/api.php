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
Route::post('getcustomer','ApiController@getcustomer');
//for mobile app
Route::post('mobile-api-compare','MobileApiController@mobile_api_compare');
